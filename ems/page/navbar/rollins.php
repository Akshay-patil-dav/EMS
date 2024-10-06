<?php

require_once("./db/DB.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $roll = $_POST['roll'];


    $sqli = "INSERT INTO roll (roll) 
                VALUES ('$roll')";
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
