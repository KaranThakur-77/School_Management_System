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
                        <h2>Login To Proceed.</h2>
                    </span>
                </nav>
                <div class="col-md-6 m-auto">
                    <div class="card ">
                        <div class="card-body">
                            <?php
                            if (isset($_GET['error_msg'])) {
                                echo '<h5 style="text-align:center; color:red;">' . $_GET['error_msg'] . '</h5>';
                            }

                            ?>
                        </div>
                    </div>
                </div>

                <form action="../config/login_process.php" method="POST">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">Username:</label>
                        <input type="text" class="form-control" id="inputEmail3" aria-label="Email Address"
                            placeholder="Username" name="uname">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword3" aria-label="Password"
                            placeholder="Password" name="upass">
                    </div>

                    <div class="col-md-6 mt-4 m-auto">
                        <a href="register.php" class="btn btn-warning">Don't have an accout? <span
                                style="text-decoration: underline;">Register Here.</span></a>
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" name="isPressed" class="btn btn-primary">Sign in</button>
                    </div>
                </form>
            </div>
        </div>

    </main>
</body>

</html>