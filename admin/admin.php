<?php

session_start();

  include('includes/header.php');
  include('includes/nav.php');
  include('includes/side_nav.php');
  include('includes/dbconfig.php');

?>

            <div class="col-10" style="background: rgba(219, 226, 226); border-radius: 1.5rem;">  
              <div class="col-md-5 stretch-card grid-margin" style="height: 25%; width: 40%; margin-top: 5%;">
                <div class="card bg-dark card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/" class="card-img-absolute" alt="" />
                    <h4 class="mb-3">Dealers<i class="mdi mdi-account menu-icon mdi-24px float-right"></i>
                    </h4>
                    <?php 

                      $sql = "SELECT * FROM dealer_register ORDER by D_ID";
                      $run = mysqli_query($conn, $sql);
                      
                      $row = mysqli_num_rows($run);
                      echo '<h2 class="mb-2"> '.$row. '<h2>';

                    ?>
                  </div>
                </div>
              </div>


              <div class="col-md-5 stretch-card grid-margin" style="height: 25%; width: 40%; margin-top: -18%; float: right;">
                <div class="card bg-dark card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/" class="card-img-absolute" alt="" />
                    <h4 class="mb-3">Total Orders<i class="mdi mdi-account menu-icon mdi-24px float-right"></i>
                    </h4>
                    <?php 

                      $sql = "SELECT * FROM invoice";
                      $run = mysqli_query($conn, $sql);
                      
                      $row = mysqli_num_rows($run);
                      echo '<h2 class="mb-2"> '.$row. '<h2>';

                    ?>
                  </div>
                </div>
              </div>


              <div class="col-md-5 stretch-card grid-margin" style="height: 25%; width: 40%; margin-top: 13%;">
                <div class="card bg-dark card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/" class="card-img-absolute" alt="" />
                    <h4 class="mb-3">Total Salesmen<i class="mdi mdi-account menu-icon mdi-24px float-right"></i>
                    </h4>
                    <?php 

                      $sql = "SELECT * FROM salesman_register";
                      $run = mysqli_query($conn, $sql);
                      
                      $row = mysqli_num_rows($run);
                      echo '<h2 class="mb-2"> '.$row. '<h2>';

                    ?>
                  </div>
                </div>
              </div>





            </div>
</div>
  

<?php

  include('includes/footer.php');

?>