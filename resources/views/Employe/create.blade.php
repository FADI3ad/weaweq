<!DOCTYPE html>
<html dir="ltr" lang="en">


@include('parts.head')

<body>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        @include('parts.header')


        @include('parts.asidebar')

        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Students</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <a href="{{ route('employe.create') }}">Add New</a>
                                    </li>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Bread crumb -->

            <!-- Container fluid -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('employe.store') }}"
                                    enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="ssn"
                                                class="col-sm-3 text-end control-label col-form-label">SSN</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="ssn"
                                                    placeholder="SSN Here" name="ssn" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fname"
                                                class="col-sm-3 text-end control-label col-form-label">Fname</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="fname"
                                                    placeholder="First Name Here" name="fname" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fname"
                                                class="col-sm-3 text-end control-label col-form-label">Lname</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="lname"
                                                    placeholder="Last Name Here" name="lname" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email"
                                                class="col-sm-3 text-end control-label col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="Email Here" name="email" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="image"
                                                class="col-sm-3 text-end control-label col-form-label">Image</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" id="image"
                                                    placeholder="First Name Here" name="image" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 text-end control-label col-form-label" for="gender">Gender</label>
                                            <div class="col-md-9 d-flex align-items-center gap-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender" id="genderMale" value="male" required>
                                                    <label class="form-check-label" for="genderMale">Male</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="female">
                                                    <label class="form-check-label" for="genderFemale">Female</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="dno" class="col-sm-3 text-end control-label col-form-label">Department</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="department" id="Department" placeholder="Enter department">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="border-top">
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-primary">
                                                Add
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Content -->

            </div>
            <!-- End Container fluid -->

            <!-- footer -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by
                <a href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- End footer -->

        </div>
        <!-- End Page wrapper -->
    </div>
  @include('parts.scripts')
</body>

</html>
