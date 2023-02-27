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
    </head>
    <body>
        

        {{-- This is Account --}}        
        <x-navbarUtama></x-navbarUtama>
        <div class="grid md:flex w-full h-screen">
            <div class="grid w-full gap-32 md:w-1/2 px-4 pt-3 pb-8 md:px-6 md:py-8">
                <div class="max-w-7xl ml-4 sm:ml-8 md:ml-12">
                    <div class="">
                        <div class="mb-4">
                            <h1 class="text-3xl md:text-4xl font-bold text-stone-900">
                                Febriola Sinambela
                            </h1>
                            <p class="text-md md:text-lg text-stone-500">User 9622</p>
                            <hr>
                        </div>
                        
                    </div>

                    <div class="grid gap-4">
                        <div>
                            <h1 class="text-xl md:text-2xl font-bold text-stone-900">Buku yang Anda Pinjam</h1>
                        </div>
                        
                        {{-- <p class="text-md text-stone-500">
                            Tidak ada buku yang sedang anda pinjam
                        </p> --}}
                        <x-itemsCard></x-itemsCard>
                    </div>
                    {{-- Logout Button --}}
                    
                </div>

                
            </div>
            <div class="w-full md:w-1/2 max-h-60 md:max-h-screen ">
                <img
                src="{{ asset('asset/image/pattern.png') }}"
                class="w-full h-full object-cover"
                alt=""
                />
            </div>
        </div>
    </body>
</html>