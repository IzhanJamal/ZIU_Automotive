<?php

session_start();
session_id();
//echo $_SESSION['ID'];

  include('includes/header.php');
  include('includes/nav.php');
  include('includes/side_nav.php');
  include('includes/dbconfig.php');

?>

<?php
  
  $sql = "select i.* from invoice i join salesman_register sr on i.s_id = sr.S_ID join dealer_register dr on sr.Dealer_ID = dr.D_ID where dr.D_ID = ".$_SESSION['ID']."
    ";  

  
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
                                  <td><?php echo $row['inv_id'];; ?></td>
                                  <td><?php echo $row['fullname']; ?></td>
                                  <td><?php echo $row['cnic']; ?></td>
                                  <td><?php echo $row['company']; ?></td>
                                  <td><?php echo $row['email']; ?></td>
                                  <td><?php echo $row['address']; ?></td>
                                  <td><?php echo $row['country']; ?></td>
                                  <td><?php echo $row['city']; ?></td>
                                  <td><?php echo $row['zipcode']; ?></td>
                                  <td><?php echo $row['mobile']; ?></td>
                                  <td><?php echo $row['landline']; ?></td>
                                  <td><?php echo $row['dob']; ?></td>
                                  <td><?php echo $row['carbrand']; ?></td>
                                  <td><?php echo $row['plateno']; ?></td>
                                  <td><?php echo $row['registrationno']; ?></td>
                                  <td><?php echo $row['mileage']; ?></td>
                                  <td><?php echo $row['year']; ?></td>
                                  <td><?php echo $row['modelno']; ?></td>
                                  <td><?php echo $row['color']; ?></td>
                                  <td><?php echo $row['payordernumber']; ?></td>
                                  <td><?php echo $row['carprice']; ?></td>
                                  <td><?php echo $row['tax']; ?></td>
                                  <td><?php echo $row['totalamount']; ?></td>
                                  
                                      <!--<td>
                                  <a  href="view.php?view=<?php echo $id;?>"> <button class="btn btn-gradient-success btn-rounded btn-fw"> View </button> </a>
                                  </td>-->
                              </tr>

                              <?php
                          }

                      ?>


                  </table>
                </div>
              </div>
            </div>
              <script>
                $(document).ready(function () {
                  $('#dtHorizontalExample').DataTable({
                    "scrollX": true
                  });
                  $('.dataTables_length').addClass('bs-select');
                });
              </script>
  

<?php
  include('includes/footer.php');
?>