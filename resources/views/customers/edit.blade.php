@extends('layout/main')

@section('title', $title)

@section('container')
 <div class="container">
    <div class="row">
        <div class="col-6">
            <h2 class="mt-2 mb-3">{{$title}}</h2>
            <form method="post" action="/customers/{{$customerData->id}}">
              @method('patch')
              @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                  <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" placeholder="e.g.  Firstname Lastname" name="name" value="{{$customerData->name}}" required autofocus>
                    @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input class="form-control @error('phone') is-invalid @enderror" type="text" id="phone" placeholder="e.g.  +6789012345678" name="phone" value="{{$customerData->phone}}" minlength="12" maxlength="14" required>
                    @error('phone') <div class="invalid-feedback">{{$message}}</div> @enderror
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" placeholder="e.g.  user@example.com" name="email" value="{{$customerData->email}}" required>
                    @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input class="form-control @error('address') is-invalid @enderror" type="text" id="address" placeholder="e.g.  11th Wall Street, California" name="address" value="{{$customerData->address}}" required>
                    @error('address') <div class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <button class="btn btn-primary" type="submit">Update</button>
                <a class="btn btn-secondary" href="/customers/{{$customerData->id}}">Cancel</a>
            </form>
        </div>
    </div>
 </div>
@endsection