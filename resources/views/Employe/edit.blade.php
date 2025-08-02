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
                        <h4 class="page-title">Edit Employee</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('employe.index') }}">Employees</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Bread crumb -->

            <!-- Container fluid -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Edit Employee Details</h5>

                                <form action="{{ route('employe.update', $employe->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group mb-3">
                                        <label>SSN</label>
                                        <input type="text" name="ssn" class="form-control" value="{{ $employe->ssn }}" required>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="fname" class="form-control" value="{{ $employe->fname }}" required>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Last Name</label>
                                        <input type="text" name="lname" class="form-control" value="{{ $employe->lname }}" required>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ $employe->email }}" required>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Gender</label><br>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="gender" value="male" class="form-check-input" {{ $employe->gender == 'male' ? 'checked' : '' }}>
                                            <label class="form-check-label">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="gender" value="female" class="form-check-input" {{ $employe->gender == 'female' ? 'checked' : '' }}>
                                            <label class="form-check-label">Female</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Department</label>
                                        <input type="text" name="department" class="form-control" value="{{ $employe->department }}">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Current Image</label><br>
                                        @if($employe->image)
                                            <img src="{{ asset('uploads/' . $employe->image) }}" alt="Image" width="80">
                                        @else
                                            N/A
                                        @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Change Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>

                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="{{ route('employe.index') }}" class="btn btn-secondary">Cancel</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Container fluid -->

            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by
                <a href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>

        </div>
    </div>

    @include('parts.scripts')

</body>
</html>
