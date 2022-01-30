<?php

    if(isset($_POST['update'])){

        $id=$_POST['id'];
        
        $oname = $_POST['oname'];
        $cnic = $_POST['cnic'];
        $fnum = $_POST['fnum'];
        $pnum = $_POST['pnum'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $em = $_POST['em'];
        $pass = $_POST['pass'];
        $bname = $_POST['bname'];
        $partnership = $_POST['partnership'];
        $add1 = $_POST['add1'];
        $add2 = $_POST['add2'];
        $landline = $_POST['landline'];
        $postal = $_POST['postal'];
        $city = $_POST['city'];
        $country = $_POST['country'];
        $bankname = $_POST['bankname'];
        $accnum = $_POST['accnum'];

        $sql= "UPDATE dealer_register SET `Owner Name`='$oname', `CNIC`='$cnic', `Fax Number`='$fnum', `Phone Number`= '$pnum', 
        `Gender`='$gender', `Date Of Birth`='$dob', `Email`='$em', `New Password`='$pass', `Business Name`='$bname', `Partnership`='$partnership',
        `Address 1`='$add1', `Address 2`='$add2', `Landline Number`='$landline', `Postcode`='$postal', `City`='$city', 
        `Country`='$country', `Bank Name`='$bankname', `Account Number`='$accnum'
        WHERE `dealer_register`.`D_ID`='$id'";

        if(mysqli_query($conn, $sql)){
            header("location: ud.php?message=Successfully Flight Updated!");
            exit(); 
        }else{
            header("location: ud.php?messageD=Update Failed");
            exit();
        }

    }
?>