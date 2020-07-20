@extends('layout/main')

@section('title', $title)

@section('container')
 <div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Hello, {{$title}}!</h2>
        </div>
    </div>
 </div>
@endsection