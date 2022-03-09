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

            } else if($_POST['username']==$username && $_POST['pass']==$pass){
                session_start();
                
                $_SESSION["role"] = "admin";
                $_SESSION['is_login']="true";
                header("location: admin.php");
                exit();
                
            } else{

                header("location: adminlogin.php?messageD=Wrong+Username+Or+Password!");
                exit();

            } 
		?>