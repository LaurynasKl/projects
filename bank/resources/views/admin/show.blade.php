@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2> {{ $client->name }} {{ $client->surname }} </h2>
                        <a href="{{ route('admin-edit', $client) }}">Redaguoti</a>
                        <ul class="list-group">
                            <table class="table">
                                <tr>
                                    <td> <b>Asmens kodas</b> {{ $client->code }} </td>
                                    <td> <b>Elektroninis paštas</b> {{ $client->email }}</td>
                                <tr>
                                <tr>
                                    <td></td>
                                    <td><b>Iš viso sąskaitoje:</b> {{ $client->eur }}</td>
                                </tr>
                                    <td>{{ $client->account }}</td>
                                    <td>{{ $client->eur }}</td>
                                </tr>
                            </table>
                            @foreach ($accounts as $account)
                            @if ($account->user_id == Auth::user()->id)
                            <tr>
                                <td><b>Sąskaita:</b> {{ $account->account }} </td>
                                <td><b> Suma </b> {{$account->eur}} </td>
                                <td> <a href="{{route('client-edit', $account)}}">Informacija</a> </td>
                            </tr>
                            @endif
                            @endforeach
                    </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
