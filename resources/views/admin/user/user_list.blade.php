@extends('layout.master')

@section('title', 'Admin User')

@section('content')

    <div style="margin-top: 100px; display: flex;">
        <div class="body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('admin.aside')
            <div class="page-wrapper mdc-toolbar-fixed-adjust">
                <div class="content-wrapper" style="margin-left: 400px; width:100%;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection
