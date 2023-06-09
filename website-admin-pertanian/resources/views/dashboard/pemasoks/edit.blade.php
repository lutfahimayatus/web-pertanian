<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Pemasok</title>

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
            <h2><span class="lab la-dashboard"></span> <span>MAYASARI</span></h2>
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
            Pemasok
        </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" />
            </div>

            <div class="user-wrapper">
            <img width="30" height="30" src="https://img.icons8.com/metro/26/gender-neutral-user.png" alt="gender-neutral-user"/>
                <div>
                    <h4>Username</h4>
                </div>
            </div>
      </header>
      <main>
        <!-- container -->
        <div class="container">
            <div class="row my-3">
                <div class="col-md">
                    <h2><i class="bi bi-plus-circle"></i> Edit Data Produk</h2>
                </div>
                <hr>
            </div>
            <div class="row">
              <div class="col-md">
                <form action="{{route ('pemasoks.create') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="name" class="form-label">Nama Pemasok</label>
                    <input type="text" name="nama_pemasok" class="form-control w-50" id="name" placeholder="nama pemasok" autocomplete="off" required>
                  </div>
                  <div class="mb-3">
                    <label for="no_telp" class="form-label">Nomor Telphone</label>
                    <input type="number" name="no_telp" class="form-control w-50" id="no_telp" placeholder="nomor telphone" autocomplete="off" required>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control w-50"  name="email"  id="email" placeholder="email address" autocomplete="off" required>
                  </div>
                  <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Pemasok</label>
                    <textarea class="form-control w-50" name="alamat" id="alamat" rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">kirim</button>
                </form>
              </div>
            </div>
        </div>
      </main>
    </div>















  <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </script>
  </body>
</html>