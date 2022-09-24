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

    if(!$link){
        echo "Error!";
    }

?>