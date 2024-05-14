<!doctype html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Dashboard | Skote - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('/')}}assets/images/favicon.ico">
        <!-- DataTables -->
        <link href="{{asset('/')}}assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('/')}}assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{asset('/')}}assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- summernote Css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css" integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <!-- App js -->
        {{-- <script src="{{asset('/')}}assets/js/plugin.js"></script> --}}

    </head>

    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="{{route('dashboard')}}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('/')}}assets/images/logo.svg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('/')}}assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="{{route('dashboard')}}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('/')}}assets/images/logo-light.svg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('/')}}assets/images/logo-light.png" alt="" height="19">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">Henry</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                                <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
                                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>

                                <form action="{{route('logout')}}" method="POST" id="logoutForm">
                                    @csrf
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>

                            <li>
                                <a href="javascript: void(0);" class=" waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Dashboards</span>
                                </a>

                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    {{-- <span class="badge rounded-pill bg-danger float-end" key="t-hot">Hot</span> --}}
                                    <i class="bx bx-layout"></i>
                                    <span key="t-layouts">Category Module</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="{{route('category.add')}}" key="t-light-sidebar">Add Category</a></li>
                                        <li><a href="{{route('category.manage')}}" key="t-compact-sidebar">Manage Category</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-store"></i>
                                    <span key="t-ecommerce">Blog Module</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('blog.add')}}" key="t-products">Add Blog</a></li>
                                    <li><a href="{{route('blog.manage')}}" key="t-product-detail">Manage Blog </a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-bitcoin"></i>
                                    <span key="t-crypto">Comments Module</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="crypto-wallet.html" key="t-wallet">Manage Comments</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-envelope"></i>
                                    <span key="t-email">Author Module</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="email-inbox.html" key="t-inbox">Add Author</a></li>
                                    <li><a href="email-read.html" key="t-read-email">Manage Author</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-receipt"></i>
                                    <span key="t-invoices">Setting Module</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="invoices-list.html" key="t-invoice-list">Manage</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-briefcase-alt-2"></i>
                                    <span key="t-projects">User Module</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="projects-grid.html" key="t-p-grid">Add User</a></li>
                                    <li><a href="projects-list.html" key="t-p-list">Manage User</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        @yield('body')

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('/')}}assets/libs/jquery/jquery.min.js"></script>
        <script src="{{asset('/')}}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('/')}}assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{asset('/')}}assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('/')}}assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="{{asset('/')}}assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- dashboard init -->
        <script src="{{asset('/')}}assets/js/pages/dashboard.init.js"></script>
        <!-- Required datatable js -->
        <script src="{{asset('/')}}assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{{asset('/')}}assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="{{asset('/')}}assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{asset('/')}}assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="{{asset('/')}}assets/libs/jszip/jszip.min.js"></script>
        <script src="{{asset('/')}}assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="{{asset('/')}}assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="{{asset('/')}}assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="{{asset('/')}}assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="{{asset('/')}}assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
         <!-- Responsive examples -->
         <script src="{{asset('/')}}assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
         <script src="{{asset('/')}}assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

         <!-- summernote js -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote.min.js" integrity="sha512-6rE6Bx6fCBpRXG/FWpQmvguMWDLWMQjPycXMr35Zx/HRD9nwySZswkkLksgyQcvrpYMx0FELLJVBvWFtubZhDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

         <!-- Datatable init js -->
         <script src="{{asset('/')}}assets/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="{{asset('/')}}assets/js/app.js"></script>
    </body>



</html>
