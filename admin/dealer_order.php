<?php

session_start();

  include('includes/header.php');
  include('includes/nav.php');
  include('includes/side_nav.php');
  include('includes/dbconfig.php');


    $q = "SELECT * FROM dealer_register";
    $result = mysqli_query($conn, $q);
    $data = [];
    $index = 0;

    while($row = mysqli_fetch_assoc($result)){
        $data[$index] = $row;
        $index++;
    }

    

?>

            <div class="col-10" style="background: rgba(219, 226, 226); border-radius: 1.5rem;">
                <div class="card" style="width: 90%; margin-top: 5%; margin-bottom: 5%; margin-left: 5%; border-radius: 1.5rem;">
                  <div class="card-body">
                    
                        <!-- Search By ID -->	

                        <form action="" method="POST">

                        <div class="col-12 froum-group actions small">
                        
                            <select name="id" class="form-control">
                                <option value="0">Please Select Dealer</option>
                                <?php foreach($data as $row){ ?>
                                    <option value="<?= $row['D_ID']; ?>"><?= $row['Owner Name'] ?></option>
                                <?php } ?>
                            </select>
                            <!-- <input type="text" name="id" style="width: 48%; margin-left: 23%;" class="form-control" placeholder="Enter Dealer ID"/> -->
                            <br><button style="margin-left: 38%;" type="submit" name="search" class="btn btn-gradient-dark btn-rounded btn-fw">Search</button>
                        </div>
                        <br>

                            <?php
                            
                            if(isset($_POST['search'])){

                                $id = $_POST['id'];
                                
                                $sql = "select i.* from invoice i join salesman_register sr on i.s_id = sr.S_ID join dealer_register dr on sr.Dealer_ID = dr.D_ID where dr.D_ID = ".$id;
                                
                                $run = mysqli_query($conn, $sql);
  
                            ?>
                                    
                                    <div class="table-responsive" style="background: rgba(219, 226, 226); border-radius: 1.5rem;">
                                        <div class="card" style="width: 300%; margin-top: 6%; margin-bottom: 5%; margin-left: 5%; margin-right: 5%;;border-radius: 1.5rem;">
                                            <div class="card-body">
                                            <h4 class="card-title">Customers </h4>
                                            <p class="card-description"><code></code>
                                            </p>
                                            <table id="dtHorizontalExample" class="table table-striped" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
                                                    <th> ID </th>
                                                    <th> Full Name </th>
                                                    <th> Cnic </th>
                                                    <th> Company </th>
                                                    <th> Email </th>
                                                    <th> Address </th>
                                                    <th> Country </th>
                                                    <th> City</th>
                                                    <!--<th> Actions </th>-->
                                                    <th> Zip Code</th>
                                                    <th> Mobile</th>
                                                    <th> Landline</th>
                                                    <th> DOB</th>
                                                    <th> Car Brand</th>
                                                    <th> Plate No</th>
                                                    <th> Registeration No</th>
                                                    <th> Mileage</th>
                                                    <th> Year</th>
                                                    <th> Model No</th>
                                                    <th> Color</th>
                                                    <th> Pay Order No</th>
                                                    <th> Price</th>
                                                    <th> Tax</th>
                                                    <th> Total Amount</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                
                                                </tbody>

                                                <?php

                                                    while($row=mysqli_fetch_assoc($run))
                                                    {  
                                                        ?>

                                                        <tr>
                                                            <td><?= $row['inv_id'];; ?></td>
                                                            <td><?= $row['fullname']; ?></td>
                                                            <td><?= $row['cnic']; ?></td>
                                                            <td><?= $row['company']; ?></td>
                                                            <td><?= $row['email']; ?></td>
                                                            <td><?= $row['address']; ?></td>
                                                            <td><?= $row['country']; ?></td>
                                                            <td><?= $row['city']; ?></td>
                                                            <td><?= $row['zipcode']; ?></td>
                                                            <td><?= $row['mobile']; ?></td>
                                                            <td><?= $row['landline']; ?></td>
                                                            <td><?= $row['dob']; ?></td>
                                                            <td><?= $row['carbrand']; ?></td>
                                                            <td><?= $row['plateno']; ?></td>
                                                            <td><?= $row['registrationno']; ?></td>
                                                            <td><?= $row['mileage']; ?></td>
                                                            <td><?= $row['year']; ?></td>
                                                            <td><?= $row['modelno']; ?></td>
                                                            <td><?= $row['color']; ?></td>
                                                            <td><?= $row['payordernumber']; ?></td>
                                                            <td><?= $row['carprice']; ?></td>
                                                            <td><?= $row['tax']; ?></td>
                                                            <td><?= $row['totalamount']; ?></td>
                                                            
                                                            <a href="view.php?view=<?= $id;?> "> <button class="btn btn-gradient-success btn-rounded btn-fw"> View </button> </a>
                                                        </tr>

                                                        <?php
                                                    }

                                                ?>


                                            </table>
                                            </div>
                                        </div>
                                        </div>
                                        
                                    <?php 
                                }
                                    ?>

                  </div>
                </div>
              </div>

  

<?php

  include('includes/footer.php');

?>