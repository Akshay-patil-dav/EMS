<?php

require_once("./db/DB.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $email = $_POST['email']; // This is an associative array
    $rs = $_POST['rs'];
    $roll = $_POST['roll'];
    $info = $_POST['info'];

    $sqli = "INSERT INTO employee (username, roll, rs , info,email) 
                VALUES ('$user', '$roll', '$rs', '$info','$email')";
    $res = $conn->query($sqli);

    if ($res === TRUE) {
        // echo "Attendance recorded for $user.<br>";
     ?>
<script>window.location.href = '/ems/page/';</script>
     <?php
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
