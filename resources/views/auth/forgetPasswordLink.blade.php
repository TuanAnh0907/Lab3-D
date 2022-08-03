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
            <div class="row justify-center">
                <div class="text-center text-4xl my-10"><b>Reset Password</b></div>
                <div class="">

                    @if (Session::has('message'))
                    <div class="w-full my-3 py-3 bg-[#28ea2b] text-blue text-center" role="alert">
                        {{ Session::get('message') }}
                    </div>
                    @endif

                    <form action="{{ route('forget.password.post') }}" method="POST">
                        @csrf
                        <div class="">
                            <div class="my-3 py-3">
                                <label for="email_address">E-Mail Address</label>
                            </div>
                            <div class="w-full relative">
                                <i class="fa-regular fa-envelope absolute mt-3 ml-2"></i>
                                <input type="text" id="email_address" class="bg-gray-sl w-full h-10 px-8" name="email" required autofocus>
                                @if ($errors->has('email'))
                                <div class="my-4">
                                    <span>{{ $errors->first('email') }}</span>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="">
                            <div class="my-3 py-3">
                                <label for="password">Password</label>
                            </div>
                            <div class="w-full relative">
                                <i class="fa-regular fa-envelope absolute mt-3 ml-2"></i>
                                <input type="password" id="password" class="bg-gray-sl w-full h-10 px-8" name="password" required autofocus>
                                @if ($errors->has('password'))
                                <span class="my-4">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="">
                            <div class="my-3 py-3">
                                <label for="password-confirm">Confirm Password</label>
                            </div>
                            <div class="col-md-6">
                                <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autofocus>
                                @if ($errors->has('password_confirmation'))
                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="my-3 py-3">
                            <button type="submit" class=" bg-[#000000] text-white w-full h-10  ">
                                Send Password Reset Link
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>

<!-- <body>
    <main>
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Reset Password</div>
                        <div class="card-body">

                            <form action="{{ route('reset.password.post') }}" method="POST">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required autofocus>
                                        @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autofocus>
                                        @if ($errors->has('password_confirmation'))
                                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Reset Password
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body> -->
