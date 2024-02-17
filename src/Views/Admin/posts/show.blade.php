
@extends('layout.master')

@section('content')
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Xem chi tiết Bài viết</h1>
                <div class="container">
                    
                    <h1> Bài viết: {{$post['title']}}</h1>
            
                    <table class="table">
                        <tr>
                            <th>Tên trường</th>
                            <th>Giá trị</th>
                        </tr>
                        <tr>
                            <td>ID</td>
                            <td>{{$post['id']}}</td>
                        </tr>
                        <tr>
                            <td>Title</td>
                            <td>{{$post['title']}}</td>
                        </tr>
                        <tr>
                            <td>Excerpt</td>
                            <td>{{$post['excerpt']}}</td>
                        </tr>
                        <tr>
                            <td>Content</td>
                            <td>{{$post['content']}}</td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>{{$post['name']}}</td>
                        </tr>
                        <tr>
                            <td>Avatar</td>
                            <td><img src="{{$post['image']}}" width="150px">
                            </td>
                        </tr>
                    </table>
            
                    <a href="/admin/posts" class="btn btn-info">Back</a>
            
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

    </div>
@endsection
