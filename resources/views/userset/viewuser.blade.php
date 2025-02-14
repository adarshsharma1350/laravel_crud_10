@extends('userset.layout')

@section('content')

    <body class="bg-light d-flex align-items-center vh-100">
        <div class="container">
            <div class="form-control mb-3">
                <h2 class="text-center mb-3">Profile of
                    {{ ucfirst($user->first_name) . ' ' . ucfirst($user->last_name) }}</h2>
            </div>
            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{ route('adduser') }}" class="btn btn-info ms-2">Add User</a>
                </div>
                <div>
                    <a href="{{ route('edituser', $user->id) }}" class="btn btn-warning">Update Profile</a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow-lg">
                        <div class="card-body p-4">
                            <form>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="first_name" class="form-label"><strong>First Name:</strong></label>
                                        <p>{{ $user->first_name }}</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="last_name" class="form-label"><strong>Last Name:</strong></label>
                                        <p>{{ $user->last_name }}</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label"><strong>Email</strong></label>
                                        <p>{{ $user->email }}</p>
                                    </div>
                                </div>
                                <div>
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
        </div>
    </body>
@endsection
