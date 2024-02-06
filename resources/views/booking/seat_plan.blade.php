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
                            <a href="#0">{{ $theatre->name }}</a>
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
                        <a href="" class="custom-button back-button">
                            {{ $showtime->time }}
                        </a>
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
            <form action="/booking/{{ $movie->id }}/{{ $theatre->id }}/{{ $showtime->id }}/movie_checkout"
                method="POST">
                @csrf
                <div class="container">
                    <div class="screen-area">
                        <h4 class="screen">screen</h4>
                        <div class="screen-thumb">
                            <img src="{{ asset('assets/images/movie/screen-thumb.png') }}" alt="movie">
                        </div>
                        <h5 class="subtitle">silver plus</h5>
                        <div class="screen-wrapper">
                            <ul class="row col-6 mx-auto">
                                <?php $i = 1; ?>

                                @foreach ($seats as $seat)
                                    <li class="col-2 mb-5">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" name="seat_id[]" value="{{ $seat->id }}"
                                                @foreach ($bookings as $booking)
                                            
                                                    @if (
                                                        $booking->movie_id == $movie->id &&
                                                            $booking->theatre_id == $theatre->id &&
                                                            $booking->showtime_id == $showtime->id &&
                                                            $booking->seat_id == $seat->id) 
                                                            disabled 
                                                    @endif @endforeach>
                                            <span class="checkmark"
                                                @foreach ($bookings as $booking)
                                                    @if (
                                                        $booking->movie_id == $movie->id &&
                                                            $booking->theatre_id == $theatre->id &&
                                                            $booking->showtime_id == $showtime->id &&
                                                            $booking->seat_id == $seat->id) 
                                                            style="background: #314c81;"
                                                    @endif @endforeach>{{ $i }}</span>
                                        </label>
                                    </li>
                                    <?php $i++; ?>
                                @endforeach
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

                            <div class="form-group">
                                <input type="submit" class="custom-button px-4" value="Proceed">
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- ==========Movie-Section========== -->

    </div>


@endsection
