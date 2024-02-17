
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
                            <label for="category_id" class="form-label">Category:</label>
                            <select class="form-select" aria-label="Default select example" name="category_id">
                                <option selected>Chọn danh mục</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="title" class="form-label">Title:</label>
                            <input type="text" class="form-control" id="title" required
                                placeholder="Enter title" name="title">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="exceprt">Excerpt:</label>
                            <textarea class="form-control" rows="3" id="exceprt" name="excerpt" required></textarea>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="content">Context:</label>
                            <textarea class="form-control" rows="5" id="content" name="content" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image:</label>
                            <input type="file" class="form-control" id="image" placeholder="Enter image"
                                name="image">
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
