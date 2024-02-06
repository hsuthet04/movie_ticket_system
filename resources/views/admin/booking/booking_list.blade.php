@extends('layout.master')

@section('title', 'Booking list')

@section('content')

    <div style="margin-top: 100px; display: flex;">
        <div class="body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('admin.aside')
            <div class="page-wrapper mdc-toolbar-fixed-adjust">
                <div class="content-wrapper" style="margin-left: 300px;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Movie</th>
                                <th scope="col">Theatre</th>
                                <th scope="col">Showtime</th>
                                <th scope="col">Seat_No</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking)
                                <tr>
                                    <th scope="row">{{ $booking->id }}</th>
                                    <td>{{ $booking->user->name }}</td>
                                    <td>{{ $booking->user->email }}</td>
                                    <td>{{ $booking->user->phone }}</td>
                                    <td>{{ $booking->movie->name ?? '' }}</td>
                                    <td>{{ $booking->theatre->name }}</td>
                                    <td>{{ $booking->showtime->time }}</td>
                                    <td>{{ $booking->seat_id }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
