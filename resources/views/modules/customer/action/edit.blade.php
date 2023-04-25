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
                        <a class="me-3" href="{{ url('customer') }}"><img src="{{ url('img/back.svg') }}" /></a>
                    </div>

                    <div class="container-fluid">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Update User</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <form action="{{ url('customer/' . $user['id']) }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div class="mb-3">
                                                <input type="hidden" name="usernameHidden"
                                                    value="{{ $user->username }}">
                                                <label class="form-label" for="username">Username</label>
                                                <input type="text"
                                                    class="form-control @error('username') is-invalid @enderror"
                                                    name="username" disabled id="username"
                                                    value="{{ $user->username }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="name">Name</label>
                                                <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    name="name" id="name" value="{{ $user->nama_pengguna }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="email">Email</label>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" id="email" value="{{ $user->email }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="phoneNumber">Phone Number</label>
                                                <input type="number"
                                                    class="form-control @error('phoneNumber') is-invalid @enderror"
                                                    name="phoneNumber" id="phoneNumber" value="{{ $user->no_telp }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="newPassword">New Password</label>
                                                <input type="password"
                                                    class="form-control @error('newPassword') is-invalid @enderror"
                                                    name="newPassword" id="newPassword">
                                                <div class="d-flex font-weight-light text-muted">
                                                    <span class="mr-1 text-danger">*</span>
                                                    <span>Not required</span>
                                                </div>

                                            </div>

                                            <button type="submit" class="btn btn-success">Update</button>
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
