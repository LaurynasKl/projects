@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="mb-2">Naujas klientas</h2>
        <form action="{{route('admin-store')}}" method="POST">
          <div class="mb-2">
            <label class="form-label">Vardas</label>
            <input type="text" class="form-control" name="name" placeholder="Įveskite vardą">
          </div>
          <div class="mb-2">
            <label class="form-label">Pavarde</label>
            <input type="text" class="form-control" name="surname" placeholder="Įveskite pavarde">
          </div>
          <div class="mb-2">
            <label class="form-label">Elektroninis paštas</label>
            <input type="text" class="form-control" name="email" placeholder="Įveskite elektroni paštą">
          </div>
          <div class="mb-2">
            <label class="form-label">Asmens kodas</label>
            <input type="text" class="form-control" name="code" placeholder="Įveskite asmens kodą">
          </div>
          <div class="mb-2">
            <label class="form-label">Slaptažodis</label>
            <input type="password" class="form-control" name="password" placeholder="Sukurkite slaptažodi">
          </div>
          <div class="mb-2">
          </div>
            <input type="hidden" name="account" value="{{'LT' . rand(1111111111111111, 9999999999999999)}}">
            <input type="hidden" name="eur" value="{{0}}">
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
          
          <button type="submit" class="btn btn-primary">Sukurti</button>
          @csrf
        </form>
      </div>
    </div>
  </div>
@endsection
