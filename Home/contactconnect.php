<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'ziu';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //     $name = $_POST['name'];
    //     $em = $_POST['email'];
    //     $sub = $_POST['subject'];
    //     $mess = $_POST['message'];

	if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $em = mysqli_real_escape_string($conn, $_POST['email']);
        $sub = mysqli_real_escape_string($conn, $_POST['subject']);
        $mess = mysqli_real_escape_string($conn, $_POST['message']);
                
        
                $sql = "INSERT INTO `contactus` VALUES (NULL, '$name', '$em', '$sub', '$mess')";
                if(mysqli_query($conn, $sql)){
                    header("location: contact.php?message=Successfully+Submitted!");
                    exit(); 
                }else{
                    header("location: contact.php?messageD=Submission+Failled");
                    exit();
                }
            }

 
?>