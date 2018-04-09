<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Pengajuan Kredit</span>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link @if(Request::is('admin/requests*')) active @endif" href="{{ url('admin/requests') }}">
                    <span data-feather="clock"></span>
                    Pending
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link @if(Request::is('admin/approved*')) active @endif" href="{{ url('admin/approved') }}">
                    <span data-feather="check"></span>
                    Approved
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Kartu Kredit</span>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link  @if(Request::is('admin/cards*')) active @endif" href="{{ url('admin/cards') }}">
                    <span data-feather="file-text"></span>
                    Daftar Kartu Kredit
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(Request::is('admin/setting*')) active @endif" href="{{ url("admin/setting") }}">
                    <span data-feather="settings"></span>
                    Setting
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Lainnya</span>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link  @if(Request::is('admin/artikel*')) active @endif" href="{{ url('admin/artikel') }}">
                    <span data-feather="send"></span>
                    Artikel
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(Request::is('admin/promo*')) active @endif" href="{{ url("admin/promo") }}">
                    <span data-feather="gift"></span>
                    Promo
                </a>
            </li>
        </ul>
    </div>
</nav>