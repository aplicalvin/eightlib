<div class="flex justify-center">
            <form class="flex items-center w-full max-w-2xl">
                <label for="voice-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div
                        class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                    >
                        <svg
                            aria-hidden="true"
                            class="w-5 h-5 text-stone-500"
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
                        id="voice-search"
                        class="bg-stone-50 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 p-2.5"
                        placeholder="Cari buku yang anda cari, disini!"
                        requiindigo
                    />
                    <button
                        type="button"
                        class="absolute inset-y-0 right-0 flex items-center pr-3"
                    >
                        <svg
                            aria-hidden="true"
                            class="w-4 h-4 text-stone-500 hover:text-stone-900"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M7 4a3 3 0 016 0v4a3 3 0 11-6 0V4zm4 10.93A7.001 7.001 0 0017 8a1 1 0 10-2 0A5 5 0 015 8a1 1 0 00-2 0 7.001 7.001 0 006 6.93V17H6a1 1 0 100 2h8a1 1 0 100-2h-3v-2.07z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </button>
                </div>
                <button
                    type="submit"
                    class="inline-flex py-2.5 px-3 ml-2 text-sm font-medium text-white bg-indigo-600 rounded-lg border border-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300"
                >
                    <svg
                        aria-hidden="true"
                        class="w-5 h-5 mr-2 -ml-1 md:hidden"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                        ></path>
                    </svg>
                    <p class="hidden md:flex">Search</p>
                </button>
            </form>
        </div>