@extends('layout.master')

@section('title', 'Show Movies')

@section('content')
    <div>
        @include('admin.aside')
    </div>
    <div class="tab-area movie_list">
        @foreach ($movies as $movie)
            <div class="tab-item active">
                <div class="movie-list">
                    <div class="movie-thumb c-thumb" style="margin-top: 40px;">

                        <img class="" src="{{ asset('uploads/' . $movie->image) }}" alt="movie">

                    </div>
                    <div class="movie-content bg-one" style="margin-top: 45px;">
                        <h5 class="title">
                            <p>{{ $movie->name }}</p>
                        </h5>
                        <div class="duration">
                            <p>{{ $movie->duration }} min</p>
                        </div>
                        <br>
                        <div class="movie-tags">
                            <p>{{ $movie->genre }}</p>
                        </div>
                        <br>
                        <div class="release d-flex align-items-center">
                            <span>Release Date : </span>
                            <p class="pl-3" style="font-size: 16px;">{{ $movie->release_date }}</p>
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
                                    <div>
                                        <button class="edit_button">
                                            <a href="/admin/movie/{{ $movie->id }}/edit"><i
                                                    class="fa-solid fa-pen"></i></a>
                                        </button>
                                    </div>
                                    <form method="POST" action="/admin/movie/{{ $movie->id }}/destroy">
                                        @csrf
                                        @method('delete')
                                        <div class="ml-3">
                                            <button class="delete_button" type="submit">
                                                <i class="fa-solid fa-trash"></i>
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
