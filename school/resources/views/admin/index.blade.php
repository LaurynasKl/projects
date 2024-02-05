@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Hello</h1>
                    </div>

                    <div class="card-body">
                        <div class="mt-2">
                            <a href="{{route('admin-create')}}">Create student account</a>
                        </div>
                        <div class="mt-2">
                            <a href="">All students</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('title', 'Admin')
