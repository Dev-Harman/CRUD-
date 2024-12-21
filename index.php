<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="./insert.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ENTER YOUR NAME</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ENTER YOUR FATHER'S NAME</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fname">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ENTER YOU MOTHERS NAME</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mname">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ENTER YOUR MOBILE NUMBER</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="number">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ENTER YOUR EMAIL ID</label>
            <input type="email" class="form-control" id="exampleInputPassword1" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ENTER PASSWORD</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
        </div>
        <div class="mb-3">
            <label for="exampleInputFile" class="form-label">UPLOAD IMAGE</label>
            <input type="file" class="form-control" id="exampleInputFile" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>