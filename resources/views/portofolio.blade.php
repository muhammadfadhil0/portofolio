<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Dillion</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    {{-- font inter --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    {{-- alpine js --}}
    <script src="//unpkg.com/alpinejs" defer></script>
    {{-- tabler --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
</head>

<style>
    body {
        font-family: Inter, sans-serif;
    }
</style>

<body class="bg-gray-900 transition-colors duration-300" x-data="{ isOpen = false }">

    <!-- Floating Navigation Bar -->
    <nav class="fixed bottom-6 left-1/2 transform -translate-x-1/2 z-50">
        <div class="bg-gray-800 rounded-full shadow-lg p-3 flex items-center space-x-3 border border-gray-700">
            <a href="#home" class="text-gray-300 hover:text-blue-400 transition-colors p-2">
                <i class="fas fa-home text-lg"></i>
            </a>
            @foreach (config('portofolio.navigation') as $index => $nav)
                <a href="{{ $nav['link'] }}" target="_blank"
                    class="text-gray-300 {{ $nav['hover_color'] }} transition-colors p-2">
                    <i class="{{ $nav['platform_icon'] }} text-lg"></i>
                </a>
            @endforeach
        </div>
    </nav>

    <div class="max-w-4xl mx-auto pb-10 py-md-12">

        <!-- Hero Section -->
        <x-hero-section />

        <!-- Work Experience Section -->
        <x-work-experience />

        <!-- Education Section -->
        <x-education-section />

        <!-- Projects Section -->
        <x-project-section />

        <!-- "I like building things" Section -->
        {{-- <x-hobbies /> --}}

        <!-- Contact Section -->
        {{-- <x-contact /> --}}

    </div>
</body>


</html>
