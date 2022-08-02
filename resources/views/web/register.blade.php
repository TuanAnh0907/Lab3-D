<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @include('web.layout.style')

    @stack('style')
</head>

<body>
    <div class="font-roboto ">
        <div class="mx-auto w-full lg:w-1/5 lg:border border-gray px-5 my-0 lg:my-10 rounded-xl">
            <ul>
                <li>
                    <p class="text-center text-4xl my-10"><b>Register</b></p>
                </li>
                <li>
                    @if (session('notice'))
                    <div class="w-full bg-[#68f174]"> {{ session('notice') }} </div>
                    @else
                    <div class="w-full bg-[#e43a3a]"> {{ session('notice') }} </div>
                    @endif
                </li>
                <li>
                    <form class="form-wrapper" method="POST" action="{{ route('web.register.store') }}">
                        @csrf
                        <div class="relative my-6 px-4">
                            <i class="fa-regular fa-envelope absolute mt-3 ml-2"></i>
                            <input type="text" name="name" placeholder="User name" class="bg-gray-sl w-full h-10 px-8">
                        </div>
                        <div class="relative my-6 px-4">
                            <i class="fa-regular fa-envelope absolute mt-3 ml-2"></i>
                            <input type="text" name="email" placeholder="Email" class="bg-gray-sl w-full h-10 px-8">
                        </div>
                        <div class="relative my-6 px-4">
                            <i class="fa-solid fa-lock absolute mt-4 ml-2"></i>
                            <input type="password" name="password" placeholder="Password" class="bg-gray-sl w-full h-10 px-8">
                        </div>
                        <div class="relative my-6 px-4">
                            <i class="fa-solid fa-lock absolute mt-4 ml-2"></i>
                            <input type="password" name="confirm" placeholder="Confirm Password" class="bg-gray-sl w-full h-10 px-8">
                        </div>
                        <div class="inline-flex justify-between w-full my-6">
                            <div class="inline-flex">
                                <input type="checkbox" id="" name="" value="" class="mr-3">
                                <p>Remember me</p>
                            </div>
                            <div class="text-blue">
                                <a href="">Forgot password ?</a>
                            </div>
                        </div>
                        <button type="submit" class="my-6 w-full h-12 text-white text-2xl bg-[#000000]"><b>Create</b></button>
                    </form>
                </li>
                <li>
                    <div class="inline-flex justify-between w-full my-10">
                        <div class="inline-flex text-blue gap-2 mx-4 px-4 py-2 border border-gray-sl ">
                            <div class="">
                                <i class="fa-brands fa-square-facebook"></i>
                            </div>
                            <div>
                                <p>facebook</p>
                            </div>
                        </div>
                        <div class="inline-flex text-blue gap-2 mx-4 px-4 py-2 border border-gray-sl">
                            <div class="">
                                <i class="fa-brands fa-google"></i>
                            </div>
                            <div>
                                <p>Google</p>
                            </div>
                        </div>
                    </div>
                </li>

        </div>
    </div>
</body>

</html>
