<?php
session_start();
session_id();

  include('includes/header.php');
  include('includes/nav.php');
  include('includes/side_nav.php');
  include('includes/dbconfig.php');

?>

            <div class="col-10" style="background: rgba(219, 226, 226); border-radius: 1.5rem;">  
              <div class="col-md-12 stretch-card grid-margin" style="height: 25%; width: 30%; margin-top: 5%;">
                <div class="card bg-dark card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/" class="card-img-absolute" alt="" />
                    <h4 class="mb-3">Sales Men<i class="mdi mdi-account menu-icon mdi-24px float-right"></i>
                    </h4>
                    <?php
                    $sql = "SELECT * FROM salesman_register where Dealer_ID=".$_SESSION['ID'];

                    //  $sql = "SELECT * FROM salesman_register ORDER by S_ID";
                      $run = mysqli_query($conn, $sql);
                      // echo '<pre>';
                      // print_r($_SESSION['ID']);
                      // echo '</pre>';
                      // die('---------TESTING----------');
                      $row = mysqli_num_rows($run);
                      echo '<h2 class="mb-2"> '.$row. '<h2>';




                    ?>
                  </div>
                </div>
              </div>


              <div class="col-md-12 stretch-card grid-margin" style="height: 25%; width: 30%; margin-top: 5%;">
                <div class="card bg-dark card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/" class="card-img-absolute" alt="" />
                    <h4 class="mb-3">Customers<i class="mdi mdi-account menu-icon mdi-24px float-right"></i>
                    </h4>
                    <?php
                  // $sql = "SELECT * FROM salesman_register where Dealer_ID=".$_SESSION['ID'];
                  
                  $sql = "select i.* from invoice i join salesman_register sr on i.s_id = sr.S_ID join dealer_register dr on sr.Dealer_ID = dr.D_ID where dr.D_ID = ".$_SESSION['ID'];


                    //  $sql = "SELECT * FROM salesman_register ORDER by S_ID";
                      $run = mysqli_query($conn, $sql);
                      // echo '<pre>';
                      // print_r($_SESSION['ID']);
                      // echo '</pre>';
                      // die('---------TESTING----------');
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