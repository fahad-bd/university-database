<?php
include 'connect.php';

if (isset($_REQUEST['btn'])) {
    //code for take input from uster to variable
    $id = $_REQUEST['empno'];
    $name = $_REQUEST['ename'];
    $job = $_REQUEST['job'];
    $mgr = $_REQUEST['mgr'];
    $hiredate = $_REQUEST['hiredate'];
    $salary = $_REQUEST['sal'];
    $comm = $_REQUEST['comm'];
    $department = $_REQUEST['dept_id'];
}

if (!empty($id) && !empty($name) && !empty($job) && !empty($hiredate) && !empty($salary) && !empty($department)) {
    //hql code here
    $query = "INSERT INTO employee(empno,ename,job,mgr,hiredate,sal,comm,dept_id) VALUES ('$id','$name','$job','$mgr','$hiredate','$salary','$comm','$department')";

    $createQuery = mysqli_query($link, $query);

    if ($createQuery) {
        echo "Insert Sucessfull!";
    } else {
        echo "Error Not insert!";
    }
}
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="master.css">

    <title>addEmployee</title>

</head>

<body style="background-color: rgb(204 251 241);">

    <h3 class="text_font_times_new_roman text_align_center m-5">Add Employee</h3>

    <!-- Here is the code for insert data into SQL database with html -->

    <!-- Here create UI form by html for input in DB -->
    <div class="shadow d-flex m-5 p-3 ">
        <form class="form-control d-flex" action="" method="post">

          <input type="text" name="empno" class="form-control" placeholder="Employee ID">
          <input type="text" name="ename" class="form-control" placeholder="Name">
          <input type="text" name="job" class="form-control" placeholder="Job">
          <input type="text" name="mgr" class="form-control" placeholder="mgr">
          <input type="text" name="hiredate" class="form-control" placeholder="Hire Date">
          <input type="text" name="sal" class="form-control" placeholder="Salary">
          <input type="text" name="comm" class="form-control" placeholder="comm">
          <input type="text" name="dept_id" class="form-control" placeholder="Department ID">
          <input type="submit" name="btn" class="btn btn-primary form-control" value="Submit">
 
        </form>
      </div>
    <!-- Here end the html UI -->

    <!-- -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>