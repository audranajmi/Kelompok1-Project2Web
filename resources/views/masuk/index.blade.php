@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-4">

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <main class="form-signin">
      <h3 class="h3 mb-5 fw-bold text-center">Pelanggan Lama</h3>
      <h5 class="h5 mb-3 fw-normal">Masuk ke akun anda.</h5>
      <form action="/masuk" method="post">
        @csrf
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
          <label for="email">Email</label>
          @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-dark mt-1" type="submit">MASUK</button>
      </form>
      <small class="d-block text-center mt-3">Belum punya akun? <a href="/daftar">Daftar Sekarang</a></small>
  </main>
  </div>
</div>
@endsection