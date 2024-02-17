
@extends('layout.master')

@section('content')
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Danh sách Người Dùng</h1>
                <a href="/admin/users/create" class="btn btn-primary">Thêm mới</a>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Avatar</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user['id'] }}</td>
                                            <td>{{ $user['username'] }}</td>
                                            <td><img src="{{ $user['avatar'] }}" width="100px"></td>
                                            <td>{{ $user['email'] }}</td>
                                            <td>{{ $user['password'] }}</td>
                                            <td>
                                                <a class="btn btn-warning"
                                                    href="/admin/users/{{ $user['id'] }}/update">Update</a>
                                                <a class="btn btn-info"
                                                    href="/admin/users/{{ $user['id'] }}/show">Details</a>
                                                <a class="btn btn-danger"
                                                    onclick="return confirm('Có muốn xóa hay không ?')"
                                                    href="/admin/users/{{ $user['id'] }}/delete">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

    </div>
@endsection
