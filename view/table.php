<?php
include ("../config/connection.php");
?>

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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand">
                            <h3>Student Management System</h3>
                        </a>

                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        <a href="create.php" class="btn btn-success">Add New Data</a>
                    </div>
                </nav>
                <div class="card mt-4">
                    <div class="card-body m-auto">

                        <h3>Students Data:</h3>
                    </div>
                </div>
                <table class="table table-dark table-striped table-hover mt-4">

                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Class</th>
                        <th scope="col">Age</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Address</th>
                        <th scope="col">Actions</th>
                    </tr>
                    <?php
                    $query = "SELECT * FROM student_table";
                    $result = mysqli_query($conn, $query);
                    if (!$result) {
                        die("Query Failed." . mysqli_error($conn));
                    } else {
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><?php echo ($row['id']) ?></td>
                                <td><?php echo ($row['name']) ?></td>
                                <td><?php echo ($row['class']) ?></td>
                                <td><?php echo ($row['age']) ?></td>
                                <td><?php echo ($row['contact']) ?></td>
                                <td><?php echo ($row['address']) ?></td>
                                <td colspan="2">
                                    <a href="edit.php? id=<?php echo ($row['id']) ?>'" class="btn btn-success">Update</a>
                                    <a href="../config/delete_data.php?id=<?php echo $row['id'] ?>"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </table>
                <div class="container ">
                    <div class="col-md-6 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                if (isset($_GET['delete_msg'])) {
                                    echo '<h5 style="text-align:center; color:red;">' . $_GET['delete_msg'] . '</h5>';
                                } else if (isset($_GET['update_msg'])) {
                                    echo '<h5 style="text-align:center; color:green;">' . $_GET['update_msg'] . '</h5>';

                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="homepage.php" class="btn btn-danger">Go
                    Back</a></button>
            </div>
        </div>
    </div>
</body>

</html>