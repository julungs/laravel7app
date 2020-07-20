@extends('layout/main')

@section('title', $title)

@section('container')
 <div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Hello, {{$title}}!</h2>
            <a class="btn btn-primary my-3 disabled" href="/contacts/create">Add Contact</a>
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contactsData as $data)
                    <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->email}}</td>
                        <td>
                            <a class="badge badge-info" href="">Detail</a>
                            <a class="badge badge-warning" href="">Edit</a>
                            <a class="badge badge-danger" href="">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
 </div>
@endsection