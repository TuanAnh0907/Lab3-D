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
                    <p class="text-center text-4xl my-10"><b>Login</b></p>
                </li>
                <li>
                    @if (session('error'))
                    <div class="col-lg-6">
                        <div class="alert-danger"> {{ session('error') }} </div>
                    </div>
                    @endif
                </li>

                <li>
                    <form class="" method="POST" action="{{ route('web.auth.login') }}">
                        @csrf
                        <div class="relative my-6 px-4">
                            <i class="fa-regular fa-envelope absolute mt-3 ml-2"></i>
                            <input type="text" name="email" placeholder="Email" value="" class="bg-gray-sl w-full h-10 px-8" @if(Cookie::has('email')) value="{{ Cookie::get('email')}}" @endif>
                        </div>
                        <div class=" relative my-6 px-4">
                            <i class="fa-solid fa-lock absolute mt-4 ml-2"></i>
                            <input type="password" name="password" placeholder="Password" value="" class="bg-gray-sl w-full h-10 px-8" @if(Cookie::has('password')) value="{{ Cookie::get('password')}}" @endif>
                        </div>
                        <div class="inline-flex justify-between w-full my-6">
                            <div class="inline-flex">
                                <input type="checkbox" id="remember" name="remember" class="mr-3" @if(Cookie::has('password')) checked @endif >
                                <p>Remember me</p>
                            </div>
                            <div class="text-blue">
                                <a href="">Forgot password ?</a>
                            </div>
                        </div>
                        <button type="submit" class="my-6 w-full h-12 text-white text-2xl bg-[#000000]"><b>Login</b></button>
                    </form>
                </li>

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

                <li>
                    <div class="text-center my-10">
                        <p>Create an account? <a href="{{ route('web.register') }}" class="text-blue">Sign up now</a></p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</body>

</html>
