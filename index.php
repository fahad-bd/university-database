<!-- Conection with DB -->
<?php
    $databasename = 'university';
    $tableAdvisor = 'advisor';
    $tableClassroom = 'classroom';
    $tableCourse = 'course'; 
    $tableDepartment = 'department';
    $tableEmployee = 'employee'; 
    $tableInstructor = 'instructor';
    $tablePrereq = 'prereq';
    $tableSection = 'section';
    $tableStudent = 'student';
    $tableTakes = 'takes'; 
    $tableTeaches = 'teaches';
    $tableTimeSlot = 'time_slot'; 

    $link = mysqli_connect('localhost', 'root', '', $databasename);
/*
    if($link)
    {
        echo "Connected!";
    }
    else
    {
        echo "Connection faild with DB!";
    }
*/
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
    <style>
        .text_font_times_new_roman{
            font-family: 'Times New Roman', Times, serif;
        }

        .text_align_center{
            text-align: center;
        }


    </style>


    <title>university</title>
  </head>
  <body style="background-color: rgb(204 251 241);">

    <h1 class="text_font_times_new_roman text_align_center">University Data Base</h1>
    
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
        <caption style="caption-side:top; text-align:center">Studnet Table</caption>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </table>
    </div>


    <!-- department table -->
    <div class = "shadow d-flex flex-row m-5 p-3 bd-highlight">
        <table class = "table table-bordered table-hover table-striped">
        <caption style="caption-side:top; text-align:center">Department Table</caption>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </table>
    </div>


    <!-- course table -->
    <div class = "shadow d-flex flex-row m-5 p-3 bd-highlight">
        <table class = "table table-bordered table-hover table-striped">
        <caption style="caption-side:top; text-align:center">Course Table</caption>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </table>
    </div>

    <!-- classroom table -->
    <div class = "shadow d-flex flex-row m-5 p-3 bd-highlight">
        <table class = "table table-bordered table-hover table-striped">
        <caption style="caption-side:top; text-align:center">Classroom Table</caption>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </table>
    </div>

    <!-- section table -->
    <div class = "shadow d-flex flex-row m-5 p-3 bd-highlight">
        <table class = "table table-bordered table-hover table-striped">
        <caption style="caption-side:top; text-align:center">Section Table</caption>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </table>
    </div>

    <!-- prereq table -->
    <div class = "shadow d-flex flex-row m-5 p-3 bd-highlight">
        <table class = "table table-bordered table-hover table-striped">
        <caption style="caption-side:top; text-align:center">Pre-requisite Table</caption>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </table>
    </div>

    <!-- takes table -->
    <div class = "shadow d-flex flex-row m-5 p-3 bd-highlight">
        <table class = "table table-bordered table-hover table-striped">
        <caption style="caption-side:top; text-align:center">Takes Table</caption>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </table>
    </div>

    <!-- teaches table -->
    <div class = "shadow d-flex flex-row m-5 p-3 bd-highlight">
        <table class = "table table-bordered table-hover table-striped">
        <caption style="caption-side:top; text-align:center">Teaches Table</caption>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </table>
    </div>

    <!-- time slot table -->
    <div class = "shadow d-flex flex-row m-5 p-3 bd-highlight">
        <table class = "table table-bordered table-hover table-striped">
        <caption style="caption-side:top; text-align:center">Time Slot Table</caption>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </table>
    </div>

    <!-- advisor table -->
    <div class = "shadow d-flex flex-row m-5 p-3 bd-highlight">
        <table class = "table table-bordered table-hover table-striped">
        <caption style="caption-side:top; text-align:center">Advisor Table</caption>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </table>
    </div>

    <!-- employee table -->
    <div class = "shadow d-flex flex-row m-5 p-3 bd-highlight">
        <table class = "table table-bordered table-hover table-striped">
        <caption style="caption-side:top; text-align:center">Employee Table</caption>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
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