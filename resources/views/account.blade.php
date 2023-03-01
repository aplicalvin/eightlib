<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Account | EightLib - Library Schools Apps</title>
        <link
            rel="shortcut icon"
            href="{{ asset('asset/logoFixed.png') }}"
            type="image/x-icon"
        />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('asset/css/suplement.css') }}" />
        <link
            rel="stylesheet"
            href="{{ asset('asset/css/swiper-bundle.min.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('asset/css/admSuplement.css') }}"
        />
    </head>
    <body>
        <!-- Logout Modal -->
        <div
            id="logout-modal"
            tabindex="-1"
            aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full bg-opacity-20"
        >
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
                        <span class="sr-only">Close modal</span>
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

        {{-- This is Account --}}
        <x-navbarUtama></x-navbarUtama>
        <div class="grid md:flex w-full h-screen">
            <div class="grid w-full gap-32 px-4 pt-3 pb-8 md:px-6 md:py-8">
                <div class="max-w-7xl ml-4 sm:ml-8 md:ml-12">
                    <div class="flex w-full">
                        <div class="mb-4 w-full">
                            <h1
                                class="text-3xl md:text-4xl font-bold text-stone-900"
                            >
                                Febriola Sinambela
                            </h1>
                            <p class="text-md md:text-lg text-stone-500">
                                User 9622
                            </p>
                            <hr />
                        </div>
                        <div class=" ">
                            {{-- Logout Button --}}
                            <a
                                data-modal-toggle="logout-modal"
                                href="#"
                                class="my-auto flex items-center p-3 text-base font-normal text-stone-900 rounded-full hover:bg-indigo-700 hover:text-stone-50"
                            >
                                <svg
                                    aria-hidden="true"
                                    class="flex-shrink-0 w-6 h-6"
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
                            </a>
                        </div>
                        {{-- Logout Button ends here --}}
                    </div>

                    {{-- List Buku yang anda --}}
                    <div class="grid gap-4">
                        <div>
                            <h1
                                class="text-xl md:text-2xl font-bold text-stone-900"
                            >
                                Buku yang Anda Pinjam
                            </h1>
                        </div>
                        <div
                            class="container mx-auto py-6 px-4"
                            x-data="datatables()"
                            x-cloak
                        >
                            <!-- popup Row Selected -->
                            <div
                                x-show="selectedRows.length"
                                class="bg-indigo-100 fixed top-0 left-0 right-0 z-40 w-full shadow"
                            >
                                <div class="container mx-auto px-4 py-4">
                                    <div class="flex md:items-center">
                                        <div class="mr-4 flex-shrink-0">
                                            <svg
                                                class="h-8 w-8 text-indigo-600"
                                                viewBox="0 0 20 20"
                                                fill="currentColor"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                    clip-rule="evenodd"
                                                />
                                            </svg>
                                        </div>
                                        <div
                                            x-html="selectedRows.length + ' rows are selected'"
                                            class="text-indigo-800 text-lg"
                                        ></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Kolom paling atas (search, filter) -->
                            <div
                                class="mb-4 flex justify-between items-center gap-4"
                            >
                                <div class="flex-1 pr-4">
                                    <div class="relative md:w-1/3">
                                        <input
                                            type="search"
                                            class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-stone-600 font-medium border-none"
                                            placeholder="Cari Buku Anda disini!"
                                        />
                                        <!-- KOlom SEarch -->
                                        <div
                                            class="absolute top-0 left-0 inline-flex items-center p-2"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="w-6 h-6 text-stone-400"
                                                viewBox="0 0 24 24"
                                                stroke-width="2"
                                                stroke="currentColor"
                                                fill="none"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <rect
                                                    x="0"
                                                    y="0"
                                                    width="24"
                                                    height="24"
                                                    stroke="none"
                                                ></rect>
                                                <circle cx="10" cy="10" r="7" />
                                                <line
                                                    x1="21"
                                                    y1="21"
                                                    x2="15"
                                                    y2="15"
                                                />
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tambah -->
                                <div>
                                    <div
                                        data-modal-toggle="add-data-modal"
                                        class="shadow  flex bg-indigo-700 text-white rounded-md"
                                    >
                                        <span
                                            class="text-slate-100 px-3 py-3 flex items-center"
                                        >
                                            <button
                                                href=""
                                                class="inline-flex gap-2"
                                                type="button"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24"
                                                    fill="currentColor"
                                                    class="w-4 h-2/5 my-auto"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M12 2.25a.75.75 0 01.75.75v8.25H21a.75.75 0 010 1.5h-8.25V21a.75.75 0 01-1.5 0v-8.25H3a.75.75 0 010-1.5h8.25V3a.75.75 0 01.75-.75z"
                                                        clip-rule="evenodd"
                                                    />
                                                </svg>

                                                <p
                                                    class="hidden md:block text-sm"
                                                >
                                                    Tambah Data
                                                </p>
                                            </button>
                                        </span>
                                    </div>
                                </div>

                                <!-- Filter -->
                                <div>
                                    <div class="shadow rounded-lg flex">
                                        <div class="relative">
                                            <button
                                                @click.prevent="open = !open"
                                                class="rounded-lg inline-flex items-center bg-white hover:text-slate-700 focus:outline-none focus:shadow-outline text-stone-500 font-semibold py-2 px-2 md:px-4"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="w-6 h-6 md:hidden"
                                                    viewBox="0 0 24 24"
                                                    stroke-width="2"
                                                    stroke="currentColor"
                                                    fill="none"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                >
                                                    <rect
                                                        x="0"
                                                        y="0"
                                                        width="24"
                                                        height="24"
                                                        stroke="none"
                                                    ></rect>
                                                    <path
                                                        d="M5.5 5h13a1 1 0 0 1 0.5 1.5L14 12L14 19L10 16L10 12L5 6.5a1 1 0 0 1 0.5 -1.5"
                                                    />
                                                </svg>
                                                <span class="hidden md:block"
                                                    >Display</span
                                                >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="w-5 h-5 ml-1"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    stroke-width="2"
                                                    stroke="currentColor"
                                                    fill="none"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                >
                                                    <rect
                                                        x="0"
                                                        y="0"
                                                        width="24"
                                                        height="24"
                                                        stroke="none"
                                                    ></rect>
                                                    <polyline
                                                        points="6 9 12 15 18 9"
                                                    />
                                                </svg>
                                            </button>

                                            <div
                                                x-show="open"
                                                @click.away="open = false"
                                                class="z-40 absolute top-0 right-0 w-40 bg-white rounded-lg shadow-lg mt-12 -mr-1 block py-1 overflow-hidden"
                                            >
                                                <template
                                                    x-for="heading in headings"
                                                >
                                                    <label
                                                        class="flex justify-start items-center text-truncate hover:bg-stone-100 px-4 py-2"
                                                    >
                                                        <div
                                                            class="text-indigo-600 mr-3"
                                                        >
                                                            <input
                                                                type="checkbox"
                                                                class="form-checkbox focus:outline-none focus:shadow-outline"
                                                                checked
                                                                @click="toggleColumn(heading.key)"
                                                            />
                                                        </div>
                                                        <div
                                                            class="select-none text-stone-700"
                                                            x-text="heading.value"
                                                        ></div>
                                                    </label>
                                                </template>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Table -->
                            <div
                                class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative"
                            >
                                <table
                                    class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative"
                                >
                                    <!-- Table Heading - Judul ygy -->
                                    <thead>
                                        <tr class="text-left">
                                            <th
                                                class="py-2 px-2 sticky top-0 border-b border-stone-200 bg-stone-100"
                                            >
                                                <label
                                                    class="text-indigo-500 inline-flex justify-between items-center hover:bg-stone-200 px-2 py-2 rounded-lg cursor-pointer"
                                                >
                                                    <input
                                                        type="checkbox"
                                                        class="form-checkbox focus:outline-none focus:shadow-outline"
                                                        @click="selectAllCheckbox($event);"
                                                    />
                                                </label>
                                            </th>
                                            <template
                                                x-for="heading in headings"
                                            >
                                                <th
                                                    class="bg-stone-100 sticky top-0 border-b border-stone-200 px-3 py-2 text-stone-600 font-bold tracking-custom uppercase text-xs"
                                                    x-text="heading.value"
                                                    :x-ref="heading.key"
                                                    :class="{ [heading.key]: true }"
                                                ></th>
                                            </template>
                                        </tr>
                                    </thead>
                                    <!-- Table Body -->
                                    <tbody>
                                        <template
                                            x-for="user in users"
                                            :key="user.name"
                                        >
                                            <tr>
                                                <td
                                                    class="border-dashed border-t border-stone-200 px-2"
                                                >
                                                    <label
                                                        class="text-indigo-500 inline-flex justify-between items-center hover:bg-stone-200 px-2 py-2 rounded-lg cursor-pointer"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="form-checkbox rowCheckbox focus:outline-none focus:shadow-outline"
                                                            :name="user.name"
                                                            @click="getRowDetail($event, user.name)"
                                                        />
                                                    </label>
                                                </td>

                                                <!-- bookCode -->
                                                <td
                                                    class="border-dashed border-t border-stone-200 role"
                                                >
                                                    <span
                                                        class="text-stone-700 px-3 py-3 flex items-center"
                                                        x-text="user.bookCode"
                                                    ></span>
                                                </td>

                                                <!-- bookTitle -->
                                                <td
                                                    class="border-dashed border-t border-stone-200"
                                                >
                                                    <span
                                                        class="text-stone-700 px-3 py-3 flex items-center"
                                                        x-text="user.booksTitle"
                                                    ></span>
                                                </td>

                                                <!-- Kembalikan buku -->
                                                <td
                                                    class="flex border-dashed border-t border-stone-200 blankSpace"
                                                >
                                                    <span
                                                        class="text-stone-700 px-3 py-3 flex items-center"
                                                    >
                                                        <a
                                                            href="#"
                                                            class="flex gap-2 content-center text-stone-100 bg-green-700 hover:bg-green-800 px-2.5 py-1 rounded-md"
                                                            type="button"
                                                        >
                                                            <svg
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
                                                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                                                />
                                                            </svg>
                                                            <span class="hidden md:flex my-auto">
                                                                Kembalikan
                                                            </span>
                                                        </a>
                                                    </span>
                                                </td>
                                            </tr>
                                        </template>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <script>
                            function datatables() {
                                return {
                                    headings: [
                                        {
                                            key: "bookCode",
                                            value: "Kode Buku",
                                        },
                                        {
                                            key: "booksTitle",
                                            value: "Judul",
                                        },
                                    ],
                                    users: [
                                        {
                                            number: "196143",
                                            name: "Febriolla Sinambela",
                                            booksTitle: "Cara meminum Ramune",
                                            bookCode: "813 jkt 2020 c.2",
                                        },
                                    ],
                                    selectedRows: [],

                                    open: false,

                                    toggleColumn(key) {
                                        // Note: All td must have the same class name as the headings key!
                                        let columns = document.querySelectorAll(
                                            "." + key
                                        );

                                        if (
                                            this.$refs[key].classList.contains(
                                                "hidden"
                                            ) &&
                                            this.$refs[key].classList.contains(
                                                key
                                            )
                                        ) {
                                            columns.forEach((column) => {
                                                column.classList.remove(
                                                    "hidden"
                                                );
                                            });
                                        } else {
                                            columns.forEach((column) => {
                                                column.classList.add("hidden");
                                            });
                                        }
                                    },

                                    getRowDetail($event, id) {
                                        let rows = this.selectedRows;

                                        if (rows.includes(id)) {
                                            let index = rows.indexOf(id);
                                            rows.splice(index, 1);
                                        } else {
                                            rows.push(id);
                                        }
                                    },

                                    selectAllCheckbox($event) {
                                        let columns =
                                            document.querySelectorAll(
                                                ".rowCheckbox"
                                            );

                                        this.selectedRows = [];

                                        if ($event.target.checked == true) {
                                            columns.forEach((column) => {
                                                column.checked = true;
                                                this.selectedRows.push(
                                                    parseInt(column.name)
                                                );
                                            });
                                        } else {
                                            columns.forEach((column) => {
                                                column.checked = false;
                                            });
                                            this.selectedRows = [];
                                        }
                                    },
                                };
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>

        {{-- JavaScript Files --}}
        <script src="{{ asset('asset/js/flowbite.min.js') }}"></script>
        <script src="{{ asset('asset/js/alpine.js') }}" defer></script>
    </body>
</html>
