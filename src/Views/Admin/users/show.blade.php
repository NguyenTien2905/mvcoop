
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
                    
                    <h1> Người Dùng: {{$user['username']}}</h1>
            
                    <table class="table">
                        <tr>
                            <th>Tên trường</th>
                            <th>Giá trị</th>
                        </tr>
                        <tr>
                            <td>ID</td>
                            <td>{{$user['id']}}</td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>{{$user['username']}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{$user['email']}}</td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>{{$user['password']}}</td>
                        </tr>
                        <tr>
                            <td>Avatar</td>
                            <td><img src="{{$user['avatar']}}" width="150px">
                            </td>
                        </tr>
                    </table>
            
                    <a href="/admin/users" class="btn btn-info">Back</a>
            
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

    </div>
@endsection
