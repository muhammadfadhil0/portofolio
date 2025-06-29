<section id="home" class="mb-16 border-b-1 border-gray-600">
    <!-- Cover Background -->
    <img src="{{ config('portofolio.personal.background_photo') }}" alt="Cover Background"
        class="relative h-48 md:h-64 w-full object-cover rounded-t-lg">

    <!-- Profile Photo - Outside cover, overlapping -->
    <div class="relative -mt-12 md:-mt-16 ml-6 z-20">
        <img src="{{ config('portofolio.personal.photo') }}" alt="Profile"
            class="w-24 h-24 md:w-32 md:h-32 rounded-full border-4 border-white shadow-lg">
    </div>

    <!-- Content Area -->
    <div class="pt-4 px-6">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">
            Halo, saya {{ config('portofolio.personal.name') }} 👋
        </h1>
        <p class="text-lg text-gray-600 dark:text-gray-300 mb-4">
            {{ config('portofolio.personal.title') }}
        </p>
        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">About</h2>
            <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                {{ config('portofolio.personal.about') }}
            </p>
        </div>
    </div>
</section>
