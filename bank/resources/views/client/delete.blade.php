@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <form action="{{route('client-destroy', $account)}}" method="post">
                        <div class="mb-4">
                            <h2> Ar tikrai norite ištrinti sąskaita </h2>
                            <h3> {{ $account->account }}? </h3>
                        </div>
                        <div style="display:flex; justify-content:center;">
                            <button type="submit" class="btn btn-danger m-1" >Taip</button>
                            <a class="btn btn-info m-1" href="{{route('client-show')}}">Ne</a>
                        </div>
                        @csrf
                        @method('delete')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
