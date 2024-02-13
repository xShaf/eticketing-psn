<div class="offcanvas offcanvas-start bg-light" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
    <div class="offcanvas-header">
        <h4 class="offcanvas-title" id="offcanvasExampleLabel">Pusat Sains Negara</h4>
    </div>
    <hr>
    <div class="offcanvas-body">
        <div class="text-center">
            <img src="{{ url('assets/images/logopsn.png') }}" alt="" class="mx-4" style="width: 300px">
        </div>
        <div class="text-center">
            <p class="fw-bold">{{ Auth::user()->name }} </p>
            <p class="fw-bold">{{ Auth::user()->roles->first()->name }}</p>
        </div>
        <hr>
        <div class="justify-content-center align-items-center text-center m-4">
            <div>
                <a class="mx-4" href='{{ route('profile.edit') }}'><i class="bi bi-person-circle fs-4"></i></a>
                <a class="mx-4" href="#"><i class="bi bi-envelope fs-4"></i></a>
                <a class="mx-4" href="#"><i class="bi bi-gear fs-4 "></i></a>
            </div>
        </div>

        <div class="accordion" id="manageUsers">
            <div class="accordion-item">
                <h2 class="accordion-header" id="addUsers">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseAddUsers" aria-expanded="true" aria-controls="collapseAddUsers">
                        Manage Users
                    </button>
                </h2>
                <div id="collapseAddUsers" class="accordion-collapse collapse" aria-labelledby="addUsers"
                    data-bs-parent="#manageUsers">
                    <div class="list-group">
                        <a href="{{ route('user.add') }}" class="list-group-item list-group-item-action">
                            Add New Users
                        </a>
                        <a href="{{ route('user.display') }}" class="list-group-item list-group-item-action">
                            Display All Users
                        </a>
                    </div>
                </div>
            </div>
            <!-- Additional accordion items go here -->
        </div>

        <div class="accordion mt-2" id="splash-screen">
            <div class="accordion-item">
                <h2 class="accordion-header" id="modify-splash-screen">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapSplashScreen" aria-expanded="true" aria-controls="collapSplashScreen">
                        Manage Splash Screen
                    </button>
                </h2>
                <div id="collapSplashScreen" class="accordion-collapse collapse" aria-labelledby="modify-splash-screen"
                    data-bs-parent="#splash-screen">
                    <div class="list-group">
                        <a href="{{ route('notice.update') }}" class="list-group-item list-group-item-action">
                            Update Splash Screen
                        </a>
                    </div>
                </div>
            </div>
            <!-- Additional accordion items go here -->
        </div>

        <div class="accordion mt-2" id="carousel">
            <div class="accordion-item">
                <h2 class="accordion-header" id="modify-carousel">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapCarousel" aria-expanded="true" aria-controls="collapCarousel">
                        Manage Carousel
                    </button>
                </h2>
                <div id="collapCarousel" class="accordion-collapse collapse" aria-labelledby="modify-carousel"
                    data-bs-parent="#carousel">
                    <div class="list-group">
                        <a href="{{ route('carousel.index') }}" class="list-group-item list-group-item-action">
                            Display Carousel
                        </a>
                        <a href="{{ route('carousel.add') }}" class="list-group-item list-group-item-action">
                            Add new Carousel
                        </a>
                    </div>
                </div>
            </div>
            <!-- Additional accordion items go here -->
        </div>

    </div>
</div>
