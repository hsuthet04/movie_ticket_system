<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open" style="margin-top: -20px; background:none;">
    <div class="mdc-drawer__header">

    </div>
    <div class="mdc-drawer__content">
        <div class="user-info">
            <p class="name">{{ auth()->user()->name }}</p>
            <p class="email">{{ auth()->user()->email }}</p>
        </div>
        <div class="mdc-list-group">
            <nav class="mdc-list mdc-drawer-menu">
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="/admin/home">
                        Dashboard
                    </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button movie" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                    style="margin-left: 5px;">
                                    Movie Management
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body wrapper">
                                    <a href="/admin/movie/create">Create Movies</a>
                                    <a href="/admin/movie/showMovie">All Movies</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-expansion-panel-link" href="/admin/scheduling/theatre_list"
                        data-toggle="expansionPanel" data-target="ui-sub-menu">
                        Showtime and Scheduling
                    </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{ route('seat.create') }}">
                        Seat Management
                    </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-expansion-panel-link" href="/admin/user/user_list" data-toggle="expansionPanel"
                        data-target="sample-page-submenu">
                        User Management
                    </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="#" target="_blank">
                        Booking and Reservation
                    </a>
                </div>
            </nav>
        </div>
        <div class="profile-actions">
            <a href="javascript:;">Settings</a>
            <span class="divider"></span>
            <a href="#">Logout</a>
        </div>

    </div>
</aside>
