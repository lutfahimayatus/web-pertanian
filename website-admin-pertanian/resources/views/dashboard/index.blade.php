<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Line CSS Template -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- icons bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
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
                    <a href=""><span class="las la-igloo"></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="/dashboard/produks"><span class="las la-shopping-bag"></span><span>Produk</span></a>
                </li>
                <li>
                    <a href="/dashboard/pemasoks"><span class="las la-clipboard-list"></span><span>Pemasok</span></a>
                </li>
                <li>
                    <a href="/dashboard/kotas"><span class="las la-city"></span><span>Kota</span></a>
                </li>
                <li>
                    <a href="/dashboard/transaksis"><span class="las la-receipt"></span><span>Transaksi</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Sidebar -->

    <div class="main-content">
        <!-- Header -->
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>

                Dashboard
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" value="{{ old('email') }}"/>
            </div>

            <div class="user-wrapper">
            <img width="30" height="30" src="https://img.icons8.com/metro/26/gender-neutral-user.png" alt="gender-neutral-user"/>
                <div>
                    <small>Administrator</small>
                    <div class="dropdown">
                        <button class="btn btn-tertiary dropdown-toggle" type="submit" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </button>
                        <form action="/logout" method="post">
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/login" class="text-decoration-none"><i class="bi bi-box-arrow-left text-danger"></i> Logout</a></li>
                        </ul>
                        </form>
                        </div>
                </div>
            </div>
        </header>
        <!-- End Header -->

        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>{{$pemasokCount}}</h1>
                        <span>Total Pemasoks</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>{{$produkCount}}</h1>
                        <span>Total Produks</span>
                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>30</h1>
                        <span>Orders</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>$40</h1>
                        <span>Balence</span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet"></span>
                    </div>
                </div>
            </div>

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Daftar Transaksi</h3>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>ID Transaksi</td>
                                            <td>Pelanggan</td>
                                            <td>Status</td>
                                            <td>Due Date</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>UI/UX Dsign</td>
                                            <td>UI Team</td>
                                            <td>
                                                <span class="status purple"></span>
                                                Review
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>UIShop App</td>
                                            <td>Mobile Team</td>
                                            <td>
                                                <span class="status orange"></span>
                                                Pending
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>Top Produks</h3>
                        </div>

                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Insektisida</h4>
                                    </div>
                                </div>
                                <div class="contact">
                                    <button type="submit" class="btn btn-primary">Detail</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Insektisida</h4>
                                    </div>
                                </div>
                                <div class="contact">
                                    <button type="submit" class="btn btn-primary">Detail</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Insektisida</h4>
                                    </div>
                                </div>
                                <div class="contact">
                                    <button type="submit" class="btn btn-primary">Detail</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Insektisida</h4>
                                    </div>
                                </div>
                                <div class="contact">
                                    <button type="submit" class="btn btn-primary">Detail</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Insektisida</h4>
                                    </div>
                                </div>
                                <div class="contact">
                                    <button type="submit" class="btn btn-primary">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    
    </script>
  </body>
</html>