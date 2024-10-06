<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Style.css">
</head>

<body>
    <?php require_once("./navbar/nav.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id = $_POST['edit'];
        
        $query = "SELECT *FROM employee WHERE id = '$id' ";
        //   SELECT * from attendance WHERE status= 'Present' OR attendance_time = CURRENT_DATE
        // FETCHING DATA FROM DATABASE 
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {


    ?>

        <div class="box" >

        <form action="./update.php" method="post" >
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <!-- <span class="input-group-text" id="basic-addon1">@</span> -->
                </div>
                <input type="text" class="form-control" value="<?php echo $row['username']; ?>" name="username" placeholder="Username" required >
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control" value="<?php echo $row['rs']; ?>" name="rs" aria-label="Amount (to the nearest dollar)" required >
                <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                </div>
            </div>

            <div class="input-group mb-3">

                <input type="email" class="form-control" value="<?php echo $row['email']; ?>" name="email" placeholder="Email" required >
            </div>


            <select class="form-select" name="roll_value" aria-label="Default select example" required >
                <option selected value="<?php echo $row['roll']; ?>" ><?php echo $row['roll']; ?></option>


                <?php

$query1 = "SELECT *FROM roll ";
//   SELECT * from attendance WHERE status= 'Present' OR attendance_time = CURRENT_DATE
// FETCHING DATA FROM DATABASE 
$result1 = $conn->query($query1);

if ($result1->num_rows > 0) {
    while ($row1 = $result1->fetch_assoc()) {


?>
                <option value="<?php echo $row1['roll']; ?>"><?php echo $row1['roll']; ?></option>
              

                <?php }} ?>
            </select>

<br><br>
            <button type="submit" name="submit" value="<?php echo $id; ?>" class="btn btn-success">update</button>


            </form>
        </div>


    <?php } }}?>
</body>

</html>