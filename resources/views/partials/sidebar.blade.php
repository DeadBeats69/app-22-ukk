<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="/dashboard">LeVivli</a>
                </div>

                <div class="sidebar-toggler  x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">

            <ul class="menu">

                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item ">
                    <a href="/" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Kembali Ke Beranda</span>
                    </a>
                </li>

                <li class="sidebar-item {{ $active == 'buku' ? 'active' : '' }}">
                    <a href="/dashboard" class='sidebar-link'>
                        <i class="bi bi-journals"></i>
                        <span>Buku</span>
                    </a>
                </li>

                <li class="sidebar-item {{ $active == 'koleksi' ? 'active' : '' }}">

                    <a href="/koleksi" class='sidebar-link'>
                        <i class="bi bi-bookmark-fill"></i>
                        <span>Koleksi</span>
                    </a>
                </li>

                <li class="sidebar-item  {{ $active == 'kategori' ? 'active' : '' }}">
                    <a href="/kategori" class='sidebar-link'>
                        <i class="bi bi-tags-fill"></i>
                        <span>Kategori</span>
                    </a>
                </li>

                <li class="sidebar-item  {{ $active == 'peminjaman' ? 'active' : '' }} ">
                    <a href="/peminjaman" class='sidebar-link'>
                        <i class="bi bi-basket2-fill"></i>
                        <span>Peminjaman</span>
                    </a>
                </li>


                <li class="sidebar-title">Forms &amp; Tables</li>

                <li class="sidebar-item  {{ $active == 'data-pengguna' ? 'active' : '' }}">
                    <a href="/data-pengguna" class='sidebar-link'>
                        <i class="bi bi-person-fill"></i>
                        <span>Data Pengguna</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
