<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'ziu';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

	if(isset($_POST['submit'])){
        $sname = mysqli_real_escape_string($conn, $_POST['sname']);
        $cnic = mysqli_real_escape_string($conn, $_POST['cnic']);
        $em = mysqli_real_escape_string($conn, $_POST['em']);
        $pnum = mysqli_real_escape_string($conn, $_POST['pnum']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $dob = mysqli_real_escape_string($conn, $_POST['dob']);
        $ce = mysqli_real_escape_string($conn, $_POST['ce']);
        $experience = mysqli_real_escape_string($conn, $_POST['experience']);
        $availdate = mysqli_real_escape_string($conn, $_POST['date']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        $add1 = mysqli_real_escape_string($conn, $_POST['add1']);
        $add2 = mysqli_real_escape_string($conn, $_POST['add2']);
        $landline = mysqli_real_escape_string($conn, $_POST['landline']);
        $postal = mysqli_real_escape_string($conn, $_POST['postal']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $country = mysqli_real_escape_string($conn, $_POST['country']);



        //If empty fields 
        if (empty($sname) OR empty($cnic) OR empty($em) OR empty($pnum) OR empty($gender) OR empty($dob) 
        OR empty($ce) OR empty($experience) OR empty($availdate) OR empty($pass) OR empty($add1) OR empty($add2) 
        OR empty($landline) OR empty($postal) OR empty($city) OR empty($country))
        {
            header("location: register.php?messageD=Empty Fields!");
            exit();

        }

        //Password Validation
        if(strlen($pass) < 8)
        {
            header("location: register.php?messageD=Password Should be Above 8 Chracters!");
            exit();
        }
        // elseif(ctype_upper($pass))
        // {

        // }

        //Hashing Password 
        //$hash = password_hash($pass, PASSWORD_DEFAULT);*/
        
        //Email Validity
        if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
            header("location: register.php?message=Enter+A+Valid+Email");
            exit();
        }
        else
        {   
            //If email exists
            $sql="SELECT * FROM `salesman_register` WHERE Email='$em'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0){
                header("location: register.php?messageD=Email+Already+Exists");
                exit();
            } else{
                
                //Signing up  
                $sql = "INSERT INTO `salesman_register` (`S_ID`, `Dealer_ID`, `Salesman Name`, `CNIC`, `Email`, 
                `Phone Number`, `Gender`, `DOB`, `Currently Employed`, `Years of Experience`, 
                `Available Start Date`, `Password`, `Address 1`, `Address 2`, `Landline`, `Postal`, 
                `City`, `Country`) VALUES (NULL, '2', '$sname', '$cnic', '$em', '$pnum', '$gender', 
                '$dob', '$ce', '$experience', '$availdate', '$pass', '$add1', '$add2', '$landline', '$postal', 
                '$city', '$country')";

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