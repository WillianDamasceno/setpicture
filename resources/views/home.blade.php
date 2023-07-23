@push('head')
  <script {{ jsModule() }}>
    function handleDrop(event) {
      event.preventDefault()
      const files = event.dataTransfer.files
      handleImages(files)
    }

    function handleImages(files) {
      const fileInput = document.getElementById('image-input')

      fileInput.files = files
      console.log(fileInput)
    }

    function handleDragOver(event) {
      event.preventDefault()
    }

    function setupDropArea() {
      const dropArea = document.getElementById('drop-area')
      const fileInput = document.getElementById('image-input')

      dropArea.addEventListener('dragover', handleDragOver)
      dropArea.addEventListener('drop', handleDrop)
      dropArea.addEventListener('click', () => fileInput.click())

      fileInput.addEventListener('change', (event) => {
        const files = event.target.files
        handleImages(files)
      })
    }

    setupDropArea()
  </script>
@endpush

<x-app-layout>
  <main class="flex h-screen flex-col items-center justify-center">
    @if (session('base64Image'))
      <div class="flex max-w-2xl flex-col items-center pb-8">
        <img
          src="{{ session('base64Image') }}"
          alt="Resized Image"
        >
        <a
          href="{{ session('base64Image') }}"
          download="image.jpg"
          class="btn-primary btn"
        >
          Download
        </a>
      </div>
    @endif

    <form
      id="file-form"
      method="post"
      action="{{ route('resize') }}"
      enctype="multipart/form-data"
      class="max-w-2xl p-4"
    >
      @csrf

      @if ($errors->any())
        <div class="mb-8 grid gap-1 rounded bg-red-400 p-4 font-semibold text-red-800">
          @foreach ($errors->all() as $error)
            <span class="">
              {{ $error }}
            </span>
          @endforeach
        </div>
      @endif

      <div
        id="drop-area"
        class="flex aspect-video cursor-pointer items-center justify-center border-2 border-dashed border-gray-300 p-8 text-center"
      >
        <p>Drag and drop an image here, or click to select one.</p>
        <input
          type="file"
          id="image-input"
          name="image"
          multiple
          class="hidden"
          accept=".jpg, .jpeg, .png, .gif"
        >
      </div>

      <div class="grid grid-cols-2 gap-4 p-4">
        <input
          type="text"
          placeholder="Width"
          name="width"
          class="input"
        >
        <input
          type="text"
          placeholder="Height"
          name="height"
          class="input"
        >
      </div>

      <button class="btn-primary btn mx-auto mt-4 block">Resize Image</button>
  </main>
  </form>
</x-app-layout>
