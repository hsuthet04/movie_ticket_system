@extends('layout.master')

@section('title', 'Admin Home')

@section('content')

    <div style="margin-top: 100px; display: flex;">

        <div class="body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('admin.aside')
            <!-- partial -->
            <div class="main-wrapper mdc-drawer-app-content" style="margin-top: 0;">

                <div class="page-wrapper mdc-toolbar-fixed-adjust" style="margin-top: -15px;">
                    <main class="content-wrapper">
                        <div class="mdc-layout-grid">
                            <div class="mdc-layout-grid__inner">
                                <div
                                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                                    <div class="mdc-card info-card info-card--success">
                                        <div class="card-inner">
                                            <h5 class="card-title text-black">Users</h5>
                                            <br>
                                            <p class="tx-12 text-muted">{{ $users->count() }} target reached</p>
                                            <div class="card-icon-wrapper">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                                    <div class="mdc-card info-card info-card--danger">
                                        <div class="card-inner">
                                            <h5 class="card-title text-black">Movies</h5>
                                            <br>
                                            <p class="tx-12 text-muted">{{ $movies->count() }} target reached</p>
                                            <div class="card-icon-wrapper">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                                    <div class="mdc-card info-card info-card--primary">
                                        <div class="card-inner">
                                            <h5 class="card-title text-black">Theatres</h5>
                                            <br>
                                            <p class="tx-12 text-muted">{{ $theatres->count() }} target reached</p>
                                            <div class="card-icon-wrapper">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                                    <div class="mdc-card info-card info-card--info">
                                        <div class="card-inner">
                                            <h5 class="card-title text-black">Total Booking</h5>
                                            <br>
                                            <p class="tx-12 text-muted">{{ $bookings->count() }} target reached</p>
                                            <div class="card-icon-wrapper">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                    <div class="mdc-card">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="card-title mb-0 text-black">Revenue by location</h4>

                                        </div>
                                        <div class="d-block d-sm-flex justify-content-between align-items-center">
                                            <h5 class="card-sub-title mb-2 mb-sm-0 text-black">Sales performance revenue
                                                based by
                                                country</h5>
                                            <div class="menu-button-container">
                                                <button
                                                    class="mdc-button mdc-menu-button mdc-button--raised button-box-shadow tx-12 text-dark bg-white font-weight-light">
                                                    Last 7 days

                                                </button>
                                                <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                                                    <ul class="mdc-list" role="menu" aria-hidden="true"
                                                        aria-orientation="vertical">
                                                        <li class="mdc-list-item" role="menuitem">
                                                            <h6 class="item-subject font-weight-normal">Back</h6>
                                                        </li>
                                                        <li class="mdc-list-item" role="menuitem">
                                                            <h6 class="item-subject font-weight-normal">Forward</h6>
                                                        </li>
                                                        <li class="mdc-list-item" role="menuitem">
                                                            <h6 class="item-subject font-weight-normal">Reload</h6>
                                                        </li>
                                                        <li class="mdc-list-divider"></li>
                                                        <li class="mdc-list-item" role="menuitem">
                                                            <h6 class="item-subject font-weight-normal">Save As..</h6>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mdc-layout-grid__inner mt-2">
                                            <div
                                                class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6 mdc-layout-grid__cell--span-8-tablet">
                                                <div class="table-responsive">
                                                    <table class="table dashboard-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <span class="flag-icon-container"><i
                                                                            class="flag-icon flag-icon-us mr-2"></i></span>United
                                                                    States
                                                                </td>
                                                                <td>$1,671.10</td>
                                                                <td class=" font-weight-medium"> 39% </td>
                                                            </tr>
                                                            <tr>
                                                                <td> <span class="flag-icon-container"><i
                                                                            class="flag-icon flag-icon-ph mr-2"></i></span>Philippines
                                                                </td>
                                                                <td>$1,064.75</td>
                                                                <td class=" font-weight-medium"> 30% </td>
                                                            </tr>
                                                            <tr>
                                                                <td> <span class="flag-icon-container"><i
                                                                            class="flag-icon flag-icon-gb mr-2"></i></span>United
                                                                    Kingdom</td>
                                                                <td>$1,055.98</td>
                                                                <td class=" font-weight-medium"> 45% </td>
                                                            </tr>
                                                            <tr>
                                                                <td> <span class="flag-icon-container"><i
                                                                            class="flag-icon flag-icon-ca mr-2"></i></span>Canada
                                                                </td>
                                                                <td>$1,045.49</td>
                                                                <td class=" font-weight-medium"> 80% </td>
                                                            </tr>
                                                            <tr>
                                                                <td> <span class="flag-icon-container"><i
                                                                            class="flag-icon flag-icon-fr mr-2"></i></span>France
                                                                </td>
                                                                <td>$2,050.93</td>
                                                                <td class=" font-weight-medium"> 10% </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div
                                                class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6 mdc-layout-grid__cell--span-8-tablet">
                                                <div id="revenue-map" class="revenue-world-map"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-4-tablet">
                                    <div class="mdc-card bg-success text-white">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="font-weight-normal">Impressions</h3>

                                        </div>
                                        <div class="mdc-layout-grid__inner align-items-center">
                                            <div
                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-3-tablet mdc-layout-grid__cell--span-2-phone">
                                                <div>
                                                    <h5 class="font-weight-normal mt-2">Customers 58.39k</h5>
                                                    <h2 class="font-weight-normal mt-3 mb-0">636,757K</h2>
                                                </div>
                                            </div>
                                            <div
                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8-desktop mdc-layout-grid__cell--span-5-tablet mdc-layout-grid__cell--span-2-phone">
                                                <canvas id="impressions-chart" height="80"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-4-tablet">
                                    <div class="mdc-card bg-info text-white">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="font-weight-normal">Traffic</h3>

                                        </div>
                                        <div class="mdc-layout-grid__inner align-items-center">
                                            <div
                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-3-tablet mdc-layout-grid__cell--span-2-phone">
                                                <div>
                                                    <h5 class="font-weight-normal mt-2">Customers 58.39k</h5>
                                                    <h2 class="font-weight-normal mt-3 mb-0">636,757K</h2>
                                                </div>
                                            </div>
                                            <div
                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8-desktop mdc-layout-grid__cell--span-5-tablet mdc-layout-grid__cell--span-2-phone">
                                                <canvas id="traffic-chart" height="80"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </main>

                </div>
            </div>
        </div>
    </div>

@endsection
