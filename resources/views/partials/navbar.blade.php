<header>
    <nav class="py-1 bg-dark border-bottom">
        <div class="container flex-wrap">

            <ul class="nav justify-content-end">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle link-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      {{ auth()->user()->username }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                          <form action="/keluar" method="post">
                            @csrf
                              <button type="submit" class="dropdown-item">Keluar</button>
                          </form>
                        </li>
                    </ul>
                  </li>
                @else
                <li class="nav-item"><a href="/masuk" class="nav-link link-light px-2">Masuk</a></li>
                <li class="nav-item"><a href="/daftar" class="nav-link link-light px-2">Daftar</a></li>
                @endauth
            </ul>
        
        </div>
    </nav>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container d-flex flex-wrap justify-content-left">
            <a href="/" class="d-flex align-items-left mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                <img class="bi me-2" height="32" src="img/nusantara-logo.png" alt="Nusantara">
                <span class="navbar-brand mb-0 h1 fs-4">Nusantara</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav justify-content-right">
                <li class="nav-item">
                    <a class="nav-link px-3 {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item dropdown px-3">
                    <a class="nav-link dropdown-toggle" href="/produk" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Produk</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="/produk-barangalat">Barang & Alat</a></li>
                    <li><a class="dropdown-item" href="/produk-makananminuman">Makanan & Minuman</a></li>
                    <li><a class="dropdown-item" href="/produk-pakaian">Pakaian</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{ Request::is('tentang') ? 'active' : '' }}" href="/tentang">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{ Request::is('blog') ? 'active' : '' }}" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{ Request::is('kontak') ? 'active' : '' }}" href="/kontak">Kontak</a>
                </li>
                </ul>
            </div>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0">
                <input type="search" class="form-control" placeholder="Cari Produk..." aria-label="Search">
            </form>
        </div>
      </nav>
</header>






    {{-- <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
        <img class="bi me-2" height="32" src="img/nusantara-logo.png" alt="Nusantara">
        <span class="navbar-brand mb-0 h1 fs-4">Nusantara</span>
    </a>
    
    <form class="col-12 col-lg-auto mb-3 mb-lg-0">
        <input type="search" class="form-control" placeholder="Cari Produk..." aria-label="Search">
    </form> --}}

    {{-- <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link link-dark px-4 {{ ($title === "Beranda") ? 'active' : '' }}">Beranda</a></li>
        <li><a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-bs-toggle="dropdown" aria-expanded="false">Produk</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown09">
            <li><a class="dropdown-item" href="#">Barang & Alat</a></li>
            <li><a class="dropdown-item" href="#">Makanan & Minuman</a></li>
            <li><a class="dropdown-item" href="#">Pakaian</a></li>
           </ul></li>
        <li><a href="/tentang" class="nav-link link-dark px-4 {{ ($title === "Tentang") ? 'active' : '' }}">Tentang</a></li>
        <li><a href="/blog" class="nav-link link-dark px-4 {{ ($title === "Blog") ? 'active' : '' }}">Blog</a></li>
        <li><a href="/kontak" class="nav-link link-dark px-4 {{ ($title === "Kontak") ? 'active' : '' }}">Kontak</a></li>
    </ul> --}}

    {{-- <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
         </a>

         <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2 link-dark fw-bold{{ ($title === "Beranda") ? 'active' : 'link-secondary' }}">Beranda</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
            <li><a href="/tentang" class="nav-link px-2 link-dark  {{ ($title === "Tentang") ? 'active' : 'link-secondary' }}">Tentang</a></li>
            <li><a href="/blog" class="nav-link px-2 link-dark {{ ($title === "Blog") ? 'active' : 'link-secondary' }}">Blog</a></li>
            <li><a href="/kontak" class="nav-link px-2 link-dark {{ ($title === "Kontak") ? 'active' : 'link-secondary' }}">Kontak</a></li>
          </ul>

        <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-primary me-2">Login</button>
            <button type="button" class="btn btn-primary">Sign-up</button>
        </div>
    </header>
</div> --}}