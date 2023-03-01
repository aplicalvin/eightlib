<x-admLayout>
    {{-- Title --}}
    <div class="grid gap-2 md:gap-4">
        <h1 class="text-xl md:text-3xl font-bold">Tambah Buku</h1>
        <hr />
    </div>

    <!-- Modal content -->
    <div class="relative rounded-lg shadow">
        <div class="py-6 px-6 lg:px-8">
            <!-- Formulir -->
            <form class="space-y-6" action="#">
                <!-- No Surat Asal -->
                <div>
                    <label
                        for="noSuratAsal"
                        class="block mb-2 text-sm font-medium text-stone-900"
                        >Judul Buku</label
                    >
                    <input
                        type="text"
                        name="noSuratAsal"
                        id="noSuratAsal"
                        class="bg-stone-50 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Tuliskan judul buku yang akan diinput"
                        required
                    />
                </div>

                {{-- Nomer Nomer --}}
                <div class="md:flex gap-8">
                    {{-- Tahun --}}
                    <div class="flex w-full gap-8">
                        <!-- Tahun Terbit -->
                        <div class="w-1/2">
                            <label
                                for="tglAsal"
                                class="block mb-2 text-sm font-medium text-stone-900"
                                >Tahun Terbit</label
                            >
                            <input
                                type="number"
                                min="1000"
                                max="3000"
                                name="tglAsal"
                                id="tglAsal"
                                class="bg-stone-50 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Tahun Buku ini terbit"
                                required
                            />
                        </div>
                        {{-- Tahun Masuk --}}
                        <div class="w-1/2">
                            <label
                                for="tglAsal"
                                class="block mb-2 text-sm font-medium text-stone-900"
                                >Tahun Masuk</label
                            >
                            <input
                                type="number"
                                min="1000"
                                max="3000"
                                name="tglAsal"
                                id="tglAsal"
                                class="bg-stone-50 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Tahun buku ini masuk ke perpustakaan ini"
                                required
                            />
                        </div>
                    </div>

                    {{-- Klasifikasi dan Number of Copy --}}
                    <div class="flex w-full gap-8">
                        <!-- Clasification -->
                        <div class="w-1/2">
                            <label
                                for="tglAsal"
                                class="block mb-2 text-sm font-medium text-stone-900"
                                >Nomer Klasifikasi</label
                            >
                            <input
                                type="number"
                                min="0"
                                max="1000"
                                name="tglAsal"
                                id="tglAsal"
                                class="bg-stone-50 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Nomer Klasifikasi Buku"
                                required
                            />
                        </div>
                        {{-- Number of Copy --}}
                        <div class="w-1/2">
                            <label
                                for="tglAsal"
                                class="block mb-2 text-sm font-medium text-stone-900"
                                >Number of Copy</label
                            >
                            <input
                                type="number"
                                min="0"
                                max="3000"
                                name="tglAsal"
                                id="tglAsal"
                                class="bg-stone-50 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Buku ini merupakan Copy ke-..."
                                required
                            />
                        </div>
                    </div>
                </div>

                {{-- The details about Book --}}
                <div class="grid md:flex w-full gap-4 md:gap-8">
                    <!-- Author -->
                    <div class="md:w-1/2">
                        <label
                            for="pengirim"
                            class="block mb-2 text-sm font-medium text-stone-900"
                            >Penulis</label
                        >
                        <input
                            type="text"
                            name="pengirim"
                            id="pengirim"
                            class="bg-stone-50 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Penulis Buku ini"
                            required
                        />
                    </div>

                    <!-- Publisher -->
                    <div class="md:w-1/2">
                        <label
                            for="publisher"
                            class="block mb-2 text-sm font-medium text-stone-900"
                            >Penerbit</label
                        >
                        <input
                            type="text"
                            name="perihal"
                            id="perihal"
                            class="bg-stone-50 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Penerbit Buku Ini"
                            required
                        />
                    </div>
                </div>

                <!-- Synopsis -->
                <div class="">
                    <label
                        for="synopsis"
                        class="block mb-2 text-sm font-medium text-stone-900"
                        >Sinopsis</label
                    >
                    <input
                        type="text"
                        name="synopsis"
                        id="synopsis"
                        class=" bg-stone-50 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Penerbit Buku Ini"
                        required
                    />
                </div>

                <!-- input file V1 -->
                <div>
                    <label for="input-file" class="block">
                        Upload Cover Buku
                    </label>
                    <input
                        type="file"
                        name="input-file"
                        id="input-file"
                        class="bg-stone-50 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100"
                    />
                </div>

                <!-- Button -->
                <div class="flex flex-col gap-2">
                    <button
                        type="submit"
                        class="w-full md:max-w-md text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                    >
                        Tambah Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admLayout>
