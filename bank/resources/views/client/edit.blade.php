@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <div class="card">
                    <h2 class="card-title">Daryti pavedima</h2>
                    <div class="card-body">
                        <form action="{{ route('client-update', $account) }}" method="post">
                            <div class="mb-3">


                                <label name="whereFrom" class="form-label">Sąskaita is kurios pervesti
                                    {{ $account->account }}</label>
                                <p>Sąskaitos likutis: {{ $account->eur }}</p>
                                <input type="text" class="form-control" name="eur">

                                <label class="form-label m-2">I kokia pervesti </label>
                                <select name="whereTo">
                                    @foreach ($accounts as $account)
                                        <option class="dropdown-item" value="{{ $account->id }}">
                                            {{-- {{ $account->user_code }} {{ $clients->code }}  --}}
                                            {{ $account->account }} </option>
                                    @endforeach
                                </select>


                            </div>
                            @method('PUT')
                            @csrf
                            <button type="submit" name='plus' class="btn btn-primary">Pervesti</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
