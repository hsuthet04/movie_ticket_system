@extends('layout.master')

@section('title', 'Movie Checkout')

@section('content')

    <form method="post" action="/booking/{{ $movie->id }}/{{ $theatre->id }}/{{ $showtime->id }}/checkout">
        @csrf
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
                        <a href="/booking/{{ $movie->id }}/{{ $theatre->id }}/{{ $showtime->id }}/seat_plan"
                            class="custom-button back-button">
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
        <div class="movie-facility padding-bottom padding-top">
            <div class="container">
                
                    <div class="col-lg-8">

                        {{-- <div class="checkout-widget-user checkout-contact">
                            <h5 class="title">Share your Contact Details </h5>
                            <form class="checkout-contact-form">

                                <div class="form-group">
                                    @auth
                                        <span>{{ auth()->user()->name }}</span>
                                    @endauth
                                </div>
                                <div class="form-group">
                                    @auth
                                        <span>{{ auth()->user()->email }}</span>
                                    @endauth
                                </div>
                                <div class="form-group">
                                    @auth
                                        <span>{{ auth()->user()->phone }}</span>
                                    @endauth
                                </div>

                            </form>
                        </div> --}}
                        {{-- <div class="checkout-widget checkout-card mb-0" style="margin-top:85px;">
                            <h5 class="title">Payment Option </h5>
                            <ul class="payment-option">
                                <li class="active">
                                    <a href="#0">
                                        <img src="{{ asset('assets/images/payment/card.png') }}" alt="payment">
                                        <span>Credit Card</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <img src="{{ asset('assets/images/payment/card.png') }}" alt="payment">
                                        <span>Debit Card</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <img src="{{ asset('assets/images/payment/paypal.png') }}" alt="payment">
                                        <span>paypal</span>
                                    </a>
                                </li>
                            </ul>
                            <h6 class="subtitle">Enter Your Card Details </h6>
                            <form class="payment-card-form" method="POST"
                                action="{{ route('stripe', [$movie->id, $theatre->id, $showtime->id]) }}">
                                @csrf
                                <div class="form-group check-group">
                                    <input id="card5" type="checkbox" checked>
                                    <label for="card5">
                                        <span class="title">QuickPay</span>
                                        <span class="info">Save this card information to my Boleto account and make faster
                                            payments.</span>
                                    </label>
                                </div>
                                <input type="hidden" name="movie_id" value="{{ $movie->id }}">
                                <input type="hidden" name="theatre_id" value="{{ $theatre->id }}">
                                <input type="hidden" name="showtime_id" value="{{ $showtime->id }}">
                                <div class="form-group">
                                    <input type="submit" class="custom-button" value="Buy Tickets">
                                </div>
                            </form>
                            <p class="notice">
                                By Clicking "Make Payment" you agree to the <a href="#0">terms and conditions</a>
                            </p>
                        </div> --}}


                    </div>
                    
                        <div class="booking-summery bg-one">
                            <h4 class="title">booking summery</h4>
                            <ul>
                                <li>
                                    <h6 class="subtitle">{{ $movie->name }} </h6>
                                    <span class="info">{{ $movie->language }}</span>
                                </li>
                                <li>
                                    <h6 class="subtitle"><span>{{ $theatre->name }}</span></h6>
                                    <div class="info"><span>{{ $showtime->time }}</span>
                                        <span>
                                            @foreach ($selectedSeats as $selectedSeat)
                                                <span>{{ $selectedSeat }}</span>
                                                <input type="hidden" value="{{ $selectedSeat }}" name="seats[]">
                                            @endforeach

                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <h6 class="subtitle mb-0"><span>Tickets Price</span><span>10000</span></h6>
                                </li>
                            </ul>
                        </div>
                        <div class="proceed-area  text-center">
                            <h6 class="subtitle"><span>Amount Payable</span><span>{{ $amount }}</span></h6>

                            <div class="form-group">
                                <input type="submit" class="custom-button px-4" value="Book Tickets">
                            </div>

                        </div>
                    
                
            </div>
        </div>
        <!-- ==========Movie-Section========== -->
    </form>


@endsection
