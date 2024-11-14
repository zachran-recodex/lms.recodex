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
                        <h1 class="text-xl font-bold">Modul Pelatihan</h1>
                    </div>
                </div>
                @include('layouts.mobile-header')
            </div>
        </header>
    </x-slot>

    <main class="w-full px-6 pb-6 pt-[100px] sm:pt-[156px] xl:px-[48px] xl:pb-[48px]">
        <div class="2xl:flex 2xl:space-x-[48px]">
            <section class="mb-6 2xl:mb-0 2xl:flex-1">
                <div class="mb-12 rounded-lg bg-white">
                    <div class="flex items-center justify-between border-b border-bgray-300 px-5 py-3">
                        <h3 class="text-xl font-bold text-bgray-900">
                            Buat Modul Pelatihan
                        </h3>
                        <div class="relative h-full">
                            <a href="{{ route('admin.modules.index') }}"
                                class="flex h-full w-full items-center justify-center rounded-lg border bg-ut-300 px-4 py-2 hover:bg-ut-400">
                                <span class="text-base font-medium text-bgray-900">Kembali</span>
                            </a>
                        </div>
                    </div>
                    <div class="px-[55px] py-6">
                        <form method="POST" action="{{ route('admin.modules.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="">
                                    <label for="title" class="block text-sm font-medium text-bgray-900">Judul</label>
                                    <input type="text" name="title" id="title" value="{{ old('title') }}"
                                        required oninput="updateSlug()"
                                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    @error('title')
                                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="">
                                    <label for="slug" class="block text-sm font-medium text-bgray-900">Slug</label>
                                    <input type="text" name="slug" id="slug" value="{{ old('slug') }}"
                                        required readonly
                                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    @error('slug')
                                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="image" class="block text-sm font-medium text-bgray-900">Gambar</label>
                                <input type="file" name="image" id="image"
                                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                @error('image')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="is_active" class="block text-sm font-medium text-bgray-900">Status</label>
                                <select name="is_active" id="is_active"
                                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="1" {{ old('is_active') == '1' ? 'selected' : '' }}>Aktif
                                    </option>
                                    <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Tidak Aktif
                                    </option>
                                </select>
                                @error('is_active')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex justify-end mt-6">
                                <button type="submit"
                                    class="inline-flex items-center justify-center rounded-lg bg-blue-600 px-5 py-2 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script>
        function updateSlug() {
            const title = document.getElementById('title').value;
            const slug = title.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '');
            document.getElementById('slug').value = slug;
        }
    </script>
</x-app-layout>
