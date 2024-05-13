<?php
include ("connection.php");

function sanitize($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}

// Process registration form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = sanitize($_POST["uname"]);
    $password = password_hash($_POST["upass"], PASSWORD_DEFAULT); // Hash the password

    // Prepare SQL statement to insert data
    $stmt = $conn->prepare("INSERT INTO user_db (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $uname, $password);

    // Execute the statement
    if ($stmt->execute()) {
        // echo "Registration successful!";
        header("location: ../view/index.php");
    } else {
        echo "Error: " . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>