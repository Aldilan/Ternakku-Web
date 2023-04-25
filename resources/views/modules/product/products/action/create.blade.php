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
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                </br>
                </br>

                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <a class="me-3" href="{{ url('product') }}"><img src="{{ url('img/back.svg') }}" /></a>
                    </div>

                    <div class="container-fluid">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Add Product</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <form action="{{ url('product') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="custom-file mb-3">
                                                <label class="custom-file-label" for="photo">Insert Photo</label>
                                                </br>
                                                <input type="file"
                                                    class="custom-file-input @error('photo') is-invalid @enderror"
                                                    name="photo" id="photo">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="name">Product Name</label>
                                                <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    name="name" id="name">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="category">Category</label>
                                                <select class="form-control @error('category') is-invalid @enderror"
                                                    id="exampleFormControlSelect1" name="category" id="category">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">
                                                            {{ $category->category_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="description">Description</label>
                                                <input type="text"
                                                    class="form-control @error('description') is-invalid @enderror"
                                                    name="description" id="description">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="stock">Stock</label>
                                                <input type="number"
                                                    class="form-control @error('stock') is-invalid @enderror"
                                                    name="stock" id="stock">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="buyingPrice">Buying Price</label>
                                                <input type="number"
                                                    class="form-control @error('buyingPrice') is-invalid @enderror"
                                                    name="buyingPrice" id="buyingPrice">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basePrice">Base Price</label>
                                                <input type="number"
                                                    class="form-control @error('basePrice') is-invalid @enderror"
                                                    name="basePrice" id="basePrice">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="finalPrice">Final Price</label>
                                                <input type="number"
                                                    class="form-control @error('finalPrice') is-invalid @enderror"
                                                    name="finalPrice" id="finalPrice">
                                            </div>
                                            <button type="submit" class="btn btn-success">Add</button>
                                        </form>
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

    @include('sweetalert::alert')
    @include('partials.logoutModal')
    @include('partials.linkVendor')

</body>

</html>
