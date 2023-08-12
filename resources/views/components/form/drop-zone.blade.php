@push('head')
  <script
    type="module"
    defer
  >
    const name = "{{ $name }}"
    const dropArea = document.querySelector(`"drop-area-${name}"`)
    const fileInput = document.querySelector(`[name="${name}"]`)
    console.log(dropArea)
    console.log(fileInput)

    function renderImagePreview(image, container, options = {
      classes: ""
    }) {
      const img = document.createElement("img")

      console.log(img)
    }

    // Prevent opening the image when it's dropped
    dropArea.addEventListener('dragover', (e) => e.preventDefault())

    // Handle hover effetc
    function handleDragEnter(event) {
      event.preventDefault()
      const {
        target
      } = event

      target.classList.add("bg-white/5")
    }

    function handleDragLeave(event) {
      event.preventDefault()
      const {
        target
      } = event

      target.classList.remove("bg-white/5")
    }

    dropArea.addEventListener('dragenter', handleDragEnter)
    dropArea.addEventListener('dragleave', handleDragLeave)

    // Handle drop

    function handleDrop(event) {
      event.preventDefault()

      const files = event.dataTransfer.files
      const fileInput = event.target.querySelector("#image-input")

      handleImages(files, fileInput)
    }

    dropArea.addEventListener('drop', handleDrop)

    // Handle click

    dropArea.addEventListener('click', () => fileInput.click())

    fileInput.addEventListener('input', (event) => {
      const files = event.target.files
      handleImages(files, event.target)
    })

    // Send every file to the server

    function handleImages(files, fileInput) {
      fileInput.files = files

      console.log(fileInput, fileInput.files)
    }
  </script>
@endpush

<div
  id="drop-area-{{ $name }}"
  tabindex="0"
  class="relative flex aspect-video cursor-pointer items-center justify-center border-2 border-dashed border-gray-300 p-8 text-center hover:bg-white/5"
>
  <p class="pointer-events-none">
    Drag and drop an image here, or click to select one.
  </p>

  <input
    type="file"
    id="image-input"
    name="{{ $name }}"
    multiple
    class="hidden"
    accept=".jpg, .jpeg, .png, .webp"
  >
</div>
