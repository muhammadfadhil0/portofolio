        <section class="mb-16 px-6 md:px-5">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-white mb-2">Check out my latest work</h2>
                <p class="text-gray-400">
                    I've worked on a variety of projects, from simple websites to complex web applications.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <!-- Project 1 -->
                @if (config('portofolio.projects'))

                    @foreach (config('portofolio.projects') as $index => $project)
                        <div
                            class="bg-gray-800 rounded-lg border border-gray-700 overflow-hidden hover:shadow-lg transition-shadow">
                            <div class="h-50 bg-gradient-to-br from-blue-400 to-purple-600 relative">
                                <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center">
                                    @if (isset($project['image']) && $project['image'])
                                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}"
                                            class="w-full h-full object-cover">
                                    @else
                                        <i class="fas fa-code text-white text-2xl"></i>
                                    @endif
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-white mb-2">{{ $project['title'] }}</h3>
                                <p class="text-gray-300 text-sm mb-3">
                                    {{ $project['description'] }}
                                </p>
                                <div class="flex flex-wrap gap-1 mb-3">
                                    @foreach ($project['technologies'] as $tech)
                                        <span
                                            class="px-2 py-1 bg-blue-900 text-blue-200 rounded text-xs">{{ $tech }}</span>
                                    @endforeach
                                </div>
                                @if (isset($project['link']) && $project['link'])
                                    <a href="{{ $project['link'] }}" target="_blank"
                                        class="inline-flex items-center text-blue-400 hover:underline text-sm">
                                        <i class="fab fa-github mr-1"></i>
                                        View on GitHub
                                    </a>
                                @endif
                                @if (isset($project['live_demo']) && $project['live_demo'])
                                    <a href="{{ $project['live_demo'] }}" target="_blank"
                                        class="inline-flex items-center text-blue-400 hover:underline text-sm ml-3">
                                        <i class="fas fa-external-link-alt mr-1"></i>
                                        Live Demo
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </section>
