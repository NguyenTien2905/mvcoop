@extends('layout.master')

@section('content')
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Danh sách Danh mục</h1>
                <a href="/admin/categories/create" class="btn btn-info">Thêm mới</a>
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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category['id'] }}</td>
                                            <td>{{ $category['name'] }}</td>
                                            <td>
                                                <a class="btn btn-warning"
                                                    href="/admin/categories/{{ $category['id'] }}/update">Update</a>
                                                <a class="btn btn-info"
                                                    href="/admin/categories/{{ $category['id'] }}/show">Details</a>
                                                <a class="btn btn-danger"
                                                    onclick="return confirm('Có muốn xóa hay không ?')"
                                                    href="/admin/categories/{{ $category['id'] }}/delete">Delete</a>
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
