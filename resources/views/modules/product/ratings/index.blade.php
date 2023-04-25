<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TernakKu</title>

    @include('partials.linkStyle')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('partials.sidebarDashboard')
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                @include('partials.navbarDashboard')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Ratings</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Ratings Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Produk</th>
                                            <th>Ulasan</th>
                                            <th>Rating</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>dilsky</td>
                                            <td>Sekop</td>
                                            <td>Barang ini rusak lebih baik membeli balls</td>
                                            <td>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td>clausky</td>
                                            <td>Sekop</td>
                                            <td>dilsky bohong ini keren bangt</td>
                                            <td>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td>kaysky</td>
                                            <td>Sekop</td>
                                            <td>bener clausky bagus bngtt cuyyy</td>
                                            <td>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td>rezsky</td>
                                            <td>Sekop</td>
                                            <td>KERJA KERJA KERJA KERJA</td>
                                            <td>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('sweetalert::alert')
    @include('partials.logoutModal')
    @include('partials.linkVendor')

</body>

</html>
