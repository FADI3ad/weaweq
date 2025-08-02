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
                        <h4 class="page-title">Employees</h4>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Basic Datatable</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th width="10%">SSN</th>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Image</th>
                                                <th>Gender</th>
                                                <th>Department</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(count($employes) > 0)
                                                @foreach ($employes as $index => $employe)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $employe->ssn }}</td>
                                                        <td>{{ $employe->fname }} {{ $employe->lname }}</td>
                                                        <td>{{ $employe->email }}</td>
                                                        <td>
                                                            @if($employe->image)
                                                                <img src="{{ asset('uploads/' . $employe->image) }}" alt="Image" width="50" height="50">
                                                            @else
                                                                N/A
                                                            @endif
                                                        </td>
                                                        <td>{{ ucfirst($employe->gender) }}</td>
                                                        <td>{{ $employe->department }}</td>
                                                        <td>

                                                            <a href="{{ route('employe.edit', $employe->id) }}" class="btn btn-sm btn-primary">Edit</a>


                                                            <form action="{{ route('employe.destroy', $employe->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Are you sure you want to delete this employee?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="8" class="text-center">No Employees Found</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>


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
    <!-- End Wrapper -->
  @include('parts.scripts')
</body>

</html>
