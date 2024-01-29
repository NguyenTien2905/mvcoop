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
        <h1>Đăng nhập</h1>

        @if (!empty($_SESSION['errors']))
            <div class="alert alert-danger">
                <ul>
                    @foreach ($_SESSION['errors'] as $key => $error)
                        <li>Key: {{ $key }} - Error: {{ $error }}</li>                        
                    @endforeach
                </ul>
            </div>
            @php
                unset($_SESSION['errors']);
            @endphp
        @endif

        <div class="row">
            <form action="" method="POST" enctype="multipart/form-data">    
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" 
                        placeholder="Enter email" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" 
                        placeholder="Enter password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>