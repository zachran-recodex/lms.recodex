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
                        Buat Klien
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
                        <h1 class="text-xl font-bold">Buat Klien</h1>
                    </div>
                </div>
                @include('layouts.mobile-header')
            </div>
        </header>
    </x-slot>

    <main class="main">
        <section class="section">
            <form method="POST" action="{{ route('dashboard.clients.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Username -->
                    <div class="">
                        <label for="username" class="block text-sm font-medium text-bgray-900">Username</label>
                        <input type="text" name="username" id="username" value="{{ old('username') }}" required
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        @error('username')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Phone Number -->
                    <div class="">
                        <label for="phone_number" class="block text-sm font-medium text-bgray-900">Phone Number</label>
                        <input type="number" name="phone_number" id="phone_number" value="{{ old('phone_number') }}"
                            required
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        @error('phone_number')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- First and Last Name -->
                <div class="mb-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-bgray-900">First Name</label>
                        <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" required
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        @error('first_name')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="last_name" class="block text-sm font-medium text-bgray-900">Last Name</label>
                        <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" required
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        @error('last_name')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Email -->
                    <div class="">
                        <label for="email" class="block text-sm font-medium text-bgray-900">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        @error('email')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="">
                        <label for="password" class="block text-sm font-medium text-bgray-900">Password</label>
                        <input type="password" name="password" id="password" required
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        @error('password')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex justify-between mt-6">
                    <a href="{{ route('dashboard.clients.index') }}" class="btn bg-ut-300 hover:bg-ut-400">
                        <span class="text-base font-medium text-bgray-900">Kembali</span>
                    </a>
                    <button type="submit" class="btn bg-blue-600 text-white hover:bg-blue-700focus:ring-blue-500">
                        Simpan
                    </button>
                </div>
            </form>
        </section>
    </main>
</x-app-layout>
