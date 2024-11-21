<aside class="sidebar-wrapper fixed top-0 z-30 block h-full w-[308px] bg-white sm:hidden xl:block">
    <div
        class="sidebar-header relative z-30 flex h-[108px] w-full items-center border-b border-r border-b-[#F7F7F7] border-r-[#F7F7F7] pl-[50px]">
        <a href="index.html">
            <div class="flex items-center gap-4">
                <img src="{{ asset('') }}images/logo/logo-ut.png" class="block w-[50px] h-[50px]" alt="logo" />
                <h1 class="text-xl font-bold">Prolift Academy</h1>
            </div>
        </a>
        <button type="button" class="drawer-btn absolute right-0 top-auto" title="Ctrl+b">
            <span>
                <svg width="16" height="40" viewBox="0 0 16 40" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 10C0 4.47715 4.47715 0 10 0H16V40H10C4.47715 40 0 35.5228 0 30V10Z" fill="#FED035" />
                    <path d="M10 15L6 20.0049L10 25.0098" stroke="#ffffff" stroke-width="1.2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </span>
        </button>
    </div>
    <div
        class="sidebar-body overflow-style-none relative z-30 h-screen w-full overflow-y-scroll pb-[200px] pl-[48px] pt-[14px]">
        <div class="nav-wrapper mb-[36px] pr-[50px]">
            <div class="item-wrapper mb-5">
                <h4 class="border-b border-bgray-200 text-sm font-medium leading-7 text-bgray-700">
                    Menu
                </h4>
                <ul class="mt-2.5">
                    <li class="item py-[11px] text-bgray-900 hover:text-ut-300">
                        <a href="{{ route('dashboard') }}">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2.5">
                                    <span class="px-2">
                                        <svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="path-1"
                                                d="M0 8.84719C0 7.99027 0.366443 7.17426 1.00691 6.60496L6.34255 1.86217C7.85809 0.515019 10.1419 0.515019 11.6575 1.86217L16.9931 6.60496C17.6336 7.17426 18 7.99027 18 8.84719V17C18 19.2091 16.2091 21 14 21H4C1.79086 21 0 19.2091 0 17V8.84719Z"
                                                fill="#1A202C" />
                                            <path class="path-2"
                                                d="M5 17C5 14.7909 6.79086 13 9 13C11.2091 13 13 14.7909 13 17V21H5V17Z"
                                                fill="#FED035" />
                                        </svg>
                                    </span>
                                    <span class="item-text text-lg font-medium leading-none">Dashboard</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="item py-[11px] text-bgray-900 hover:text-ut-300">
                        {{-- Untuk Admin --}}
                        @if (auth()->user()->hasRole('admin'))
                            <a href="{{ route('dashboard.modules.index') }}">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-2.5">
                                        <span class="px-2">
                                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18 16V6C18 3.79086 16.2091 2 14 2H4C1.79086 2 0 3.79086 0 6V16C0 18.2091 1.79086 20 4 20H14C16.2091 20 18 18.2091 18 16Z"
                                                    fill="#1A202C" class="path-1" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.25 8C4.25 7.58579 4.58579 7.25 5 7.25H13C13.4142 7.25 13.75 7.58579 13.75 8C13.75 8.41421 13.4142 8.75 13 8.75H5C4.58579 8.75 4.25 8.41421 4.25 8Z"
                                                    fill="#FED035" class="path-2" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.25 12C4.25 11.5858 4.58579 11.25 5 11.25H13C13.4142 11.25 13.75 11.5858 13.75 12C13.75 12.4142 13.4142 12.75 13 12.75H5C4.58579 12.75 4.25 12.4142 4.25 12Z"
                                                    fill="#FED035" class="path-2" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.25 16C4.25 15.5858 4.58579 15.25 5 15.25H9C9.41421 15.25 9.75 15.5858 9.75 16C9.75 16.4142 9.41421 16.75 9 16.75H5C4.58579 16.75 4.25 16.4142 4.25 16Z"
                                                    fill="#FED035" class="path-2" />
                                                <path
                                                    d="M11 0H7C5.89543 0 5 0.895431 5 2C5 3.10457 5.89543 4 7 4H11C12.1046 4 13 3.10457 13 2C13 0.895431 12.1046 0 11 0Z"
                                                    fill="#FED035" class="path-2" />
                                            </svg>
                                        </span>
                                        <span class="item-text text-lg font-medium leading-none">Modul Pelatihan</span>
                                    </div>
                                </div>
                            </a>
                        @endif

                        {{-- Untuk Mentor --}}
                        @if (auth()->user()->hasRole('mentor'))
                            <a href="">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-2.5">
                                        <span class="px-2">
                                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18 16V6C18 3.79086 16.2091 2 14 2H4C1.79086 2 0 3.79086 0 6V16C0 18.2091 1.79086 20 4 20H14C16.2091 20 18 18.2091 18 16Z"
                                                    fill="#1A202C" class="path-1" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.25 8C4.25 7.58579 4.58579 7.25 5 7.25H13C13.4142 7.25 13.75 7.58579 13.75 8C13.75 8.41421 13.4142 8.75 13 8.75H5C4.58579 8.75 4.25 8.41421 4.25 8Z"
                                                    fill="#FED035" class="path-2" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.25 12C4.25 11.5858 4.58579 11.25 5 11.25H13C13.4142 11.25 13.75 11.5858 13.75 12C13.75 12.4142 13.4142 12.75 13 12.75H5C4.58579 12.75 4.25 12.4142 4.25 12Z"
                                                    fill="#FED035" class="path-2" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.25 16C4.25 15.5858 4.58579 15.25 5 15.25H9C9.41421 15.25 9.75 15.5858 9.75 16C9.75 16.4142 9.41421 16.75 9 16.75H5C4.58579 16.75 4.25 16.4142 4.25 16Z"
                                                    fill="#FED035" class="path-2" />
                                                <path
                                                    d="M11 0H7C5.89543 0 5 0.895431 5 2C5 3.10457 5.89543 4 7 4H11C12.1046 4 13 3.10457 13 2C13 0.895431 12.1046 0 11 0Z"
                                                    fill="#FED035" class="path-2" />
                                            </svg>
                                        </span>
                                        <span class="item-text text-lg font-medium leading-none">Modul Pelatihan</span>
                                    </div>
                                </div>
                            </a>
                        @endif

                        {{-- Untuk Client --}}
                        @if (auth()->user()->hasRole('client'))
                            <a href="{{ route('module') }}">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-2.5">
                                        <span class="px-2">
                                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18 16V6C18 3.79086 16.2091 2 14 2H4C1.79086 2 0 3.79086 0 6V16C0 18.2091 1.79086 20 4 20H14C16.2091 20 18 18.2091 18 16Z"
                                                    fill="#1A202C" class="path-1" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.25 8C4.25 7.58579 4.58579 7.25 5 7.25H13C13.4142 7.25 13.75 7.58579 13.75 8C13.75 8.41421 13.4142 8.75 13 8.75H5C4.58579 8.75 4.25 8.41421 4.25 8Z"
                                                    fill="#FED035" class="path-2" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.25 12C4.25 11.5858 4.58579 11.25 5 11.25H13C13.4142 11.25 13.75 11.5858 13.75 12C13.75 12.4142 13.4142 12.75 13 12.75H5C4.58579 12.75 4.25 12.4142 4.25 12Z"
                                                    fill="#FED035" class="path-2" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.25 16C4.25 15.5858 4.58579 15.25 5 15.25H9C9.41421 15.25 9.75 15.5858 9.75 16C9.75 16.4142 9.41421 16.75 9 16.75H5C4.58579 16.75 4.25 16.4142 4.25 16Z"
                                                    fill="#FED035" class="path-2" />
                                                <path
                                                    d="M11 0H7C5.89543 0 5 0.895431 5 2C5 3.10457 5.89543 4 7 4H11C12.1046 4 13 3.10457 13 2C13 0.895431 12.1046 0 11 0Z"
                                                    fill="#FED035" class="path-2" />
                                            </svg>
                                        </span>
                                        <span class="item-text text-lg font-medium leading-none">Modul Pelatihan</span>
                                    </div>
                                </div>
                            </a>
                        @endif
                    </li>
                    <li class="item py-[11px] text-bgray-900 hover:text-ut-300">
                        {{-- Untuk Admin --}}
                        @if (auth()->user()->hasRole('admin'))
                            <a href="{{ route('dashboard.articles.index') }}">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-2.5">
                                        <span class="px-2">
                                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18 16V6C18 3.79086 16.2091 2 14 2H4C1.79086 2 0 3.79086 0 6V16C0 18.2091 1.79086 20 4 20H14C16.2091 20 18 18.2091 18 16Z"
                                                    fill="#1A202C" class="path-1" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.25 8C4.25 7.58579 4.58579 7.25 5 7.25H13C13.4142 7.25 13.75 7.58579 13.75 8C13.75 8.41421 13.4142 8.75 13 8.75H5C4.58579 8.75 4.25 8.41421 4.25 8Z"
                                                    fill="#FED035" class="path-2" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.25 12C4.25 11.5858 4.58579 11.25 5 11.25H13C13.4142 11.25 13.75 11.5858 13.75 12C13.75 12.4142 13.4142 12.75 13 12.75H5C4.58579 12.75 4.25 12.4142 4.25 12Z"
                                                    fill="#FED035" class="path-2" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.25 16C4.25 15.5858 4.58579 15.25 5 15.25H9C9.41421 15.25 9.75 15.5858 9.75 16C9.75 16.4142 9.41421 16.75 9 16.75H5C4.58579 16.75 4.25 16.4142 4.25 16Z"
                                                    fill="#FED035" class="path-2" />
                                                <path
                                                    d="M11 0H7C5.89543 0 5 0.895431 5 2C5 3.10457 5.89543 4 7 4H11C12.1046 4 13 3.10457 13 2C13 0.895431 12.1046 0 11 0Z"
                                                    fill="#FED035" class="path-2" />
                                            </svg>
                                        </span>
                                        <span class="item-text text-lg font-medium leading-none">Artikel</span>
                                    </div>
                                </div>
                            </a>
                        @endif

                        {{-- Untuk Mentor --}}
                        @if (auth()->user()->hasRole('mentor'))
                            <a href="">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-2.5">
                                        <span class="px-2">
                                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18 16V6C18 3.79086 16.2091 2 14 2H4C1.79086 2 0 3.79086 0 6V16C0 18.2091 1.79086 20 4 20H14C16.2091 20 18 18.2091 18 16Z"
                                                    fill="#1A202C" class="path-1" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.25 8C4.25 7.58579 4.58579 7.25 5 7.25H13C13.4142 7.25 13.75 7.58579 13.75 8C13.75 8.41421 13.4142 8.75 13 8.75H5C4.58579 8.75 4.25 8.41421 4.25 8Z"
                                                    fill="#FED035" class="path-2" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.25 12C4.25 11.5858 4.58579 11.25 5 11.25H13C13.4142 11.25 13.75 11.5858 13.75 12C13.75 12.4142 13.4142 12.75 13 12.75H5C4.58579 12.75 4.25 12.4142 4.25 12Z"
                                                    fill="#FED035" class="path-2" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.25 16C4.25 15.5858 4.58579 15.25 5 15.25H9C9.41421 15.25 9.75 15.5858 9.75 16C9.75 16.4142 9.41421 16.75 9 16.75H5C4.58579 16.75 4.25 16.4142 4.25 16Z"
                                                    fill="#FED035" class="path-2" />
                                                <path
                                                    d="M11 0H7C5.89543 0 5 0.895431 5 2C5 3.10457 5.89543 4 7 4H11C12.1046 4 13 3.10457 13 2C13 0.895431 12.1046 0 11 0Z"
                                                    fill="#FED035" class="path-2" />
                                            </svg>
                                        </span>
                                        <span class="item-text text-lg font-medium leading-none">Artikel</span>
                                    </div>
                                </div>
                            </a>
                        @endif

                        {{-- Untuk Client --}}
                        @if (auth()->user()->hasRole('client'))
                            <a href="{{ route('article') }}">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-2.5">
                                        <span class="px-2">
                                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18 16V6C18 3.79086 16.2091 2 14 2H4C1.79086 2 0 3.79086 0 6V16C0 18.2091 1.79086 20 4 20H14C16.2091 20 18 18.2091 18 16Z"
                                                    fill="#1A202C" class="path-1" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.25 8C4.25 7.58579 4.58579 7.25 5 7.25H13C13.4142 7.25 13.75 7.58579 13.75 8C13.75 8.41421 13.4142 8.75 13 8.75H5C4.58579 8.75 4.25 8.41421 4.25 8Z"
                                                    fill="#FED035" class="path-2" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.25 12C4.25 11.5858 4.58579 11.25 5 11.25H13C13.4142 11.25 13.75 11.5858 13.75 12C13.75 12.4142 13.4142 12.75 13 12.75H5C4.58579 12.75 4.25 12.4142 4.25 12Z"
                                                    fill="#FED035" class="path-2" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.25 16C4.25 15.5858 4.58579 15.25 5 15.25H9C9.41421 15.25 9.75 15.5858 9.75 16C9.75 16.4142 9.41421 16.75 9 16.75H5C4.58579 16.75 4.25 16.4142 4.25 16Z"
                                                    fill="#FED035" class="path-2" />
                                                <path
                                                    d="M11 0H7C5.89543 0 5 0.895431 5 2C5 3.10457 5.89543 4 7 4H11C12.1046 4 13 3.10457 13 2C13 0.895431 12.1046 0 11 0Z"
                                                    fill="#FED035" class="path-2" />
                                            </svg>
                                        </span>
                                        <span class="item-text text-lg font-medium leading-none">Artikel</span>
                                    </div>
                                </div>
                            </a>
                        @endif
                    </li>
                    <li class="item py-[11px] text-bgray-900 hover:text-ut-300">
                        <a href="{{ route('notification') }}">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2.5">
                                    <span class="px-2">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8 18C9.38503 18 10.5633 17.1652 11 16H5C5.43668 17.1652 6.61497 18 8 18Z"
                                                fill="#FED035" class="path-2" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M9.6896 0.754028C9.27403 0.291157 8.67102 0 8 0C6.74634 0 5.73005 1.01629 5.73005 2.26995V2.37366C3.58766 3.10719 2.0016 4.85063 1.76046 6.97519L1.31328 10.9153C1.23274 11.6249 0.933441 12.3016 0.447786 12.8721C-0.649243 14.1609 0.394434 16 2.22281 16H13.7772C15.6056 16 16.6492 14.1609 15.5522 12.8721C15.0666 12.3016 14.7673 11.6249 14.6867 10.9153L14.2395 6.97519C14.2333 6.92024 14.2262 6.86556 14.2181 6.81113C13.8341 6.93379 13.4248 7 13 7C10.7909 7 9 5.20914 9 3C9 2.16744 9.25436 1.3943 9.6896 0.754028Z"
                                                fill="#1A202C" class="path-1" />
                                            <circle cx="13" cy="3" r="3" fill="#FED035"
                                                class="path-2" />
                                        </svg>
                                    </span>
                                    <span class="item-text text-lg font-medium leading-none">Notifikasi</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="item py-[11px] text-bgray-900 hover:text-ut-300">
                        <x-dropdown-link :href="route('profile.edit')">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2.5">
                                    <span class="px-2">
                                        <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="7" cy="14" rx="7" ry="4"
                                                class="path-1" fill="#1A202C" />
                                            <circle cx="7" cy="4" r="4" fill="#FED035"
                                                class="path-2" />
                                        </svg>
                                    </span>
                                    <span class="item-text text-lg font-medium leading-none">Profil Pengguna</span>
                                </div>
                            </div>
                        </x-dropdown-link>
                    </li>
                </ul>
            </div>
            <div class="item-wrapper mb-5">
                <h4 class="border-b border-bgray-200 text-sm font-medium leading-7 text-bgray-700">
                    Others
                </h4>
                <ul class="mt-2.5">
                    <li class="item py-[11px] text-bgray-900 hover:text-ut-300">
                        <a href="{{ route('support') }}">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2.5">
                                    <span class="px-2">
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5 2V11C5 12.1046 5.89543 13 7 13H18C19.1046 13 20 12.1046 20 11V2C20 0.895431 19.1046 0 18 0H7C5.89543 0 5 0.89543 5 2Z"
                                                fill="#1A202C" class="path-1" />
                                            <path
                                                d="M0 15C0 13.8954 0.895431 13 2 13H2.17157C2.70201 13 3.21071 13.2107 3.58579 13.5858C4.36683 14.3668 5.63317 14.3668 6.41421 13.5858C6.78929 13.2107 7.29799 13 7.82843 13H8C9.10457 13 10 13.8954 10 15V16C10 17.1046 9.10457 18 8 18H2C0.89543 18 0 17.1046 0 16V15Z"
                                                fill="#FED035" class="path-2" />
                                            <path
                                                d="M7.5 9.5C7.5 10.8807 6.38071 12 5 12C3.61929 12 2.5 10.8807 2.5 9.5C2.5 8.11929 3.61929 7 5 7C6.38071 7 7.5 8.11929 7.5 9.5Z"
                                                fill="#FED035" class="path-2" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.25 4.5C8.25 4.08579 8.58579 3.75 9 3.75L16 3.75C16.4142 3.75 16.75 4.08579 16.75 4.5C16.75 4.91421 16.4142 5.25 16 5.25L9 5.25C8.58579 5.25 8.25 4.91421 8.25 4.5Z"
                                                fill="#FED035" class="path-2" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M11.25 8.5C11.25 8.08579 11.5858 7.75 12 7.75L16 7.75C16.4142 7.75 16.75 8.08579 16.75 8.5C16.75 8.91421 16.4142 9.25 16 9.25L12 9.25C11.5858 9.25 11.25 8.91421 11.25 8.5Z"
                                                fill="#FED035" class="path-2" />
                                        </svg>
                                    </span>
                                    <span class="item-text text-lg font-medium leading-none">Support</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="item py-[11px] text-bgray-900 hover:text-ut-300">
                        <a href="{{ route('setting') }}">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2.5">
                                    <span class="px-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.0606 2H10.9394C9.76787 2 8.81817 2.89543 8.81817 4C8.81817 5.26401 7.46574 6.06763 6.35556 5.4633L6.24279 5.40192C5.22823 4.84963 3.93091 5.17738 3.34515 6.13397L2.28455 7.86602C1.69879 8.8226 2.0464 10.0458 3.06097 10.5981C4.17168 11.2027 4.17168 12.7973 3.06096 13.4019C2.0464 13.9542 1.69879 15.1774 2.28454 16.134L3.34515 17.866C3.93091 18.8226 5.22823 19.1504 6.24279 18.5981L6.35555 18.5367C7.46574 17.9324 8.81817 18.736 8.81817 20C8.81817 21.1046 9.76787 22 10.9394 22H13.0606C14.2321 22 15.1818 21.1046 15.1818 20C15.1818 18.736 16.5343 17.9324 17.6445 18.5367L17.7572 18.5981C18.7718 19.1504 20.0691 18.8226 20.6548 17.866L21.7155 16.134C22.3012 15.1774 21.9536 13.9542 20.939 13.4019C19.8283 12.7973 19.8283 11.2027 20.939 10.5981C21.9536 10.0458 22.3012 8.82262 21.7155 7.86603L20.6548 6.13398C20.0691 5.1774 18.7718 4.84965 17.7572 5.40193L17.6445 5.46331C16.5343 6.06765 15.1818 5.26402 15.1818 4C15.1818 2.89543 14.2321 2 13.0606 2Z"
                                                fill="#1A202C" class="path-1" />
                                            <path
                                                d="M15.75 12C15.75 14.0711 14.0711 15.75 12 15.75C9.92893 15.75 8.25 14.0711 8.25 12C8.25 9.92893 9.92893 8.25 12 8.25C14.0711 8.25 15.75 9.92893 15.75 12Z"
                                                fill="#FED035" class="path-2" />
                                        </svg>
                                    </span>
                                    <span class="item-text text-lg font-medium leading-none">Setting</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="item py-[11px] text-bgray-900 hover:text-ut-300">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-2.5">
                                        <span class="px-2">
                                            <svg width="21" height="18" viewBox="0 0 21 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M17.1464 10.4394C16.8536 10.7323 16.8536 11.2072 17.1464 11.5001C17.4393 11.7929 17.9142 11.7929 18.2071 11.5001L19.5 10.2072C20.1834 9.52375 20.1834 8.41571 19.5 7.73229L18.2071 6.4394C17.9142 6.1465 17.4393 6.1465 17.1464 6.4394C16.8536 6.73229 16.8536 7.20716 17.1464 7.50006L17.8661 8.21973H11.75C11.3358 8.21973 11 8.55551 11 8.96973C11 9.38394 11.3358 9.71973 11.75 9.71973H17.8661L17.1464 10.4394Z"
                                                    fill="#FED035" class="path-2" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.75 17.75H12C14.6234 17.75 16.75 15.6234 16.75 13C16.75 12.5858 16.4142 12.25 16 12.25C15.5858 12.25 15.25 12.5858 15.25 13C15.25 14.7949 13.7949 16.25 12 16.25H8.21412C7.34758 17.1733 6.11614 17.75 4.75 17.75ZM8.21412 1.75H12C13.7949 1.75 15.25 3.20507 15.25 5C15.25 5.41421 15.5858 5.75 16 5.75C16.4142 5.75 16.75 5.41421 16.75 5C16.75 2.37665 14.6234 0.25 12 0.25H4.75C6.11614 0.25 7.34758 0.82673 8.21412 1.75Z"
                                                    fill="#1A202C" class="path-1" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0 5C0 2.37665 2.12665 0.25 4.75 0.25C7.37335 0.25 9.5 2.37665 9.5 5V13C9.5 15.6234 7.37335 17.75 4.75 17.75C2.12665 17.75 0 15.6234 0 13V5Z"
                                                    fill="#1A202C" class="path-1" />
                                            </svg>
                                        </span>
                                        <span
                                            class="item-text text-lg font-medium leading-none">{{ __('Log Out') }}</span>
                                    </div>
                                </div>
                            </x-dropdown-link>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="copy-write-text">
            <p class="text-sm text-[#969BA0]">© 2024 All Rights Reserved</p>
            <p class="text-sm font-medium text-bgray-700">
                Made with ❤️ by
                <a href="#" target="_blank" class="border-b font-semibold hover:text-ut-300">United
                    Tractors</a>
            </p>
        </div>
    </div>
