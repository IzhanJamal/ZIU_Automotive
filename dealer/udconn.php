<?php

    if(isset($_POST['update'])){

        $id=$_POST['id'];

        $sname = $_POST['sname'];
        $cnic = $_POST['cnic'];
        $em = $_POST['em'];
        $pnum = $_POST['pnum'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $ce = $_POST['ce'];
        $experience = $_POST['experience'];
        $availdate = $_POST['date'];
        $pass = $_POST['pass'];
        $add1 = $_POST['add1'];
        $add2 = $_POST['add2'];
        $landline = $_POST['landline'];
        $postal = $_POST['postal'];
        $city = $_POST['city'];
        $country = $_POST['country'];

        $sql= "UPDATE salesman_register SET `Salesman Name`='$sname', `CNIC`='$cnic', `Email`='$em', `Phone Number`= '$pnum', 
        `Gender`='$gender', `DOB`='$dob', `Currently Employed`='$ce', `Years of Experience`='$experience', 
        `Available Start Date`='$availdate', `Password`='$pass', `Address 1`='$add1', `Address 2`='$add2', 
        `Landline`='$landline', `Postal`='$postal', `City`='$city', `Country`='$country' 
        WHERE `salesman_register`.`S_ID`='$id'";

        if(mysqli_query($conn, $sql)){
            header("location: ud.php?message=Successfully Flight Updated!");
            exit(); 
        }else{
            header("location: ud.php?messageD=Update Failed");
            exit();
        }

    }
?>