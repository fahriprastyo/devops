@extends('layouts.dash')

@section('title')
  Thriftophia | Dashboard Tambah Barang
@endsection

@section('up_product')
  active
@endsection

@section('content')
    <div class="card">
      <div class="card-header">
        <strong>Tambah Barang</strong>
      </div>
      <div class="card-body card-block">
        <form action="{{ route('products.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="name" class="form-control-label">Nama Barang</label>
            <input  type="text"
                    name="name"
                    value="{{ old('name') }}"
                    class="form-control @error('name') is-invalid @enderror"/>
            @error('name') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="type" class="form-control-label">Tipe Barang</label>
            <input  type="text"
                    name="type"
                    value="{{ old('type') }}"
                    class="form-control @error('type') is-invalid @enderror"/>
            @error('type') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="description" class="form-control-label">Deskripsi Barang</label>
            <textarea name="description"
                      id="editor"
                      class="ckeditor form-control @error('description') is-invalid @enderror">{{ old('description')}}</textarea>
            @error('description') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="price" class="form-control-label">Harga Barang</label>
            <input  type="number"
                    name="price"
                    value="{{ old('price') }}"
                    class="form-control @error('price') is-invalid @enderror"/>
            @error('price') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="quantity" class="form-control-label">Kuantitas Barang</label>
            <input  type="number"
                    name="quantity"
                    value="{{ old('quantity') }}"
                    class="form-control @error('quantity') is-invalid @enderror"/>
            @error('quantity') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="size" class="form-control-label">Size Barang</label>
            <input  type="text"
                    name="size"
                    value="{{ old('size') }}"
                    class="form-control @error('size') is-invalid @enderror"/>
            @error('size') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="condition" class="form-control-label">Kondisi Barang</label>
            <input  type="text"
                    name="condition"
                    value="{{ old('condition') }}"
                    class="form-control @error('condition') is-invalid @enderror"/>
            @error('condition') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
              Tambah Barang
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
