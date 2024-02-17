
@extends('layout.master')

@section('content')
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1>Cập nhật Danh mục: {{$category['name']}}</h1>
                @if(!empty($_SESSION['success']))
                        <div class="alert alert-success">
                            {{ $_SESSION['success'] }}
                        </div>
        
                        @php
                            $_SESSION['success'] = null;
                        @endphp
                    @endif
                <div class="row">
                    <form action="" method="POST">
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" required 
                                value="{{$category['name']}}"
                                placeholder="Enter name" name="name">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/admin/categories" class="btn btn-info">Back</a>
                    </form>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
    </div>
@endsection