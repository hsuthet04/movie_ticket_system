@extends('layout.master')

@section('title', 'Show Movies')

@section('content')
    <div>
        @include('admin.aside')
    </div>
    <div class="tab-area movie_list">
        @foreach ($records as $record)
            <div class="tab-item active">
                <div class="movie-list">
                    <div class="movie-thumb c-thumb" style="margin-top: 40px;">

                        <img class="" src="{{ asset('uploads/' . $record->image) }}" alt="movie">

                    </div>
                    <div class="movie-content bg-one" style="margin-top: 45px;">
                        <h5 class="title">
                            <p>{{ $record->name }}</p>
                        </h5>
                        <div class="duration">
                            <p>{{ $record->duration }} min</p>
                        </div>
                        <br>
                        <div class="movie-tags">
                            <p>{{ $record->genre }}</p>
                        </div>
                        <br>
                        <div class="release d-flex align-items-center">
                            <span>Release Date : </span>
                            <p class="pl-3" style="font-size: 16px;">{{ $record->release_date }}</p>
                        </div>
                        <ul class="movie-rating-percent">
                            <li>
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/movie/tomato.png') }}" alt="movie">
                                </div>
                                <span class="content">88%</span>
                            </li>
                            <li>
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/movie/cake.png') }}" alt="movie">
                                </div>
                                <span class="content">88%</span>
                            </li>
                        </ul>
                        <div class="book-area">
                            <div class="book-ticket">
                                <div class="react-item">
                                    <form method="POST" action="{{ route('movie.restore', $record->id) }}">
                                        @csrf
                                        <div class="ml-3">
                                            <button class="restore_button" type="submit">
                                                <i class="fa-solid fa-rotate-right"></i>
                                            </button>
                                        </div>
                                    </form>
                                    <form method="POST" action="{{ route('movie.delete', $record->id) }}">
                                        @csrf
                                        @method('delete')
                                        <div class="ml-3">
                                            <button class="restore_button" type="submit">
                                                <i class="fa-solid fa-eraser"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
