<x-navbarWithSearch></x-navbarWithSearch>
<x-layout>
    <div class="my-10">
        {{--
        <h1 class="text-center text-2xl font-bold">Hello, World</h1>
        --}}
        {{-- Search Bar --}}
        <x-searchBar></x-searchBar>
        
        {{-- grid ml-8 sm:ml-16 lg:mx-auto mb-16 max-w-7xl gap-8 --}}
        <div class="max-w-7xl ml-4 sm:ml-8 md:ml-12 lg:mx-auto my-12  gap-4">
            <div class="swiper mySwiper mb-8">
                <h1 class="text-3xl font-bold my-4 text-neutral-800">Buku Fiksi</h1>
                <div class="swiper-wrapper">                  
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                </div>
            </div>
            <div class="swiper mySwiper mb-8">
                <h1 class="text-3xl font-bold my-4 text-neutral-800">Buku Fiksi</h1>
                <div class="swiper-wrapper">
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                </div>
            </div>
            <div class="swiper mySwiper mb-8">
                <h1 class="text-3xl font-bold my-4 text-neutral-800">Buku Fiksi</h1>
                <div class="swiper-wrapper">
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                </div>
            </div>
            <div class="swiper mySwiper mb-8">
                <h1 class="text-3xl font-bold my-4 text-neutral-800">Buku Fiksi</h1>
                <div class="swiper-wrapper">
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                    <x-itemsCard></x-itemsCard>
                </div>
            </div>
        </div>


    </div>
    <script src="{{asset('asset/js/swiper-bundle.min.js')}}"></script>

    <script>
      var swiper = new Swiper(".mySwiper", {
        breakpoints: {
          200: {
            slidesPerView: 1.75,
          },
          499: {
            slidesPerView: 2,
          },
          659: {
            slidesPerView: 2.5,
          },
          755: {
            slidesPerView: 3.5,
          },
          890: {
            slidesPerView: 4,
          },
          1180: {
            slidesPerView: 5.5,
          },
        },
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
</x-layout>
