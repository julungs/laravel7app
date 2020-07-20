@extends('layout/main')

@section('title', $title)

@section('container')
 <div class="container">
    <div class="row">
        <div class="col-6">
            <h2 class="mt-2">Hello, {{$title}}!</h2>
            <a class="btn btn-primary my-3" href="/customers/create">Add Customer</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <ul class="list-group">
                @foreach ($customersData as $data)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$data->name}}
                <a class="badge badge-info badge-pill" href="/customers/{{$data->id}}">Detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
 </div>
@endsection