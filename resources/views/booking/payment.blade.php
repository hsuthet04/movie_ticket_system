@extends('layout.master')

@section('title', 'Movie Checkout')

@section('content')
    <div class="checkout-widget checkout-card mb-0" style="margin-top:85px;">
        <h5 class="title" style="text-align: center;">Payment Option </h5>
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
        <a href="/booking/{{ $movie->id }}/{{ $theatre->id }}/{{ $showtime->id }}/seat_plan">skip</a>
    </div>
@endsection
