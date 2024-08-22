<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="navbar">
            <h1 class="text-white bg-danger p-2 rounded-3">POSTS</h1>
            <a href="{{ route('posts.create') }}" class="btn btn-primary">Add New Post</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone No</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Hari</td>
                    <td>Ktm</td>
                    <td>6789</td>
                    <td>this is description</td>
                    <td class="d-flex gap-2">
                        <a href="" class="btn btn-warning">View</a>
                        <a href="" class="btn btn-dark">Edit</a>
                        <form action="">
                            <a href="" class="btn btn-danger">Delete</a>
                        </form>
                    </td>
                </tr>
            </tbody>

        </table>
    </div>
</body>

</html>
