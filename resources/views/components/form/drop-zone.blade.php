@push('head')
  <script
    type="module"
    defer
  >
    const name = "{{ $name }}"
    const dropArea = document.querySelector(`#drop-area-${name}`)
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
    const hoverClasses = "{{ $hover }}".split(" ")

    function handleDragEnter(event) {
      event.preventDefault()
      const {
        target
      } = event

        "{{ $hover }}" && target.classList.add(...hoverClasses)
    }

    function handleDragLeave(event) {
      event.preventDefault()
      const {
        target
      } = event

        "{{ $hover }}" && target.classList.remove(...hoverClasses)
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
  class="{{ $class }} cursor-pointer"
>
  <span class="pointer-events-none">
    {{ $placeholder }}
  </span>

  <input
    type="file"
    name="{{ $name }}"
    class="hidden"
    {{ $attributes }}
  >
</div>
