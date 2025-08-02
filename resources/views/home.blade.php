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
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Basic Datatable</h5>
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
