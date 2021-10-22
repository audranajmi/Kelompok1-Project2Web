@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-4">
    <main class="form-registration">
      <h3 class="h3 mb-5 fw-bold text-center">Pelanggan Baru</h3>
      <h5 class="h5 mb-3 fw-normal">Daftarkan akun anda.</h5>
      <form action="/daftar" method="post">
        @csrf  
        <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror"  id="name" placeholder="Name" required value="{{ old('name') }}">
            <label for="name">Nama</label>
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
            <label for="username">Username</label>
            @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
          <label for="email">Email</label>
          @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
          <label for="password">Password</label>
          @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Alamat" required value="{{ old('alamat') }}">
          <label for="alamat">Alamat</label>
          @error('alamat')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
      </div>
        <div class="form-floating">
          <input type="text" name="nohp" class="form-control rounded-bottom @error('nohp') is-invalid @enderror" id="nohp" placeholder="NoHP" required value="{{ old('nohp') }}">
          <label for="nohp">No HP</label>
          @error('nohp')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">DAFTAR</button>
      </form>
      <small class="d-block text-center mt-3">Sudah punya akun? <a href="/masuk">Masuk</a></small>
  </main>
  </div>
</div>
@endsection