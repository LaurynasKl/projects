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
                                </tr>
                            </table>
                            @foreach ($accounts as $account)
                                @if ($account->user_code == $client->code)
                                    <table class="table">
                                        <td><b>Sąskaita:</b> {{ $account->account }} </td>
                                        <td><b>Suma: </b> {{ $account->eur }} </td>
                                    </table>
                                @endif
                            @endforeach
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