</aside>
<aside class="relative hidden w-[96px] bg-white sm:block">
    <div class="sidebar-wrapper-collapse relative top-0 z-30 w-full">
        <div
            class="sidebar-header sticky top-0 z-20 flex h-[108px] w-full items-center justify-center border-b border-r border-b-[#F7F7F7] border-r-[#F7F7F7] bg-white">
            <a href="index.html">
                <img src="{{ asset('') }}images/logo/logo-ut.png" class="block w-[50px] h-[50px]"
                    alt="logo" />
            </a>
        </div>
        <div class="sidebar-body w-full pt-[14px]">
            <div class="flex flex-col items-center">
                <div class="nav-wrapper mb-[36px]">
                    <div class="item-wrapper mb-5">
                        <ul class="mt-2.5 flex flex-col items-center justify-center">
                            <li class="item px-[43px] py-[11px]">
                                <a href="{{ route('dashboard') }}">
                                    <span class="item-ico">
                                        <svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="path-1"
                                                d="M0 8.84719C0 7.99027 0.366443 7.17426 1.00691 6.60496L6.34255 1.86217C7.85809 0.515019 10.1419 0.515019 11.6575 1.86217L16.9931 6.60496C17.6336 7.17426 18 7.99027 18 8.84719V17C18 19.2091 16.2091 21 14 21H4C1.79086 21 0 19.2091 0 17V8.84719Z"
                                                fill="#1A202C" />
                                            <path class="path-2"
                                                d="M5 17C5 14.7909 6.79086 13 9 13C11.2091 13 13 14.7909 13 17V21H5V17Z"
                                                fill="#FED035" />
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            <li class="item px-[43px] py-[11px]">
                                <a href="{{ route('module') }}">
                                    <span class="item-ico">
                                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18 16V6C18 3.79086 16.2091 2 14 2H4C1.79086 2 0 3.79086 0 6V16C0 18.2091 1.79086 20 4 20H14C16.2091 20 18 18.2091 18 16Z"
                                                fill="#1A202C" class="path-1" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.25 8C4.25 7.58579 4.58579 7.25 5 7.25H13C13.4142 7.25 13.75 7.58579 13.75 8C13.75 8.41421 13.4142 8.75 13 8.75H5C4.58579 8.75 4.25 8.41421 4.25 8Z"
                                                fill="#FED035" class="path-2" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.25 12C4.25 11.5858 4.58579 11.25 5 11.25H13C13.4142 11.25 13.75 11.5858 13.75 12C13.75 12.4142 13.4142 12.75 13 12.75H5C4.58579 12.75 4.25 12.4142 4.25 12Z"
                                                fill="#FED035" class="path-2" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.25 16C4.25 15.5858 4.58579 15.25 5 15.25H9C9.41421 15.25 9.75 15.5858 9.75 16C9.75 16.4142 9.41421 16.75 9 16.75H5C4.58579 16.75 4.25 16.4142 4.25 16Z"
                                                fill="#FED035" class="path-2" />
                                            <path
                                                d="M11 0H7C5.89543 0 5 0.895431 5 2C5 3.10457 5.89543 4 7 4H11C12.1046 4 13 3.10457 13 2C13 0.895431 12.1046 0 11 0Z"
                                                fill="#FED035" class="path-2" />
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            <li class="item px-[43px] py-[11px]">
                                <a href="{{ route('notification') }}">
                                    <span class="item-ico">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8 18C9.38503 18 10.5633 17.1652 11 16H5C5.43668 17.1652 6.61497 18 8 18Z"
                                                fill="#FED035" class="path-2" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M9.6896 0.754028C9.27403 0.291157 8.67102 0 8 0C6.74634 0 5.73005 1.01629 5.73005 2.26995V2.37366C3.58766 3.10719 2.0016 4.85063 1.76046 6.97519L1.31328 10.9153C1.23274 11.6249 0.933441 12.3016 0.447786 12.8721C-0.649243 14.1609 0.394434 16 2.22281 16H13.7772C15.6056 16 16.6492 14.1609 15.5522 12.8721C15.0666 12.3016 14.7673 11.6249 14.6867 10.9153L14.2395 6.97519C14.2333 6.92024 14.2262 6.86556 14.2181 6.81113C13.8341 6.93379 13.4248 7 13 7C10.7909 7 9 5.20914 9 3C9 2.16744 9.25436 1.3943 9.6896 0.754028Z"
                                                fill="#1A202C" class="path-1" />
                                            <circle cx="13" cy="3" r="3" fill="#FED035"
                                                class="path-2" />
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            <li class="item px-[43px] py-[11px]">
                                <x-dropdown-link :href="route('profile.edit')">
                                    <span class="item-ico">
                                        <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="7" cy="14" rx="7" ry="4"
                                                class="path-1" fill="#1A202C" />
                                            <circle cx="7" cy="4" r="4" fill="#FED035"
                                                class="path-2" />
                                        </svg>
                                    </span>
                                </x-dropdown-link>
                            </li>
                        </ul>
                    </div>
                    <div class="item-wrapper mb-5">
                        <ul class="mt-2.5 flex flex-col items-center justify-center">
                            <li class="item px-[43px] py-[11px]">
                                <a href="{{ route('support') }}">
                                    <span class="item-ico">
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5 2V11C5 12.1046 5.89543 13 7 13H18C19.1046 13 20 12.1046 20 11V2C20 0.895431 19.1046 0 18 0H7C5.89543 0 5 0.89543 5 2Z"
                                                fill="#1A202C" class="path-1" />
                                            <path
                                                d="M0 15C0 13.8954 0.895431 13 2 13H2.17157C2.70201 13 3.21071 13.2107 3.58579 13.5858C4.36683 14.3668 5.63317 14.3668 6.41421 13.5858C6.78929 13.2107 7.29799 13 7.82843 13H8C9.10457 13 10 13.8954 10 15V16C10 17.1046 9.10457 18 8 18H2C0.89543 18 0 17.1046 0 16V15Z"
                                                fill="#FED035" class="path-2" />
                                            <path
                                                d="M7.5 9.5C7.5 10.8807 6.38071 12 5 12C3.61929 12 2.5 10.8807 2.5 9.5C2.5 8.11929 3.61929 7 5 7C6.38071 7 7.5 8.11929 7.5 9.5Z"
                                                fill="#FED035" class="path-2" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.25 4.5C8.25 4.08579 8.58579 3.75 9 3.75L16 3.75C16.4142 3.75 16.75 4.08579 16.75 4.5C16.75 4.91421 16.4142 5.25 16 5.25L9 5.25C8.58579 5.25 8.25 4.91421 8.25 4.5Z"
                                                fill="#FED035" class="path-2" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M11.25 8.5C11.25 8.08579 11.5858 7.75 12 7.75L16 7.75C16.4142 7.75 16.75 8.08579 16.75 8.5C16.75 8.91421 16.4142 9.25 16 9.25L12 9.25C11.5858 9.25 11.25 8.91421 11.25 8.5Z"
                                                fill="#FED035" class="path-2" />
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            <li class="item px-[43px] py-[11px]">
                                <a href="{{ route('setting') }}">
                                    <span class="item-ico">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.84849 0H7.15151C6.2143 0 5.45454 0.716345 5.45454 1.6C5.45454 2.61121 4.37259 3.25411 3.48444 2.77064L3.39424 2.72153C2.58258 2.27971 1.54473 2.54191 1.07612 3.30717L0.227636 4.69281C-0.240971 5.45808 0.0371217 6.43663 0.848773 6.87846C1.73734 7.36215 1.73734 8.63785 0.848771 9.12154C0.0371203 9.56337 -0.240972 10.5419 0.227635 11.3072L1.07612 12.6928C1.54473 13.4581 2.58258 13.7203 3.39424 13.2785L3.48444 13.2294C4.37259 12.7459 5.45454 13.3888 5.45454 14.4C5.45454 15.2837 6.2143 16 7.15151 16H8.84849C9.7857 16 10.5455 15.2837 10.5455 14.4C10.5455 13.3888 11.6274 12.7459 12.5156 13.2294L12.6058 13.2785C13.4174 13.7203 14.4553 13.4581 14.9239 12.6928L15.7724 11.3072C16.241 10.5419 15.9629 9.56336 15.1512 9.12153C14.2627 8.63784 14.2627 7.36216 15.1512 6.87847C15.9629 6.43664 16.241 5.45809 15.7724 4.69283L14.9239 3.30719C14.4553 2.54192 13.4174 2.27972 12.6058 2.72154L12.5156 2.77065C11.6274 3.25412 10.5455 2.61122 10.5455 1.6C10.5455 0.716344 9.7857 0 8.84849 0Z"
                                                fill="#1A202C" class="path-1" />
                                            <path
                                                d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z"
                                                fill="#FED035" class="path-2" />
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            <li class="item px-[43px] py-[11px]">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                        <span class="item-ico">
                                            <svg width="21" height="18" viewBox="0 0 21 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M17.1464 10.4394C16.8536 10.7323 16.8536 11.2072 17.1464 11.5001C17.4393 11.7929 17.9142 11.7929 18.2071 11.5001L19.5 10.2072C20.1834 9.52375 20.1834 8.41571 19.5 7.73229L18.2071 6.4394C17.9142 6.1465 17.4393 6.1465 17.1464 6.4394C16.8536 6.73229 16.8536 7.20716 17.1464 7.50006L17.8661 8.21973H11.75C11.3358 8.21973 11 8.55551 11 8.96973C11 9.38394 11.3358 9.71973 11.75 9.71973H17.8661L17.1464 10.4394Z"
                                                    fill="#FED035" class="path-2" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.75 17.75H12C14.6234 17.75 16.75 15.6234 16.75 13C16.75 12.5858 16.4142 12.25 16 12.25C15.5858 12.25 15.25 12.5858 15.25 13C15.25 14.7949 13.7949 16.25 12 16.25H8.21412C7.34758 17.1733 6.11614 17.75 4.75 17.75ZM8.21412 1.75H12C13.7949 1.75 15.25 3.20507 15.25 5C15.25 5.41421 15.5858 5.75 16 5.75C16.4142 5.75 16.75 5.41421 16.75 5C16.75 2.37665 14.6234 0.25 12 0.25H4.75C6.11614 0.25 7.34758 0.82673 8.21412 1.75Z"
                                                    fill="#1A202C" class="path-1" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0 5C0 2.37665 2.12665 0.25 4.75 0.25C7.37335 0.25 9.5 2.37665 9.5 5V13C9.5 15.6234 7.37335 17.75 4.75 17.75C2.12665 17.75 0 15.6234 0 13V5Z"
                                                    fill="#1A202C" class="path-1" />
                                            </svg>
                                        </span>
                                    </x-dropdown-link>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
