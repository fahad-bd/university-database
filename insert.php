<?php
include 'connect.php';
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

    <title>insert</title>

</head>

<body style="background-color: rgb(204 251 241);">

    <h3 class="text_font_times_new_roman text_align_center m-5">Insert Data</h3>

    <!-- Here is the code for go to insertAt_____.php file -->

    <div class="shadow d-flex m-5 p-3 ">

        <button class="btn btn-primary form-control" style="margin: 10px;"><a href="insertAtInstructor.php" class="text-light">Add Instructor</a></button>
        <button class="btn btn-primary form-control" style="margin: 10px;"><a href="insertAtStudent.php" class="text-light">Add Student</a></button>
        <button class="btn btn-primary form-control" style="margin: 10px;"><a href="insertAtEmployee.php" class="text-light">Add Employee</a></button>

    </div>


    <!-- -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>