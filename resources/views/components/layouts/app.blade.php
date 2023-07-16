<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos - {{ $title ?? '' }} </title>
    <meta name="description" content="{{ $metaDescription ?? 'Bienvenido a nuestra plataforma de eventos donde encontrarás las mejores organizaciones del Perú' }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans text-gray-900 antialiased">
    <nav class="fixed top-0 z-50 w-full bg-gray-50 border-b border-gray-300">
        @include('components.utils.navbar')
    </nav>

    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-gray-50 border-r border-gray-300 sm:translate-x-0 aria-label="Sidebar">
        @include('components.utils.sidebar')
    </aside>

    <div class="p-6 sm:ml-64 bg-gray-50 min-h-screen">
        <div class="p-3 bg-white shadow-md rounded-lg mt-16">
            @yield('content')
        </div>
    </div>

</body>

</html>
