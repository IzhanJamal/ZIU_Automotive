<?php


			$servername = 'localhost';
			$username = 'root';
			$password = 'zorain@123';
			$dbname = 'ziu';

			$conn = mysqli_connect($servername, $username, $password, $dbname);

			if(isset($_POST['submit'])){
				$em = mysqli_real_escape_string($conn, $_POST['em']);
				$pass = mysqli_real_escape_string($conn, $_POST['pass']);



				//If empty fields 
				if (empty($em) OR empty($pass))
				{
					header("location: login.php?message=Empty+Fields!");
					exit();

				}

				//Email Validity
				if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
					header("location: login.php?message=Enter+A+Valid+Email");
					exit();
				}
				else
				{   
					//If email exists
					$sql="SELECT * FROM `salesman_register` WHERE `Email`='$em' AND `Password`='$pass'";
					$result = mysqli_query($conn,$sql);
					if(mysqli_num_rows($result) <= 0){
						header("location: login.php?messageD=Invalid+Email+Or+Password+!");
						exit();
					}else{
						while($row = mysqli_fetch_assoc($result)){
							//Checking If passwords matches 
							
							
								session_start();
								$_SESSION['em'] = $em;
								$_SESSION['pass'] = $row['Password'];
								$_SESSION['s_id']=$row['S_ID'];
								$_SESSION['sname']=$row['Salesman Name'];

							//	print_r($_SESSION['s_id']);
								header("location: invoice.php");
								exit();
								
							
						}
					}
				}
			}

 
		?>