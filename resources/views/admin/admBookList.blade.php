<x-admLayout>
    {{-- Title --}}
    <div class="grid gap-2 md:gap-4">
        <h1 class="text-xl md:text-3xl font-bold">Daftar Buku</h1>
        <hr />
    </div>
    <div>
        <div class="container mx-auto py-6 px-4" x-data="datatables()" x-cloak>
            <!-- popup Row Selected -->
            <div x-show="selectedRows.length" class="bg-indigo-100 fixed top-0 left-0 right-0 z-40 w-full shadow">
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
            <div class="mb-4 flex justify-between items-center gap-4">
                <div class="flex-1 pr-4">
                    <div class="relative md:w-1/3">
                        <input
                            type="search"
                            class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-stone-600 font-medium border-none"
                            placeholder="Cari User disini..."
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
                                <line x1="21" y1="21" x2="15" y2="15" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Tambah -->
                <div>
                    <a
                        href="/admin/listbook/create"
                        {{-- data-modal-toggle="add-data-modal" --}}
                        class="shadow rounded-lg flex bg-indigo-700 text-white"
                    >
                        <span
                            class="text-stone-100 px-3 py-3 flex items-center"
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

                                <p class="hidden md:block text-sm">
                                    Tambah Data
                                </p>
                            </button>
                        </span>
                    </a>
                </div>

                <!-- Filter -->
                <div>
                    <div class="shadow rounded-lg flex">
                        <div class="relative">
                            <button
                                @click.prevent="open = !open"
                                class="rounded-lg inline-flex items-center bg-white hover:text-stone-700 focus:outline-none focus:shadow-outline text-stone-500 font-semibold py-2 px-2 md:px-4"
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
                                <span class="hidden md:block">Display</span>
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
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </button>

                            <div
                                x-show="open"
                                @click.away="open = false"
                                class="z-40 absolute top-0 right-0 w-40 bg-white rounded-lg shadow-lg mt-12 -mr-1 block py-1 overflow-hidden"
                            >
                                <template x-for="heading in headings">
                                    <label
                                        class="flex justify-start items-center text-truncate hover:bg-stone-100 px-4 py-2"
                                    >
                                        <div class="text-indigo-600 mr-3">
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
            <div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative">
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
                            <template x-for="heading in headings">
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
                        <template x-for="user in users" :key="user.clasification">
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
                                            :name="user.clasification"
                                            @click="getRowDetail($event, user.clasification)"
                                        />
                                    </label>
                                </td>

                                <!-- No klasifikasi -->
                                <td
                                    class="border-dashed border-t border-stone-200 name">
                                    <span
                                        class="text-stone-700 px-3 py-3 flex items-center"
                                        x-text="user.clasification"
                                    ></span>
                                </td>

                                <!-- Author -->
                                <td
                                    class="border-dashed border-t border-stone-200 number">
                                    <span
                                        class="text-stone-700 px-3 py-3 flex items-center"
                                        x-text="user.author"
                                    ></span>
                                </td>

                                <!-- yearOfPublication -->
                                <td
                                    class="border-dashed border-t border-stone-200 role">
                                    <span
                                        class="text-stone-700 px-3 py-3 flex items-center"
                                        x-text="user.yearOfPublication"
                                    ></span>
                                </td>

                                <!-- numberOfCopy -->
                                <td class="border-dashed border-t border-stone-200 emailAddress">
                                    <span
                                        class="text-stone-700 px-3 py-3 flex items-center"
                                        x-text="user.numberOfCopy"
                                    ></span>
								</td>

                                <!-- Publisher -->
                                <td
                                    class="border-dashed border-t border-stone-200 number">
                                    <span
                                        class="text-stone-700 px-3 py-3 flex items-center"
                                        x-text="user.publisher"
                                    ></span>
                                </td>

                                <!-- Title -->
                                <td
                                    class="border-dashed border-t border-stone-200 perihal">
                                    <span
                                        class="text-stone-700 px-3 py-3 flex items-center"
                                        x-text="user.booksTitle"
                                    ></span>
                                </td>

                                <!-- yearAdded -->
                                <td class="border-dashed border-t border-stone-200 emailAddress">
                                    <span
                                        class="text-stone-700 px-3 py-3 flex items-center"
                                        x-text="user.yearAdded"
                                    ></span>
								</td>

                                <!-- Edit - Popup Modal -->
                                <td
                                    class="border-dashed border-t border-stone-200 blankSpace"
                                >
                                    <span
                                        class="text-stone-700 px-3 py-3 flex items-center"
                                    >
                                        <a
                                            href="/admin/listbook/edit"
                                            class="hover:underline text-blue-600"
                                            type="button"
                                        >
                                            edit
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
                            key: "clasification",
                            value: "No. Klas.",
                        },
                        {
                            key: "author",
                            value: "Penulis",
                        },
                        {
                            key: "yearOfPublication",
                            value: "THN. Terbit",
                        },
                        {
                            key: "numberOfCopy",
                            value: "Copy",
                        },
                        {
                            key: "publisher",
                            value: "penerbit",
                        },
                        {
                            key: "booksTitle",
                            value: "Judul",
                        },
                        {
                        	key: "yearAdded",
                        	value: "Thn Masuk",
                        },
                    ],
                    users: [
                        {
                            clasification: "813",
                            author: "Tere Liye",
                            yearOfPublication: "2019",
                            numberOfCopy: "c.3",
                            publisher: "Gramedia",
                            booksTitle: "Sebuah Seni Untuk Bersikap BODOAMAT",
                            yearAdded: "2023",
                            blankSpace: "edit",
                        },

                    ],
                    selectedRows: [],

                    open: false,

                    toggleColumn(key) {
                        // Note: All td must have the same class name as the headings key!
                        let columns = document.querySelectorAll("." + key);

                        if (
                            this.$refs[key].classList.contains("hidden") &&
                            this.$refs[key].classList.contains(key)
                        ) {
                            columns.forEach((column) => {
                                column.classList.remove("hidden");
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
                        let columns = document.querySelectorAll(".rowCheckbox");

                        this.selectedRows = [];

                        if ($event.target.checked == true) {
                            columns.forEach((column) => {
                                column.checked = true;
                                this.selectedRows.push(parseInt(column.name));
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
</x-admLayout>
