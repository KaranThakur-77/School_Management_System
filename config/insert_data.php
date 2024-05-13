<?php
include("connection.php");
if (isset($_POST["addStudent"])) {

    $student_name = $_POST["name"];
    $class = $_POST["class"];
    $student_age = $_POST["age"];
    $student_address = $_POST["address"];
    $student_contact = $_POST["contact"];

    $query = "INSERT INTO `student_table` (`name`,`class`,`age`,`address`,`contact` ) VALUES ('$student_name','$class','$student_age','$student_address','$student_contact')";
    $result = mysqli_query($conn, $query);
    
    if (!$result) {
        die("Query Failed". mysqli_error($conn));
    }
    else {
        header("location: ../view/table.php");
    }
}
?>