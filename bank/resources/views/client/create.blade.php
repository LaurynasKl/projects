@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h2 class="mb-2">Nauja sąskaita</h2>
                    <form action="{{ route('client-store') }}" method="POST">
                        <div class="mb-2">
                            <label class="form-label">Sąskaitos numeris </label>
                            <input type="text" name="account"
                                value="{{ 'LT' . rand(1111111111111111, 9999999999999999) }}">
                            <input type="hidden" name="eur" value="{{ 0 }}">

                            <input type="hidden" name="user_code" value="{{ Auth::user()->code }}">



                        </div>
                        <button type="submit" class="btn btn-primary">Sukurti</button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
