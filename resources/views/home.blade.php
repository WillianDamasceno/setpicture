<x-app-layout>
  <section class="relative isolate flex h-screen items-center justify-center mix-blend-hard-light">
    <img
      src="{{ Vite::asset('resources/images/call-to-action/red-fish.jpg') }}"
      alt="Call to action - Photo by Chevanon Photography"
      class="indet-0 pointer-events-none absolute -z-10 h-full w-full object-cover object-right md:object-center"
    >
    <div class="max-w-2xl px-4 py-12 text-center text-white/90 drop-shadow">
      <h1 class="font-montserrat text-5xl font-medium italic md:text-6xl lg:text-7xl">Set Picture</h1>
      <p class="text-2xl/10">
        Dive into a world of possibilities by experimenting with different filters, effects, and transformations.
        Discover new dimensions for your visuals.
      </p>
    </div>

    <a
      href="https://www.pexels.com/photo/close-up-of-a-red-siamese-fighting-fish-1335971/"
      class="absolute bottom-0 left-0 block p-4 font-medium text-white/90 hover:text-white/100"
      target="_blank"
      rel="nofollow"
    >
      Photo by Chevanon Photography
    </a>
  </section>

  <main class="bg-gradient-to-b from-black to-transparent">
    <section class="container mx-auto max-w-4xl space-y-8 px-4 py-16 text-center">
      <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
        <div class="mx-auto flex aspect-video w-96 max-w-full items-center justify-center rounded bg-base-200 p-4">
          User-Friendly Interface:
        </div>

        <div class="flex items-center justify-center p-4">
          <p>
            No need to be a tech whiz - our user-friendly interface
            makes image manipulation <strong class="text-primary">accessible to everyone</strong>.
            It's as simple as uploading your image and letting your creativity flow.
          </p>
        </div>
      </div>

      <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
        <div class="order-last flex items-center justify-center p-4 md:order-first">
          <p>
            Experience smooth and speedy editing
            <strong class="text-primary">even with large files</strong>.
            Our advanced technology ensures that you can work efficiently without compromising quality.
          </p>
        </div>

        <div class="mx-auto flex aspect-video w-96 max-w-full items-center justify-center rounded bg-base-200 p-4">
          Lightning-Fast Performance
        </div>
      </div>

      <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
        <div class="mx-auto flex aspect-video w-96 max-w-full items-center justify-center rounded bg-base-200 p-4">
          Perfectly Tailored
        </div>

        <div class="flex items-center justify-center p-4">
          <p>
            Whether you're preparing images for your website, social media, or personal projects, our tools ensure that
            <strong class="text-primary">your visuals look their best in any context</strong>.
          </p>
        </div>
      </div>

      <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
        <div class="order-last flex items-center justify-center p-4 md:order-first">
          <p>
            <strong class="text-primary">Turn your ideas into captivating visuals</strong>
            with our suite of editing features. From resizing for different platforms to applying artistic filters, your
            images will come to life in ways you never imagined.
          </p>
        </div>

        <div class="mx-auto flex aspect-video w-96 max-w-full items-center justify-center rounded bg-base-200 p-4">
          Create Stunning Visuals
        </div>
      </div>
    </section>
    {{-- @if (session('base64Image'))
      <div class="flex flex-col items-center pb-8">
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
      class="w-full p-4"
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

      <span class="hidden border-2 border-dashed"></span>
      <x-form.drop-zone
        name="images"
        multiple
        accept=".jpg, .jpeg, .png, .webp"
      />

      <button class="btn btn-primary mx-auto mt-4 block">Resize Image</button>
    </form> --}}
  </main>
</x-app-layout>
