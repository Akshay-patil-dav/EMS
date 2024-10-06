<?php

require_once("./navbar/db/DB.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user = $_POST['username'];
    $roll = $_POST['roll_value'];
    $email = $_POST['email'];
    $rs = $_POST['rs'];
    $id = $_POST['submit'];

    $query = "UPDATE `employee` SET `username`='".$user."',`email`='".$email."',`roll`='".$roll."',`rs`='".$rs."'  WHERE id = '".$id."' ";
    //   SELECT * from attendance WHERE status= 'Present' OR attendance_time = CURRENT_DATE
    // FETCHING DATA FROM DATABASE 
    $result = $conn->query($query);

    if($result == 'true'){
        ?>
        <script>
        alert("Update Sucessfully.....")
        window.location.href = '/ems/page/Empllist.php';</script>
        <?php
    }else{
        echo "no";
    }

}
