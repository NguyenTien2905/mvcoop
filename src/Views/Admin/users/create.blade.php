
@extends('layout.master')

@section('content')
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Thêm mới Bài viết mới</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" required placeholder="Enter name"
                            name="name">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="avatar" class="form-label">Avatar:</label>
                        <input type="file" class="form-control" id="avatar" placeholder="Enter avatar" name="avatar">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" required placeholder="Enter email"
                            name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" required placeholder="Enter password"
                            name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
    </div>
@endsection
