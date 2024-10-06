<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Style.css">
    <title>Document</title>
</head>

<body>
    <?php require("./navbar/nav.php");  ?>

    <input type="text" id="searchBox" placeholder="Search...">
    <div class="tables-box">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Salary</th>
                    <!-- <th scope="col">Info</th> -->
                    <!-- <th scope="col">Join date</th> -->
                    <!-- <th scope="col">Phone No</th> -->
                    <th scope="col">Email ID</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $query = "SELECT *FROM employee";
                //   SELECT * from attendance WHERE status= 'Present' OR attendance_time = CURRENT_DATE
                // FETCHING DATA FROM DATABASE 
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['roll']; ?></td>
                            <td><?php echo $row['rs']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <!-- <td>@mdo</td> -->
                            <!-- <td>Mark</td> -->
                            <td>
                            <form action="./edit.php" method="post">
                            <button type="submit" name="edit" value="<?php echo $row['id']; ?>" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001" />
                                    </svg></button>
                                    </form>
                                </td>
                            <td>
                                <form action="./del.php" method="post">
                                    <button type="submit" name="del" value="<?php echo $row['id']; ?>" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                        </svg></button>
                                </form>
                            </td>
                        </tr>


                <?php }
                } ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/search.js"></script>
</body>

</html>