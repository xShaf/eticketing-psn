@extends('layouts.index')

@section('content')
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

        body {
            background-color: #0D2C54;
        }

        .kotak {
            background-color: #f8f8f8;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        h3 {
            color: #333;
            text-align: center;
        }

        .naik {
            animation: fade-up 0.5s;
        }

        @keyframes fade-up {
            0% {
                opacity: 0;
                transform: translateY(-30px) scale(0.9);
            }

            100% {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
    </style>

    <div class="container kotak naik">
        <h1>All Users</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->roles->implode('name', ', ') }}</td>
                        <td>
                            <a href="{{ route('user.edit', ['user' => $user]) }}" class="btn btn-primary">Update</a>

                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#confirm-user-deletion">
                                Delete
                            </button>
                            <div class="modal fade" id="confirm-user-deletion" tabindex="-1"
                                aria-labelledby="confirm-user-deletion-label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content p-4">
                                        <form action="{{ route('user.destroy', ['user' => $user]) }}" method="post"
                                            style="display: inline-block">
                                            @csrf
                                            @method('delete')

                                            <h2 class="text-lg font-medium text-gray-900 mb-4">
                                                Confirm Account Deletion
                                            </h2>

                                            <p class="text-sm text-gray-600 mb-6">
                                                Deleting user account will permanently remove all user data
                                            </p>
                                            <div class="flex justify-end">
                                                <button type="button" class="btn btn-secondary mr-2"
                                                    data-bs-dismiss="modal">
                                                    Cancel
                                                </button>

                                                <button type="submit" class="btn btn-danger">
                                                    Delete Account
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @can('add-user')
            <a name="" id="" class="btn btn-primary" href="{{ route('user.add') }}" role="button"><i
                    class="bi bi-plus-circle-fill"></i>Add user</a>

            <a href="{{ url('admin') }}" class="btn btn-secondary">Go Back</a>
        @endcan
    </div>
@endsection
