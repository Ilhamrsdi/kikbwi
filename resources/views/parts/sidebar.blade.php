<aside class="left-sidebar" data-sidebarbg="skin2" style="background-color: #5e72e3;">
    {{-- Sidebar scroll --}}
    <div class="scroll-sidebar">
        {{-- Sidebar navigation --}}
        <nav class="sidebar-nav" style="background-color: #5e72e3; position: fixed;">
            <ul id="sidebarnav">
                <h5 class="ms-3" style="font-weight: bold; color: #ffff;">Halaman Utama</h5>
                <li class="sidebar-item" style="background-color: #5e72e3;">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link text-decoration-none" href="/Dashboard" aria-expanded="false" style="font-weight: bold;">
                        <i class="bi bi-house-door me-4" aria-hidden="true"></i>
                        <span class="hide-menu" style="color: #ffff">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item" style="background-color: #5e72e3;"> <a class="sidebar-link  sidebar-link text-decoration-none" href="/aktivitas-sanggar" aria-expanded="false" style="font-weight: bold;">
                        <i class="bi bi-card-image me-4" aria-hidden="true"></i>
                        <span class="hide-menu" style="color: #ffff">Aktivitas Sanggar</span>
                    </a>
                </li>

                @if (auth()->user()->level == 'pemilik_sanggar')
                <li class="sidebar-item" style="background-color: #5e72e3;">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link text-decoration-none" href="/anggota" aria-expanded="true" style="font-weight: bold;">
                        <i class="bi bi-person-plus me-4" aria-hidden="true"></i>
                        <span class="hide-menu" style="color: #ffff">Tambah Anggota</span>
                    </a>
                </li>
                @endif

                @if (auth()->user()->level == 'pemilik_sanggar')
                <li class="sidebar-item" style="background-color: #5e72e3;">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link text-decoration-none" href="/input-karya" aria-expanded="true" style="font-weight: bold;">
                        <i class="bi bi-basket3 me-4" aria-hidden="true"></i>
                        <span class="hide-menu" style="color: #ffff">Tambah Karya</span>
                    </a>
                </li>
                @endif

                @if (auth()->user()->level =="pemilik_sanggar")
                <li class="sidebar-item" style="background-color: #5e72e3;">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link text-decoration-none" href="/cetak-kartu" aria-expanded="true" style="font-weight: bold;">
                        <i class="bi bi-printer me-4" aria-hidden="true"></i>
                        <span class="hide-menu" style="color: #ffff">Cetak Kartu</span>
                    </a>
                </li>
                @endif

                <hr>
                @if (auth()->user()->level == 'admin')

                <h5 class="ms-3" style="font-weight: bold; color: #ffff;">Data Master</h5>

                <li class="sidebar-item" style="background-color: #5e72e3;">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link text-decoration-none" href="/Jenis-Kesenian" aria-expanded="false" style="font-weight: bold;">
                        <i class="bi bi-journals me-4" aria-hidden="true"></i>
                        <span class="hide-menu" style="color: #ffff">Jenis Kesenian</span>
                    </a>
                </li>

                <li class="sidebar-item" style="background-color: #5e72e3;">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link text-decoration-none" href="/sub-seni" aria-expanded="false" style="font-weight: bold;">
                        <i class="bi bi-journal-text me-4" aria-hidden="true"></i>
                        <span class="hide-menu" style="color: #ffff">Sub Kesenian</span>
                    </a>
                </li>

                <li class="sidebar-item" style="background-color: #5e72e3;">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link text-decoration-none" href="/kecamatan" aria-expanded="false" style="font-weight: bold;">
                        <i class="bi bi-building me-4" aria-hidden="true"></i>
                        <span class="hide-menu" style="color: #ffff">Kecamatan</span>
                    </a>
                </li>

                <li class="sidebar-item" style="background-color: #5e72e3;">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link text-decoration-none" href="/list-user" aria-expanded="false" style="font-weight: bold;">
                        <i class="bi bi-people me-4" aria-hidden="true"></i>
                        <span class="hide-menu" style="color: #ffff">Pengguna</span>
                    </a>
                </li>
                @endif

                <li class="text-center upgrade-btn" style="background-color: #5e72e3;">
                    <form action="/Logout" method="get">
                        @csrf
                        <button class="btn btn-danger text-white mt-4 fw-bold">
                            <i class="bi bi-box-arrow-right me-2"></i>
                            Keluar</button>
                    </form>
                </li>
            </ul>
        </nav>
        {{-- End Sidebar navigation --}}
    </div>
    {{-- End Sidebar scroll --}}
</aside>