<nav
    class="bg-indigo-100 border-stone-200 px-2 sm:px-4 py-2.5 rounded"
>
    <div class="container flex flex-wrap items-center justify-between mx-auto">
    <a href="/" class="flex items-center">
        <img src="{{asset('asset/logoFixed.png')}}" class="h-6 mr-3 sm:h-9" alt="Logo" />
        <span class="self-center text-xl font-semibold text-indigo-700 whitespace-nowrap">EightLib</span>
    </a>
        <div class="flex md:order-2">
            <button
                type="button"
                data-collapse-toggle="navbar-search"
                aria-controls="navbar-search"
                aria-expanded="false"
                class="md:hidden text-stone-500 focus:outline-none focus:ring-4 focus:ring-stone-200  rounded-lg text-sm p-2.5 mr-1"
            >
                <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
                <span class="sr-only">Search</span>
            </button>
            <div class="relative hidden md:block">
                <div
                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                >
                    <svg
                        class="w-5 h-5 text-stone-500"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                    <span class="sr-only">Search icon</span>
                </div>
                <input
                    type="text"
                    id="search-navbar"
                    class="block w-full p-2 pl-10 text-sm text-stone-900 border border-stone-300 rounded-lg bg-stone-50 focus:ring-indigo-100 focus:border-indigo-100"
                    placeholder="Search..."
                />
            </div>
            <button
                data-collapse-toggle="navbar-search"
                type="button"
                class="inline-flex items-center p-2 text-sm text-stone-500 rounded-lg md:hidden hover:bg-stone-100 focus:outline-none focus:ring-2 focus:ring-stone-200"
                aria-controls="navbar-search"
                aria-expanded="false"
            >
                <span class="sr-only">Open menu</span>
                <svg
                    class="w-6 h-6"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
            </button>
        </div>
        <div
            class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
            id="navbar-search"
        >
            <div class="relative mt-3 md:hidden">
                <div
                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                >
                    <svg
                        class="w-5 h-5 text-stone-500"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </div>
                <input
                    type="text"
                    id="search-navbar"
                    class="block w-full p-2 pl-10 text-sm text-stone-900 border border-stone-300 rounded-lg bg-stone-50 focus:ring-indigo-100 focus:border-indigo-100"
                    placeholder="Search..."
                />
            </div>
            <ul
                class="flex flex-col p-4 mt-4 border border-stone-100 rounded-lg bg-stone-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-inherit"
            >
                <li>
                    <a
                        href="/"
                        class="block py-2 pl-3 pr-4 text-white bg-indigo-700 rounded md:bg-transparent md:text-indigo-700 md:p-0"
                        aria-current="page"
                        >Home</a
                    >
                </li>
                <li>
                    <a
                        href="/about"
                        class="block py-2 pl-3 pr-4 text-stone-700 rounded hover:bg-stone-100 md:hover:bg-transparent md:hover:text-indigo-700 md:p-0"
                        >Tentang</a
                    >
                </li>
                <li>
                    <a
                        href="/account"
                        class="block py-2 pl-3 pr-4 text-stone-700 rounded hover:bg-stone-100 md:hover:bg-transparent md:hover:text-indigo-700 md:p-0"
                        >Akun Saya</a
                    >
                </li>
            </ul>
        </div>
    </div>
</nav>
