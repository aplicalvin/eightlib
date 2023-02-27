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
    <main>
        {{$slot}}
    </main>

    <footer class="text-center bg-gray-100 py-2 ">
        <p class="text-neutral-700">Copyright ©  @php echo (int)date('Y');@endphp Calvin Samuel Simbolon</p>
    </footer>

    <script src="{{asset('asset/js/flowbite.min.js')}}"></script>

</body>
</html>