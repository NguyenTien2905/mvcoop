
@extends('layout.master')

@section('content')
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Danh sách Bài viết</h1>
                <a href="/admin/posts/create" class="btn btn-info">Thêm mới</a>
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
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Excerpt</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ $post['id'] }}</td>
                                            <td>{{ $post['title'] }}</td>
                                            <td><img src="{{ $post['image'] }}" width="100px"></td>
                                            <td>{{ $post['excerpt'] }}</td>
                                            <td>{{ $post['name'] }}</td>
                                            <td>
                                                <a class="btn btn-warning"
                                                    href="/admin/posts/{{ $post['id'] }}/update">Update</a>
                                                <a class="btn btn-info"
                                                    href="/admin/posts/{{ $post['id'] }}/show">Details</a>
                                                <a class="btn btn-danger"
                                                    onclick="return confirm('Có muốn xóa hay không ?')"
                                                    href="/admin/posts/{{ $post['id'] }}/delete">Delete</a>
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
