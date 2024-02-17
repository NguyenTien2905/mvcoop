
@extends('layout.master')

@section('content')
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Xem chi tiết Danh mục</h1>
                <div class="container">
                    
                    <h1> Danh mục: {{$category['name']}}</h1>
            
                    <table class="table">
                        <tr>
                            <th>Tên trường</th>
                            <th>Giá trị</th>
                        </tr>
                        <tr>
                            <td>ID</td>
                            <td>{{$category['id']}}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>{{$category['name']}}</td>
                        </tr>
                
                    </table>
            
                    <a href="/admin/categories" class="btn btn-info">Back</a>
            
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

    </div>
@endsection
