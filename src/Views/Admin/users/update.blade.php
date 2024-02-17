
@extends('layout.master')

@section('content')
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1>Cập nhật Người Dùng: {{ $user['username'] }}</h1>
                @if (!empty($_SESSION['success']))
                    <div class="alert alert-success">
                        {{ $_SESSION['success'] }}
                    </div>

                    @php
                        $_SESSION['success'] = null;
                    @endphp
                @endif
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" required value="{{ $user['username'] }}"
                            placeholder="Enter name" name="name">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="avatar" class="form-label">Avatar:</label>
                        <input type="file" class="form-control" id="avatar" placeholder="Enter avatar" name="avatar">
                        <img src="{{ $user['avatar'] }}" width="100px" style="margin: 10px">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" required value="{{ $user['email'] }}"
                            placeholder="Enter email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="text" class="form-control" id="password" required value="{{ $user['password'] }}"
                            placeholder="Enter password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/admin/users" class="btn btn-info">Back</a>
                </form>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
    </div>
@endsection
