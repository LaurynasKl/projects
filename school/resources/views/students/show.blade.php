@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1>{{$student->name}} {{$student->surname}}</h1>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Elektroninis pastas</th>
                                <td> {{$student->email}} </td>
                                <td>
                                    <a href="">Keisti</a>
                                </td>
                            </tr>
                        </table>
                        <button class="btn btn-danger mt-2">Istrinti paskyra</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('title', 'Studentas')
