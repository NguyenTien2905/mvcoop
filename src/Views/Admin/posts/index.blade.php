<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Danh sách Bài viết</h1>
        
        <a href="/admin" class="btn btn-danger">Trang chủ</a>
        <a href="/admin/posts/create" class="btn btn-primary">Thêm mới</a>
        <div class="row">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Excerpt</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
                @foreach ($posts as $post)
                   <tr>
                    <td>{{$post['id']}}</td>
                    <td>{{$post['title']}}</td>
                    <td><img src="{{$post['image']}}" width="100px"></td>
                    <td>{{$post['excerpt']}}</td>
                    <td>{{$post['name']}}</td>
                    <td>
                        <a class="btn btn-warning" href="/admin/posts/{{ $post['id']}}/update">Update</a>
                        <a class="btn btn-info" href="/admin/posts/{{ $post['id']}}/show">Details</a>
                        <a class="btn btn-danger"
                            onclick="return confirm('Có muốn xóa hay không ?')"
                            href="/admin/posts/{{ $post['id']}}/delete">Delete</a>
                    </td>
                </tr>
                @endforeach
                
            </table>
        </div>
    </div>
</body>

</html>