{{-- Responsive Sidebar --}}
<button
    data-drawer-target="logo-sidebar"
    data-drawer-toggle="logo-sidebar"
    aria-controls="logo-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-stone-500 rounded-lg md:hidden hover:bg-indigo-700 hover:text-stone-100 focus:outline-none focus:ring-2 focus:ring-stone-200"
>
    <span class="sr-only">Open sidebar</span>
    <svg
        class="w-6 h-6"
        aria-hidden="true"
        fill="currentColor"
        viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg"
    >
        <path
            clip-rule="evenodd"
            fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
        ></path>
    </svg>
</button>

{{-- Logout Modal --}}

<!-- Logout Modal -->

<div
    id="logout-modal"
    tabindex="-1"
    aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full bg-opacity-20">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-slate-50 rounded-lg shadow">
            <button
                type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                data-modal-toggle="logout-modal"
            >
                <svg
                    aria-hidden="true"
                    class="w-5 h-5"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
                <span class="sr-only cekbang">Close modal</span>
            </button>
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-slate-900">
                    Anda yakin ingin Keluar?
                </h3>
                <!-- Formulir -->
                <form class="space-y-6" action="#">
                    <div class="flex gap-2">
                        <!-- Tidak -->
                        <button
                            type="button"
                            class="w-full text-white bg-red-700 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                        >
                            Tidak
                        </button>

                        <!-- Ya -->
                        <button
                            type="button"
                            class="w-full text-slate-700 bg-white hover:bg-red-600 hover:text-white hover:border-none border-red-300 border-2 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                        >
                            Ya
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<aside
    id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-indigo-50">
        <a href="/admin/dashboard" class="flex items-center pl-2.5 mb-5">
            <img
                src="{{ asset('asset/logoFixed.png') }}"
                class="h-6 mr-3 sm:h-7"
                alt="Logo"
            />
            <span
                class="self-center text-xl font-semibold whitespace-nowrap text-stone-800"
                >Admin Panel</span
            >
        </a>
        <ul class="grid gap-4">
            {{-- Dashboard --}}
            <li>
                <a
                    href="/admin/dashboard"
                    class="flex items-center p-2 text-base font-normal text-stone-900 rounded-lg hover:bg-indigo-700 hover:text-stone-100"
                >
                    <svg
                        aria-hidden="true"
                        class="w-6 h-6 text-stone-500 transition duration-75 hover:text-stone-100"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path
                            d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"
                        ></path>
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            {{-- UserList --}}
            <li>
                <a
                    href="/admin/userlist"
                    class="flex items-center p-2 text-base font-normal text-stone-900 rounded-lg hover:bg-indigo-700 hover:text-stone-100"
                >
                    <svg
                        aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-stone-500 transition duration-75 group-hover:text-stone-900"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap"
                        >Daftar User</span
                    >
                </a>
            </li>
            {{-- ListBook --}}
            <li>
                <a
                    href="/admin/listbook"
                    class="flex items-center p-2 text-base font-normal text-stone-900 rounded-lg hover:bg-indigo-700 hover:text-stone-100"
                >
                    <svg
                        aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-stone-500 transition duration-75 group-hover:text-stone-900"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                        ></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap"
                        >Daftar Buku</span
                    >
                    <span
                        class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-stone-800 bg-stone-200 rounded-full"
                        >Utama</span
                    >
                </a>
            </li>
            {{-- Confirm --}}
            <li>
                <a
                    href="/admin/confirm"
                    class="flex items-center p-2 text-base font-normal text-stone-900 rounded-lg hover:bg-indigo-700 hover:text-stone-100"
                >
                    <svg
                        aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-stone-500 transition duration-75 group-hover:text-stone-900"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"
                        ></path>
                        <path
                            d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"
                        ></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap"
                        >Konfirmasi</span
                    >
                    <span
                        class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full"
                        >3</span
                    >
                </a>
            </li>

            {{-- Complete --}}
            <li>
                <a
                    href="/admin/complete"
                    class="flex items-center p-2 text-base font-normal text-stone-900 rounded-lg hover:bg-indigo-700 hover:text-stone-100"
                >
                    <svg
                        aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-stone-500 transition duration-75 group-hover:text-stone-900"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"
                        ></path>
                        <path
                            d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"
                        ></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Selesai</span>
                    <span
                        class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full"
                        >3</span
                    >
                </a>
            </li>

            {{-- Deskripsi --}}
            <li>
                <a
                    href="/admin/desc"
                    class="flex items-center p-2 text-base font-normal text-stone-900 rounded-lg hover:bg-indigo-700 hover:text-stone-100"
                >
                    <svg
                        aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-stone-500 transition duration-75 group-hover:text-stone-900"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap"
                        >Description</span
                    >
                </a>
            </li>
            {{-- View Website --}}
            <li>
                <a
                    href="/"
                    target="_blank"
                    class="flex items-center p-2 text-base font-normal text-stone-900 rounded-lg hover:bg-indigo-700 hover:text-stone-100"
                >
                    <svg
                        aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-stone-500 transition duration-75 group-hover:text-stone-900"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap"
                        >View Website</span
                    >
                </a>
            </li>
            {{-- Log Out --}}
            <li>
                <a
                    data-modal-toggle="logout-modal"
                    href="#"
                    class="flex items-center p-2 text-base font-normal text-stone-900 rounded-lg hover:bg-indigo-700 hover:text-stone-100">
                    <svg
                        aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-stone-500 transition duration-75 group-hover:text-stone-100"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9"
                        />
                    </svg>

                    <span class="flex-1 ml-3 whitespace-nowrap">Log Out</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<div class="p-4 sm:ml-64">
    {{ $slot }}
</div>
