<?php

require_once("./navbar/db/DB.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['del'];

    // echo $user;

   
    
    $sqli = " DELETE FROM employee WHERE id = '$user'";
    $res = $conn->query($sqli);

    if ($res === TRUE) {
        // echo "Attendance recorded for $user.<br>";
     ?>
<script>window.location.href = '/ems/page/Empllist.php';</script>



     <?php
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
