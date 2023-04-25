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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Categories</h1>
                        <a class="btn btn-success mx-4" href="{{ url('category/create') }}">Add Category</a>
                    </div>

                    <div class="container-fluid">

                        <!-- Page Heading -->


                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Categories Data</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @php
                                                $i = 0;
                                            @endphp
                                            @foreach ($categories as $category)
                                                @php
                                                    $i += 1;
                                                @endphp

                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $category->category_name }}</td>
                                                    <td>
                                                        <img src="{{ url('/storage/images/' . $category->category_image) }}"
                                                            class="img-thumbnail"
                                                            alt="{{ $category->category_name . ' picture' }}" />
                                                    <td>
                                                        <form action="{{ url('category/' . $category->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn" type="submit"
                                                                onclick="return confirm('Are you sure you want to delete this data?')"><i
                                                                    class="fa fa-trash"></i></button>

                                                        </form>
                                                        <button class="btn"> <a class="fas fa-edit"
                                                                href="{{ url('category/' . $category->id . '/edit') }}"></a>
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
