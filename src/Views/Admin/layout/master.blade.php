<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title') - Admin</title>

    <!-- Custom fonts for this template-->
    <link href="\assets\admin\vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="\assets\admin\css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('components.sidebar')
        <!-- End of Sidebar -->


        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                    @include('components.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                    @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        </div>

    </div>
    <!-- End of Page Wrapper -->
    @include('components.scroll&logout')



    <!-- Bootstrap core JavaScript-->
    <script src="\assets\admin\vendor/jquery/jquery.min.js"></script>
    <script src="\assets\admin\vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="\assets\admin\vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="\assets\admin\js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="\assets\admin\vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="\assets\admin\js/demo/chart-area-demo.js"></script>
    <script src="\assets\admin\js/demo/chart-pie-demo.js"></script>

</body>

</html>
