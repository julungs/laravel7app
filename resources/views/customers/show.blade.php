@extends('layout/main')

@section('title', $title)

@section('container')
 <div class="container">
    <div class="row">
        <div class="col-6">
            <h2 class="mt-2">{{$title}}</h2>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$customerData->name}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$customerData->email}}</h6>
                  <hr>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam maiores placeat magni?</p>
                  <button class="btn btn-primary" type="button" >Edit</button>
                  <button class="btn btn-danger" type="button" >Delete</button>
                  <hr>
                  <a class="btn btn-secondary" href="/customers">Back to customers list</a>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection