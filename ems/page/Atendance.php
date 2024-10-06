<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Attendance Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <style>
        body {
            overflow: auto;
        }
    </style>
    <?php require("./navbar/nav.php"); ?>
    <div class="container mt-5">
        <h2 class="text-center"> Attendance </h2>

        <!-- Attendance form -->
        <form action="Atendance.php" method="POST">
            <div class="form-group">
                <label for="attendanceTime">Attendance Time:</label>
                <input type="date" id="attendanceTime" name="attendanceTime" class="form-control" required>
            </div>

            <div style=" overflow-x: hidden; height: 15cm; width: 34.4cm; ">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Employee Name</th>
                            <th>Present</th>
                            <th>Absent</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- <td>John Doe</td> -->
                            <?php
                            // $name = "kk";

                            $query = 'SELECT * from employee ';

                            // FETCHING DATA FROM DATABASE 
                            $result = $conn->query($query);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                            ?>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><input type="radio" name="<?php echo "attendance[" . $row['id'] . "]" ?>" value="Present" required></td>
                                    <td><input type="radio" name="<?php echo "attendance[" . $row['id'] . "]" ?>" value="Absent" required></td>
                        </tr>
                <?php }
                            } ?>
                
                    </tbody>
                </table>
            </div>
            <button type="submit" class="btn btn-primary">Submit Attendance</button>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<?php
require_once("./navbar/db/DB.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $attendanceTime = $_POST['attendanceTime'];
    $attendance = $_POST['attendance']; // This is an associative array

    foreach ($attendance as $student => $status) {
        $sql = "INSERT INTO attendance (student_name, attendance_time, status , date) 
                VALUES ('$student', '$attendanceTime', '$status', CURRENT_DATE())";

        if ($conn->query($sql) === TRUE) {
            // echo "Attendance recorded for $student.<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

?>