<?php
include("connection.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "DELETE FROM `student_table` WHERE id=$id"; // Concatenate the id value to the query
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed: " . mysqli_error($conn));
    } else {
        header("location: ../view/table.php?delete_msg=You've deleted record.");
    }
}
?>
