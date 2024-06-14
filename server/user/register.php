<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST["firstNameSignUp"];
    $lastName = $_POST["lastNameSignUp"];
    $username = $_POST["userSignUp"];
    $password = $_POST["passSignUp"];
    $email = $_POST["emailSignUp"];

    // Your database connection code
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "sneaker_db";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database (adjust table and column names accordingly)
    $sql = "INSERT INTO customers (FNAME, LNAME, USERNAME, PASSWORD, EMAIL_ID) VALUES ('$firstName', '$lastName', '$username', '$password', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
