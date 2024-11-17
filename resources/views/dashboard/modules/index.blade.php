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
                <!-- Page Title -->
                <div>
                    <h3 class="text-xl font-bold text-bgray-900 lg:text-3xl lg:leading-[36.4px]">List Modul Pelatihan
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
                        <h1 class="text-xl font-bold">List Modul Pelatihan</h1>
                    </div>
                </div>
                @include('layouts.mobile-header')
            </div>
        </header>
    </x-slot>

    <main class="w-full px-6 pb-6 pt-[100px] sm:pt-[156px] xl:px-[48px] xl:pb-[48px]">
        <div class="2xl:flex 2xl:space-x-[48px]">
            <section class="mb-6 2xl:mb-0 2xl:flex-1">
                <!-- List table -->
                <div class="w-full rounded-lg bg-white px-[24px] py-[20px]">
                    <div class="flex flex-col space-y-5">
                        <div class="flex h-[56px] w-full space-x-4">
                            <div
                                class="hidden h-full rounded-lg border border-transparent bg-bgray-100 px-[18px] focus-within:border-ut-300 sm:block sm:w-70 lg:w-88">
                                <form action="{{ route('dashboard.modules.index') }}" method="GET"
                                    class="flex h-full w-full items-center space-x-[15px]">
                                    <span>
                                        <svg class="stroke-bgray-900" width="21" height="22" viewBox="0 0 21 22"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="9.80204" cy="10.6761" r="8.98856" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16.0537 17.3945L19.5777 20.9094" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <input type="text" id="listSearch" name="search" value="{{ request('search') }}"
                                        placeholder="Cari modul..."
                                        class="search-input w-full border-none bg-bgray-100 px-0 text-sm tracking-wide text-bgray-600 placeholder:text-sm placeholder:font-medium placeholder:text-bgray-500 focus:outline-none focus:ring-0" />
                                    <button type="submit"
                                        class="ml-2 px-3 py-1 rounded-lg bg-blue-500 text-white hover:bg-blue-600">
                                        Cari
                                    </button>
                                    <a href="{{ route('dashboard.modules.index') }}"
                                        class="ml-2 px-3 py-1 rounded-lg bg-red-500 text-white hover:bg-red-600">
                                        Reset
                                    </a>
                                </form>
                            </div>
                            <div class="relative h-full flex-1">
                                <a href="{{ route('dashboard.modules.create') }}"
                                    class="flex h-full w-full items-center justify-center rounded-lg border bg-ut-300">
                                    <span class="text-base font-medium text-bgray-900">Buat</span>
                                </a>
                            </div>
                        </div>

                        <div class="table-content w-full overflow-x-auto">
                            <table class="w-full">
                                <tr class="border-b border-bgray-300">
                                    <td class="inline-block w-[250px] px-6 py-5 lg:w-auto xl:px-0">
                                        <div class="flex w-full items-center space-x-2.5">
                                            <span class="text-base font-medium text-bgray-600">Judul</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 xl:px-0">
                                        <div class="flex w-full items-center space-x-2.5">
                                            <span class="text-base font-medium text-bgray-600">Gambar</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 xl:px-0">
                                        <div class="flex items-center space-x-2.5">
                                            <span class="text-base font-medium text-bgray-600">Status</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 xl:w-[165px] xl:px-0">
                                        <div class="flex w-full items-center space-x-2.5">
                                            <span class="text-base font-medium text-bgray-600">Aksi</span>
                                        </div>
                                    </td>
                                </tr>

                                @forelse($modules as $module)
                                    <tr class="border-b border-bgray-300">
                                        <td class="px-6 py-5 xl:px-0">
                                            <p class="text-base font-semibold text-bgray-900">{{ $module->title }}</p>
                                        </td>
                                        <td class="px-6 py-5 xl:px-0">
                                            <div class="h-24 w-24 overflow-hidden">
                                                <img src="{{ asset('storage/' . $module->image) }}"
                                                    alt="{{ $module->title }}"> class="h-full w-full object-cover" />
                                            </div>
                                        </td>
                                        <td class="px-6 py-5 xl:px-0">
                                            <p
                                                class="inline-block px-4 py-2 text-base font-medium rounded-full {{ $module->is_active ? 'bg-green-500 text-white' : 'bg-red-500 text-white' }}">
                                                {{ $module->is_active ? 'Aktif' : 'Tidak Aktif' }}
                                            </p>
                                        </td>
                                        <td class="px-6 py-5 xl:w-[165px] xl:px-0">
                                            <div class="flex w-full items-center space-x-4">
                                                <!-- Edit Button -->
                                                <a href="{{ route('dashboard.modules.edit', $module->slug) }}"
                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-blue-600 bg-blue-100 rounded-lg hover:bg-blue-200 transition duration-200">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M12 4v16m8-8H4"></path>
                                                    </svg>
                                                    Edit
                                                </a>

                                                <!-- Delete Button -->
                                                <button type="button"
                                                    onclick="openDeleteModal('{{ route('dashboard.modules.destroy', $module->slug) }}')"
                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-red-600 bg-red-100 rounded-lg hover:bg-red-200 transition duration-200">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                    </svg>
                                                    Hapus
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-5 text-center">Tidak ada modul yang
                                            tersedia.</td>
                                    </tr>
                                @endforelse
                            </table>

                            <!-- Pagination -->
                            <div class="w-full mt-6">
                                {{ $modules->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Struktur Modal -->
    <div id="deleteModal"
        class="fixed right-0 left-0 top-[200px] bottom-0 items-center justify-center hidden opacity-0 transition-opacity duration-300">
        <div
            class="border border-gray-800 bg-white rounded-lg p-6 w-[90%] max-w-md mx-auto mt-[10%] shadow-2xl transform scale-95 transition-transform duration-300">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Konfirmasi Penghapusan</h2>
            <p class="text-gray-600 mb-6">Apakah Anda yakin ingin menghapus modul ini?</p>
            <div class="flex justify-end space-x-4">
                <!-- Tombol Batal -->
                <button type="button" id="cancelButton"
                    class="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 focus:outline-none">
                    Batal
                </button>
                <form id="deleteForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 focus:outline-none">
                        Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        const deleteModal = document.getElementById('deleteModal');
        const deleteForm = document.getElementById('deleteForm');
        const cancelButton = document.getElementById('cancelButton');

        // Buka modal dengan mengatur action form delete secara dinamis
        function openDeleteModal(actionUrl) {
            deleteForm.setAttribute('action', actionUrl);
            deleteModal.classList.remove('hidden');
            // Tambahkan kelas untuk efek transisi
            setTimeout(() => {
                deleteModal.classList.remove('opacity-0');
                deleteModal.querySelector('div').classList.remove('scale-95');
            }, 10);
        }

        // Tutup modal
        function closeDeleteModal() {
            // Tambahkan kelas untuk transisi keluar
            deleteModal.classList.add('opacity-0');
            deleteModal.querySelector('div').classList.add('scale-95');
            // Hapus modal setelah transisi selesai
            setTimeout(() => {
                deleteModal.classList.add('hidden');
            }, 300);
        }

        // Tombol Batal
        cancelButton.addEventListener('click', closeDeleteModal);

        // Opsional: Tutup modal jika klik pada area overlay
        deleteModal.addEventListener('click', (e) => {
            if (e.target === deleteModal) {
                closeDeleteModal();
            }
        });
    </script>
</x-app-layout>
