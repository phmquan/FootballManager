<?php
function getConnection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "flmdb";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        
        echo "<h1>Connection failed</h1>";
    }
    
    echo "<h1>Connection success</h1>";
    $conn->close();
}
// Check connection

?>