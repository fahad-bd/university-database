<!-- Conection with DB -->
<?php
    include 'connect.php';
?>


<!-- Boostrap 5 tempalate -->
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

    <title>university</title>

  </head>
  <body style="background-color: rgb(204 251 241);">

    <h1 class="text_font_times_new_roman text_align_center my-5">University Data Base</h1>
    
    <!-- Here is the code for display data from SQL database with html -->

    <!-- instructor table -->    
    <div class = "shadow d-flex flex-row m-5 p-3 bd-highlight">
        <table class = "table table-bordered table-hover table-striped">
            <caption class="text_font_times_new_roman" style="caption-side:top; text-align:center"><h2>Instructor Table</h2></caption>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Department</th>
                <th>Salary</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

            <?php
                $query = "SELECT * FROM `instructor`;";
                $readQuery = mysqli_query($link, $query);

                if($readQuery->num_rows > 0)
                {
                    while($rd = mysqli_fetch_assoc($readQuery))
                    {
                        $id = $rd['ID'];
                        $name = $rd['name'];
                        $dept_name = $rd['dept_name'];
                        $salary = $rd['salary'];
            ?>
                        <tr>
                            <td><?php echo "$id"; ?></td>
                            <td><?php echo "$name"; ?></td>
                            <td><?php echo "$dept_name"; ?></td>
                            <td><?php echo "$salary"; ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                        </tr>
            <?php
                    }
                }
              //  echo "Read completed.";
            ?>
        </table>
    </div>


    <!-- student table -->
    <div class = "shadow d-flex flex-row m-5 p-3 bd-highlight">
        <table class = "table table-bordered table-hover table-striped">
            <caption class="text_font_times_new_roman" style="caption-side:top; text-align:center"><h2>Student Table</h2></caption>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Department</th>
                <th>Total Credit</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

            <?php
                $query = "SELECT * FROM `student`;";
                $readQuery = mysqli_query($link, $query);

                if($readQuery->num_rows > 0)
                {
                    while($rd = mysqli_fetch_assoc($readQuery))
                    {
                        $id = $rd['ID'];
                        $name = $rd['name'];
                        $dept_name = $rd['dept_name'];
                        $totalCredit = $rd['tot_cred'];
            ?>
                        <tr>
                            <td><?php echo "$id"; ?></td>
                            <td><?php echo "$name"; ?></td>
                            <td><?php echo "$dept_name"; ?></td>
                            <td><?php echo "$totalCredit"; ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                        </tr>
            <?php
                    }
                }
              //  echo "Read completed.";
            ?>
        </table>
    </div>


    <!-- department table -->
    <div class = "shadow d-flex flex-row m-5 p-3 bd-highlight">
        <table class = "table table-bordered table-hover table-striped">
            <caption class="text_font_times_new_roman" style="caption-side:top; text-align:center"><h2>Department Table</h2></caption>
            <tr>
                <th>Department Name</th>
                <th>Building</th>
                <th>Budget</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

            <?php
                $query = "SELECT * FROM `department`;";
                $readQuery = mysqli_query($link, $query);

                if($readQuery->num_rows > 0)
                {
                    while($rd = mysqli_fetch_assoc($readQuery))
                    {
                        $dept_name = $rd['dept_name'];
                        $building = $rd['building'];
                        $budget = $rd['budget'];
            ?>
                        <tr>
                            <td><?php echo "$dept_name"; ?></td>
                            <td><?php echo "$building"; ?></td>
                            <td><?php echo "$budget"; ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                        </tr>
            <?php
                    }
                }
              //  echo "Read completed.";
            ?>
        </table>
    </div>


    <!-- course table -->
    <div class = "shadow d-flex flex-row m-5 p-3 bd-highlight">
        <table class = "table table-bordered table-hover table-striped">
            <caption class="text_font_times_new_roman" style="caption-side:top; text-align:center"><h2>Course Table</h2></caption>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Department</th>
                <th>Total Credit</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

            <?php
                $query = "SELECT * FROM `course`;";
                $readQuery = mysqli_query($link, $query);

                if($readQuery->num_rows > 0)
                {
                    while($rd = mysqli_fetch_assoc($readQuery))
                    {
                        $id = $rd['course_id'];
                        $title = $rd['title'];
                        $dept_name = $rd['dept_name'];
                        $credit = $rd['credits'];
            ?>
                        <tr>
                            <td><?php echo "$id"; ?></td>
                            <td><?php echo "$title"; ?></td>
                            <td><?php echo "$dept_name"; ?></td>
                            <td><?php echo "$credit"; ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                        </tr>
            <?php
                    }
                }
              //  echo "Read completed.";
            ?>
        </table>
    </div>


    <!-- classroom table -->
    <div class = "shadow d-flex flex-row m-5 p-3 bd-highlight">
        <table class = "table table-bordered table-hover table-striped">
            <caption class="text_font_times_new_roman" style="caption-side:top; text-align:center"><h2>Classroom Table</h2></caption>
            <tr>
                <th>Building</th>
                <th>Room Number</th>
                <th>Capacity</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

            <?php
                $query = "SELECT * FROM `classroom`;";
                $readQuery = mysqli_query($link, $query);

                if($readQuery->num_rows > 0)
                {
                    while($rd = mysqli_fetch_assoc($readQuery))
                    {
                        $building = $rd['building'];
                        $room_num = $rd['room_number'];
                        $capacity = $rd['capacity'];
            ?>
                        <tr>
                            <td><?php echo "$building"; ?></td>
                            <td><?php echo "$room_num"; ?></td>
                            <td><?php echo "$capacity"; ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                        </tr>
            <?php
                    }
                }
              //  echo "Read completed.";
            ?>
        </table>
    </div>


    <!-- section table -->
        <div class = "shadow d-flex flex-row m-5 p-3 bd-highlight">
        <table class = "table table-bordered table-hover table-striped">
            <caption class="text_font_times_new_roman" style="caption-side:top; text-align:center"><h2>Section Table</h2></caption>
            <tr>
                <th>Course ID</th>
                <th>Section ID</th>
                <th>Semester</th>
                <th>Year</th>
                <th>Building</th>
                <th>Room Number</th>
                <th>Time Slot</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

            <?php
                $query = "SELECT * FROM `section`;";
                $readQuery = mysqli_query($link, $query);

                if($readQuery->num_rows > 0)
                {
                    while($rd = mysqli_fetch_assoc($readQuery))
                    {
                        $c_id = $rd['course_id'];
                        $s_id = $rd['sec_id'];
                        $semester = $rd['semester'];
                        $year = $rd['year'];
                        $building = $rd['building'];
                        $r_no = $rd['room_number'];
                        $t_id = $rd['time_slot_id'];
            ?>
                        <tr>
                            <td><?php echo "$c_id"; ?></td>
                            <td><?php echo "$s_id"; ?></td>
                            <td><?php echo "$semester"; ?></td>
                            <td><?php echo "$year"; ?></td>
                            <td><?php echo "$building"; ?></td>
                            <td><?php echo "$r_no"; ?></td>
                            <td><?php echo "$t_id"; ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                        </tr>
            <?php
                    }
                }
              //  echo "Read completed.";
            ?>
        </table>
    </div>


    <!-- prereq table -->
    <div class = "shadow d-flex flex-row m-5 p-3 bd-highlight">
        <table class = "table table-bordered table-hover table-striped">
            <caption class="text_font_times_new_roman" style="caption-side:top; text-align:center"><h2>Pre-requisite Table</h2></caption>
            <tr>
                <th>Course ID</th>
                <th>Pre-requisite ID</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

            <?php
                $query = "SELECT * FROM $tablePrereq;";
                $readQuery = mysqli_query($link, $query);

                if($readQuery->num_rows > 0)
                {
                    while($rd = mysqli_fetch_assoc($readQuery))
                    {
                        $c_id = $rd['course_id'];
                        $pre_id = $rd['prereq_id'];
            ?>
                        <tr>
                            <td><?php echo "$c_id"; ?></td>
                            <td><?php echo "$pre_id"; ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                        </tr>
            <?php
                    }
                }
              //  echo "Read completed.";
            ?>
        </table>
    </div>


    <!-- takes table -->
        <div class = "shadow d-flex flex-row m-5 p-3 bd-highlight">
        <table class = "table table-bordered table-hover table-striped">
            <caption class="text_font_times_new_roman" style="caption-side:top; text-align:center"><h2>Takes Table</h2></caption>
            <tr>
                <th>ID</th>
                <th>Course ID</th>
                <th>Section ID</th>
                <th>Semester</th>
                <th>Year</th>
                <th>Grade</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

            <?php
                $query = "SELECT * FROM $tableTakes;";
                $readQuery = mysqli_query($link, $query);

                if($readQuery->num_rows > 0)
                {
                    while($rd = mysqli_fetch_assoc($readQuery))
                    {
                        $id = $rd['ID'];
                        $c_id = $rd['course_id'];
                        $sec_id = $rd['sec_id'];
                        $semester = $rd['semester'];
                        $year = $rd['year'];
                        $grade = $rd['grade'];
            ?>
                        <tr>
                            <td><?php echo "$id"; ?></td>
                            <td><?php echo "$c_id"; ?></td>
                            <td><?php echo "$sec_id"; ?></td>
                            <td><?php echo "$semester"; ?></td>
                            <td><?php echo "$year"; ?></td>
                            <td><?php echo "$grade"; ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                        </tr>
            <?php
                    }
                }
              //  echo "Read completed.";
            ?>
        </table>
    </div>


    <!-- teaches table -->
    <div class = "shadow d-flex flex-row m-5 p-3 bd-highlight">
        <table class = "table table-bordered table-hover table-striped">
            <caption class="text_font_times_new_roman" style="caption-side:top; text-align:center"><h2>Teaches Table</h2></caption>
            <tr>
                <th>ID</th>
                <th>Course ID</th>
                <th>Section ID</th>
                <th>Semester</th>
                <th>Year</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

            <?php
                $query = "SELECT * FROM $tableTeaches;";
                $readQuery = mysqli_query($link, $query);

                if($readQuery->num_rows > 0)
                {
                    while($rd = mysqli_fetch_assoc($readQuery))
                    {
                        $id = $rd['ID'];
                        $c_id = $rd['course_id'];
                        $sec_id = $rd['sec_id'];
                        $semester = $rd['semester'];
                        $year = $rd['year'];
            ?>
                        <tr>
                            <td><?php echo "$id"; ?></td>
                            <td><?php echo "$c_id"; ?></td>
                            <td><?php echo "$sec_id"; ?></td>
                            <td><?php echo "$semester"; ?></td>
                            <td><?php echo "$year"; ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                        </tr>
            <?php
                    }
                }
              //  echo "Read completed.";
            ?>
        </table>
    </div>


    <!-- time slot table -->
    <div class = "shadow d-flex flex-row m-5 p-3 bd-highlight">
        <table class = "table table-bordered table-hover table-striped">
            <caption class="text_font_times_new_roman" style="caption-side:top; text-align:center"><h2>Time Slot Table</h2></caption>
            <tr>
                <th>ID</th>
                <th>Day</th>
                <th>Start Houre</th>
                <th>Start Mimute</th>
                <th>End Houre</th>
                <th>End Minute</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

            <?php
                $query = "SELECT * FROM $tableTimeSlot;";
                $readQuery = mysqli_query($link, $query);

                if($readQuery->num_rows > 0)
                {
                    while($rd = mysqli_fetch_assoc($readQuery))
                    {
                        $id = $rd['time_slot_id'];
                        $day = $rd['day'];
                        $start_hr = $rd['start_hr'];
                        $start_min = $rd['start_min'];
                        $end_hr = $rd['end_hr'];
                        $end_min = $rd['end_min'];
            ?>
                        <tr>
                            <td><?php echo "$id"; ?></td>
                            <td><?php echo "$day"; ?></td>
                            <td><?php echo "$start_hr"; ?></td>
                            <td><?php echo "$start_min"; ?></td>
                            <td><?php echo "$end_hr"; ?></td>
                            <td><?php echo "$end_min"; ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                        </tr>
            <?php
                    }
                }
              //  echo "Read completed.";
            ?>
        </table>
    </div>


    <!-- advisor table -->
    <div class = "shadow d-flex flex-row m-5 p-3 bd-highlight">
        <table class = "table table-bordered table-hover table-striped">
            <caption class="text_font_times_new_roman" style="caption-side:top; text-align:center"><h2>Advisor Table</h2></caption>
            <tr>
                <th>Student ID</th>
                <th>Instructor ID</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

            <?php
                $query = "SELECT * FROM $tableAdvisor;";
                $readQuery = mysqli_query($link, $query);

                if($readQuery->num_rows > 0)
                {
                    while($rd = mysqli_fetch_assoc($readQuery))
                    {
                        $s_id = $rd['s_ID'];
                        $i_id = $rd['i_ID'];
            ?>
                        <tr>
                            <td><?php echo "$s_id"; ?></td>
                            <td><?php echo "$i_id"; ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                        </tr>
            <?php
                    }
                }
              //  echo "Read completed.";
            ?>
        </table>
    </div>


    <!-- employee table -->
    <div class = "shadow d-flex flex-row m-5 p-3 bd-highlight">
        <table class = "table table-bordered table-hover table-striped">
            <caption class="text_font_times_new_roman" style="caption-side:top; text-align:center"><h2>Employee Table</h2></caption>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Job</th>
                <th>mgr</th>
                <th>Hire Date</th>
                <th>Salary</th>
                <th>comm</th>
                <th>Department ID</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

            <?php
                $query = "SELECT * FROM $tableEmployee;";
                $readQuery = mysqli_query($link, $query);

                if($readQuery->num_rows > 0)
                {
                    while($rd = mysqli_fetch_assoc($readQuery))
                    {
                        $id = $rd['empno'];
                        $name = $rd['ename'];
                        $job = $rd['job'];
                        $mgr = $rd['mgr'];
                        $hiredate = $rd['hiredate'];
                        $sal = $rd['sal'];
                        $comm = $rd['comm'];
                        $dept_id = $rd['dept_id'];
            ?>
                        <tr>
                            <td><?php echo "$id"; ?></td>
                            <td><?php echo "$name"; ?></td>
                            <td><?php echo "$job"; ?></td>
                            <td><?php echo "$mgr"; ?></td>
                            <td><?php echo "$hiredate"; ?></td>
                            <td><?php echo "$sal"; ?></td>
                            <td><?php echo "$comm"; ?></td>
                            <td><?php echo "$dept_id"; ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                            <td><?php ?></td>
                        </tr>
            <?php
                    }
                }
              //  echo "Read completed.";
            ?>
        </table>
    </div>


    <!-- -->
    <!-- -->
    <!-- -->
    <!-- -->
    <!-- -->
    <!-- -->
    <!-- -->
    <!-- -->
    <!-- -->
    <!-- -->
    <!-- -->
    <!-- -->
    <!-- -->
    <!-- -->
    <!-- -->
    <!-- -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>