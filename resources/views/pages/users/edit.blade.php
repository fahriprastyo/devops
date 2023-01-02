@extends('layouts.dash')

@section('title')
  Thriftophia | Dashboard Edit Data User
@endsection

@section('content')
    <div class="card">
      <div class="card-header">
        <strong>Ubah User</strong>
        <small>{{ $item->name }}</small>
      </div>
      <div class="card-body card-block">
        <form action="{{ route('users.update', $item->id) }}" method="POST">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="name" class="form-control-label">Nama User</label>
            <input  type="text"
                    name="name"
                    value="{{ old('name') ? old('name') : $item->name }}"
                    class="form-control @error('name') is-invalid @enderror"/>
            @error('name') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="password" class="form-control-label">Alamat Email</label>
            <input  type="text"
                    name="email"
                    value="{{ old('email') ? old('email') : $item->email }}"
                    class="form-control @error('email') is-invalid @enderror"/>
            @error('email') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="password" class="form-control-label">Password</label>
            <input  type="text"
                    name="password"
                    value="{{ old('password') ? old('password') : $item->password }}"
                    class="form-control @error('password') is-invalid @enderror"/>
            @error('password') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="number" class="form-control-label">Nomor Telepon</label>
            <input  type="text"
                    name="number"
                    value="{{ old('number') ? old('number') : $item->number }}"
                    class="form-control @error('number') is-invalid @enderror"/>
            @error('number') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="roles" class="form-control-label">Roles</label>
            <input  type="text"
                    name="roles"
                    value="{{ old('roles') ? old('roles') : $item->roles }}"
                    class="form-control @error('roles') is-invalid @enderror"/>
            @error('roles') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
              Ubah User
            </button>
          </div>
        </form>
      </div>
    </div>
@endsection
