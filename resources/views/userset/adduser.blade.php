@extends('userset.layout')

@section('content')

    <body class="bg-light  d-flex align-items-center vh-100">
        <div class="container">
            <h1 class="text-center">Add a new User</h1>
            <div class="row">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div class="row justify-content-center w-100">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow-lg">
                        <div class="card-body p-4">

                            <form action="{{ route('storeuser') }}" method="post">

                                @csrf
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="first_name"><strong>First Name:</strong></label>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="first_name" id="first_name">
                                    </div>
                                </div>


                                <div class="mb-3 row">
                                    <div class="col">
                                        <label for="last_name"><strong>Last Name:</strong></label>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="last_name" id="last_name">
                                    </div>
                                </div>


                                <div class="mb-3 row">
                                    <div class="col">
                                        <label for="email"><strong>Email:</strong></label>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="email" id="email">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <div class="col">
                                        <label for="password"><strong>Password:</strong></label>
                                    </div>
                                    <div class="col">
                                        <input type="password" name="password" id="password">
                                    </div>
                                </div>


                                <div class="col">
                                    <div class="row mb-3">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                    <div class="row">
                                        <a href="{{ route('home') }}" class="btn btn-secondary">Back</a>
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
