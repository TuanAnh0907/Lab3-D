<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Forget Password</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @include('web.layout.style')

    @stack('style')
</head>

<body class="bg-gray-sl font-roboto">
    <main>
        <div class="mx-auto w-full bg-white lg:w-1/5 lg:shadow-2xl lg:border border-gray px-5 my-0 lg:my-20 rounded-xl">
            <div class="justify-center">
                <div class="text-center text-4xl my-10"><b>Reset Password</b></div>
                <div>

                    @if (Session::has('message'))
                    <div class="w-full my-3 py-3 bg-[#28ea2b] text-blue text-center" role="alert">
                        {{ Session::get('message') }}
                    </div>
                    @endif

                    <form action="{{ route('forget.password.post') }}" method="POST">
                        @csrf
                        <div>
                            <div class="my-3 py-3">
                                <label for="email_address">E-Mail Address</label>
                            </div>
                            <div class="w-full relative">
                                <i class="fa-regular fa-envelope absolute mt-3 ml-2"></i>
                                <input type="text" id="email_address" class="bg-gray-sl w-full h-10 px-8" name="email" required autofocus>
                                @if ($errors->has('email'))
                                <div class="my-3 text-red">
                                    <span>{{ $errors->first('email') }}</span>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div>
                            <div class="my-3 py-3">
                                <label for="password">Password</label>
                            </div>
                            <div class="w-full relative">
                                <i class="fa-regular fa-envelope absolute mt-3 ml-2"></i>
                                <input type="password" id="password" class="bg-gray-sl w-full h-10 px-8" name="password" required autofocus>
                                @if ($errors->has('password'))
                                <div class="my-3 text-red">
                                    <span>{{ $errors->first('password') }}</span>
                                </div>
                                @endif
                            </div>
                        </div>

                        <div>
                            <div class="my-3 py-3">
                                <label for="password-confirm">Confirm Password</label>
                            </div>
                            <div class="w-full relative">
                                <i class="fa-regular fa-envelope absolute mt-3 ml-2"></i>
                                <input type="password" id="password-confirm" class="bg-gray-sl w-full h-10 px-8" name="password_confirmation" required autofocus>
                                @if ($errors->has('password_confirmation'))
                                <span class="my-3 text-red">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="my-3 py-3">
                            <button type="submit" class=" bg-[#000000] text-white w-full h-10  ">
                                Reset your password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
