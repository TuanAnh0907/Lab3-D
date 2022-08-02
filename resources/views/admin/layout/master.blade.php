<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @include('admin.layout.style')

    @stack('style')

</head>
<body>

    @include('admin.layout.header')

    <div class="inline-flex w-full h-full">
        <div class="w-1/6">
            @include('admin.layout.sidebar')
        </div>
        <div class="w-full">
            @yield('content')
        </div>
    </div>

    @include('admin.layout.script')

    @stack('script'
    )
</body>
</html>
