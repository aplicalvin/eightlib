<x-navbarUtama></x-navbarUtama>
<x-layout>
    <div class="grid lg:flex my-8 max-w-7xl mx-auto">
        <div class="w-full lg:w-1/3 p-8 sm:p-16 md:p-4">
            <img
                src="{{ asset('asset/dummy/bookImage.png') }}"
                class="w-full object-cover object-center rounded-3xl"
                alt=""
            />
        </div>
        <div class="grid h-fit w-full lg:w-3/5 p-8 gap-4">
            <div class="grid gap-2">
                <h1 class="font-extrabold text-2xl md:text-4xl"> 
                    Sebuah Seni untuk bersikap BODOAMAT
                </h1>
                <div class="flex w-fit gap-1 font-thin text-sm bg-indigo-700 rounded-sm px-2 py-0 text-stone-50">
                    <p class="font-thin text-base">813</p>
                    <p class="font-thin text-base">ter</p>
                    <p class="font-thin text-base">2018</p>
                    <p class="font-thin text-base">c.1</p>
                </div>
                <hr />
                <p class="text-sm md:text-base">Penulis : Tere Liye</p>
                <p class="text-sm md:text-base">Penerbit : Penerbit Simbolon</p>
                <p class="text-sm md:text-base">Tahun Terbit : 2018</p>
                <p class="text-sm md:text-base">Number Of Copy : C.4</p>

            </div>
            <hr />
            <div class="grid gap-4 h-fit">
                <div class="grid gap-2">
                    <h4 class="text-sm md:text-xl font-bold">Sinopsis</h4>
                    <p class="text-sm md:text-base">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Consectetur ipsam recusandae nulla laboriosam iusto
                        magni harum voluptatibus ab, quos sequi vitae hic
                        tempore earum error maiores, officiis pariatur, commodi
                        ipsum quam nihil cumque dolores. Voluptas magni error
                        nam cumque inventore eveniet aliquid repellendus quidem
                        neque tempora rem corrupti, animi atque.
                    </p>
                </div>
            </div>
            <div class="grid w-full h-fit">
                <a
                    href="/pinjam"
                    class="text-center bg-indigo-700 hover:bg-indigo-800 w-full py-2 text-white font-bold rounded-md md:max-w-sm"
                    >Pinjam Sekarang</a
                >
            </div>
        </div>
    </div>
</x-layout>
