@extends('web.layout.master')

@section('title', 'Update profile')

@section('content')

<div class="font-roboto w-1/2 text-center mx-auto">
    <div class="">
        <ul>
            <li>
                @if (session('notice'))
                <div class="w-full text-xl bg-gray-sl"> {{ session('notice') }} </div>
                @endif
            </li>
            <li>
                <form class="form-wrapper" method="POST" action="{{ route('web.profile.update') }}">
                    @csrf
                    @method('put')
                    <div class="relative my-6 px-4">
                        <i class="fa-regular fa-envelope absolute mt-3 ml-2"></i>
                        <input type="text" name="name" placeholder="User name" value="{{ Auth::user()->name }}" class="bg-gray-sl w-full h-10 px-8">
                    </div>

                    <div class="relative my-6 px-4">
                        <i class="fa-regular fa-envelope absolute mt-3 ml-2"></i>
                        <input type="password" name="old_password" placeholder="Please Enter Password " class="bg-gray-sl w-full h-10 px-8">
                    </div>

                    <div class="relative my-6 px-4">
                        <i class="fa-regular fa-envelope absolute mt-3 ml-2"></i>
                        <input type="password" name="new_password" placeholder="Please Enter New Password " class="bg-gray-sl w-full h-10 px-8">
                    </div>

                    <div class="relative my-6 px-4">
                        <i class="fa-regular fa-envelope absolute mt-3 ml-2"></i>
                        <input type="password" name="confirm" placeholder="Please Enter Confirm New Password " class="bg-gray-sl w-full h-10 px-8">
                    </div>
                    <button type="submit" class="my-6 w-1/2 h-12 text-white text-2xl bg-[#000000]"><b>Update My Profile</b></button>
                </form>
            </li>
        </ul>
    </div>
</div>

@endsection
