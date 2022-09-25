<?php
  include 'connect.php';

  if(isset($_REQUEST['btn']))
  {
    //code for take input from uster to variable
    $id = $_REQUEST['ID'];
    $name = $_REQUEST['name'];
    $department = $_REQUEST['dept_name'];
    $credit = $_REQUEST['tot_cred'];    
  }

  if(!empty($id) && !empty($name) && !empty($department) && !empty($credit))
  {
    //hql code here
    $query = "INSERT INTO student(ID,name,dept_name,tot_cred) VALUES ('$id','$name','$department','$credit')";

    $createQuery = mysqli_query($link, $query);
    
    if($createQuery)
    {
      echo "Insert Sucessfull!";
    }
    else{
      echo "Error!";
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
    <link rel = "stylesheet" href="master.css">

    <title>addStudent</title>

  </head>

  <body style="background-color: rgb(204 251 241);">

    <h3 class="text_font_times_new_roman text_align_center m-5">Add Student</h3>
    
    <!-- Here is the code for insert data into SQL database with html -->

     <!-- Here create UI form by html for input in DB -->
      <div class="shadow d-flex m-5 p-3 ">
        <form class="form-control d-flex" action="" method="post">

          <input type="text" name="ID" class="form-control" placeholder="Student ID">
          <input type="text" name="name" class="form-control" placeholder="Name">
          <input type="text" name="dept_name" class="form-control" placeholder="Department">
          <input type="text" name="tot_cred" class="form-control" placeholder="Total Credit">
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