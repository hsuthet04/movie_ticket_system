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
                {{-- <!-- partial:../../partials/_footer.html -->
                    <footer>
                        <div class="mdc-layout-grid">
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                    <span class="tx-14">Copyright © 2019 <a href="https://www.bootstrapdash.com/"
                                            target="_blank">BootstrapDash</a>. All rights reserved.</span>
                                </div>
                                <div
                                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex justify-content-end">
                                    <div class="d-flex align-items-center">
                                        <a href="">Documentation</a>
                                        <span class="vertical-divider"></span>
                                        <a href="">FAQ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- partial --> --}}
            </div>
        </div>
    </div>

@endsection
