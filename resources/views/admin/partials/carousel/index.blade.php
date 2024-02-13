@extends('admin.layouts.index')

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
        <h1>All Carousel List</h1>
        <a name="" id="" class="btn btn-primary my-2" href="{{ route('carousel.add') }}" role="button">Add</a>

        <div class="table-responsive">
            <table class="table table-light">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Images</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carousels as $carousel)
                        <tr>
                            <td>{{ $carousel->id }}</td>
                            <td>{{ $carousel->name }}</td>
                            <td><img src="{{ url('storage/carousel_data/' . $carousel->carousel_data) }}" alt=""
                                    width="900px"></td>
                            <td>
                                <button type="button" class="btn btn-danger align-middle" data-bs-toggle="modal"
                                    data-bs-target="#confirm-carousel-deletion-{{ $carousel->id }}">
                                    Delete
                                </button>
                                <div class="modal fade" id="confirm-carousel-deletion-{{ $carousel->id }}" tabindex="-1"
                                    aria-labelledby="confirm-carousel-deletion-label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content p-4">
                                            <form action="{{ route('carousel.delete', ['carousel' => $carousel->id]) }}"
                                                method="post" style="display: inline-block">
                                                @csrf
                                                @method('delete')

                                                <h2 class="text-lg font-medium text-gray-900 mb-4">
                                                    Confirm Carousel Deletion
                                                </h2>

                                                <div class="flex justify-end">
                                                    <button type="button" class="btn btn-secondary mr-2"
                                                        data-bs-dismiss="modal">
                                                        Cancel
                                                    </button>

                                                    <button type="submit" class="btn btn-danger">
                                                        Delete Carousel
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
        </div>

    </div>
@endsection
