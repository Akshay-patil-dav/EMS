<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Style.css">
    <title>Document</title>
</head>

<body>
    <style>
        .right {
            width: 87%;
            height: 100%;
            position: absolute;
            right: 0;
        }
    </style>
    <?php require("./navbar/nav.php"); ?>
    <div style="display: flex;">

        <div class="right">
            <!-- ************************************ -->
            <div class="container m-5 ">
                <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-5">
                    <div class="col">
                        <div class="p-5 border bg-light row-cols-lg-3 g-2 g-lg-5" style="display: flex;"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                            </svg>
                            <div style="position:relative; bottom: 30px; ">
                                <b class="emp">Total employes</b>
                               

                                <?php
                                  $query = 'SELECT COUNT(id) AS count_no from employee'; 
  
                                  // FETCHING DATA FROM DATABASE 
                                  $result = $conn->query($query); 
                                  
                                    if ($result->num_rows > 0)  
                                    { 
                                        while($row = $result->fetch_assoc()) 
                                        { 
                                ?>
                                 <h1 style="position: relative; top: 30px; "><?php echo $row['count_no']; ?>+</h1>
                                 <?php }}?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-5 border bg-light row-cols-lg-3 g-2 g-lg-5" style="display: flex;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50   " height="50" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                                <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2" />
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z" />
                            </svg>
                            <div style="position:relative; bottom: 30px; ">
                                <b class="emp">Total Active</b>
                                <?php
                                  $query = "SELECT COUNT(id) AS count_no from attendance WHERE status= 'Present' OR attendance_time = CURRENT_DATE;
 "; 
                                //   SELECT * from attendance WHERE status= 'Present' OR attendance_time = CURRENT_DATE
                                  // FETCHING DATA FROM DATABASE 
                                  $result = $conn->query($query); 
                                  
                                    if ($result->num_rows > 0)  
                                    { 
                                        while($row = $result->fetch_assoc()) 
                                        { 
                                ?>
                                 <h1 style="position: relative; top: 30px; "><?php echo $row['count_no']; ?>+</h1>
                                 <?php }}?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-5 border bg-light row-cols-lg-3 g-2 g-lg-5" style="display: flex;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-flag-fill" viewBox="0 0 16 16">
                                <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12 12 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A20 20 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a20 20 0 0 0 1.349-.476l.019-.007.004-.002h.001" />
                            </svg>
                            <div style="position:relative; bottom: 30px; ">
                                <b class="emp">Total Rolls</b>
                                <?php
                                  $query = "SELECT COUNT(roll) AS count_no from roll "; 
                                //   SELECT * from attendance WHERE status= 'Present' OR attendance_time = CURRENT_DATE
                                  // FETCHING DATA FROM DATABASE 
                                  $result = $conn->query($query); 
                                  
                                    if ($result->num_rows > 0)  
                                    { 
                                        while($row = $result->fetch_assoc()) 
                                        { 
                                ?>
                                 <h1 style="position: relative; top: 30px; "><?php echo $row['count_no']; ?>+</h1>
                                 <?php }}?>
                            </div>
                        </div>

                    </div>



                </div>
            </div>
            <!-- *************************************** -->
        </div>
    </div>
    <div style="display: flex;">
        <div>
            <!-- ********************* -->

            <h2 class="Active-Employee"> Active-Employee <button type="button" class="btn btn-primary add-emp" style="z-index: 5;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                    </svg>ADD</button></h2>
            <!-- ********************* -->
            
            <!-- ****************** -->
            <div class="employes-info">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Active</th>
                            <th scope="col">Roll</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                                  $query = "SELECT a.student_name AS id_user , e.username AS ussername , e.roll AS rool , a.status AS status from attendance AS a CROSS join employee AS e on a.student_name = e.id WHERE a.status= 'Present' OR a.attendance_time = CURRENT_DATE GROUP by a.student_name "; 
                                //   SELECT * from attendance WHERE status= 'Present' OR attendance_time = CURRENT_DATE
                                  // FETCHING DATA FROM DATABASE 
                                  $result = $conn->query($query); 
                                  
                                    if ($result->num_rows > 0)  
                                    { 
                                        while($row = $result->fetch_assoc()) 
                                        { 
                                ?>
                                      <tr>
                            <th scope="row"><?php echo $row['id_user']; ?></th>
                            <td><?php echo $row['ussername']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td><?php echo $row['rool']; ?></td>
                        </tr>
                                 <?php }}?>
                  
                        
                    </tbody>
                </table>
            </div>
        </div>
        <!-- **********/ -->
        <div style="position: relative; right: 5cm; ">
            <!-- ********************* -->

            <h2 class="Active-Employee"> Active-Roll &#160&#160&#160&#160&#160&#160&#160&#160&#160&#160<button type="button" class="btn btn-primary add-emp" data-bs-toggle="modal" data-bs-target="#activeroll"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                    </svg>&#160 ADD</button></h2>
            <!-- ********************* -->

            <div class="employes-info">
                <table class="table">
                    <thead>
                        <tr>
                            <!-- <th scope="col">#</th> -->
                            <th scope="col">employee</th>
                            <!-- <th scope="col">Active</th> -->
                            <th scope="col">Roll</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <?php
                                  $query = "SELECT COUNT(roll)  AS cou_roll , roll from employee GROUP by roll"; 
                                //   SELECT * from attendance WHERE status= 'Present' OR attendance_time = CURRENT_DATE
                                  // FETCHING DATA FROM DATABASE 
                                  $result = $conn->query($query); 
                                  
                                    if ($result->num_rows > 0)  
                                    { 
                                        while($row = $result->fetch_assoc()) 
                                        { 
                                ?>
                                      <tr>
                         
                            <td><?php echo $row['cou_roll']; ?></td>
                            <td><?php echo $row['roll']; ?></td>
                          
                        </tr>
                                 <?php }}?>
                        
                                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>