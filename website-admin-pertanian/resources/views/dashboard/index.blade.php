<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Line CSS Template -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <!-- /Public/CSS -->
    <link rel="stylesheet" href="/css/dashboard.css">
  </head>
  <body>

  <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-dashboard"></span> <span>Dashboard</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-igloo"></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-users"></span><span>Customer</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span><span>Project</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-shopping-bag"></span><span>Order</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-receipt"></span><span>Inventory</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user-circle"></span><span>Account</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span><span>Task</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h3>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>

                Dashboard
            </h3>

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
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>10</h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>20</h1>
                        <span>Projects</span>
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
                        <span>Income</span>
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
                            <h3>Recent Project</h3>

                            <button>See alls <span class="las la-arrow-right"></span></button>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Project Title</td>
                                            <td>Department</td>
                                            <td>Status</td>
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
                                            <td>Web Development</td>
                                            <td>Frontend</td>
                                            <td>
                                                <span class="status pink"></span>
                                                In Progres
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
                                        <tr>
                                            <td>UI/UX Dsign</td>
                                            <td>UI Team</td>
                                            <td>
                                                <span class="status purple"></span>
                                                Review
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Web Development</td>
                                            <td>Frontend</td>
                                            <td>
                                                <span class="status pink"></span>
                                                In Progres
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
                                        <tr>
                                            <td>UI/UX Dsign</td>
                                            <td>UI Team</td>
                                            <td>
                                                <span class="status purple"></span>
                                                Review
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Web Development</td>
                                            <td>Frontend</td>
                                            <td>
                                                <span class="status pink"></span>
                                                In Progres
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
                                        <tr>
                                            <td>UI/UX Dsign</td>
                                            <td>UI Team</td>
                                            <td>
                                                <span class="status purple"></span>
                                                Review
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Web Development</td>
                                            <td>Frontend</td>
                                            <td>
                                                <span class="status pink"></span>
                                                In Progres
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
                            <h3>New Customer</h3>

                            <button>See alls <span class="las la-arrow-right"></span></button>
                        </div>

                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Leon S.Kurniawan</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Leon S.Kurniawan</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Leon S.Kurniawan</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Leon S.Kurniawan</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Leon S.Kurniawan</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Leon S.Kurniawan</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Leon S.Kurniawan</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>