@extends('layout.master')

@section('title', 'Movie create')

@section('content')
    <div>
        @include('admin.aside')
    </div>
    <div>
        <section class="account-section bg_img" data-background="assets/images/account/account-bg.jpg">
            <div class="container">

                <div class="padding-top padding-bottom">
                    <h3 style="text-align: center;">Update</h3>
                    <div class="account-area">
                        <form method="POST" action="/admin/movie/{{ $movie->id }}/edit" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name<span>*</span></label>
                                <input type="name" placeholder="Enter Name" id="name" name="name"
                                    value="{{ $movie->name }}">
                            </div>
                            <div class="form-group">
                                <label for="image">Image<span>*</span></label>
                                <input type="file" id="image" name="image">
                            </div>
                            <div class="form-group">
                                <label for="description">Description<span>*</span></label>
                                <input type="textarea" placeholder="Enter Description" id="description" name="description"
                                    value="{{ $movie->description }}">
                            </div>
                            <div class="form-group">
                                <label for="trailer_image">Trailer_image<span>*</span></label>
                                <input type="file" id="trailer_image" name="trailer_image">
                            </div>
                            <select class="form-select" aria-label="Default select example"
                                style="background-color: #9aace5; color:white; font-weight:700; text-align:center"
                                name="language">
                                <option>{{ $movie->language }}</option>
                                <option value="English">English</option>
                                <option value="Japanese">Japanese</option>
                                <option value="Korean">Korean</option>
                            </select>

                            <select class="form-select" aria-label="Default select example"
                                style="background-color: #9aace5; color:white; font-weight:700; text-align:center; margin-top:25px;"
                                name="genre">
                                <option>{{ $movie->genre }}</option>
                                <option value="Horror">Horror</option>
                                <option value="Comedy">Comedy</option>
                                <option value="Thriller">Thriller</option>
                                <option value="Fantasy">Fantasy</option>
                                <option value="Romance">Romance</option>
                                <option value="Adventure">Adventure</option>
                                <option value="Action">Action</option>
                            </select>
                            <div class="form-group">
                                <label for="rating">Rating<span>*</span></label>
                                <input type="text" placeholder="Enter Rating" id="rating" name="rating"
                                    value="{{ $movie->rating }}">
                            </div>
                            <div class="form-group">
                                <label for="duration">Duration<span>*</span></label>
                                <input type="text" placeholder="Enter Rating(Minutes)" id="duration" name="duration"
                                    value="{{ $movie->duration }}">
                            </div>
                            <div class="form-group">
                                <label for="release_date">Release_date<span>*</span></label>
                                <input type="date" placeholder="Enter Release_date" id="release_date" name="release_date"
                                    value="{{ $movie->release_date }}">
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
