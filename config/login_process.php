<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: ../view/homepage.php");
    exit();
}

include_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['uname'];
    $password = $_POST['upass'];

    $sql = "SELECT * FROM user_db WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: ../view/homepage.php");
            exit();
        } else {
           header("location: ../view/index.php?error_msg=Invalid Credentials.");
        }
    } else {
        header("location: ../view/index.php?error_msg=Invalid Credentials.");
    }
}
?>