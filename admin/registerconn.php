<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'ziu';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

	if(isset($_POST['submit'])){
        $oname = mysqli_real_escape_string($conn, $_POST['oname']);
        $cnic = mysqli_real_escape_string($conn, $_POST['cnic']);
        $fnum = mysqli_real_escape_string($conn, $_POST['fnum']);
        $pnum = mysqli_real_escape_string($conn, $_POST['pnum']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $dob = mysqli_real_escape_string($conn, $_POST['dob']);
        $em = mysqli_real_escape_string($conn, $_POST['em']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        $bname = mysqli_real_escape_string($conn, $_POST['bname']);
        $partnership = mysqli_real_escape_string($conn, $_POST['partnership']);
        $add1 = mysqli_real_escape_string($conn, $_POST['add1']);
        $add2 = mysqli_real_escape_string($conn, $_POST['add2']);
        $landline = mysqli_real_escape_string($conn, $_POST['landline']);
        $postal = mysqli_real_escape_string($conn, $_POST['postal']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $country = mysqli_real_escape_string($conn, $_POST['country']);
        $bankname = mysqli_real_escape_string($conn, $_POST['bankname']);
        $accnum = mysqli_real_escape_string($conn, $_POST['accnum']);



        //If empty fields 
        if (empty($oname) OR empty($cnic) OR empty($fnum) OR empty($pnum) OR empty($gender) OR empty($dob) 
        OR empty($em) OR empty($pass) OR empty($bname) OR empty($partnership) OR empty($add1) OR empty($add2) 
        OR empty($landline) OR empty($postal) OR empty($city) OR empty($country) OR empty($bankname) OR empty($accnum))
        {
            header("location: register.php?message=Empty+Fields!");
            exit();

        }
        
        //Email Validity
        if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
            header("location: register.php?message=Enter+A+Valid+Email");
            exit();
        }
        else
        {   
            //If email exists
            $sql="SELECT * FROM `dealer_register` WHERE Email='$em'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0){
                header("location: register.php?messageD=Email+Already+Exists");
                exit();
            } else{

                //Hashing Password 
                //$hash = password_hash($pass, PASSWORD_DEFAULT);
                
                //Signing up  
                $sql = "INSERT INTO `dealer_register` VALUES (NULL, '$oname', '$cnic', '$fnum', '$pnum', '$gender', 
                '$dob', '$em', '$pass', '$bname', '$partnership', '$add1', '$add2', '$landline', '$postal', '$city', 
                '$country', '$bankname', '$accnum')";

                if(mysqli_query($conn, $sql)){
                    header("location: register.php?message=Successfully+Registered!");
                    exit(); 
                }else{
                    header("location: register.php?messageD=Registration+failed");
                    exit();
                }
            }
        }
	}

 
?>