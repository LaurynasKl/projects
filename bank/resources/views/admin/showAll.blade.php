@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="mb-4">Visi klientai</h2>
                <ul class="list-group">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Vardas</th>
                                <th>Pavarde</th>
                                <th>Elektroninis paštas</th>
                                <th>Asmens kodas</th>
                                <th></th>
                            </tr>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->surname }}</td>
                                    <td>{{ $client->email }}</td>
                                    <td>{{ $client->code }}</td>
                                    <td>
                                        <a href="{{route('admin-show', $client)}}">Peržiurėti</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </ul>
            </div>
        </div>
    </div>
@endsection
