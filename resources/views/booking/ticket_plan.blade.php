@extends('layout.master')

@section('title', 'Ticket Plan')

@section('content')

    <!-- ==========Banner-Section========== -->
    <section class="details-banner hero-area bg_img" data-background="{{ asset('uploads/' . $movie->trailer_image) }}">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content">
                    <h3 class="title">{{ $movie->name }}</h3>
                    <div class="tags">
                        <a href="#0">{{ $movie->language }}</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    {{-- <!-- ==========Book-Section========== -->
    <section class="book-section bg-one">
        <div class="container">
            <form class="ticket-search-form two">

            </form>
        </div>
    </section>
    <!-- ==========Book-Section========== --> --}}

    <!-- ==========Movie-Section========== -->
    <div class="ticket-plan-section padding-bottom padding-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 mb-5 mb-lg-0">
                    <ul class="seat-plan-wrapper bg-five">
                        @foreach ($theatres as $theatre)
                            <li>
                                <div class="movie-name">
                                    <div class="icons">
                                        <i class="far fa-heart"></i>
                                        <i class="fas fa-heart"></i>
                                    </div>
                                    <a href="#" class="name">{{ $theatre->name }}</a>
                                    <div class="location-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                </div>
                                <div class="movie-schedule">
                                    @foreach ($showtimes as $showtime)
                                        <a class="item"
                                            href="/booking/{{ $movie->id }}/{{ $theatre->id }}/{{ $showtime->id }}/seat_plan">
                                            {{ $showtime->time }}
                                        </a>
                                    @endforeach
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Movie-Section========== -->
@endsection
