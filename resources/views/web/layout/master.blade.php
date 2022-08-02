<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->

    @include('web.layout.style')

    @stack('style')

</head>

<body>

    @include('web.layout.header')

    <div class="wapper">
        @yield('content')
    </div>

    @include('web.layout.footer')

    @include('web.layout.script')

    @stack('script')

    <!-- <script src="{{ asset('js/app.js') }}" defer> -->

    </script>
</body>

</html>
