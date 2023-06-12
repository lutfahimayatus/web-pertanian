<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transaksi</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Css Tabel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <!-- Line CSS Template -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- Icons Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- /Public/CSS -->
    <link rel="stylesheet" href="/css/dashboard.css">
  </head>
  <body>
  <input type="checkbox" id="nav-toggle">
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-brand">
        <h2><span class="lab la-dashboard"></span> <span><a href="/dashboard" class="text-decoration-none" style="color: white;"> MAYASARI</a></span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="/dashboard"><span class="las la-igloo"></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="/dashboard/produks"><span class="las la-users"></span><span>Produk</span></a>
                </li>
                <li>
                    <a href="/dashboard/pemasoks"><span class="las la-clipboard-list"></span><span>Pemasok</span></a>
                </li>
                <li>
                    <a href="/dashboard/kotas"><span class="las la-shopping-bag"></span><span>Kota</span></a>
                </li>
                <li>
                    <a href="/dashboard/transaksis"><span class="las la-receipt"></span><span>Transaksi</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Sidebar -->

    <div class="main-content">
      <header>
        <h2>
          <label for="nav-toggle">
            <span class="las la-bars"></span>
          </label>
            Transaksi
        </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" />
            </div>

            <div class="user-wrapper">
            <img width="30" height="30" src="https://img.icons8.com/metro/26/gender-neutral-user.png" alt="gender-neutral-user"/>
                <div>
                    <h4>Username</h4>
                    <small>Administrator</small>
                </div>
            </div>
      </header>
      <main>
        <div class="container">
          <div class="row my-3">
            <div class="col-md">
              <h2>Data Transaksi</h2>
            </div>
            <hr>
          </div>
          <div class="row">
            <div class="col-md">
              
            </div>
          </div>
          <div class="row my-5 d-block">
          <div class="col-md">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Tanggal Transaksi</th>
                <th>Total Harga</th>
                <th>Status</th>
                <th>Bukti Transfer</th>
                <th>No Resi</th>
                <th>Kota</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transaksi as $item)
            <tr>
                <td>{{ $item->tanggal_transaksi }}</td>
                <td>Rp. {{ $item->total_harga }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->bukti_transfer }}</td>
                <td>{{ $item->no_resi }}</td>
                <td>{{ $item->kota }}</td>
                <td>{{ $item->alamat }}</td>
                <td>
                    <a href="#" class="btn btn-info" ><i class="bi bi-eye"></i></a>
                    <a href="#" class="btn btn-warning"data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}"><i class="bi bi-pencil-square"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
          </div>
        </div>
      </main>
    </div>




    @foreach ($transaksi as $item)
<!-- Modal Edit Transaksi -->
  <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Transaksi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Form Edit Transaksi -->
        <form action=''
        method="POST">
          @csrf
          @method('POST')
          <div class="mb-3">
            <label for="editTanggal{{ $item->id }}" class="form-label">Tanggal Transaksi</label>
            <input type="date" class="form-control" id="editTanggal{{ $item->id }}" name="tanggal_transaksi" value="{{ $item->tanggal_transaksi }}" required>
          </div>
          <div class="mb-3">
            <label for="editTotalHarga{{ $item->id }}" class="form-label">Total Harga</label>
            <input type="text" class="form-control" id="editTotalHarga{{ $item->id }}" name="total_harga" value="{{ $item->total_harga }}" required>
          </div>
          <div class="mb-3">
            <label for="editStatus{{ $item->id }}" class="form-label">Status</label>
            <select class="form-select" id="editStatus{{ $item->id }}" name="status" required>
              <option value="1" {{ $item->status == 1 ? 'selected' : '' }}>Pembayaran Diterima</option>
              <option value="2" {{ $item->status == 2 ? 'selected' : '' }}>Pembayaran Pending</option>
              <option value="3" {{ $item->status == 3 ? 'selected' : '' }}>Pembayaran Ditolak</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="editBuktiTransfer{{ $item->id }}" class="form-label">Bukti Transfer</label>
            <input type="text" class="form-control" id="editBuktiTransfer{{ $item->id }}" name="bukti_transfer" value="{{ $item->bukti_transfer }}" required>
          </div>
          <div class="mb-3">
            <label for="editNoResi{{ $item->id }}" class="form-label">No Resi</label>
            <input type="text" class="form-control" id="editNoResi{{ $item->id }}" name="no_resi" value="{{ $item->no_resi }}" required>
          </div>
          <div class="mb-3">
            <label for="editKota{{ $item->id }}" class="form-label">Kota</label>
            <input type="text" class="form-control" id="editKota{{ $item->id }}" name="kota" value="{{ $item->kota }}" required>
          </div>
          <div class="mb-3">
            <label for="editAlamat{{ $item->id }}" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="editAlamat{{ $item->id }}" name="alamat" value="{{ $item->alamat }}" required>
          </div>
          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach










  <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Data Tabel -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
      $(document).ready(function () {
      $('#example').DataTable();
      });
    </script>
  </body>
</html>