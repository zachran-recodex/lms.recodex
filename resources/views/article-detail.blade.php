<x-app-layout>
    <x-slot name="header">
        <header class="header-wrapper fixed z-30 hidden w-full md:block">
            <div class="relative flex h-[108px] w-full items-center justify-between bg-white px-10 2xl:px-[76px]">
                <button type="button" class="drawer-btn absolute left-0 top-auto rotate-180 transform">
                    <span>
                        <svg width="16" height="40" viewBox="0 0 16 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 10C0 4.47715 4.47715 0 10 0H16V40H10C4.47715 40 0 35.5228 0 30V10Z"
                                fill="#FED035" />
                            <path d="M10 15L6 20.0049L10 25.0098" stroke="#ffffff" stroke-width="1.2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                </button>
                <div>
                    <h3 class="text-xl font-bold text-bgray-900 lg:text-3xl lg:leading-[36.4px]">
                        Artikel
                    </h3>
                </div>
                @include('layouts.header')
            </div>
        </header>
        <header class="mobile-wrapper fixed z-20 block w-full md:hidden">
            <div class="flex h-[80px] w-full items-center justify-between bg-white">
                <div class="flex h-full w-full items-center space-x-5">
                    <button type="button" class="drawer-btn rotate-180 transform">
                        <span>
                            <svg width="16" height="40" viewBox="0 0 16 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 10C0 4.47715 4.47715 0 10 0H16V40H10C4.47715 40 0 35.5228 0 30V10Z"
                                    fill="#F7F7F7" />
                                <path d="M10 15L6 20.0049L10 25.0098" stroke="#A0AEC0" stroke-width="1.2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </button>
                    <div>
                        <a href="/">
                            <h1 class="text-xl font-bold">Artikel</h1>
                        </a>
                    </div>
                </div>
                @include('layouts.mobile-header')
            </div>
        </header>
    </x-slot>

    <main class="w-full px-6 pb-6 pt-[100px] sm:pt-[156px] xl:px-12 xl:pb-12">
        <div class="flex flex-col xl:flex-row gap-6">
            <!-- Main Content -->
            <section class="mb-6 2xl:mb-0 flex-1">
                <div class="rounded-lg bg-white p-5">
                    <div class="flex items-center justify-between h-[50px]">
                        <h2 class="text-2xl font-semibold text-bgray-900">{{ $article->title }}</h2>
                        <a href="{{ route('dashboard') }}"
                            class="flex h-full w-[100px] items-center justify-center rounded-lg border bg-ut-300">
                            <span class="text-base font-medium text-bgray-900">Kembali</span>
                        </a>
                    </div>

                    <!-- Gambar -->
                    <div class="mt-4">
                        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
                            class="rounded-lg w-full h-auto">
                    </div>

                    <!-- Description -->
                    <div class="mt-4">
                        <p class="text-md font-bold text-bgray-800 text-justify">{!! $article->description !!}</p>
                    </div>
                </div>
            </section>

            <!-- Sidebar (Right) -->
            <aside class="xl:w-[300px] bg-white rounded-lg p-5 mt-6 xl:mt-0 flex-shrink-0">
                <h3 class="text-xl font-semibold text-bgray-900 mb-4">Artikel Lainnya</h3>
                <ul class="space-y-3">
                    @forelse ($articles as $article)
                        <li>
                            <a href="{{ route('article.detail', $article->slug) }}"
                                class="bg-gray-100 rounded-lg overflow-hidden shadow-md">
                                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
                                    class="w-full h-32 object-cover">
                                <div class="p-4">
                                    <h4 class="text-lg font-semibold text-bgray-900">{{ $article->title }}</h4>
                                </div>
                            </a>
                        </li>
                    @empty
                        <li class="text-gray-500">No articles available</li>
                    @endforelse
                </ul>
                <div class="w-full mt-6">
                    {{ $articles->links() }}
                </div>
            </aside>
        </div>
    </main>
</x-app-layout>
