@extends('layout.front_design')

@section('content')
<section class="social-media-section">
    <div class="start-title-wrapper">
        <h1 class="start-title">Hustler</h1>
        <h3 class="start-title-sm">Life</h3>
    </div>
    <div class="social-media-wrapper">
        <li class="social-m-list">
            <a class="social-m-link" href=""><i class="fab fa-instagram"></i></a>
        </li>
        <li class="social-m-list">
            <a class="social-m-link" href=""><i class="fab fa-twitter"></i></a>
        </li>
        <li class="social-m-list">
            <a class="social-m-link" href=""><i class="fab fa-youtube"></i></a>
        </li>
        <li class="social-m-list">
            <a class="social-m-link" href=""><i class="fab fa-spotify"></i></a>
        </li>
        <li class="social-m-list">
            <a class="social-m-link" href=""><i class="fab fa-soundcloud"></i></a>
        </li>
        <li class="social-m-list">
            <a class="social-m-link" href=""><i class="fab fa-google-play"></i></a>
        </li>
        <li class="social-m-list">
            <a class="social-m-link" href=""><i class="fab fa-apple"></i></a>
        </li>
    </div>
</section>
<section class="albums-section">
    <div class="title-container">
        <div class="line-left"></div>
        <div class="albums-title-wrapper">
            <h1 class="albums-title">Instrumental</h1>
            <h3 class="albums-title-sm">Beats</h3>
        </div>
        <div class="line-right"></div>
    </div>
    <div class="album-container">
        <div class="album-wrapper">
            {{-- <img class="album-img" src="{{ asset('/images/album.jpg') }}" alt="album song"> --}}
        </div>
        <div class="album-wrapper">
            {{-- <img class="album-img" src="{{ asset('/images/album.jpg') }}" alt="album song"> --}}
        </div>
        <div class="album-wrapper">
            {{-- <img class="album-img" src="{{ asset('/images/album.jpg') }}" alt="album song"> --}}
        </div>
    </div>
</section>

<section class="producer-section">
    <div class="title-container">
        <div class="line-left-prod"></div>
        <div class="albums-title-wrapper">
            <h1 class="producer-title">Poducer</h1>
        </div>
        <div class="line-right-prod"></div>
    </div>
    <div class="producer-wrapper">
        {{-- <img class="producer-img" src="{{ asset('/images/prod.jpg') }}" alt="producer image"> --}}
        <div class="producer-name-wrapper">
            <h2 class="producer-name">Kaniky</h2>
        </div>
    </div>
</section>
@endsection