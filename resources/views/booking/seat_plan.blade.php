@extends('layout.master')

@section('title', 'Show Movies')

@section('content')
    <div>

        <!-- ==========Banner-Section========== -->
        <section class="details-banner hero-area bg_img seat-plan-banner"
            data-background="{{ asset('assets/images/banner/banner04.jpg') }}">
            <div class="container">
                <div class="details-banner-wrapper">
                    <div class="details-banner-content style-two">
                        <h3 class="title">{{ $movie->name }}</h3>
                        <div class="tags">
                            <a href="#0">City Walk</a>
                            <a href="#0">{{ $movie->language }} - 2D</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==========Banner-Section========== -->
        <!-- ==========Page-Title========== -->
        <section class="page-title bg-one">
            <div class="container">
                <div class="page-title-area">
                    <div class="item md-order-1">
                        <a href="/admin/movie/showMovie" class="custom-button back-button">
                            <i class="flaticon-double-right-arrows-angles"></i>back
                        </a>
                    </div>
                    <div class="item date-item">
                        <span class="date">MON, SEP 09 2020</span>
                        <select class="select-bar">
                            <option value="sc1">09:40</option>
                            <option value="sc2">13:45</option>
                            <option value="sc3">15:45</option>
                            <option value="sc4">19:50</option>
                        </select>
                    </div>
                    <div class="item">
                        <h5 class="title">05:00</h5>
                        <p>Mins Left</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==========Page-Title========== -->

        <!-- ==========Movie-Section========== -->
        <div class="seat-plan-section padding-bottom padding-top">
            <div class="container">
                <div class="screen-area">
                    <h4 class="screen">screen</h4>
                    <div class="screen-thumb">
                        <img src="{{ asset('assets/images/movie/screen-thumb.png') }}" alt="movie">
                    </div>
                    <h5 class="subtitle">silver plus</h5>
                    <div class="screen-wrapper">
                        <ul class="seat-area">
                            <li class="seat-line">

                                <ul class="seat--area">
                                    <li class="front-seat">
                                        <ul>
                                            <li>
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">A1</span>
                                                </label>

                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">A2</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">A3</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">A4</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="front-seat">
                                        <ul>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">A5</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">A6</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">A7</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">A8</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">A9</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">A10</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="front-seat">
                                        <ul>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">A11</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">A12</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">A13</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">A14</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                            </li>
                            <li class="seat-line">

                                <ul class="seat--area">
                                    <li class="front-seat">
                                        <ul>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">B1</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">B2</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">B3</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">B4</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="front-seat">
                                        <ul>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">B5</span>
                                                </label>
                                            </li>
                                            <li class="single-seat seat-free">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">B6</span>
                                                </label>
                                            </li>
                                            <li class="single-seat seat-free">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">B7</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">B8</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">B9</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">B10</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="front-seat">
                                        <ul>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">B11</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">B12</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">B13</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">B14</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                            </li>
                        </ul>
                    </div>
                    <h5 class="subtitle">silver plus</h5>
                    <div class="screen-wrapper">
                        <ul class="seat-area couple">
                            <li class="seat-line">

                                <ul class="seat--area">
                                    <li class="front-seat">
                                        <ul>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">C1</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">C2</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="front-seat">
                                        <ul>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">C3</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">C4</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">C5</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="front-seat">
                                        <ul>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">C6</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">C7</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                            </li>
                            <li class="seat-line">

                                <ul class="seat--area">
                                    <li class="front-seat">
                                        <ul>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">D1</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">D2</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="front-seat">
                                        <ul>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">D3</span>
                                                </label>
                                            </li>
                                            <li class="single-seat seat-free-two">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">D4</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">D5</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="front-seat">
                                        <ul>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">D6</span>
                                                </label>
                                            </li>
                                            <li class="single-seat">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox">
                                                    <span class="checkmark">D7</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="proceed-book bg_img" data-background="assets/images/movie/movie-bg-proceed.jpg">
                    <div class="proceed-to-book">
                        <div class="book-item">
                            <span>You have Choosed Seat</span>
                            <h3 class="title">d9, d10</h3>
                        </div>
                        <div class="book-item">
                            <span>total price</span>
                            <h3 class="title">$150</h3>
                        </div>
                        <div class="book-item">
                            <a href="/booking/{{ $movie->id }}/movie_checkout" class="custom-button">proceed</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ==========Movie-Section========== -->

    </div>


@endsection
