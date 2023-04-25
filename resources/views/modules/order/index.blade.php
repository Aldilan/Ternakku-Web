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
    <div id="wrapper">


        @include('partials.sidebarDashboard')
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                @include('partials.navbarDashboard')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Orders</h1>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Delete All
                            </label>
                        </div>

                    </div>

                    <div class="container-fluid">

                        <!-- Page Heading -->


                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Orders Data</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>No Resipt</th>
                                                <th>Username</th>
                                                <th>Nama</th>
                                                <th>Produk</th>
                                                <th>Qty</th>
                                                <th>Address</th>
                                                <th>Deskripsi</th>
                                                <th>Shiping Method</th>
                                                <th>Payment Method</th>
                                                <th>Price</th>
                                                <th colspan="2" class="text-center">Status</th>
                                                <th>Opsi</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>234326873465</td>
                                                <td>Alsky</td>
                                                <td>ALdilan</td>
                                                <td>Sekop</td>
                                                <td>2</td>
                                                <td>kp. ciggombong Rt 08/ Rw 08 Desa Konoha</td>
                                                <td>Sekop memudahkan anda untuk menggali tanah</td>
                                                <td>okeii</td>
                                                <td>iyahhh kp. ciggombong Rt 08/ Rw 08 Desa Konoha</td>
                                                <td>100</td>
                                                <td><a class="text-gray-600" href="manage-orders.html">Approve</a>
                                                </td>
                                                <td><a class="text-gray-600" href="manage-orders.html">Decline</a>
                                                </td>
                                                <td><button class="btn"><i class="fa fa-trash"></i><i
                                                            class="fas fa-pencil"></i></button></td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


            </div>


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
