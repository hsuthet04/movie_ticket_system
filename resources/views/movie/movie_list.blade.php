@extends('layout.master')

@section('title', 'Movie_list')

@section('content')

    <!-- ==========Banner-Section========== -->
    <section class="banner-section">
        <div class="banner-bg bg_img bg-fixed" data-background="{{ asset('assets/images/banner/banner02.jpg') }}"></div>
        <div class="container">
            <div class="banner-content">
                <h1 class="title bold">get <span class="color-theme">movie</span> tickets</h1>
                <p>Buy movie tickets in advance, find movie times watch trailer, read movie reviews and much more</p>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Movie-Section========== -->
    <section class="movie-section padding-top padding-bottom">
        <div class="container">
            <div class="row flex-wrap-reverse justify-content-center">
                <div class="col-sm-10 col-md-8 col-lg-3">
                    <form action="{{ route('filter') }}" method="GET">
                        <div class="widget-1 widget-check">
                            <div class="widget-header">
                                <h5 class="m-title">Filter By</h5> <a href="#0" class="clear-check">Clear All</a>
                            </div>
                            <div class="widget-1-body">
                                <h6 class="subtitle">Language</h6>
                                <div class="check-area">
                                    <div class="form-group">
                                        @foreach ($languages as $language)
                                            <div class="d-flex w-100">
                                                <input type="checkbox" name="language[]" value="{{ $language->name }}"
                                                    id="{{ $language->name }}"
                                                    {{ in_array($language, (array) request('language', [])) ? 'checked' : '' }}>
                                                <label for="{{ $language->name }}">{{ $language->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-1 widget-check">
                            <div class="widget-1-body">
                                <h6 class="subtitle">genre</h6>
                                <div class="check-area">
                                    <div class="form-group">
                                        @foreach ($genres as $genre)
                                            <div class="d-flex w-100">
                                                <input type="checkbox" name="genre[]" value="{{ $genre->name }}"
                                                    id="{{ $genre->name }}"
                                                    {{ in_array($genre, (array) request('genre', [])) ? 'checked' : '' }}>
                                                <label for="{{ $genre->name }}">{{ $genre->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="filter_button"><a href="">Search</a></button>
                        {{-- <ul>
                            @foreach ($movies as $movie)
                                <li>{{ $movie->language }} - {{ $movie->genre }}</li>
                            @endforeach
                        </ul> --}}
                    </form>
                </div>
                <div class="col-lg-9 mb-50 mb-lg-0">
                    <div class="filter-tab tab">
                        <div class="filter-area">
                            <div class="filter-main">
                                <div class="left">
                                    <div class="item">
                                        <span class="show">Show :</span>
                                        <select class="select-bar">
                                            <option value="12">12</option>
                                            <option value="15">15</option>
                                            <option value="18">18</option>
                                            <option value="21">21</option>
                                            <option value="24">24</option>
                                            <option value="27">27</option>
                                            <option value="30">30</option>
                                        </select>
                                    </div>
                                    <div class="item">
                                        <span class="show">Sort By :</span>
                                        <select class="select-bar">
                                            <option value="showing">now showing</option>
                                            <option value="exclusive">exclusive</option>
                                            <option value="trending">trending</option>
                                            <option value="most-view">most view</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-area">


                            <div class="tab-item active">
                                <div class="movie-area mb-10">
                                    @foreach ($movies as $movie)
                                        <div class="movie-list">
                                            <div class="movie-thumb c-thumb">
                                                <a href="movie-details.html" class="w-100 bg_img h-100"
                                                    data-background="{{ asset('uploads/' . $movie->image) }}">
                                                    <img class="d-sm-none" src="{{ asset('uploads/' . $movie->image) }}"
                                                        alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title">
                                                    <a href="movie-details.html">{{ $movie->name }}</a>
                                                </h5>
                                                <p class="duration">2hrs 50 min</p>
                                                <div class="movie-tags">
                                                    <a href="#0">{{ $movie->genre }}</a>

                                                </div>
                                                <div class="release">
                                                    <span>Release Date : </span> <a href="#0"> November 8 , 2020</a>
                                                </div>
                                                <ul class="movie-rating-percent">
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{ asset('assets/images/movie/tomato.png') }}"
                                                                alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{ asset('assets/images/movie/cake.png') }}"
                                                                alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                </ul>
                                                <div class="book-area">
                                                    <div class="book-ticket">
                                                        <div class="react-item">
                                                            <a href="/movie/{{ $movie->id }}/movie_detail">
                                                                <div class="thumb">
                                                                    <img src="{{ asset('assets/images/icons/heart.png') }}"
                                                                        alt="icons">
                                                                </div>
                                                                <span>Details</span>
                                                            </a>
                                                        </div>
                                                        <div class="react-item mr-auto">
                                                            <a href="/booking/{{ $movie->id }}/ticket_plan">
                                                                <div class="thumb">
                                                                    <img src="{{ asset('assets/images/icons/book.png') }}"
                                                                        alt="icons">
                                                                </div>
                                                                <span>book ticket</span>
                                                            </a>
                                                        </div>
                                                        <div class="react-item">
                                                            <a href="#0" class="popup-video">
                                                                <div class="thumb">
                                                                    <img src="{{ asset('assets/images/icons/play-button.png') }}"
                                                                        alt="icons">
                                                                </div>
                                                                <span>watch trailer</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                        <div class="pagination-area text-center">
                            <a href="#0"><i class="fas fa-angle-double-left"></i><span>Prev</span></a>
                            <a href="#0">1</a>
                            <a href="#0">2</a>
                            <a href="#0" class="active">3</a>
                            <a href="#0">4</a>
                            <a href="#0">5</a>
                            <a href="#0"><span>Next</span><i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Movie-Section========== -->


@endsection
