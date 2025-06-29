<!-- Work Experience Section -->
<section class="mb-16 px-6 md:px-0 ">
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Work Experience</h2>

    <div class="space-y-4">
        @foreach (config('portofolio.work_experience') as $index => $work)
            <div class="cursor-pointer" @click="isOpen = !isOpen" x-data="{ isOpen: false }">
                <div
                    class="flex items-center justify-between p-4 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                    <div class="flex items-center space-x-4">
                        <div
                            class="w-10 h-10 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-briefcase text-blue-600 dark:text-blue-400 text-sm"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">{{ $work['title'] }}</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">{{ $work['company'] }}</p>
                            <p class="text-gray-500 dark:text-gray-400 text-xs">{{ $work['period'] }}</p>
                        </div>
                    </div>
                    <i class="fas fa-chevron-down text-gray-400 transform transition-transform text-sm"
                        :class="{ 'rotate-180': isOpen }"></i>
                </div>

                <div class="ml-14 pb-4" x-show="isOpen" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                    <div class=" rounded-lg p-4 mt-2">
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-3">
                            {{ $work['description'] }}
                        </p>
                        <ul class="text-gray-600 dark:text-gray-300 text-sm space-y-1">
                            @foreach ($work['achievements'] as $achievement)
                                <li>• {{ $achievement }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
