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
        <h1>Danh sách Người Dùng</h1>
        <a href="/admin/users/create" class="btn btn-info">Thêm mới</a>
        <div class="row">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
                @foreach ($users as $user)
                   <tr>
                    <td><?=$user['id']?></td>
                    <td><?=$user['username']?></td>
                    <td><?=$user['email']?></td>
                    <td><?=$user['password']?></td>
                    <td></td>
                </tr>
                @endforeach
                
            </table>
        </div>
    </div>
</body>

</html>