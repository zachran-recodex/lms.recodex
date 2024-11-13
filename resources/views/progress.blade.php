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
                        Progres Belajar
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
                            <h1 class="text-xl font-bold">Progres Belajar</h1>
                        </a>
                    </div>
                </div>
                @include('layouts.mobile-header')
            </div>
        </header>
    </x-slot>

    <main class="w-full px-6 pb-6 pt-[100px] sm:pt-[156px] xl:px-12 xl:pb-12">
        <div class="2xl:flex 2xl:space-x-[48px]">
            <section class="mb-6 2xl:mb-0 2xl:flex-1">
                <!-- revenue, flow -->
                <div
                    class="mb-[48px] flex w-full flex-col justify-between rounded-lg bg-white p-4 dark:bg-darkblack-600 lg:px-8 lg:py-7">
                    <div class="mb-2 flex items-center justify-between border-b border-bgray-300 pb-2">
                        <h3 class="text-xl font-bold text-bgray-900 sm:text-2xl">
                            Summary
                        </h3>
                        <div class="hidden items-center space-x-[28px] sm:flex">
                            <div class="flex items-center space-x-2">
                                <div class="h-3 w-3 rounded-full bg-success-300"></div>
                                <span class="text-sm font-medium text-bgray-700">Signed
                                </span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="h-3 w-3 rounded-full bg-orange"></div>
                                <span class="text-sm font-medium text-bgray-700">Lost
                                </span>
                            </div>
                        </div>
                        <div class="date-filter relative">
                            <button onclick="dateFilterAction('#date-filter-body')" type="button"
                                class="flex items-center space-x-1 overflow-hidden rounded-lg bg-bgray-100 px-3 py-2 dark:bg-darkblack-500">
                                <span class="text-sm font-medium text-bgray-900">Jan 10 - Jan
                                    16</span>
                                <span>
                                    <svg class="stroke-bgray-900 dark:stroke-gray-50" width="16" height="17"
                                        viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6.5L8 10.5L12 6.5" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </button>
                            <div id="date-filter-body"
                                class="absolute right-0 top-[44px] z-10 hidden overflow-hidden rounded-lg bg-white shadow-lg dark:bg-darkblack-500">
                                <ul>
                                    <li onclick="dateFilterAction('#paymentFilter')"
                                        class="text-bgray-90 cursor-pointer px-5 py-2 text-sm font-semibold hover:bg-bgray-100 hover:dark:bg-darkblack-600">
                                        Jan 10 - Jan 16
                                    </li>
                                    <li onclick="dateFilterAction('#paymentFilter')"
                                        class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 hover:dark:bg-darkblack-600">
                                        Jan 10 - Jan 16
                                    </li>
                                    <li onclick="dateFilterAction('#paymentFilter')"
                                        class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 hover:dark:bg-darkblack-600">
                                        Jan 10 - Jan 16
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <canvas id="revenueFlowLine" height="255"></canvas>
                    </div>
                </div>
                <div class="mb-[48px] w-full xl:flex xl:space-x-[24px] space-y-[48px] xl:space-y-0">
                    <!-- efficiency -->
                    <div class="flex-1 xl:block">
                        <div class="rounded-lg bg-white dark:bg-darkblack-600">
                            <div
                                class="flex items-center justify-between border-b border-bgray-300 px-[20px] py-[12px] dark:border-darkblack-400">
                                <h3 class="text-xl font-bold text-bgray-900">
                                    Efficiency
                                </h3>
                                <div class="date-filter relative">
                                    <button onclick="dateFilterAction('#month-filter')" type="button"
                                        class="flex items-center space-x-1">
                                        <span class="text-base font-semibold text-bgray-900">Monthly</span>
                                        <span>
                                            <svg class="stroke-bgray-900 dark:stroke-bgray-50" width="16"
                                                height="17" viewBox="0 0 16 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 6.5L8 10.5L12 6.5" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="month-filter"
                                        class="absolute right-0 top-5 z-10 hidden overflow-hidden rounded-lg bg-white shadow-lg dark:bg-darkblack-500">
                                        <ul>
                                            <li onclick="dateFilterAction('#month-filter')"
                                                class="text-bgray-90 cursor-pointer px-5 py-2 text-sm font-semibold hover:bg-bgray-100 hover:dark:bg-darkblack-600">
                                                January
                                            </li>
                                            <li onclick="dateFilterAction('#month-filter')"
                                                class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 hover:dark:bg-darkblack-600">
                                                February
                                            </li>

                                            <li onclick="dateFilterAction('#month-filter')"
                                                class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 hover:dark:bg-darkblack-600">
                                                March
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="px-[20px] py-[12px]">
                                <div class="mb-4 flex items-center space-x-8">
                                    <div class="relative w-[180px]">
                                        <canvas id="pie_chart" height="168"></canvas>
                                        <div class="absolute z-0 h-[34px] w-[34px] rounded-full bg-[#EDF2F7]"
                                            style="left: calc(50% - 17px); top: calc(50% - 17px);">
                                        </div>
                                    </div>
                                    <div class="counting">
                                        <div class="mb-6">
                                            <div class="flex items-center space-x-[2px]">
                                                <p class="text-lg font-bold text-success-300">
                                                    $5,230
                                                </p>
                                                <span><svg width="14" height="12" viewBox="0 0 14 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M10.7749 0.558058C10.5309 0.313981 10.1351 0.313981 9.89107 0.558058L7.39107 3.05806C7.14699 3.30214 7.14699 3.69786 7.39107 3.94194C7.63514 4.18602 8.03087 4.18602 8.27495 3.94194L9.70801 2.50888V11C9.70801 11.3452 9.98783 11.625 10.333 11.625C10.6782 11.625 10.958 11.3452 10.958 11V2.50888L12.3911 3.94194C12.6351 4.18602 13.0309 4.18602 13.2749 3.94194C13.519 3.69786 13.519 3.30214 13.2749 3.05806L10.7749 0.558058Z"
                                                            fill="#22C55E" />
                                                        <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M3.22407 11.4419C3.46815 11.686 3.86388 11.686 4.10796 11.4419L6.60796 8.94194C6.85203 8.69786 6.85203 8.30214 6.60796 8.05806C6.36388 7.81398 5.96815 7.81398 5.72407 8.05806L4.29102 9.49112L4.29101 1C4.29101 0.654823 4.01119 0.375001 3.66602 0.375001C3.32084 0.375001 3.04102 0.654823 3.04102 1L3.04102 9.49112L1.60796 8.05806C1.36388 7.81398 0.968151 7.81398 0.724074 8.05806C0.479996 8.30214 0.479996 8.69786 0.724074 8.94194L3.22407 11.4419Z"
                                                            fill="#22C55E" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <p class="text-base font-medium text-bgray-600">
                                                Arrival
                                            </p>
                                        </div>
                                        <div>
                                            <div class="flex items-center space-x-[2px]">
                                                <p class="text-lg font-bold text-bgray-900">
                                                    $6,230
                                                </p>
                                                <span>
                                                    <svg class="fill-bgray-900 dark:fill-bgray-50" width="14"
                                                        height="12" viewBox="0 0 14 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M10.7749 0.558058C10.5309 0.313981 10.1351 0.313981 9.89107 0.558058L7.39107 3.05806C7.14699 3.30214 7.14699 3.69786 7.39107 3.94194C7.63514 4.18602 8.03087 4.18602 8.27495 3.94194L9.70801 2.50888V11C9.70801 11.3452 9.98783 11.625 10.333 11.625C10.6782 11.625 10.958 11.3452 10.958 11V2.50888L12.3911 3.94194C12.6351 4.18602 13.0309 4.18602 13.2749 3.94194C13.519 3.69786 13.519 3.30214 13.2749 3.05806L10.7749 0.558058Z" />
                                                        <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M3.22407 11.4419C3.46815 11.686 3.86388 11.686 4.10796 11.4419L6.60796 8.94194C6.85203 8.69786 6.85203 8.30214 6.60796 8.05806C6.36388 7.81398 5.96815 7.81398 5.72407 8.05806L4.29102 9.49112L4.29101 1C4.29101 0.654823 4.01119 0.375001 3.66602 0.375001C3.32084 0.375001 3.04102 0.654823 3.04102 1L3.04102 9.49112L1.60796 8.05806C1.36388 7.81398 0.968151 7.81398 0.724074 8.05806C0.479996 8.30214 0.479996 8.69786 0.724074 8.94194L3.22407 11.4419Z" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <p class="text-base font-medium text-bgray-600">
                                                Spending
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="status">
                                    <div class="mb-1.5 flex items-center justify-between">
                                        <div class="flex items-center space-x-3">
                                            <div class="h-2.5 w-2.5 rounded-full bg-success-300"></div>
                                            <span class="text-sm font-medium text-bgray-600">Goal</span>
                                        </div>
                                        <p class="text-sm font-bold text-bgray-900">
                                            13%
                                        </p>
                                    </div>
                                    <div class="mb-1.5 flex items-center justify-between">
                                        <div class="flex items-center space-x-3">
                                            <div class="h-2.5 w-2.5 rounded-full bg-warning-300"></div>
                                            <span class="text-sm font-medium text-bgray-600">Spending</span>
                                        </div>
                                        <p class="text-sm font-bold text-bgray-900">
                                            28%
                                        </p>
                                    </div>
                                    <div class="mb-1.5 flex items-center justify-between">
                                        <div class="flex items-center space-x-3">
                                            <div class="h-2.5 w-2.5 rounded-full bg-bgray-200"></div>
                                            <span class="text-sm font-medium text-bgray-600">Others</span>
                                        </div>
                                        <p class="text-sm font-bold text-bgray-900">
                                            59%
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- task summary -->
                    <div class="flex-1 xl:block">
                        <div class="h-full w-full rounded-lg bg-white px-5 py-6 dark:bg-darkblack-600">
                            <div class="mb-8 flex items-center justify-between">
                                <h2 class="text-base font-bold text-bgray-900 xl:text-2xl">
                                    Task Summary
                                </h2>
                                <span>
                                    <svg width="14" height="4" viewBox="0 0 14 4" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.33317 2.66659C2.70136 2.66659 2.99984 2.36811 2.99984 1.99992C2.99984 1.63173 2.70136 1.33325 2.33317 1.33325C1.96498 1.33325 1.6665 1.63173 1.6665 1.99992C1.6665 2.36811 1.96498 2.66659 2.33317 2.66659Z"
                                            stroke="#64748B" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6.99967 2.66659C7.36786 2.66659 7.66634 2.36811 7.66634 1.99992C7.66634 1.63173 7.36786 1.33325 6.99967 1.33325C6.63148 1.33325 6.33301 1.63173 6.33301 1.99992C6.33301 2.36811 6.63148 2.66659 6.99967 2.66659Z"
                                            stroke="#64748B" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M11.6667 2.66659C12.0349 2.66659 12.3333 2.36811 12.3333 1.99992C12.3333 1.63173 12.0349 1.33325 11.6667 1.33325C11.2985 1.33325 11 1.63173 11 1.99992C11 2.36811 11.2985 2.66659 11.6667 2.66659Z"
                                            stroke="#64748B" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mb-10 flex space-x-3">
                                <div class="flex h-[128px] w-full items-center justify-center rounded-md bg-ut-400">
                                    <div>
                                        <div class="mb-3 flex justify-center">
                                            <span><svg width="40" height="40" viewBox="0 0 40 40"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle opacity="0.5" cx="20" cy="20" r="19.5"
                                                        class="stroke-white" />
                                                    <path opacity="0.4"
                                                        d="M21 16.86L21 14.3567C21 13.2506 20.1046 12.354 19 12.354L17.6667 12.354C17.2339 12.354 16.8129 12.2135 16.4667 11.9535L15.5333 11.2526C15.1871 10.9926 14.7661 10.8521 14.3333 10.8521L13 10.8521C11.8954 10.8521 11 11.7487 11 12.8547L11 16.86C11 17.966 11.8954 18.8626 13 18.8626L19 18.8626C20.1046 18.8626 21 17.966 21 16.86Z"
                                                        class="fill-white" />
                                                    <path opacity="0.4"
                                                        d="M29 28.8758L29 26.3725C29 25.2665 28.1046 24.3699 27 24.3699L25.6667 24.3699C25.2339 24.3699 24.8129 24.2294 24.4667 23.9694L23.5333 23.2684C23.1871 23.0085 22.7661 22.8679 22.3333 22.8679L21 22.8679C19.8954 22.8679 19 23.7645 19 24.8706L19 28.8758C19 29.9819 19.8954 30.8785 21 30.8785L27 30.8785C28.1046 30.8785 29 29.9819 29 28.8758Z"
                                                        class="fill-white" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M22.25 14.8572C22.25 14.4424 22.5858 14.1062 23 14.1062L25 14.1062C26.5188 14.1062 27.75 15.339 27.75 16.8598L27.75 22.3671C27.75 22.7819 27.4142 23.1181 27 23.1181C26.5858 23.1181 26.25 22.7819 26.25 22.3671L26.25 16.8598C26.25 16.1686 25.6904 15.6082 25 15.6082L23 15.6082C22.5858 15.6082 22.25 15.272 22.25 14.8572ZM13 20.1141C13.4142 20.1141 13.75 20.4504 13.75 20.8651L13.75 24.8704C13.75 25.5617 14.3096 26.1221 15 26.1221L17 26.1221C17.4142 26.1221 17.75 26.4583 17.75 26.873C17.75 27.2878 17.4142 27.624 17 27.624L15 27.624C13.4812 27.624 12.25 26.3912 12.25 24.8704L12.25 20.8651C12.25 20.4504 12.5858 20.1141 13 20.1141Z"
                                                        class="fill-white" />
                                                </svg>
                                            </span>
                                        </div>
                                        <p class="text-center text-xs text-white">
                                            Projects
                                        </p>
                                        <p class="text-center text-base font-bold text-white">
                                            40
                                        </p>
                                    </div>
                                </div>
                                <div class="flex h-[128px] w-full items-center justify-center rounded-md bg-ut-300">
                                    <div>
                                        <div class="mb-3 flex justify-center">
                                            <span><svg width="40" height="40" viewBox="0 0 40 40"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle opacity="0.5" cx="20" cy="20" r="19.5"
                                                        class="stroke-white" />
                                                    <path opacity="0.4"
                                                        d="M21 16.86L21 14.3567C21 13.2506 20.1046 12.354 19 12.354L17.6667 12.354C17.2339 12.354 16.8129 12.2135 16.4667 11.9535L15.5333 11.2526C15.1871 10.9926 14.7661 10.8521 14.3333 10.8521L13 10.8521C11.8954 10.8521 11 11.7487 11 12.8547L11 16.86C11 17.966 11.8954 18.8626 13 18.8626L19 18.8626C20.1046 18.8626 21 17.966 21 16.86Z"
                                                        class="fill-white" />
                                                    <path opacity="0.4"
                                                        d="M29 28.8758L29 26.3725C29 25.2665 28.1046 24.3699 27 24.3699L25.6667 24.3699C25.2339 24.3699 24.8129 24.2294 24.4667 23.9694L23.5333 23.2684C23.1871 23.0085 22.7661 22.8679 22.3333 22.8679L21 22.8679C19.8954 22.8679 19 23.7645 19 24.8706L19 28.8758C19 29.9819 19.8954 30.8785 21 30.8785L27 30.8785C28.1046 30.8785 29 29.9819 29 28.8758Z"
                                                        class="fill-white" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M22.25 14.8572C22.25 14.4424 22.5858 14.1062 23 14.1062L25 14.1062C26.5188 14.1062 27.75 15.339 27.75 16.8598L27.75 22.3671C27.75 22.7819 27.4142 23.1181 27 23.1181C26.5858 23.1181 26.25 22.7819 26.25 22.3671L26.25 16.8598C26.25 16.1686 25.6904 15.6082 25 15.6082L23 15.6082C22.5858 15.6082 22.25 15.272 22.25 14.8572ZM13 20.1141C13.4142 20.1141 13.75 20.4504 13.75 20.8651L13.75 24.8704C13.75 25.5617 14.3096 26.1221 15 26.1221L17 26.1221C17.4142 26.1221 17.75 26.4583 17.75 26.873C17.75 27.2878 17.4142 27.624 17 27.624L15 27.624C13.4812 27.624 12.25 26.3912 12.25 24.8704L12.25 20.8651C12.25 20.4504 12.5858 20.1141 13 20.1141Z"
                                                        class="fill-white" />
                                                </svg>
                                            </span>
                                        </div>
                                        <p class="text-center text-xs text-white">
                                            Assigned
                                        </p>
                                        <p class="text-center text-base font-bold text-white">
                                            79
                                        </p>
                                    </div>
                                </div>
                                <div class="flex h-[128px] w-full items-center justify-center rounded-md bg-bgray-50">
                                    <div>
                                        <div class="mb-3 flex justify-center">
                                            <span>
                                                <svg width="40" height="40" viewBox="0 0 40 40"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle opacity="0.5" cx="20" cy="20" r="19.5"
                                                        stroke="#fbbd14" />
                                                    <path opacity="0.4"
                                                        d="M29 25V18C29 15.7909 27.2987 14 25.2 14H22.6667C21.8445 14 21.0444 13.7193 20.3867 13.2L18.6133 11.8C17.9556 11.2807 17.1555 11 16.3333 11H13.8C11.7013 11 10 12.7909 10 15V25C10 27.2091 11.7013 29 13.8 29H25.2C27.2987 29 29 27.2091 29 25Z"
                                                        fill="#fed035" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M23.4939 18.4356C23.8056 18.7083 23.8372 19.1822 23.5645 19.4939L20.6946 22.7738C20.0779 23.4786 19.0156 23.5729 18.2843 22.9879L16.5315 21.5857C16.2081 21.3269 16.1556 20.8549 16.4144 20.5315C16.6731 20.208 17.1451 20.1556 17.4685 20.4144L19.2214 21.8166C19.3258 21.9002 19.4776 21.8867 19.5657 21.786L22.4356 18.5061C22.7084 18.1944 23.1822 18.1628 23.4939 18.4356Z"
                                                        fill="#fed035" />
                                                </svg>
                                            </span>
                                        </div>
                                        <p class="text-center text-xs text-bgray-500">
                                            Completed
                                        </p>
                                        <p class="text-center text-base font-bold text-bgray-900">
                                            40
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="mb-2 text-xs text-bgray-500">
                                    On-time Completion Rate
                                </p>
                                <div class="flex items-end space-x-4">
                                    <span class="text-2xl font-bold leading-[30px] text-bgray-900">95%</span>
                                    <span class="text-xs font-medium text-ut-300">+2,5%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </main>
</x-app-layout>
