<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Login | EightLib - Library Schools Apps</title>
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
            <div class="w-full md:w-1/2 max-h-60 md:max-h-screen ">
                <img
                    src="{{ asset('asset/image/pattern.png') }}"
                    class="w-full h-full object-cover"
                    alt=""
                />
            </div>
            
            <div class="grid w-full gap-32 md:w-1/2 px-4 pt-3 pb-8 md:px-16 md:py-12">
                {{-- content here --}}
                <div class="flex items-center gap-2">
                    <img
                        src="{{ asset('asset/logoFixed.png') }}"
                        class="w-8"
                        alt=""
                    />
                    <h1 class="text-indigo-600 text-xl font-bold">EightLib.</h1>
                </div>
                {{-- form --}}
                <div class="flex w-full justify-center">
                    <div class="grid gap-4 my-auto w-96">
                        <div class="grid">
                            <h1
                                class="text-2xl md:text-4xl text-stone-900 font-bold"
                            >
                                Hello, Admin.
                            </h1>
                            <p class="text-base text-stone-700">
                                Hanya Admin terdaftar yang dapat login.
                            </p>
                        </div>
                        <div>
                            <form class="grid gap-6">
                                <div class="grid gap-2">
                                    <div class="">
                                        <label
                                            for="username"
                                            class="block mb-2 text-sm font-medium text-stone-900"
                                            >Username</label
                                        >
                                        <input
                                            type="username"
                                            id="username"
                                            class="bg-stone-50 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            placeholder="Ingatlah Username Anda!"
                                            required
                                        />
                                    </div>
                                    <div class="">
                                        <label
                                            for="password"
                                            class="block mb-2 text-sm font-medium text-stone-900"
                                            >Password</label
                                        >
                                        <input
                                            type="password"
                                            id="password"
                                            class="bg-stone-50 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            required
                                        />
                                    </div>
                                </div>

                                <button
                                    type="submit"
                                    class="text-white bg-indigo-600 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center"
                                >
                                    Masuk
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h1 class="text-stone-900">
                        &#169; {{ date("Y") }} Calvin Samuel Simbolon
                    </h1>
                </div>
            </div>
        </div>
    </body>
</html>
