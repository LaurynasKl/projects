@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="mb-2">New Client</h2>
        <form action="{{route('admin-store')}}" method="POST">
          <div class="mb-2">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name">
          </div>
          <div class="mb-2">
            <label class="form-label">Last name</label>
            <input type="text" class="form-control" name="surname" placeholder="Enter last name">
          </div>
          <div class="mb-2">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Enter email address">
          </div>
          <div class="mb-2">
            <label class="form-label">Personal code</label>
            <input type="text" class="form-control" name="code" placeholder="Enter perosnal code">
          </div>
          <div class="mb-2">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Create password">
          </div>
            <input type="hidden" name="account" value="{{'LT' . rand(1111111111111111, 9999999999999999)}}">
            <input type="hidden" name="eur" value="{{0}}">
          
          <button type="submit" class="btn btn-primary">Create</button>
          @csrf
        </form>
      </div>
    </div>
  </div>
@endsection
