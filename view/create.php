<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Student Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-text m-auto">
                <h2>Create New Student Data.</h2>
            </span>
            <a href="homepage.php" class="btn btn-danger">Go Back</a>
        </nav>
        <div class="card mt-4">
            <div class="card-body d-flex justify-content-center">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                        <form action="../config/insert_data.php" method="post" class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputName">Student Name:</label>
                                    <input type="text" class="form-control" id="inputName" name="name"
                                        placeholder="Student Name" required>
                                    <div class="invalid-feedback">Please enter your name.</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputClass">Class:</label>
                                    <input type="number" class="form-control" id="inputClass" name="class"
                                        placeholder="Class" required>
                                    <div class="invalid-feedback">Please enter your class.</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAge">Student's Age:</label>
                                    <input type="number" class="form-control" id="inputAge" name="age" placeholder="Age"
                                        required>
                                    <div class="invalid-feedback">Please enter your age.</div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Address:</label>
                                <input type="text" class="form-control" id="inputAddress" name="address"
                                    placeholder="1234 Main St" required>
                                <div class="invalid-feedback">Please enter your address.</div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputContact">Contact Number:</label>
                                    <input type="tel" class="form-control" name="contact" id="inputContact"
                                        pattern="[0-9]{10}" required>
                                    <div class="invalid-feedback">Please enter a valid contact number.</div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mt-4" name="addStudent" value="add">Create
                                Student Data</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <img src="../img/s5.png" alt="Student Image" srcset="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>