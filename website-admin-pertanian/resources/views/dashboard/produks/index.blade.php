<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk</title>

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
    <link rel="stylesheet" href="/css/produk.css">
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
            Produk
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
        <div class="container-header">
          <div class="row my-3">
            <div class="col-md">
              <h2>Data Produk</h2>
            </div>
            <hr>
            <div class="row">
            <div class="col-md">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProdukModal">
        <i class="bi bi-plus"></i> Tambah Produk
      </button>
              <a href="#" class="btn btn-success ms-1" target="_blank"><i class="bi bi-printer"></i> Print Data Produk</a>
            </div>
          </div>
          </div>
          <div class="row my-5 d-block">
            <div class="col-md">
              <table id="example" class="table table-striped col-lg-8" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Stok</th>
                        <th>Option</th>
                    </tr>
                </thead>
                @foreach ($produk as $pr)
                <tbody>
                    <tr>
                          <td>{{ $pr -> nama_produk }}</td>
                          <td>{{ $pr -> harga}}</td>
                          <td>{{ $pr -> deskripsi_produk}}</td>
                          <td>{{ $pr -> stok}}</td>
                          <td>
                            <a href="" class="btn btn-info"><i class="bi bi-eye"></i></a>
                            <form action="{{ url('show-produk/'.$pr->id) }}" method="post">
                            @csrf
                            @method('SHOW')
                            </form>
                            
                           <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editProdukModal{{ $pr->id }}"><i class="bi bi-pencil-square"></i></button>

                            <form action="{{ url('delete-produk/'.$pr->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                            </form>
                          </td>
                      </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </main>
    </div>

<!-- Tambah Produk Modal -->
<div class="modal fade" id="addProdukModal" tabindex="-1" aria-labelledby="addProdukModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addProdukModalLabel">Tambah Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Form Tambah Produk -->
        <form action="{{ route('produks.create') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="namaProduk" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="namaProduk" name="nama_produk" required>
          </div>
          <div class="mb-3">
            <label for="hargaProduk" class="form-label">Harga</label>
            <input type="number" class="form-control" id="hargaProduk" name="harga" required>
          </div>
          <div class="mb-3">
            <label for="deskripsiProduk" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsiProduk" name="deskripsi_produk" required></textarea>
          </div>
          <div class="mb-3">
            <label for="stokProduk" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stokProduk" name="stok" required>
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>


  @foreach ($produk as $pr)
    <!-- Modal Edit Produk -->
    <div class="modal fade" id="editProdukModal{{ $pr->id }}" tabindex="-1" aria-labelledby="editProdukModalLabel{{ $pr->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProdukModalLabel{{ $pr->id }}">Edit Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('produk.update', $pr->id) }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="editNamaProduk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="editNamaProduk" name="nama_produk" value="{{ $pr->nama_produk }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="editHargaProduk" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="editHargaProduk" name="harga" value="{{ $pr->harga }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="editDeskripsiProduk" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="editDeskripsiProduk" name="deskripsi_produk" required>{{ $pr->deskripsi_produk }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editStokProduk" class="form-label">Stok</label>
                            <input type="number" class="form-control" id="editStokProduk" name="stok" value="{{ $pr->stok }}" required>
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