<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cập nhật Bài viết</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <h1>Cập nhật Bài viết: {{$post['']}}</h1>

        <div class="row">
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
                        
                        @if ($post['category_id'] == $category['id'])
                            <option value="{{ $post['id'] }}" selected>{{ $category['name'] }}</option>
                        @endif
                        
                            <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
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
                    <textarea class="form-control" rows="3" id="exceprt" name="excerpt" required>
                       {{$post['excerpt']}}
                    </textarea>
                </div>
                <div class="mb-3 mt-3">
                    <label for="content">Context:</label>
                    <textarea class="form-control" rows="5" id="content" name="content" required>
                        {{$post['content']}}
                    </textarea>
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
    </div>

</body>

</html>