
<?php
 session_start();


 $servername = 'localhost';
 $username = 'root';
 $password = 'zorain@123';
 $dbname = 'ziu';

 $conn = mysqli_connect($servername, $username, $password, $dbname);
   
 


//     $q = "SELECT * FROM invoice";
//     $result = mysqli_query($conn, $q);
//     $data = [];
//     $index = 0;

//     while($row = mysqli_fetch_assoc($result)){
//         $data[$index] = $row;
//         $index++;
//     }

    
  ?>
 


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>ZIU's Automotive</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>ZIU's<em>Automotive</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="cars.html">Cars</a></li>
                
                

                <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li>
                
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="team.html">Team</a></li>


                <li class="nav-item"><a class="nav-link" href="../admin/adminlogin.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="../admin/adminlogin.php">Track Product</a></li>

            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-2-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <!-- <h4>Lorem ipsum dolor</h4> -->
              <h2>Track Now</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
 
    

    <div class="container px-1 px-md-4 py-5 mx-auto">

    <!-- search  bar-->

    <div class="col-12" style="background: rgba(219, 226, 226); border-radius: 1.5rem;">
        <div class="card" style="width: 100%; margin-top: 5%; margin-bottom: 5%; margin-left: 10%; border-radius: 1.5rem;float:right">
                  <div class="card-body">
                    
                        <!-- Search By ID -->	

                        <form action="" method="POST">

                        <div class="col-12 froum-group actions small">
                        
                            <input type="number" class="form-control" placeholder="Please enter your order no." id="id" name="id" required>
                            <!-- <input type="text" name="id" style="width: 48%; margin-left: 23%;" class="form-control" placeholder="Enter Dealer ID"/> -->
                            <br><button type="submit" name="search" class="btn btn-primary text-center">Search</button>
                        </div>
                        <br>

                            <?php
                            
                            if(isset($_POST['search'])){

                                $id = $_POST['id'];
                                
                                $sql = "select * from invoice where inv_id = " . $id;
                                
                                $run = mysqli_query($conn, $sql);
                                $result = mysqli_fetch_all ($run, MYSQLI_ASSOC);
                                
                                if(count($result) < 1){
                                  $orderStatus = -1;
                                }else{
                                  $orderStatus = $result[0]['status'];
                                  $orderData = $result[0];

                                  $isPending = 'active';
                                  $isApproved = '';
                                  $isProcess = '';
                                  $isCompleted = '';
                                  $isArrived = '';

                                  if($orderStatus > 0){
                                    $isApproved = 'active';
                                  }

                                  if($orderStatus > 1){
                                    $isProcess = 'active';
                                  }

                                  if($orderStatus > 2){
                                    $isCompleted = 'active';
                                  }

                                  if($orderStatus > 3){
                                    $isArrived = 'active';
                                  }

                                }

                                
                            }
                            ?>

                  </div>
                </div>
              </div>


    <!-- tracker code -->

    <?php if(isset($_POST['search']) && count($result) > 0){ ?>
    <div class="card">
        <div class="row d-flex justify-content-between px-3 top">
            <div class="d-flex">
                <h5>ORDER <span class="text-primary font-weight-bold"><?= $orderData['inv_id'];?></span></h5>
            </div>
            <!-- <div class="d-flex flex-column text-sm-right">
                <p class="mb-0">Expected Arrival <span>01/06/20</span></p>
                <p>Grasshoppers <span class="font-weight-bold"><a href="https://www.grasshoppers.lk/customers/action/track/V534HB">V534HB</a></span></p>
            </div> -->
        </div> <!-- Add class 'active' to progress -->
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <ul id="progressbar" class="text-center">
                    <li class="<?= $isPending ?> step0"></li>
                    <li class="<?= $isApproved ?> step0"></li>
                    <li class="<?= $isProcess ?> step0"></li>
                    <li class="<?= $isCompleted ?> step0"></li>
                    <li class="<?= $isArrived ?> step0"></li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-between top">
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/9nnc9Et.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold"><br>Pending</p>
                </div>
            </div>
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/GiWFtVu.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold"><br>Approved For Process</p>
                </div>
            </div>
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/u1AzR7w.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold"><br>In Process</p>
                </div>
            </div>
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/TkPm63y.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold"><br>Order Completed</p>
                </div>
            </div>
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/HdsziHP.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold"><br>Arrived</p>
                </div>
            </div>
        </div>
    </div>
    <?php }else if(isset($_POST['search'])){ ?>
      <div class="card">
        <div class="row d-flex justify-content-between px-3 top">
            <div class="d-flex text-center">
                <h5 class="text-center">Wrong Order Number Entered.</h5>
            </div>
            <!-- <div class="d-flex flex-column text-sm-right">
                <p class="mb-0">Expected Arrival <span>01/06/20</span></p>
                <p>Grasshoppers <span class="font-weight-bold"><a href="https://www.grasshoppers.lk/customers/action/track/V534HB">V534HB</a></span></p>
            </div> -->
        </div>
      </div>
    <?php } ?>


    <!-- <div class="card">
        <div class="row d-flex justify-content-between px-3 top">
            <div class="d-flex">
                <h6><span class="text-primary font-weight-bold">2020-05-27 11:26:08 AM </span>REQUEST CREATED</h6>
            </div>
        </div>
        <div class="row d-flex justify-content-between px-3 top">
            <div class="d-flex">
                <h6><span class="text-primary font-weight-bold">2020-06-04 06:59:48 AM </span>ATTEMPT 1 COMPLETED. ~ ***[AUTO GENERATED BY GRASSHOPPERS]***</h6>
            </div>
        </div>
        <div class="row d-flex justify-content-between px-3 top">
            <div class="d-flex">
                <h6><span class="text-primary font-weight-bold">2020-06-04 06:59:48 AM </span>RETURN TO VENDOR RECORD CREATED ~ RC806_118 </h6>
            </div>
        </div>
    </div> -->

</div>



  

<!-- 
tracker code ends here -->


    

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2022 ZIU's Automotive</p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>

  </body>

</html>