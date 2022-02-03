<?php


			$servername = 'localhost';
			$username = 'root';
			$password = '';
			$dbname = 'ziu';

			$conn = mysqli_connect($servername, $username, $password, $dbname);

			if(isset($_POST['submit'])){
				$em = mysqli_real_escape_string($conn, $_POST['em']);
				$pass = mysqli_real_escape_string($conn, $_POST['pass']);



				//If empty fields 
				if (empty($em) OR empty($pass))
				{
					header("location: dlogin.php?message=Empty+Fields!");
					exit();

				}

				//Email Validity
				if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
					header("location: dlogin.php?message=Enter+A+Valid+Email");
					exit();
				}
				else
				{   
					//If email exists
					$sql="SELECT * FROM `dealer_register` WHERE `Email`='$em' AND `New Password`='$pass'";
					$result = mysqli_query($conn,$sql);
					if(mysqli_num_rows($result) <= 0){
						header("location: dlogin.php?messageD=Invalid+Email+Or+Password+!");
						exit();
					}else{
						while($row = mysqli_fetch_assoc($result)){
							//Checking If passwords matches 
							
							
								session_start();
								$_SESSION['em'] = $em;
								$_SESSION['ID']=$row['Dealer_ID'];
								$_SESSION['oname'] = $row['Owner Name'];
								$_SESSION['pass'] = $row['New Password'];
								header("location: dealer.php");
								exit();
								
							
						}
					}
				}
			}

 
		?>