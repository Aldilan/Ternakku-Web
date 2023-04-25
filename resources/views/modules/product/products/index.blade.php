<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TernakKu</title>

    <!-- Custom fonts for this template-->
    @include('partials.linkStyle')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('partials.sidebarDashboard')
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                @include('partials.navbarDashboard')

                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Products</h1>
                        <a class="btn btn-success mx-4" href="{{ url('product/create') }}">Add Product</a>

                    </div>

                    <div class="container-fluid">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Products Data</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Product Name</th>
                                                <th>Description</th>
                                                <th>Stock</th>
                                                <th>Sold</th>
                                                <th>Buying Price</th>
                                                <th>Base Price</th>
                                                <th>Final Price</th>
                                                <th>Image</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            @php
                                                $i = 0;
                                            @endphp
                                            @foreach ($products as $product)
                                                @php
                                                    $i++;
                                                @endphp
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $product->product_name }}</td>
                                                    <td>{{ $product->description }}</td>
                                                    <td>{{ $product->product_stock }}</td>
                                                    <td>{{ $product->product_sold }}</td>
                                                    <td>{{ $product->buying_price }}</td>
                                                    <td>{{ $product->base_price }}</td>
                                                    <td>{{ $product->final_price }}</td>
                                                    <td>
                                                        <img src="{{ url('/storage/images/' . $product->product_img) }}"
                                                            class="img-thumbnail"
                                                            alt="{{ $product->product_name . ' picture' }}" />
                                                    </td>
                                                    <td>
                                                        <form action="{{ url('product/' . $product->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn" type="submit"
                                                                onclick="return confirm('Are you sure you want to delete this data?')"><i
                                                                    class="fa fa-trash"></i></button>

                                                        </form>
                                                        <button class="btn"> <a class="fas fa-edit"
                                                                href="{{ url('product/' . $product->id . '/edit') }}"></a>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-success" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')

    @include('partials.linkVendor')

</body>

</html>
