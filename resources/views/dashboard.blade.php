@extends('layouts.index')
<style>
    .profile-card {
        width: 300px;
        text-align: center;
    }

    .profile-avatar {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
        margin: 0 auto;
    }

    .profile-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
@section('content')

<div class="container mt-5">
    <div class="card profile-card">
        <div class="card-body">
            <div class="profile-avatar">
                <img src="{{ asset('storage/avatar/' . Auth::user()->avatar) }}" alt="User Avatar">
            </div>
            <h5 class="card-title mt-3">{{ Auth::user()->name }}</h5>

        </div>
    </div>
</div>


@endsection
