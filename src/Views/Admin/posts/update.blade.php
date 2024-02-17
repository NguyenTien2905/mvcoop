
@extends('layout.master')

@section('content')
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1>Cập nhật Bài viết: {{$post['title']}}</h1>
                @if(!empty($_SESSION['success']))
                <div class="alert alert-success">
                    {{ $_SESSION['success'] }}
                </div>

                @php
                    $_SESSION['success'] = null;
                @endphp
            @endif
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3 mt-3">
                    <label for="category_id" class="form-label">Category:</label>
                    <select class="form-select" aria-label="Default select example" name="category_id">
                        {{-- <option selected>Chọn danh mục</option> --}}
                        @foreach ($categories as $category)
                            <option 
                            @if ($post['category_id'] == $category['id'])
                            selected
                            @endif
                            value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                        @endforeach
                        </select>
                </div>
                <div class="mb-3 mt-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control" id="title" required 
                        value=" {{$post['title']}}"
                        placeholder="Enter title" name="title">
                </div>
                <div class="mb-3 mt-3">
                    <label for="exceprt">Excerpt:</label>
                    <textarea class="form-control" rows="3" id="exceprt" name="excerpt">{{$post['excerpt']}}</textarea>
                </div>
                <div class="mb-3 mt-3">
                    <label for="content">Context:</label>
                    <textarea class="form-control" rows="5" id="content" name="content" required>{{$post['content']}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image:</label>
                    <input type="file" class="form-control" id="image" 
                        placeholder="Enter image" name="image">
                    <img src="{{$post['image']}}" alt="" width="150px" style="margin: 10px">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/admin/posts" class="btn btn-info">Back</a>
            </form>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
    </div>
@endsection