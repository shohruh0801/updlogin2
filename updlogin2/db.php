
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "updlogin2";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // Check connection
    if (!$conn) {
        echo "err" . mysqli_error();
    }
    
?>