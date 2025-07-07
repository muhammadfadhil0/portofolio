<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - {{ config('portofolio.personal.name') }}</title>
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

    .background-utama {
        background: linear-gradient(171deg, #141414, #19234b);
        background-size: 120% 120%;
        animation: gradient-animation 2s ease infinite;
    }

    @keyframes gradient-animation {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    /* Fade in animations */
    .fade-in {
        opacity: 0;
        transition: all 0.8s ease-out;
    }

    .fade-in.animate {
        opacity: 1;
    }

    .fade-in-navbar {
        opacity: 0;
        animation: fadeInNavbar 0.5s ease-out 0.5s forwards;
    }

    @keyframes fadeInNavbar {
        to {
            opacity: 1;
        }
    }
</style>

<body class="background-utama transition-colors duration-300" x-data="{ isOpen = false }">

    <!-- bar tengah melayang -->
    <nav class="fixed bottom-6 left-1/2 transform -translate-x-1/2 z-50 fade-in-navbar">
        <div class="bg-gray-900 rounded-full shadow-lg p-3 flex items-center space-x-3 border border-gray-700/30">
            <a href="#home"
                class="text-gray-300 hover:text-blue-400 transition-all duration-300 p-2 transform hover:scale-160">
                <i class="fas fa-home text-lg transition-transform duration-300"></i>
            </a>
            @foreach (config('portofolio.navigation') as $index => $nav)
                <a href="{{ $nav['link'] }}" target="_blank"
                    class="text-gray-300 {{ $nav['hover_color'] }} transition-all duration-300 p-2 transform hover:scale-160">
                    <i class="{{ $nav['platform_icon'] }} text-lg transition-transform duration-300"></i>
                </a>
            @endforeach
        </div>
    </nav>

    <div class="max-w-4xl bg-gray-900 md:border border-gray-700 md:mt-5 md:mb-5 rounded-lg mx-auto pb-10 py-md-12 ">

        <!-- Hero Section -->
        <div class="fade-in" style="animation-delay: 0.1s;">
            <x-hero-section />
        </div>

        <!-- Work Experience Section -->
        <div class="fade-in" style="animation-delay: 0.2s;">
            <x-work-experience />
        </div>

        <!-- Education Section -->
        <div class="fade-in" style="animation-delay: 0.3s;">
            <x-education-section />
        </div>

        <!-- Projects Section -->
        <div class="fade-in" style="animation-delay: 0.4s;">
            <x-project-section />
        </div>

        <!-- "I like building things" Section -->
        {{-- <x-hobbies /> --}}

        <!-- Contact Section -->
        {{-- <x-contact /> --}}

    </div>

    <script>
        // Intersection Observer for fade-in animations
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Ambil delay dari style attribute atau default 0
                        const delayMatch = entry.target.style.animationDelay.match(
                            /(\d+(?:\.\d+)?)s/);
                        const delay = delayMatch ? parseFloat(delayMatch[1]) * 1000 : 0;

                        // Set timeout berdasarkan delay
                        setTimeout(() => {
                            entry.target.classList.add('animate');
                        }, delay);

                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observe all fade-in elements
            document.querySelectorAll('.fade-in').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>


</html>
