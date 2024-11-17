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
                        Modul Pelatihan
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
                            <h1 class="text-xl font-bold">Modul Pelatihan</h1>
                        </a>
                    </div>
                </div>
                @include('layouts.mobile-header')
            </div>
        </header>
    </x-slot>

    <main class="w-full px-6 pb-6 pt-[100px] sm:pt-[156px] xl:px-12 xl:pb-12">
        <div class="2xl:flex 2xl:space-x-[48px] flex flex-col">
            <!-- Search and Filter Section -->
            <section class="mb-6 2xl:mb-0 2xl:flex-1">
                <form action="{{ route('module') }}" method="GET"
                    class="flex items-center w-full flex-col sm:flex-row">
                    <!-- Search Bar -->
                    <div class="searchbar-wrapper flex items-center w-full mb-4 sm:mb-0 sm:w-auto">
                        <div
                            class="flex h-[56px] w-full sm:w-[300px] lg:w-[400px] items-center justify-between rounded-lg border border-bgray-900 bg-bgray-50 px-4">
                            <div class="flex w-full items-center space-x-3.5">
                                <span>
                                    <svg class="stroke-bgray-900" width="20" height="20" viewBox="0 0 20 20"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="9.78639" cy="9.78602" r="8.23951" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M15.5176 15.9447L18.7479 19.1667" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <label for="search" class="w-full">
                                    <input type="text" id=listSearch" name="search" value="{{ request('search') }}"
                                        placeholder="Cari modul..."
                                        class="search-input w-full border-none bg-bgray-50 px-0 text-sm tracking-wide text-bgray-600 placeholder:text-sm placeholder:font-semibold focus:outline-none focus:ring-0" />
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Buttons -->
                    <div class="flex gap-2 ml-4">
                        <button type="submit"
                            class="flex items-center justify-center rounded-lg h-[56px] w-full sm:w-[100px] bg-blue-600 py-2 px-4 font-bold text-white transition duration-200 ease-in-out hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                            Cari
                        </button>
                        <a href="{{ route('module') }}"
                            class="flex items-center justify-center rounded-lg h-[56px] w-full sm:w-[100px] bg-red-600 py-2 px-4 font-bold text-white transition duration-200 ease-in-out hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                            Reset
                        </a>
                    </div>
                </form>
                <!-- Kategori Section -->
                <div class="flex items-center justify-start mt-4 space-x-4 w-full overflow-x-auto">
                    <a href="#"
                        class="flex items-center justify-center rounded-lg h-[56px] w-[120px] py-2 px-4 font-bold text-bgray-900 border border-bgray-900 transition-all hover:bg-bgray-900 hover:text-white">
                        All Courses
                    </a>
                    <a href="#"
                        class="flex items-center justify-center rounded-lg h-[56px] w-[120px] py-2 px-4 font-bold text-bgray-900 border border-bgray-900 transition-all hover:bg-bgray-900 hover:text-white">
                        Premium
                    </a>
                    <a href="#"
                        class="flex items-center justify-center rounded-lg h-[56px] w-[120px] py-2 px-4 font-bold text-bgray-900 border border-bgray-900 transition-all hover:bg-bgray-900 hover:text-white">
                        Starter
                    </a>
                    <a href="#"
                        class="flex items-center justify-center rounded-lg h-[56px] w-[120px] py-2 px-4 font-bold text-bgray-900 border border-bgray-900 transition-all hover:bg-bgray-900 hover:text-white">
                        Finished
                    </a>
                </div>
            </section>

            <!-- Course Modules Section -->
            <section class="mb-6 2xl:mb-0 2xl:flex-1">
                <div class="mb-[24px] w-full">
                    <div class="grid grid-cols-1 gap-[24px] lg:grid-cols-3 sm:grid-cols-2">
                        @forelse ($modules as $module)
                            <a href="" class="rounded-lg bg-white border border-bgray-900 p-5">
                                <img src="{{ Storage::url($module->image) }}"
                                    class="w-full object-cover h-[150px] rounded-lg" alt="{{ $module->title }}">
                                <h2 class="text-lg font-semibold text-bgray-900 mt-3">{{ $module->title }}</h2>
                                <!-- Indikator Progres -->
                                <div class="flex items-center">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-ut-300 h-2.5 rounded-full" style="width: 50%;"></div>
                                    </div>
                                    <span class="ml-2 text-sm font-medium text-bgray-900">50%</span>
                                </div>
                            </a>
                        @empty
                            <div class="rounded-lg bg-white border border-bgray-900 p-5">
                                <img src="{{ asset('images/responsive/bg1.png') }}"
                                    class="w-full object-cover h-[150px] rounded-lg" alt="Module">
                                <h2 class="text-lg font-semibold text-bgray-900 mt-3">Judul Modul</h2>
                                <!-- Indikator Progres -->
                                <div class="flex items-center">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-ut-300 h-2.5 rounded-full" style="width: 50%;"></div>
                                    </div>
                                    <span class="ml-2 text-sm font-medium text-bgray-900">50%</span>
                                </div>
                            </div>
                        @endforelse
                    </div>
                    <div class="pagination-content w-full">
                        {{ $modules->links() }}
                    </div>
                </div>
            </section>
        </div>
    </main>
</x-app-layout>
