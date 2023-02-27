<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EightLib - Library Schools Apps</title>
    <link rel="shortcut icon" href="{{asset('asset/logoFixed.png')}}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('asset/css/suplement.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/swiper-bundle.min.css')}}">

</head>
<body>
    <x-admSidebar>
        {{$slot}}
    </x-admSidebar>

    <script src="{{asset('asset/js/flowbite.min.js')}}"></script>

</body>
</html>