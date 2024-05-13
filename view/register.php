<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <nav class="navbar navbar-light bg-light mt-4 mb-4">
                    <span class="navbar-text m-auto">
                        <h2>Register To Proceed.</h2>
                    </span>
                </nav>
                <form action="../config/register_process.php" method="post">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Username:</label>
                        <input type="text" name="uname" class="form-control" aria-label="Username"
                            placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-form-label">Password:</label>
                        <input type="password" name="upass" class="form-control" id="inputPassword3" aria-label="Password"
                            placeholder="Password">
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>