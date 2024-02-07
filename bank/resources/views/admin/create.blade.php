@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="mb-2">New Client</h2>
        <form action="{{route('admin-store')}}" method="POST">
          <div class="mb-2">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name">
          </div>
          <div class="mb-2">
            <label class="form-label">Surname</label>
            <input type="text" class="form-control" id="surname" placeholder="Enter surname">
          </div>
          <div class="mb-2">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Enter your email address">
          </div>
          <div class="mb-2">
            <label class="form-label">Personal code</label>
            <input type="text" class="form-control" id="code" placeholder="Enter your perosnal code">
          </div>
          <div class="mb-2">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Create password">
          </div>
          
          <button type="submit" class="btn btn-primary">Create</button>
          @csrf
        </form>
      </div>
    </div>
  </div>
@endsection
