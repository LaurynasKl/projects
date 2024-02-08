@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-4">{{ $client->name }} {{ $client->surname }}</h2>
                <ul class="list-group">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td><b>Email</b> {{ $client->email }}</td>
                                <td><b>Code</b> {{ $client->code }}</td>
                            </tr>
                            <tr>
                                <td>{{ $client->account }}</td>
                            </tr>
                                <td>Total suma</td>
                        </table>
                    </div>
                </ul>
            </div>
        </div>
    </div>
@endsection
