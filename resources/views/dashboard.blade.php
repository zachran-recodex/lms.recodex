<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <div class="flex gap-6">
            <div class="flex items-center w-[380px] h-[40px] p-4 gap-3 border rounded-lg">
                <img src="{{ asset('images/search.svg') }}" alt="" class="flex items-start gap-[10px]">
                <p>Cari Modul</p>
            </div>
            <a href=""
                class="flex w-[40px] h-[40px] p-[10px] justify-center items-center gap-[10px] rounded-lg border">
                <img src="{{ asset('images/notification-2.svg') }}" alt=""
                    class="flex justify-center items-center w-[20px] h-[20px]">
            </a>
            <a href=""
                class="flex w-[40px] h-[40px] p-[10px] justify-center items-center gap-[10px] rounded-lg border bg-[#D9D9D9]">
            </a>
        </div>
    </x-slot>

    <div class="flex w-full justify-between gap-8">
        <div class="w-full inline-flex flex-col items-start gap-8">

            <div class="w-full flex-col justify-center items-start space-y-3">
                <div class="flex justify-between items-center">
                    <h2 class="text-2xl font-semibold">Selamat Datang, Aulia Hanifa Fianta</h2>
                </div>
                <div class="w-full grid grid-cols-4 gap-4">

                    <!-- Modul Pelatihan Selesai -->
                    <div
                        class="flex h-[110px] p-3 flex-col justify-center items-start gap-3 flex-[1_0_0] rounded-lg bg-[#FEFEFE]">
                        <div class="flex items-center gap-2">
                            <div class="w-4 h-4 bg-green-500 rounded-full"></div>
                            <p class="text-sm">Modul Pelatihan Selesai</p>
                        </div>
                        <p class="text-3xl font-semibold pb-1 border-b-2 border-green-500">28</p>
                    </div>

                    <!-- Modul dalam Progres -->
                    <div
                        class="flex h-[110px] p-3 flex-col justify-center items-start gap-3 flex-[1_0_0] rounded-lg bg-[#FEFEFE]">
                        <div class="flex items-center gap-2">
                            <div class="w-4 h-4 bg-red-500 rounded-full"></div>
                            <p class="text-sm">Modul dalam Progres</p>
                        </div>
                        <p class="text-3xl font-semibold pb-1 border-b-2 border-red-500">13</p>
                    </div>

                    <!-- Sertifikat Diperoleh -->
                    <div
                        class="flex h-[110px] p-3 flex-col justify-center items-start gap-3 flex-[1_0_0] rounded-lg bg-[#FEFEFE]">
                        <div class="flex items-center gap-2">
                            <div class="w-4 h-4 bg-blue-500 rounded-full"></div>
                            <p class="text-sm">Sertifikat Diperoleh</p>
                        </div>
                        <p class="text-3xl font-semibold pb-1 border-b-2 border-blue-500">14</p>
                    </div>

                    <!-- Waktu yang Dihabiskan -->
                    <div
                        class="flex h-[110px] p-3 flex-col justify-center items-start gap-3 flex-[1_0_0] rounded-lg bg-[#FEFEFE]">
                        <div class="flex items-center gap-2">
                            <div class="w-4 h-4 bg-yellow-500 rounded-full"></div>
                            <p class="text-sm">Waktu yang Dihabiskan</p>
                        </div>
                        <p class="text-3xl font-semibold pb-1 border-b-2 border-yellow-500">128 jam</p>
                    </div>
                </div>
            </div>

            <div class="w-full flex-col justify-center items-start space-y-3">
                <div class="flex justify-between items-center">
                    <h2 class="text-2xl font-semibold">Modul Pelatihan</h2>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <!-- Kursus Card 1 -->
                    <a href=""
                        class="w-full bg-white rounded-lg p-3 flex flex-col justify-start items-start gap-3">
                        <div class="w-full h-[142px] bg-[#D9D9D9] rounded-lg"></div>
                        <div class="flex flex-col items-start gap-2">
                            <h3 class="text-lg font-semibold">Dasar-Dasar Pengoperasian Excavator</h3>
                            <div class="flex justify-center items-center gap-2">
                                <div class="w-6 h-6 rounded bg-[#D9D9D9]"></div>
                                <p class="text-[#848484]">Instruktur: Rudi Hartono</p>
                            </div>
                        </div>
                        <div class="w-full flex justify-between items-center gap-2">
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 bg-green-500 rounded-full"></div>
                                <p class="text-sm">Excavator</p>
                            </div>
                            <div class="w-1 h-1 rounded-full bg-[#C1C1C1]"></div>
                            <p class="text-sm">3 Jam</p>
                            <div class="w-1 h-1 rounded-full bg-[#C1C1C1]"></div>
                            <p class="text-sm">Pemula</p>
                        </div>
                    </a>

                    <!-- Kursus Card 2 -->
                    <a href=""
                        class="w-full bg-white rounded-lg p-3 flex flex-col justify-start items-start gap-3">
                        <div class="w-full h-[142px] bg-[#D9D9D9] rounded-lg"></div>
                        <div class="flex flex-col items-start gap-2">
                            <h3 class="text-lg font-semibold">Teknik Pemeliharaan Mesin Backhoe</h3>
                            <div class="flex justify-center items-center gap-2">
                                <div class="w-6 h-6 rounded bg-[#D9D9D9]"></div>
                                <p class="text-[#848484]">Instruktur: Maya Kusuma</p>
                            </div>
                        </div>
                        <div class="w-full flex justify-between items-center gap-2">
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 bg-blue-500 rounded-full"></div>
                                <p class="text-sm">Backhoe</p>
                            </div>
                            <div class="w-1 h-1 rounded-full bg-[#C1C1C1]"></div>
                            <p class="text-sm">5 Jam</p>
                            <div class="w-1 h-1 rounded-full bg-[#C1C1C1]"></div>
                            <p class="text-sm">Menengah</p>
                        </div>
                    </a>

                    <!-- Kursus Card 3 -->
                    <a href=""
                        class="w-full bg-white rounded-lg p-3 flex flex-col justify-start items-start gap-3">
                        <div class="w-full h-[142px] bg-[#D9D9D9] rounded-lg"></div>
                        <div class="flex flex-col items-start gap-2">
                            <h3 class="text-lg font-semibold">Penggunaan Tingkat Lanjut Crane</h3>
                            <div class="flex justify-center items-center gap-2">
                                <div class="w-6 h-6 rounded bg-[#D9D9D9]"></div>
                                <p class="text-[#848484]">Instruktur: Alex Wijaya</p>
                            </div>
                        </div>
                        <div class="w-full flex justify-between items-center gap-2">
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 bg-yellow-500 rounded-full"></div>
                                <p class="text-sm">Crane</p>
                            </div>
                            <div class="w-1 h-1 rounded-full bg-[#C1C1C1]"></div>
                            <p class="text-sm">8 Jam</p>
                            <div class="w-1 h-1 rounded-full bg-[#C1C1C1]"></div>
                            <p class="text-sm">Lanjutan</p>
                        </div>
                    </a>

                    <!-- Kursus Card 4 -->
                    <a href=""
                        class="w-full bg-white rounded-lg p-3 flex flex-col justify-start items-start gap-3">
                        <div class="w-full h-[142px] bg-[#D9D9D9] rounded-lg"></div>
                        <div class="flex flex-col items-start gap-2">
                            <h3 class="text-lg font-semibold">Panduan Keselamatan Operator Forklift</h3>
                            <div class="flex justify-center items-center gap-2">
                                <div class="w-6 h-6 rounded bg-[#D9D9D9]"></div>
                                <p class="text-[#848484]">Instruktur: Lestari Ramadhani</p>
                            </div>
                        </div>
                        <div class="w-full flex justify-between items-center gap-2">
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 bg-red-500 rounded-full"></div>
                                <p class="text-sm">Keselamatan</p>
                            </div>
                            <div class="w-1 h-1 rounded-full bg-[#C1C1C1]"></div>
                            <p class="text-sm">2 Jam</p>
                            <div class="w-1 h-1 rounded-full bg-[#C1C1C1]"></div>
                            <p class="text-sm">Pemula</p>
                        </div>
                    </a>

                    <!-- Kursus Card 5 -->
                    <a href=""
                        class="w-full bg-white rounded-lg p-3 flex flex-col justify-start items-start gap-3">
                        <div class="w-full h-[142px] bg-[#D9D9D9] rounded-lg"></div>
                        <div class="flex flex-col items-start gap-2">
                            <h3 class="text-lg font-semibold">Diagnostik Mesin Berat untuk Mekanik</h3>
                            <div class="flex justify-center items-center gap-2">
                                <div class="w-6 h-6 rounded bg-[#D9D9D9]"></div>
                                <p class="text-[#848484]">Instruktur: Daniel Pratama</p>
                            </div>
                        </div>
                        <div class="w-full flex justify-between items-center gap-2">
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 bg-purple-500 rounded-full"></div>
                                <p class="text-sm">Diagnostik</p>
                            </div>
                            <div class="w-1 h-1 rounded-full bg-[#C1C1C1]"></div>
                            <p class="text-sm">6 Jam</p>
                            <div class="w-1 h-1 rounded-full bg-[#C1C1C1]"></div>
                            <p class="text-sm">Menengah</p>
                        </div>
                    </a>

                    <!-- Kursus Card 6 -->
                    <a href=""
                        class="w-full bg-white rounded-lg p-3 flex flex-col justify-start items-start gap-3">
                        <div class="w-full h-[142px] bg-[#D9D9D9] rounded-lg"></div>
                        <div class="flex flex-col items-start gap-2">
                            <h3 class="text-lg font-semibold">Teknik Perawatan Sistem Hidraulik Alat Berat</h3>
                            <div class="flex justify-center items-center gap-2">
                                <div class="w-6 h-6 rounded bg-[#D9D9D9]"></div>
                                <p class="text-[#848484]">Instruktur: Wahyu Pratama</p>
                            </div>
                        </div>
                        <div class="w-full flex justify-between items-center gap-2">
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 bg-orange-500 rounded-full"></div>
                                <p class="text-sm">Sistem Hidraulik</p>
                            </div>
                            <div class="w-1 h-1 rounded-full bg-[#C1C1C1]"></div>
                            <p class="text-sm">7 Jam</p>
                            <div class="w-1 h-1 rounded-full bg-[#C1C1C1]"></div>
                            <p class="text-sm">Lanjutan</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
