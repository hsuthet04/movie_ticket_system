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

    <!-- ==========Book-Section========== -->
    <section class="book-section bg-one">
        <div class="container">
            <form class="ticket-search-form two">

            </form>
        </div>
    </section>
    <!-- ==========Book-Section========== -->

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
                                    <a href="#0" class="name">{{ $theatre->name }}</a>
                                    <div class="location-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                </div>
                                <div class="movie-schedule">
                                    <div class="item">
                                        09:40
                                    </div>
                                    <div class="item">
                                        13:45
                                    </div>
                                    <div class="item">
                                        15:45
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Launch demo modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <section class="window-warning">
                                    
                                    <div class="warning-item">
                                        <h6 class="subtitle">Welcome! </h6>
                                        <h4 class="title">Select Your Seats</h4>
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/movie/seat-plan.png') }}" alt="movie">
                                        </div>
                                        <a href="/booking/{{ $movie->id }}/{{ $theatre->id }}/seat_plan"
                                            class="custom-button seatPlanButton">Seat Plans<i
                                                class="fas fa-angle-right"></i></a>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Movie-Section========== -->
@endsection
