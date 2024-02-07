@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col">
                <h2 class="mb-4">All Clients</h2>
                <ul class="list-group">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Personala Code</th>
                                <th>Total</th>
                            </tr>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->surname }}</td>
                                    <td>{{ $client->email }}</td>
                                    <td>{{ $client->code }}</td>
                                    <td> SUMA</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </ul>
            </div>
        </div>
    </div>
@endsection
