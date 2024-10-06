<?php
$servername = "sql207.infinityfree.com";
$username = "if0_37391733";
$password = "3HaopZtRd6Imrw6 ";
$db = "if0_37391733_ems";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";




session_start();
// require_once("../conn/dbconn.php");
// require_once('./conn/dbconn.php');



if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: Signin.php");
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="">
  <title>Document</title>
  <style>
    .nav-item {
      width: 3cm;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0  " style="position: relative; left: 8cm;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/ems/page/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/ems/page/Atendance.php">Attendance</a>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Employee
            </a>
            <ul class="dropdown-menu ">
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ADD Employee</a></li>
              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#activeroll" href="#">ADD Roll</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/ems/page/Empllist.php">List Employee</a></li>
              <!-- <li><a class="dropdown-item" href="/ems/page/atten_list.php">Attendance List</a></li> -->
            </ul>
          </li>

        </ul>
        <form class="d-flex" role="search">
          <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
          <!-- <button class="btn btn-outline-success" type="submit" data-bs-toggle="modal" data-bs-target="#account"></button> -->



          <div class="dropdown">


            <a class="btn btn-outline-success" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
              </svg>&#160&#160Hello
            </a>
            <ul class="dropdown-menu">

              <li><a class="dropdown-item" href="/ems/page/logout.php">Logout</a></li>
            </ul>
          </div>
        </form>


        <!-- Modal -->
        <div class="modal fade" id="account" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="account" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="account"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" style="margin-left:4.9cm ;" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>




              </div>
              <a type="button" class="btn btn-danger mx-4">Log Out</a>
              <br>

              <button type="button" class="btn btn-secondary mx-4" data-bs-dismiss="modal">Close</button>
              <div class="modal-footer">

                <!-- <button type="button" class="btn btn-primary">Understood</button> -->
              </div>
            </div>
          </div>
        </div>
        <!-- **************************** -->
      </div>
    </div>
  </nav>







  <!-- Modal -->

  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">ADD Employee</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form action="./navbar/emp_ins.php" method="POST">
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">@</span>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="username" aria-describedby="basic-addon1" require>
            </div>

            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder=" EMAIL ID" name="email" aria-label="Recipient's username" aria-describedby="basic-addon2" require>
              <!-- <span class="input-group-text" id="basic-addon2">@example.com</span> -->
            </div>

            <div class="mb-3">
              <label for="basic-url" class="form-label">Your Roll</label>
              <div class="input-group">
                <select class="form-select" name="roll" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <?php
                  $query = "SELECT *FROM roll";
                  //   SELECT * from attendance WHERE status= 'Present' OR attendance_time = CURRENT_DATE
                  // FETCHING DATA FROM DATABASE 
                  $result = $conn->query($query);

                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                  ?>
                      <option value="<?php echo $row['roll']; ?>"><?php echo $row['roll']; ?></option>
                  <?php }
                  } ?>
                </select>
              </div>

            </div>

            <label for="basic-url" class="form-label">Salary</label>
            <div class="input-group mb-3">

              <span class="input-group-text">$</span>
              <input type="text" class="form-control" name="rs" aria-label="Amount (to the nearest dollar)">
              <span class="input-group-text">.00</span>
            </div>



            <div class="input-group">
              <span class="input-group-text">With textarea</span>
              <textarea class="form-control" name="info" aria-label="With textarea"></textarea>
            </div>
            <br>
            <br>
            <input type="submit" name="submit" class="btn btn-success">

          </form>
        </div>
        <!-- ************************ -->


        <!-- ********************************/#/ -->
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->

        </div>
      </div>
    </div>
  </div>




  <!-- ************************ -->
  <!-- Modal -->
  <div class="modal fade" id="activeroll" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="activeroll" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="activeroll">ACTIVE ROLL</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="./navbar/rollins.php" method="post" >
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Roll</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="roll" placeholder="Manager , Accountant , etc" require>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Other info</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <br><br>
            <input type="submit" name="submit" class="btn btn-success">
          </form>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
          <!-- <button type="button" class="btn btn-primary">Understood</button> -->
        </div>
      </div>
    </div>
  </div>
  <!-- ****************** -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>