@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1>Visi studentai</h1>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Vardas</th>
                                <th>Pavarde</th>
                            </tr>
                            <tr>
                                @foreach ($students as $student)
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->surname }}</td>
                            </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('title', 'Students')
