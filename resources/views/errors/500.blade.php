<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>404 - Not Found :)</title>
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
        <div class="grid md:flex w-full h-screen">
            <div
                class="grid w-full gap-32 md:w-1/2 px-4 pt-3 pb-8 md:px-16 md:py-12">
                {{-- content here --}}
                <div class="flex items-center gap-2">
                    <img
                        src="{{ asset('asset/logoFixed.png') }}"
                        class="w-8"
                        alt=""
                    />
                    <h1 class="text-indigo-600 text-xl font-bold">EightLib.</h1>
                </div>
                <div class="block h-fit my-auto">
                    <h1 class="font-bold text-7xl text-center">500</h1>
                    <h1 class="font-bold text-4xl text-center">Server Error</h1>
                </div>
                {{-- footer --}}
                <div class="text-center">
                    <h1 class="text-stone-900">
                        &#169; {{ date("Y") }} Calvin Samuel Simbolon
                    </h1>
                </div>
            </div>
            <div class="w-full md:w-1/2 max-h-60 md:max-h-screen">
                <img
                    src="{{ asset('asset/image/pattern.png') }}"
                    class="w-full h-full object-cover"
                    alt=""
                />
            </div>
        </div>

        <script src="{{ asset('asset/js/flowbite.min.js') }}"></script>
    </body>
</html>
