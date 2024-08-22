<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <h1>Create Post</h1>
            <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
        </div>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            @method('POST')
            <label class="mt-2 h4" for="name">Name:</label>
            <input class="form-control" type="text" id="name" name="name" placeholder="Enter Your Name">

            <label class="mt-2 h4" for="address">Address:</label>
            <input class="form-control" type="text" id="address" name="address" placeholder="Enter Your Address">

            <label class="mt-2 h4" for="phoneno">Phone Number:</label>
            <input class="form-control" type="text" id="phoneno" name="phoneno"
                placeholder="Enter Your Phone Number">

            <label class="mt-2 h4" for="description">Description:</label>
            <input class="form-control" type="text" id="description" name="description"
                placeholder="Enter Description">

            <button class="mt-2 btn btn-success">Save</button>
        </form>
    </div>
</body>

</html>
