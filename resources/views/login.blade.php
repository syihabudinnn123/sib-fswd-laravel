<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        label {
            display: block;
        }
    </style>
    <title>Halaman Login</title>
</head>
<body>
    <h1 class="text-center">Login</h1>
    <div class="container">
        <form method="POST" action="index.php" role="form">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name ="username" id="username" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="ingataku" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>    
        <button type="submit" name ="login" class="btn btn-primary">Login</button>
        </form>
    </div>
    
   
</body>
</html>