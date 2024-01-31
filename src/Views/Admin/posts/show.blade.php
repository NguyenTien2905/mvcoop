<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xem chi tiết Người dùng</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <h1> Người Dùng: {{$user['username']}}</h1>

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

</body>

</html>