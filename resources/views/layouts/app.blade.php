<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1"
  >
  <meta
    name="csrf-token"
    content="{{ csrf_token() }}"
  >

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link
    rel="preconnect"
    href="https://fonts.googleapis.com"
  >
  <link
    rel="preconnect"
    href="https://fonts.gstatic.com"
    crossorigin
  >
  <link
    href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
    rel="stylesheet"
  >

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  @stack('head')
</head>

<body class="font-sans antialiased">
  <div class="min-h-screen bg-base-200">
    <header class="sticky top-0 bg-base-100 shadow">
      <div class="container mx-auto flex justify-between">
        <img
          src=""
          alt=""
        >

        <nav>
          <ul class="flex gap-2 p-2">
            <li>
              <a
                href="{{ route('gallery') }}"
                class="block rounded px-4 py-2 transition-colors hover:bg-white/5"
              >Gallery</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- Page Content -->
    {{ $slot }}
  </div>
</body>

</html>
