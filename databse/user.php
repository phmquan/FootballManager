<?php
include "D:\Workspace\FootballManagerWeb\FootballManager\databse\config.php";

function checkuser($username, $password) {
    $conn = getConnection();

    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");

    // Bind parameters
    $stmt->bind_param("ss", $username, $password);

    // Execute statement
    $stmt->execute();

    // Get result
    $result = $stmt->get_result();

    // Fetch the result
    $row = $result->fetch_assoc();

    if ($row) {
        // User exists, return the role
        return $row['role'];
    } else {
        // User doesn't exist
        return null;
    }
}
function createuser($username, $password) {
    $conn = getConnection();
    // Check if the user already exists
    if (checkuser($username, $password) !== null) {
        echo "<script>alert('User already exists');</script>";
        return false; // User already exists
    }
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO users (username, password,role) VALUES (?, ?, 'manager')");

    // Bind parameters
    $stmt->bind_param("ss", $username, $password);

    // Execute statement
    $stmt->execute();

    // Check if the user was successfully created
    if ($stmt->affected_rows > 0) {
        return true;
    } else {
        return false;
    }
}
?>
