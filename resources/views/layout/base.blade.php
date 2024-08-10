<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('tailwind/tailwind.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('tailwind/BarChart/css/flowbite.min.css') }}">
    <script src="{{ asset('tailwind/BarChart/js/chart.js') }}"></script>
    <script src="{{ asset('tailwind/BarChart/js/flowbite.min.js') }}"></script>
    <title>
        @yield('title')
    </title>

    <style>
        .user-select-none {
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
        }

        .active {
            background-color: white;
            color: #4D79F6;
            border-radius: 0.375rem;
        }
    </style>
</head>

<body>
    <div class="h-screen overflow-hidden">
        {{-- header --}}
        @include('layout.part.header')
        <div class="flex h-full w-full">
            {{-- sidebar --}}
            @include('layout.part.sidebar')
            {{-- content --}}
            <div class="p-4 w-full bg-gray-100 overflow-auto mb-10" id="content">
                <div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

</body>

{{-- <script src="{{ asset('ajax/ajax.min.js') }}"></script> --}}

</html>
