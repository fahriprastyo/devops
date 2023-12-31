<table class="table table-bordered">
  <tr>
    <th>Nama</th>
    <td>{{ $item->name }}</td>
  </tr>
  <tr>
    <th>Email</th>
    <td class="text-lowercase">{{ $item->user->email }}</td>
  </tr>
  <tr>
    <th>Nomor</th>
    <td>{{ $item->user->number }}</td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td>{{ $item->address }}</td>
  </tr>
  <tr>
    <th>Nomor POS</th>
    <td>{{ $item->zip_code }}</td>
  </tr>
  <tr>
    <th>Total Transaksi</th>
    <td>@currency($item->total_price)</td>
  </tr>
  <tr>
    <th>Status Transaksi</th>
    <td>{{ $item->transaction_status }}</td>
  </tr>
  <tr>
    <th>Pembelian Produk</th>
    <td>
      <table class="tabble table-bordered w-100">
        <tr>
          <th>Nama</th>
          <th>Tipe</th>
          <th>Harga</th>
        </tr>
        @foreach ($item->details as $detail)
            <tr>
              <td>{{ $detail->product->name }}</td>
              <td>{{ $detail->product->type }}</td>
              <td>@currency($detail->product->price)</td>
            </tr>
        @endforeach
      </table>
    </td>
  </tr>
</table>
<div class="row">
  <div class="col-4">
    <a href="{{ route('transactions.status', $item->id) }}?status=SUCCESS" class="btn btn-success btn-block">
      <i class="fa fa-check"></i> Set Sukses
    </a>
  </div>
  <div class="col-4">
    <a href="{{ route('transactions.status', $item->id) }}?status=FAILED" class="btn btn-danger btn-block">
      <i class="fa fa-times"></i> Set Gagal
    </a>
  </div>
  <div class="col-4">
    <a href="{{ route('transactions.status', $item->id) }}?status=PENDING" class="btn btn-warning btn-block">
      <i class="fa fa-spinner"></i> Set Pending
    </a>
  </div>
</div>
