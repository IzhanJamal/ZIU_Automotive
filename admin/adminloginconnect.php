<?php


			$servername = 'localhost';
			$username = 'root';
			$password = 'zorain@123';
			$dbname = 'ziu';

			$conn = mysqli_connect($servername, $username, $password, $dbname);

            $username = "ziu_admin";
            $pass = "admin786";

			if(isset($_SESSION['username'])){
				echo "Welcome ".$_SESSION['username'];
            }elseif($_POST['username']==$username && $_POST['pass']==$pass){
                    $_SESSION['username']=$username;
                    header("location: admin.php");
                    exit();
                }
                else{

                    header("location: adminlogin.php?messageD=Wrong+Username+Or+Password!");
					exit();

                } 
		?>