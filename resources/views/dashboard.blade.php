<x-app-layout>
    <x-slot name="header">
        <header class="header-wrapper fixed z-30 hidden w-full md:block">
            <div class="relative flex h-[108px] w-full items-center justify-between bg-white px-10 2xl:px-[76px]">
                <button title="Ctrl+b" type="button" class="drawer-btn absolute left-0 top-auto rotate-180 transform">
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
                <!--Page Title-->
                <div>
                    <h3 class="text-xl font-bold text-bgray-900  lg:text-3xl lg:leading-[36.4px]">
                        Dashboard
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
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('') }}images/logo/logo-ut.png" class="block w-[50px] h-[50px]"
                                    alt="logo" />
                                <h1 class="text-xl font-bold">Dashboard</h1>
                            </div>
                        </a>
                    </div>
                </div>
                @include('layouts.mobile-header')
            </div>
        </header>
    </x-slot>

    <main class="w-full px-6 pb-6 pt-[100px] sm:pt-[156px] xl:px-12 xl:pb-12">
        <div class="flex flex-col space-y-8">
            <!-- Section 1 -->
            <div class="flex flex-col sm:flex-row border-2 border-black rounded-lg overflow-hidden bg-white">
                <!-- Banner -->
                <div class="min-w-[250px] bg-cover bg-center p-4 flex flex-col justify-between text-white"
                    style="background-image: url('{{ asset('images/responsive/bg1.png') }}');">
                    <span class="bg-ut-400 rounded px-2 py-1">Baru!</span>
                    <div>
                        <h2 class="font-bold text-2xl my-4">Artikel</h2>
                        <a href="" class="px-4 py-2 bg-white text-ut-400 rounded-lg">
                            Temukan Artikel Lainnya
                        </a>
                    </div>
                </div>
                <!-- Cards -->
                <div class="flex gap-4 p-4 overflow-x-auto flex-nowrap">
                    @forelse ($articles as $article)
                        <a href="{{ route('article.detail', $article->slug) }}"
                            class="flex-shrink-0 w-[250px] bg-white border rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
                                class="w-full h-40 object-cover border">
                            <div class="p-4">
                                <h3 class="font-bold text-lg truncate">{{ $article->title }}</h3>
                                <p class="text-sm text-gray-600">Mekanik</p>
                                <div class="flex items-center gap-2 mt-4">
                                    <img src="{{ asset('images/avatar/group-img.png') }}" alt=""
                                        class="w-8 h-8 rounded-full object-cover">
                                    <span class="text-sm font-medium text-gray-800">Arif Muhtarom</span>
                                </div>
                            </div>
                        </a>
                    @empty
                        <div class="flex-shrink-0 w-[250px] bg-white border rounded-lg overflow-hidden shadow">
                            <img src="{{ asset('images/responsive/bg1.png') }}" alt=""
                                class="w-full h-40 object-cover">
                            <div class="p-4">
                                <h3 class="font-bold text-lg truncate">Pengenalan Traktor</h3>
                                <p class="text-sm text-gray-600">Mekanik</p>
                                <div class="flex items-center gap-2 mt-4">
                                    <img src="{{ asset('images/avatar/group-img.png') }}" alt=""
                                        class="w-8 h-8 rounded-full object-cover">
                                    <span class="text-sm font-medium text-gray-800">Arif Muhtarom</span>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>

        </div>

    </main>
</x-app-layout>
