@extends('admin.layout.master')

@section('content')
<div class="font-roboto text-center mx-auto my-auto w-4/5">
    <div class="my-10 ">
        <h1 class="text-6xl">User <small>List</small></h1>
    </div>
    <!-- /.col-lg-12 -->
    <table class="mx-auto table-auto border-gray-sl border-2 my-5 w-full">
        <thead class="text-lg text-white uppercase bg-gray">
            <tr>
                <th class="py-3 px-6">ID</th>
                <th class="py-3 px-6">Name</th>
                <th class="py-3 px-6">Email</th>
                <th class="py-3 px-6">Is-Admin</th>
                <th class="py-3 px-6">Status</th>
                <th class="py-3 px-6">Delete</th>
                <th class="py-3 px-6">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $User)
            <tr class="bg-white border-b dark:bg-gray dark:border-yellow">
                <td class="py-4 px-6"> {{ $User->id }}</td>
                <td class="py-4 px-6"> {{ $User->name }}</td>
                <td class="py-4 px-6"> {{ $User->email }} </td>
                <td class="py-4 px-6"> {{ $User->is_admin ? "x" : "" }} </td>
                <td class="py-4 px-6"> {{ $User->status ? "x" : "" }} </td>
                <td class="py-4 px-6 text-red"><i class="fa fa-trash-o fa-fw"></i><a href="{{ route('admin.user.delete', $User->id)}}"> Delete </a></td>
                <td class="py-4 px-6 text-blue"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('admin.user.edit', $User->id)}}"> Edit </a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $users->Links() !!}
</div>
<!-- /.row -->


@endsection
