<?php
function getConnection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "flmdb";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    return $conn;
    
}
// Check connection
function closeConnection($conn){
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $conn->close();
}
?>