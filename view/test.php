<?php
session_start(); // Start session to persist user login state

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "sms_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input data
function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Process login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);

    // Prepare SQL statement to fetch user data
    $stmt = $conn->prepare("SELECT id, email, password FROM user_db WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Verify password and set session if login is successful
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        echo "Login successful!";
        // Redirect to dashboard or any other page
        // header("Location: dashboard.php");
    } else {
        echo "Invalid email or password";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Email:</label>
        <input type="email" name="email" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
