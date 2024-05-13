<?php
include ("../config/connection.php");

// Initialize variables
$id = null;
$row = [];

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch student data based on the provided ID
    $query = "SELECT * FROM student_table WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id); // Assuming 'id' is an integer, use "i" for integer type
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);


    if (!$result) {
        die("Query Failed: " . mysqli_error($conn));
    } else {
        // Check if the student with the given ID exists
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
        } else {
            die("Error: Student not found.");
        }
    }
} else {
    // Handle the case where 'id' parameter is not set
    die("Error: Student ID not provided.");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-text m-auto">
                <h2>Edit Student's Data</h2>
            </span>
            <a href="table.php" class="btn btn-danger">Go Back</a>
        </nav>
        <div class="card mt-4">
            <div class="card-body d-flex justify-content-center">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                        <form action="../config/update_data.php?id_new=<?php echo $id ?>" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputName">Student Name:</label>
                                    <input type="text" class="form-control" id="inputName" name="name"
                                        placeholder="Student Name"
                                        value="<?php echo isset($row['name']) ? $row['name'] : ''; ?>" required>
                                    <div class="invalid-feedback">Please enter the student's name.</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputClass">Class:</label>
                                    <input type="number" class="form-control" id="inputClass" name="class"
                                        placeholder="Class"
                                        value="<?php echo isset($row['class']) ? $row['class'] : ''; ?>" required>
                                    <div class="invalid-feedback">Please enter the student's class.</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAge">Student's Age:</label>
                                    <input type="number" class="form-control" id="inputAge" name="age" placeholder="Age"
                                        value="<?php echo isset($row['age']) ? $row['age'] : ''; ?>" required>
                                    <div class="invalid-feedback">Please enter the student's age.</div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Address:</label>
                                <input type="text" class="form-control" id="inputAddress" name="address"
                                    placeholder="1234 Main St"
                                    value="<?php echo isset($row['address']) ? $row['address'] : ''; ?>" required>
                                <div class="invalid-feedback">Please enter the student's address.</div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputContact">Contact Number:</label>
                                    <input type="tel" class="form-control" name="contact" id="inputContact"
                                        value="<?php echo isset($row['contact']) ? $row['contact'] : ''; ?>" required>
                                    <div class="invalid-feedback">Please enter a valid contact number.</div>
                                </div>
                            </div>
                            <input type="hidden" name="student_id" value="<?php echo $id; ?>">
                            <button type="submit" class="btn btn-primary mt-4" name="updateStudent">Save
                                Changes</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <img src="../img/s5.png" alt="Student Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>