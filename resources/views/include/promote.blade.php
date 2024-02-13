<div id="promotion" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        @foreach ($carousels as $key => $carousel)
            <li data-bs-target="#promotion" data-bs-slide-to="{{ $key }}"
                @if ($key === 0) class="active" @endif aria-current="true"
                aria-label="Slide {{ $key + 1 }}"></li>
        @endforeach
    </ol>
    <div class="carousel-inner" role="listbox">
        @foreach ($carousels as $key => $carousel)
            <div class="carousel-item @if ($key === 0) active @endif">
                <img src="{{ url('storage/carousel_data/' . $carousel->carousel_data) }}" class="d-block w-100"
                    alt="Carousel Image {{ $key + 1 }}">
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#promotion" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#promotion" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
