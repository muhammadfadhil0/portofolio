        <section class="mb-16 px-6 md:px-5">
            <h2 class="text-2xl font-bold text-white mb-6">Education</h2>

            <div class="space-y-4">
                @foreach (config('portofolio.education') as $index => $education)
                    <div class="cursor-pointer" x-data="{ isOpen: false }" @click="isOpen = !isOpen">
                        <div
                            class="flex items-center justify-between p-4 rounded-lg hover:bg-gray-800 transition-colors">
                            <div class="flex items-center space-x-4">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    @if (isset($education['logo']))
                                        <img src="{{ $education['logo'] }}" alt="{{ $education['institution'] }} logo"
                                            class="w-8 h-8 object-contain bg-white rounded p-1">
                                    @else
                                        <div
                                            class="bg-green-900 w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <i class="fas fa-briefcase text-green-400 text-sm"></i>
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    <h3 class="font-semibold text-white">{{ $education['degree'] }}</h3>
                                    <p class="text-gray-300 text-sm">{{ $education['institution'] }}</p>
                                    <p class="text-gray-400 text-xs">{{ $education['period'] }}</p>
                                </div>
                            </div>
                            <i class="fas fa-chevron-down text-gray-400 transform transition-transform text-sm"
                                :class="{ 'rotate-180': isOpen }"></i>
                        </div>

                        <div class="ml-14 pb-4" x-show="isOpen" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-90">
                            <div class=" p-4 mt-2">
                                <p class="text-gray-300 text-sm mb-3">
                                    {{ $education['description'] }}
                                </p>
                                @if (config('portofolio.education.achievements'))
                                    <ul class="text-gray-300 text-sm space-y-1">
                                        @foreach ($education['achievements'] as $achievement)
                                            <li>• {{ $achievement }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                @if (isset($education['link']) && !empty($education['link']))
                                    <a href="{{ $education['link'] }}" target="_blank"
                                        class="inline-flex items-center text-blue-500 hover:underline text-sm mt-3">
                                        <i class="fa-solid fa-globe mr-1"></i>
                                        Website
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
