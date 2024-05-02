@push('head')
  <script>
    const cacheName = 'gallery';

    function storeFileInCache(cacheName, file) {
      caches.open(cacheName).then((cache) => {
        const request = new Request(file.name, {
          method: 'PUT',
          body: file,
        });

        cache.put(request, new Response(file));
      });
    }

    const fileInput = document.querySelector("[name='images']")

    fileInput.addEventListener('change', (event) => {
      const uploadedFile = event.target.files[0];
      storeFileInCache(uploadedFile);
    });

    console.log(caches);
  </script>
@endpush

<x-app-layout>
  <x-form.drop-zone name="images" />
</x-app-layout>