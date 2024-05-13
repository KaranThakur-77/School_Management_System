<?php

include("connection.php");

if (isset($_POST["updateStudent"])) {
    $name = $_POST["name"];
    $class = $_POST["class"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];

    if (isset($_POST['student_id'])) {
        $new_id = $_POST['student_id'];

        // Prepare the SQL statement
        $query = "UPDATE `student_table` SET `name`=?, `class`=?, `age`=?, `address`=?, `contact`=? WHERE `id`=?";
        $stmt = mysqli_prepare($conn, $query);

        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "ssissi", $name, $class, $age, $address, $contact, $new_id);

        // Execute the statement
        mysqli_stmt_execute($stmt);

        // Check for errors
        if (mysqli_stmt_errno($stmt)) {
            die("Query Failed: " . mysqli_stmt_error($stmt));
        } else {
            header("location: ../view/table.php?update_msg=You've updated data successfully.");
        }
    }
}
?>
