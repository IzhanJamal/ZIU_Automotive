<?php

            $conn = mysqli_connect('localhost', 'root', '', 'ziu');

            if(isset($_POST['submit'])){

                $sql = "DELETE FROM dealer_register where D_ID='del'";
                $run = mysqli_query($conn, $sql);
            }

            if(mysqli_query($conn, $sql)){
                header("location: view.php?message=Record Successfully Deleted");
                exit(); 
            }else{
                header("location: view.php.php?messageD=Record Not Deleted");
                exit();
            }
?>