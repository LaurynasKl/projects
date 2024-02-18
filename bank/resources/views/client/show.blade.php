@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h2> {{ $client->name }} {{ $client->surname }}</h2>
                        <ul class="list-group">
                            <table class="table">
                                <tr>
                                    <td> <b>Asmens kodas</b> {{ $client->code }} </td>
                                    <td> <b>Elektroninis paštas</b> {{ $client->email }}</td>
                                    <td></td>
                                <tr>
                                <tr>
                                </tr>
                                @foreach ($accounts as $account)
                                @if ($account->user_code == Auth::user()->code)
                                <tr>
                                    <td><b>Sąskaita:</b> {{ $account->account }} </td>
                                    <td><b> Suma </b> {{$account->eur}} </td> 
                                    <td> <a class="btn btn-primary" href="{{route('client-edit', $account)}}">Pavedimai</a> </td>
                                    @if ($account->eur == 0)
                                    <td> <a class="btn btn-danger" href="{{route('client-delete', $account)}}">Pašalinti sąskaitą</a> </td>
                                    @endif
                                </tr>
                                @endif
                                @endforeach
                            </table>
                    </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
