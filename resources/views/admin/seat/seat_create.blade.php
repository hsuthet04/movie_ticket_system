@extends('layout.master')

@section('title', 'Admin User')

@section('content')

    {{-- <div style="margin-top: 100px; display: flex;"> --}}
    <div class="body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.aside')
    </div>
    <div>
        <section class="account-section bg_img" data-background="assets/images/account/account-bg.jpg">
            <div class="container">

                <div class="padding-top padding-bottom">


                    <div class="account-area" style="margin-right: 180px;">
                        <h3 style="text-align: center; margin-bottom:25px;">create Seats</h3>
                        @if (session()->has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('seat.store') }}">
                            @csrf
                            <select class="form-select" aria-label="Default select example"
                                style="background-color: #9aace5; color:white; font-weight:700; text-align:center"
                                name="movie_id">
                                <option selected disabled>Movies</option>
                                @foreach ($movies as $movie)
                                    <option value="{{ $movie->id }}">{{ $movie->name }}</option>
                                @endforeach
                            </select>
                            <select class="form-select" aria-label="Default select example"
                                style="background-color: #9aace5; color:white; font-weight:700; text-align:center"
                                name="theatre_id">
                                <option selected disabled>Theatres</option>
                                @foreach ($theatres as $theatre)
                                    <option value="{{ $theatre->id }}">{{ $theatre->name }}</option>
                                @endforeach
                            </select>
                            <select class="form-select" aria-label="Default select example"
                                style="background-color: #9aace5; color:white; font-weight:700; text-align:center"
                                name="showtime_id">
                                <option selected disabled>Showtimes</option>
                                @foreach ($showTimes as $showTime)
                                    <option value="{{ $showTime->id }}">{{ $showTime->time }}</option>
                                @endforeach
                            </select>

                            <div class="form-group text-center">
                                <input type="submit" value="Create">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- </div> --}}

@endsection
