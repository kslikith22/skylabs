<?php
session_start();
require_once "dbconnect.php";
if(isset($_POST['submit'])){
    if(isset($_POST['admin_name']) && isset($_POST['admin_email'])){
        $name=$_POST['admin_name'];
        $email=$_POST['admin_email'];
        $password=$_POST['admin_password'];
        $salary=$_POST['admin_salary'];
        $query="INSERT INTO admin (admin_name,admin_email,admin_password,admin_salary) VALUES ('$name','$email','$password','$salary')";
        $result=mysqli_query($con,$query);
        if($result){
          echo "<script>alert('Added Successfully')</script>";
        }
        else{
          echo "Failed";
        }
    }
}





?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <div class="popup">
        
        <a href="adminpage.php"  class="dropdown appointment-btn scrollto"><span class="d-none d-md-inline" ><button class="btn btn-warning">Logout</button></a> 
          </div>
    </div>
      <div class="container-fluid">
       
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled"></a>
            </li>
          </ul>
          <form class="d-flex" role="search">
           
            <img src="https://img.icons8.com/wired/512/user.png" alt="" width="32" height="32" class="rounded-circle me-2">
            
          </form>
        </div>
      </div>
    </nav>
    <!-- Toll Tax  -->
    <div class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <img src="https://th.bing.com/th/id/OIP.hv66InWaZK91pfUGIGhC2wHaHa?w=218&h=218&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="" width="32" height="32" class="rounded-circle me-2">
        <span class="fs-4"><strong>Admin DB</strong></span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="userdb.php" class="nav-link link-dark" aria-current="page">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
            <img src="https://thumbs.dreamstime.com/z/business-dashboard-icon-business-dashboard-icon-meticulously-designed-icon-use-website-design-presentations-infographics-184352401.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
            User Details
          </a>
        </li>
        <li>
          <a href="doctordb.php" class="nav-link link-dark">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
            <img src="https://img.icons8.com/ios-glyphs/512/user.png" alt="" width="32" height="32" class="rounded-circle me-2">
            Doctors
          </a>
        </li>
        <li>
          <a href="patientrecord.php" class="nav-link link-dark">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
           <img src="https://img.icons8.com/pastel-glyph/512/test-partial-passed.png" alt="" width="32" height="32" class="rounded-circle me-2">
            Patient Record
          </a>
        </li>
        <li>
          <a href="medicalrecord.php" class="nav-link link-dark">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
           <img src="https://img.icons8.com/pastel-glyph/512/test-partial-passed.png" alt="" width="32" height="32" class="rounded-circle me-2">
            Medical Record
          </a>
        </li>
        <li>
          <a href="admindb.php" class="nav-link link-dark">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
           <img src="https://thumbs.dreamstime.com/z/business-dashboard-icon-business-dashboard-icon-meticulously-designed-icon-use-website-design-presentations-infographics-184352401.jpg" alt="" width="32" height="32" class="rounded-circle me-2" alt="" width="32" height="32" class="rounded-circle me-2">
            Admin Details
          </a>
        </li>
        <li>
          <a href="addadmin.php" class="nav-link link-dark">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
            <img src="https://img.icons8.com/ios-glyphs/512/user.png" alt="" width="32" height="32" class="rounded-circle me-2">
            Add Admin
          </a>
        </li>
       
      </ul>
      <hr>
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong></strong>
        </a>
        <ul class="dropdown-menu text-small shadow">
          <li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
      </div>
      </div>
       <form class="row g-3" method="post" id="add" >
        <strong>Add New Admin</strong>
        <div class="col-md-6">
          <label for="inputZip" class="form-label"> Name</label>
          <input type="inputtext" class="form-control" name="admin_name" id="aname" placeholder="Enter  Name" required>
        </div>
        <div class="col-md-6">
          <label for="inputZip" class="form-label"> Email</label>
          <input type="text" class="form-control" name="admin_email" id="email" placeholder="Enter Admin Email" pattern="[a-z 0-9]{2,20}@gmail.com" required>
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Password</label>
          <input type="password" class="form-control" name="admin_password" id="password" placeholder="Enter Strong password" required>
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Re-enter password</label>
          <input type="password" class="form-control" id="repassword" placeholder="Confirm Password" required>
          <span style="color:red" id="passerror"></span>
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Salary</label>
          <input type="text" class="form-control"  id="salary" name="admin_salary" placeholder="Admin Salary" required>
        </div>
        <div class="col-12">
          <input type="submit" class="btn btn-primary" name="submit" value="Add">
        </div>
      </form>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  <script>
    document.getElementById("add").onsubmit=function(e){
      var pass=document.getElementById("password");
      var repass=document.getElementById("repassword");
      var error=document.getElementById("passerror");
      if(pass.value===repass.value){
        alert("Admin Added Successfully");
      }
      else{
        e.preventDefault();
        error.innerHTML="Passwords not matched";
      }
    }

  </script>

  </body>
</html>



