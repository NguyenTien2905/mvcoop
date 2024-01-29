<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xem chi tiết Danh mục</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

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

    </div>

</body>

</html>