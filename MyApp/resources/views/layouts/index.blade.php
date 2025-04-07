<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title> @yield('title', 'MyApp') </title>
</head>

<body>
    @yield('head')
  {{--   <x-alert type="success" class="mb-4">
        <x-slot name="title">
            Alerta de guerra
        </x-slot>
        :) esta es una prueba en la alerta
    </x-alert> --}}

    

    @yield('content')


    @stack('js')
</body>

</html>
