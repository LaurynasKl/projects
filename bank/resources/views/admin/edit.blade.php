@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Redaguoti informaciją</h5>
            <form action="{{route('admin-update', $client)}}" method="post">
              <div class="mb-3">
                <label for="vardas" class="form-label">Vardas</label>
                <input type="text" class="form-control" name="name" value="{{$client->name}}">
              </div>
              <div class="mb-3">
                <label for="pavarde" class="form-label">Pavardė</label>
                <input type="text" class="form-control" name="surname" value="{{$client->surname}}">
              </div>
              @method('put')
              @csrf
              <button type="submit" class="btn btn-primary">Atnaujinti</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
