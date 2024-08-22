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
                @foreach ($post as $item)
                    <tr>
                        <td>{$item->id}</td>
                        <td>{$item->name}</td>
                        <td>{$item->address}</td>
                        <td>{$item->phoneno}</td>
                        <td>{$item->description}</td>
                        <td class="d-flex gap-2">
                            <a href="{{ route('posts.edit', $item) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('posts.delete', $item) }}">
                                <a href="" class="btn btn-danger">Delete</a>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>
    </div>
</body>

</html>
