<?php
session_start();

    $servername = 'localhost';
    $username = 'root';
   $password = 'zorain@123';
    $dbname = 'ziu';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

	if(isset($_POST['submit'])){
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $cnic = mysqli_real_escape_string($conn, $_POST['cnic']);
        $comp = mysqli_real_escape_string($conn, $_POST['company']);
        $em = mysqli_real_escape_string($conn, $_POST['email']);
        $add = mysqli_real_escape_string($conn, $_POST['add']);
        $country = mysqli_real_escape_string($conn, $_POST['country']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $zip = mysqli_real_escape_string($conn, $_POST['zip']);
        $mob = mysqli_real_escape_string($conn, $_POST['mob']);
        $landline = mysqli_real_escape_string($conn, $_POST['landline']);
        $dob = mysqli_real_escape_string($conn, $_POST['dob']);
        $brand = mysqli_real_escape_string($conn, $_POST['brand']);
        $plateno = mysqli_real_escape_string($conn, $_POST['plate']);
        $reg = mysqli_real_escape_string($conn, $_POST['reg']);
        $mile = mysqli_real_escape_string($conn, $_POST['mile']);
        $year = mysqli_real_escape_string($conn, $_POST['year']);
        $model = mysqli_real_escape_string($conn, $_POST['model']);
        $color = mysqli_real_escape_string($conn, $_POST['color']);
        $pay = mysqli_real_escape_string($conn, $_POST['pay']);
        $price = mysqli_real_escape_string($conn, $_POST['price']);
        $tax = mysqli_real_escape_string($conn, $_POST['tax']);
        $total = mysqli_real_escape_string($conn, $_POST['total']);


        //If empty fields 
        // if (empty($oname) OR empty($cnic) OR empty($fnum) OR empty($pnum) OR empty($gender) OR empty($dob) 
        // OR empty($em) OR empty($pass) OR empty($bname) OR empty($partnership) OR empty($add1) OR empty($add2) 
        // OR empty($landline) OR empty($postal) OR empty($city) OR empty($country) OR empty($bankname) OR empty($accnum))
        // {
        //     header("location: register.php?message=Empty+Fields!");
        //     exit();

        // }
        
        //Email Validity
        if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
            header("location: register.php?message=Enter+A+Valid+Email");
            exit();
        }
        else
        {       
           
        
                
                //Signing up  
                $sql = "INSERT INTO `invoice` VALUES (NULL, '$fname', '$cnic', '$comp', 
                '$em', '$add', '$country', '$city', '$zip', '$mob', '$landline', 
                '$dob', '$brand', '$plateno', '$reg', '$mile', '$year', '$model', '$color', '$pay', 
                '$price', '$tax', '$total',".$_SESSION['s_id'].")";


                // echo '<pre>';
                // print_r($sql);
                // echo '</pre>';
                // die('================= TESTING ================');

                if(mysqli_query($conn, $sql)){  

                    header("location: invoice.php?message=Successfully+Submitted!");
                    exit(); 
                }else{
                    header("location: invoice.php?messageD=Submission+failed");
                    exit();
                
            }
        }
	}

 
?>