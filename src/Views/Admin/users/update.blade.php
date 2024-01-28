<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cập nhật Người dùng</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <h1>Cập nhật Người Dùng: {{$user['username']}}</h1>

        <div class="row">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" required 
                            value="{{$user['username']}}"   
                        placeholder="Enter name" name="name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="avatar" class="form-label">Avatar:</label>
                    <input type="file" class="form-control" id="avatar"
                        placeholder="Enter avatar" name="avatar">
                    <img src="{{$user['avatar']}}" width="100px" style="margin: 10px">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" required
                            value="{{$user['email']}}"   
                        placeholder="Enter email" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="text" class="form-control" id="password" required
                            value="{{$user['password']}}"   
                        placeholder="Enter password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</body>

</html>