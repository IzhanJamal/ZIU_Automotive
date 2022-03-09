<?php
	session_start();

    include('../Session/handle.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="assets/css/dealerstyle.css"rel="stylesheet">

    <title>ZIU</title>

  </head>

  <body>

        <?php
            if(isset($_GET['message'])){
                $msg = $_GET['message']; 
                echo '<div class = "alert alert-success alert-dismissible fade show" role="alert">
                '.$msg.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
            }
        ?>

		<?php
			if(isset($_GET['messageD'])){
				$msg = $_GET['messageD']; 
				echo '<div class = "alert alert-danger alert-dismissible fade show" role="alert">
				'.$msg.'
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>';
			}
		?>

    
    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="assets/images/login1.jpg" class="image-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3">Dealer Login</h1>
                    <h4>Sign in to your account</h4>
                    <form action="dealerloginconnect.php" method="post">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email"  name="em" placeholder="Enter Email" class="form-control my-3 p-4" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="pass" placeholder="Enter Password" class="form-control my-3 p-4" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" name="submit" class="lbtn mt-3 mb-5">Login</button>
                            </div>
                        </div>
                        <a href="../admin/adminlogin.php">Admin Login</a><br>
                        <a href="../Salesman/login.php">Salesman Login</a><br>
                        <a href="../Home/index.html">Home</a>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>