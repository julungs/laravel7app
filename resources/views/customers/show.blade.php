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
                  <a class="btn btn-primary" href="{{$customerData->id}}/edit">Edit</a>
                  <form class="d-inline" action="/customers/{{$customerData->id}}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                  <a class="btn btn-secondary d-block mt-2" href="/customers">Back to customers list</a>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection