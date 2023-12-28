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
                    <h3 style="text-align: center;">create</h3>
                    <div class="account-area">
                        <form method="POST" action="/admin/movie/create" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name<span>*</span></label>
                                <input type="name" placeholder="Enter Name" id="name" name="name"
                                    value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="image">Image<span>*</span></label>
                                <input type="file" placeholder="" id="image" name="image"
                                    value="{{ old('image') }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description<span>*</span></label>
                                <input type="textarea" placeholder="Enter Description" id="description" name="description"
                                    value="{{ old('description') }}">
                            </div>
                            <div class="form-group">
                                <label for="trailer_image">Trailer_image<span>*</span></label>
                                <input type="file" placeholder="" id="trailer_image" name="trailer_image"
                                    value="{{ old('trailer_image') }}">
                            </div>
                            <select class="form-select" aria-label="Default select example"
                                style="background-color: #9aace5; color:white; font-weight:700; text-align:center"
                                name="language">
                                <option>Language</option>
                                <option value="english">English</option>
                                <option value="japanese">Japanese</option>
                                <option value="korean">Korean</option>
                            </select>

                            <select class="form-select" aria-label="Default select example"
                                style="background-color: #9aace5; color:white; font-weight:700; text-align:center; margin-top:25px;"
                                name="genre">
                                <option>Genre</option>
                                <option value="horror">Horror</option>
                                <option value="comedy">Comedy</option>
                                <option value="thriller">Thriller</option>
                                <option value="fantasy">Fantasy</option>
                                <option value="romance">Romance</option>
                                <option value="adventure">Adventure</option>
                                <option value="action">Action</option>
                            </select>
                            <div class="form-group">
                                <label for="photos">Photos<span>*</span></label>
                                <input type="file" placeholder="" id="photos" name="photos"
                                    value="{{ old('photos') }}">
                            </div>
                            <div class="form-group">
                                <label for="rating">Rating<span>*</span></label>
                                <input type="text" placeholder="Enter Rating" id="rating" name="rating"
                                    value="{{ old('rating') }}">
                            </div>
                            <div class="form-group">
                                <label for="duration">Duration<span>*</span></label>
                                <input type="text" placeholder="Enter Rating(Minutes)" id="duration" name="duration"
                                    value="{{ old('duration') }}">
                            </div>
                            <div class="form-group">
                                <label for="release_date">Release_date<span>*</span></label>
                                <input type="date" placeholder="Enter Release_date" id="release_date" name="release_date"
                                    value="{{ old('release_date') }}">
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" value="Create">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>



@endsection
