@extends('layouts.dash')

@section('title')
  Thriftophia | Dashboard Edit Data Barang
@endsection

@section('up_product')
  active
@endsection

@section('content')
    <div class="card">
      <div class="card-header">
        <strong>Ubah Barang</strong>
        <small>{{ $item->name }}</small>
      </div>
      <div class="card-body card-block">
        <form action="{{ route('blogs.update', $item->id) }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="title" class="form-control-label">Judul Artikel</label>
            <input  type="text"
                    name="title"
                    value="{{ old('title') ? old('title') : $item->title }}"
                    class="form-control @error('title') is-invalid @enderror"/>
            @error('title') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="category" class="form-control-label">Kategori</label>
            <input  type="text"
                    name="category"
                    value="{{ old('category') ? old('category') : $item->category }}"
                    class="form-control @error('category') is-invalid @enderror"/>
            @error('category') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="description" class="form-control-label">Isi Artikel</label>
            <textarea name="description"
                      id="editor"
                      class="ckeditor form-control @error('description') is-invalid @enderror">{{ old('description') ? old('description') : $item->description }}</textarea>
            @error('description') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="photo" class="form-control-label">Thumbnail</label>
            <input  type="file"
                    name="photo"
                    value="{{ old('photo') ? old('photo') : $item->photo }}"
                    accept="image/*"
                    required
                    class="form-control @error('photo') is-invalid @enderror"/>
            @error('photo') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
              Ubah Artikel
            </button>
          </div>
        </form>
      </div>
    </div>
@endsection

{{-- @push('addon-script')
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor');
  </script>
@endpush --}}
