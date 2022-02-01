@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Create New Post Category</h2>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/post_categories" class="mb-5" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error ('name') is-invalid @enderror" id="name" name="name" autofocus required value="{{ old('name') }}">
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error ('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
            @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Post Category Image</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error ('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary">Create Post Category</button>
        </form>
    </div>

    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function() {
          fetch('/dashboard/post_categories/checkSlug?name=' + name.value)
          .then(response => response.json())
          .then(data => slug.value = data.slug)
        });

        function previewImage() {
          const image = document.querySelector('#image');
          const imgPreview = document.querySelector('.img-preview');

          imgPreview.style.display = 'block';

          const oFReader = new FileReader();
          oFReader.readAsDataURL(image.files[0]);

          oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
          }
        }
    </script>
@endsection