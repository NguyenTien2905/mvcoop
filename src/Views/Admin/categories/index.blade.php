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
        <h1>Danh sách Danh mục</h1>
        <a href="/admin/categories/create" class="btn btn-info">Thêm mới</a>
        <div class="row">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                @foreach ($categories as $category)
                <tr>
                     <td>{{ $category['id'] }}</td>
                     <td>{{ $category['name']}}</td>
                     <td>
                        <a class="btn btn-warning" href="/admin/categories/{{ $category['id']}}/update">Update</a>
                        <a class="btn btn-info" href="/admin/categories/{{ $category['id']}}/show">Details</a>
                        <a class="btn btn-danger"
                            onclick="return confirm('Có muốn xóa hay không ?')"
                            href="/admin/categories/{{ $category['id']}}/delete">Delete</a>
                     </td>
                 </tr>
             @endforeach     
        
            </table>
        </div>
    </div>
</body>

</html>