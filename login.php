<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define your credentials
    $valid_username = "Goldesr";
    $valid_password = "Olarewaju1";

    // Get form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Redirect to success page
        header("Location: success.html");
        exit;
    } else {
        // Redirect back to login page with error message
        header("Location: login.html?error=1");
        exit;
    }
}
?>