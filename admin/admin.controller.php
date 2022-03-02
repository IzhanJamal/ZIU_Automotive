<?php

include('includes/dbconfig.php');

$func = $_POST['funcName'];
$func();


function updateStatus(){
    
    global $conn;

    $value=$_POST['statusId'];
    $id = $_POST['inv_id'];
    
    $sql="UPDATE invoice set `status` = '$value' where inv_id = '$id';";
    
    if(mysqli_query($conn, $sql)){
        header("location: invoice.php?message=Successfully+Submitted!");
        // exit();
    }else{
        header("location: invoice.php?message=Submission+failed");
        // exit();

    }
}

