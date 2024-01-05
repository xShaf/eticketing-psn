@extends('layouts.index')

@section('content')
    <div class="container m-4">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ asset('storage/avatar/' . Auth::user()->avatar) }}" alt="User Avatar"
                                    class="rounded-circle p-1 bg-primary" width="110">
                                <div class="mt-3">
                                    <h4>{{ Auth::user()->name }}</h4>
                                    <p class="text-secondary mb-1">Phone Number: {{ Auth::user()->phone_number }}</p>
                                    <p class="text-muted font-size-sm">Birth:
                                        {{ \Carbon\Carbon::parse(Auth::user()->birthdate)->format('d/M/Y') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{ Auth::user()->email }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Gender</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{ Auth::user()->gender }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control"
                                        value="{{ Auth::user()->address_line }}, {{ Auth::user()->postcode }} {{ Auth::user()->city }}, {{ Auth::user()->state }}"
                                        readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <a name="profile" id="" class="btn btn-primary" href="profile"
                                        role="button">Edit Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
