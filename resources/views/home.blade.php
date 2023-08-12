<x-app-layout>
  <main class="flex h-screen flex-col items-center justify-center">
    <form>
      @if (session('base64Image'))
        <div class="flex max-w-2xl flex-col items-center pb-8">
          <img
            src="{{ session('base64Image') }}"
            alt="Resized Image"
          >
          <a
            href="{{ session('base64Image') }}"
            download="image.jpg"
            class="btn btn-primary"
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

        <x-form.drop-zone name="images" />

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

        <button class="btn btn-primary mx-auto mt-4 block">Resize Image</button>
      </form>
  </main>
</x-app-layout>
