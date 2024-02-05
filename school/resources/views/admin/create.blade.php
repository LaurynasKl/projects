@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Create student account</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin-store')}}" method="post">
                            <div class="form-group m-2">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group m-2">
                                <label>Surname</label>
                                <input type="text" name="surname" class="form-control">
                            </div>
                            <div class="form-group m-2">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group m-2">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <button type="submit">Create</button>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('title', 'Admin')
