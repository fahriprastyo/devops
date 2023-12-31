@extends('layouts.dash')

@section('title')
  Thriftophia | Dashboard Komentar
@endsection

@section('view_comment')
  active
@endsection

@section('content')
    <div class="orders">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="box-title">Daftar Komentar</h4>
            </div>
            <div class="card-body--">
              <div class="table-stats order-table ov-h">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Komentar</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($items as $item)
                      <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td class="text-lowercase">{{ $item->email }}</td>
                        <td>{{ $item->comment }}</td>
                        <td>
                          <a href="#mymodal"
                            data-remote="{{ route('comments.show', $item->id) }}"
                            data-toggle="modal"
                            data-target="#mymodal"
                            data-title="Detail Komentar {{ $item->name }}"
                            class="btn btn-info btn-sm">
                            <i class="fa fa-eye"></i>
                          </a>
                          <form action="{{ route('comments.destroy', $item->id) }}"
                                method="post"
                                class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm">
                              <i class="fa fa-trash"></i>
                            </button>
                          </form>
                        </td>
                      </tr>
                    @empty
                        <tr>
                          <td colspan="6" class="text-center p-5">
                            Data tidak tersedia
                          </td>
                        </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
