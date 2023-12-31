@extends('layouts.app')

@section('content')
    <!-- <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                class=""></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                </svg>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.
                        </p>
                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                </svg>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                </svg>
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> -->
    <div class="container">

    <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner ">
    <div class="carousel-item active">
      <img src="https://th.bing.com/th?id=ORMS.05abff407dbe14dc0e9350c40079511b&pid=Wdp&w=612&h=304&qlt=90&c=1&rs=1&dpr=1&p=0" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://th.bing.com/th?id=ORMS.05abff407dbe14dc0e9350c40079511b&pid=Wdp&w=612&h=304&qlt=90&c=1&rs=1&dpr=1&p=0" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://th.bing.com/th?id=ORMS.05abff407dbe14dc0e9350c40079511b&pid=Wdp&w=612&h=304&qlt=90&c=1&rs=1&dpr=1&p=0" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
    <div class="container mt-3">
    @foreach ($allBerita as $item)
    <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col-lg-4 col-md-6">
    <div class="card">
      <img src="{{ asset('img/gambar/' . $item->gambar) }}" class="card-img-top" alt="...">
      <div class="card-body">
          <span class="fw-bold">{{ $item->kategori->nama_kategori }}</span></small>
        <h5 class="card-title py-2">{{ Str::limit($item->judul, 25, '...') }}</h5>
        <p class="card-text">{!! Str::words($item->isi, 30, '...') !!}</p>

                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('detail', $item->id) }}"
                                    class="btn btn-md btn-info">Detail</a>
                                    {{-- <small class="text-body-secondary">{{ $item->user->name }} | --}}

                            </div>
                            @endforeach
    </div>
  </div>
</div>
     </div>
</div>

    @include('layouts.footer.guest.footer') 
@endsection
