<x-admLayout>
    {{-- Title --}}
    <div class="grid gap-2 md:gap-4">
        <h1 class="text-xl md:text-3xl font-bold">Edit Data Anggota</h1>
        <hr />
    </div>

        <!-- Modal content -->
    <div class="relative rounded-lg shadow">
        <div class="py-6 px-6 lg:px-8">

            <!-- Formulir -->
            <form class="space-y-6" action="#">
                <!-- NAMA USER -->
                <div>
                    <label
                        for="name"
                        class="block mb-2 text-sm font-medium text-stone-900"
                        >Nama Lengkap</label
                    >
                    <input
                        type="text"
                        name="name"
                        id="name"
                        class="bg-stone-50 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Febriolla Sinambela"
                        required
                    />
                </div>

                <!-- username -->
                <div>
                    <label
                        for="number"
                        class="block mb-2 text-sm font-medium text-stone-900"
                        >Username</label
                    >
                    <input
                        type="text"
                        name="number"
                        id="number"
                        class="bg-stone-50 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="19614"
                        required
                    />
                </div>

                <!-- role -->
                <div>
                    <label
                        for="role"
                        class="block mb-2 text-sm font-medium text-stone-900"
                        >role</label
                    >
                    <select name="role" id="role" class="bg-stone-50 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="pengunjung">Pengunjung</option>
                        <option value="pustakawan">pustakawan</option>
                    </select>

                </div>

                <!-- Button -->
                <div class="flex md: gap-2">
                    {{-- Danger Zone --}}
                    <button
                        type="button"
                        class="w-full text-red-800 hover:text-white hover:font-bold bg-red-100 border-red-700 border-2 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg text-sm px-5 py-2.5 text-center"
                    >
                        Hapus Data
                    </button>

                    <button
                        type="submit"
                        class="w-full text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                    >
                        Edit Data
                    </button>


                </div>
            </form>
        </div>
    </div>

    
</x-admLayout>
