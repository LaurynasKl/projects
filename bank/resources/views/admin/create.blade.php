@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="mb-2">Naujas klientas</h2>
        <form action="{{route('admin-store')}}" method="POST">
          <div class="mb-2">
            <label class="form-label">Vardas</label>
            <input type="text" class="form-control" name="name" placeholder="Įveskite vardą" value="{{old('name')}}">
          </div>
          <div class="mb-2">
            <label class="form-label">Pavarde</label>
            <input type="text" class="form-control" name="surname" placeholder="Įveskite pavarde" value="{{old('surname')}}">
          </div>
          <div class="mb-2">
            <label class="form-label">Elektroninis paštas</label>
            <input type="text" class="form-control" name="email" placeholder="Įveskite elektroni paštą" value="{{old('email')}}">
          </div>
          <div class="mb-2">
            <label class="form-label">Asmens kodas</label>
            <input type="text" class="form-control" name="code" placeholder="Įveskite asmens kodą" value="{{old('code')}}">
          </div>
          <div class="mb-2">
            <label class="form-label">Slaptažodis</label>
            <input type="password" class="form-control" name="password" placeholder="Sukurkite slaptažodi">
          </div>
          <div class="mb-2">
          </div>
            {{-- <input type="hidden" name="account"> --}}
            {{-- <input type="hidden" name="eur" value="{{0}}"> --}}
            <input type="hidden" name="user_code">
          
          <button type="submit" class="btn btn-primary">Sukurti</button>
          @csrf
        </form>
      </div>
    </div>
  </div>
@endsection
