<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>@yield('title', 'MASU') | @yield('pageTitle', 'Home')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('masulogo.png') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('masulogo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('masulogo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('masulogo.png') }}">

    <!-- SEO Meta -->
    <meta name="description"
        content="@yield('description', 'Explore the cultural heritage of the Nwa Sub-Division and its vibrant clans.')">

    <meta name="author" content="Nwa Sub-Division">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="{{'Masu Online' }}">
    <meta property="og:description"
        content="@yield('description', 'Explore the cultural heritage of the Nwa Sub-Division and its vibrant clans.')">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts - Philosopher -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Philosopher', serif;
            scroll-behavior: smooth;
        }

        .clan-card {
            transition: all 0.3s ease;
        }

        .clan-card:hover {
            transform: translateY(-5px);
        }

        .navbar-fixed {
            backdrop-filter: blur(8px);
            background-color: rgba(15, 23, 42, 0.8);
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">
    <x-frontend.nav />

    {{ $slot }}

    <x-frontend.footer />

</body>

</html>