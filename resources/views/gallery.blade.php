{{-- 
  - Counter for selected images
  - Find a way of saving the user images to the Cache Storage
  - List cached images
  - List possible operations to manipulate the selected images
  - Info icons on each image that opens a pop with its info
  - Set {CTRL Click} to open the image in a light box
  - Download button
  --}}

<x-app-layout>
  <div class="container mx-auto grid h-[calc(100vh-56px)] gap-4 p-4 lg:flex">
    <aside class="w-full space-y-4 rounded bg-base-100 p-4 shadow lg:sticky lg:max-w-xs">
      <span>0 images selected</span>

      <hr class="border-gray-600" />

      <div class="flex gap-2">
        <button class="btn w-full flex-shrink">Convert</button>
        <button class="btn w-full flex-shrink">Manipulate</button>
      </div>

      <div class="space-y-2">
        <button class="btn w-full">Resize</button>
        <button class="btn w-full">Compress</button>
        <button class="btn w-full">Cut</button>
        <button class="btn w-full">Flip</button>
        <button class="btn w-full">Rotate</button>
        <button class="btn w-full">Enlarge</button>
        <button class="btn w-full">Pick Color</button>
      </div>
    </aside>
    <main class="h-full w-full overflow-scroll rounded bg-base-100 p-4 shadow @container">
      <div class="mb-4 flex gap-2">
        <button class="btn">Sort</button>
      </div>
      <div class="grid grid-cols-1 gap-2 @md:grid-cols-2 @2xl:grid-cols-3 @5xl:grid-cols-4">
        <img
          src="{{ Vite::asset('/resources/images/mock/mountain-1.webp') }}"
          alt=""
          class="aspect-[1.5] rounded shadow"
        >
        <img
          src="{{ Vite::asset('/resources/images/mock/mountain-2.jpg') }}"
          alt=""
          class="aspect-[1.5] rounded shadow"
        >
      </div>
    </main>
  </div>
</x-app-layout>

@push('head')
  <script
    type="module"
    defer
  ></script>
@endpush
