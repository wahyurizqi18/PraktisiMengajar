@extends('_layouts.app')

@section('content')
<section class="py-5">
    <div class="container bg-light p-5" style="border-radius: 20px;">
        <div class="row my-5">
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h2>Selamat Datang di Laman KTT G20 <br><b>Konferensi Tingkat Tinggi Group of Twenty</b></h2>
                    <p class="text-secondary">Forum kerjasama multilateral <br>Yang akan di adakan di Bali Indonesia pada November 2022</p>

                    <a href="{{ url("user/register") }}" class="btn btn-primary"><b>Sign Up Now!</b></a>
                </div>
            </div>
            <div class="col-md-6">
                <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset("assets/image/poto3.jpg") }}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset("assets/image/poto.jpg") }}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset("assets/image/poto2.jpg") }}" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection