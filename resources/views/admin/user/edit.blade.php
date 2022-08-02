@extends('admin.layout.master')

@section('content')

<div class="font-roboto text-center my-10 px-20 w-full">
    <div class="w-full text-center my-10">
        <div class="w-full">
            <h1 class="text-6xl">User <small>Edit</small>
            </h1>
        </div>
        <div class="mx-auto border-gray-sl border my-5 w-3/4 px-10">
            <form action="{{ route('admin.user.update', $users->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="relative my-6">
                    <i class="fa-regular fa-envelope absolute mt-3 ml-2"></i>
                    <input type="text" value="{{ $users->name }}" name="name" placeholder="Please Enter Username" class="bg-gray-sl w-full h-10 px-8">
                </div>
                <div class="relative my-6">
                    <i class="fa-regular fa-envelope absolute mt-3 ml-2"></i>
                    <input type="text" value="{{ $users->email }}" type="email" placeholder="Please Enter Email " readonly class="bg-gray-sl w-full h-10 px-8">
                </div>
                <div class="relative my-6">
                    <i class="fa-regular fa-envelope absolute mt-3 ml-2"></i>
                    <input type="password" name="password" placeholder="Please Enter Password " class="bg-gray-sl w-full h-10 px-8">
                </div>
                <div class="relative my-6">
                    <i class="fa-regular fa-envelope absolute mt-3 ml-2"></i>
                    <input type="password" name="confirm" placeholder="Please Enter Confirm Password " class="bg-gray-sl w-full h-10 px-8">
                </div>
                <div class="py-3 px-6 inline-flex gap-10 ">
                    <label>Role</label>
                    <label class="radio-inline">
                        <input name="is_admin" value="0" @if(!$users->is_admin) @endif checked="true" type="radio"> User
                    </label>
                    <label class="radio-inline">
                        <input name="is_admin" value="1" @if($users->is_admin) @endif checked="true" type="radio"> Admin
                    </label>
                </div>
                <div class="inline-flex justify-between gap-2 w-full">
                    <button type="submit" class="my-6 w-1/2 h-12 text-white text-2xl bg-blue rounded-lg">User Update</button>
                    <button type="reset" class="my-6 w-1/2 h-12 text-2xl bg-gray-sl rounded-lg">Reset</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.row -->
</div>


<!-- /.row -->


@endsection
