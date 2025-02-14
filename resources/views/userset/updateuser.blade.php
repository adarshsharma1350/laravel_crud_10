{{-- @include('userset.layout') --}}

@extends('userset.layout')


@section('content')

    <body class="bg-light d-flex align-items-center vh-100">
        <div class="container">
            <div class="form-control mb-3">
                <h2 class="text-center mb-3">Profile Update of
                    {{ ucfirst($user->first_name) . ' ' . ucfirst($user->last_name) }}</h2>
            </div>
            <a href="{{ route('adduser') }}" class="btn btn-info ms-2">Add User</a>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow-lg">
                        <div class="card-body p-4">
                            <form action="{{route('updateuser',$user->id)}}" method="Post">

                                @csrf
                                @method('PUT')


                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="first_name"><strong>First Name:</strong></label>
                                    </div>
                                    <div class="col">
                                        <input type="text" id="first_name" name="first_name" value="{{old('first_name',$user->first_name)}}" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="last_name"><strong>Last Name:</strong></label>
                                    </div>
                                    <div class="col">
                                        <input type="text" id="last_name" name="last_name" value="{{old('last_name',$user->last_name)}}" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="email" class="form-label"><strong>Email:</strong></label>
                                    </div>
                                    <div class="col">
                                        <input type="email" id="email"name="email"
                                            value="{{old('email',$user->email)}}">
                                    </div>
                                </div>

                                <div>
                                    <div class="row mb-3">
                                        <button type="submit" class="btn btn-warning">Update</button>
                                    </div>
                                    <div class="row ">
                                        <a href="{{ route('home') }}" class="btn btn-secondary">Back</a>
                                    </div>
                                </div>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>
@endsection
