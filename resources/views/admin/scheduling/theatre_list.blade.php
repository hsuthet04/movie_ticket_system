@extends('layout.master')

@section('title', 'Admin Theatre')

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
                                <th scope="col">Theatres</th>

                                <th scope="col" colspan="4">Showtimes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Mochi Theatre</th>
                                <td>9:40</td>
                                <td>13:45</td>
                                <td>15:45</td>
                                <td><a href="/admin/scheduling/1/theatre_list"><i class="fa-solid fa-pen"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row">Meowster Theatre</th>
                                <td>9:40</td>
                                <td>13:45</td>
                                <td>15:45</td>
                                <td><a href="/admin/scheduling/2/theatre_list"><i class="fa-solid fa-pen"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row">Purrfect Theatre</th>
                                <td>9:40</td>
                                <td>13:45</td>
                                <td>15:45</td>
                                <td><a href="/admin/scheduling/3/theatre_list"><i class="fa-solid fa-pen"></i></a></td>
                            </tr>
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
