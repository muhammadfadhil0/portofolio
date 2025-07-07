<section id="home" class="mb-20 border-b-1 border-gray-600">
    <!-- Cover Background -->
    <img src="{{ config('portofolio.personal.background_photo') }}" alt="Cover Background"
        class="relative h-48 md:h-64 w-full object-cover rounded-t-lg fade-in" style="animation-delay: 0.2s;">

    <!-- Profile Photo - Outside cover, overlapping -->
    <div class="relative -mt-12 md:-mt-16 ml-6 z-20">
        <img src="{{ config('portofolio.personal.photo') }}" alt="Profile"
            class="w-24 h-24 md:w-32 md:h-32 rounded-full border-4 border-white shadow-lg object-cover fade-in" style="animation-delay: 0.4s;">
    </div>

    <!-- Content Area -->
    <div class="pt-4 px-6">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2 fade-in" style="animation-delay: 0.6s;">
            Halo, I'm {{ config('portofolio.personal.name') }} 👋
        </h1>
        <p class="text-lg text-gray-600 dark:text-gray-300 mb-4 fade-in" style="animation-delay: 0.8s;">
            {{ config('portofolio.personal.title') }}
        </p>
        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-2 fade-in" style="animation-delay: 1s;">About</h2>
            <p class="text-gray-600 dark:text-gray-400 leading-relaxed fade-in" style="animation-delay: 1.2s;">
                {{ config('portofolio.personal.about') }}
            </p>
        </div>
        <div class="mb-8">
            @if (config('portofolio.personal.resume_link'))
                <button>
                    <a href="{{ config('portofolio.personal.resume_link') }}"
                        class="border-2 border-white-100 rounded-full text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors fade-in" style="animation-delay: 1.4s;"
                        download>
                        <span class="ti ti-circle-arrow-down mr-1"></span>Download CV
                    </a>
                </button>
            @endif

            @if (config('portofolio.personal.location_link'))
                <button class="mt-6 md:mt-0">
                    <a href="{{ config('portofolio.personal.location_link') }}" target="_blank"
                        class="border-2 border-white-100 rounded-full text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors fade-in" style="animation-delay: 1.6s;">
                        <span class="ti ti-location mr-1"></span>{{ config('portofolio.personal.location') }}
                    </a>
                </button>
            @endif
        </div>
    </div>
</section>
