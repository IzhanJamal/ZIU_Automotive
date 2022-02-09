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
        
        $sql = "SELECT * FROM salesman_register where Dealer_ID=".$_SESSION['ID'];
        $run = mysqli_query($conn, $sql);

        $data = [];
        $index = 0;

        while($row=mysqli_fetch_assoc($run)){
          
          // $sql1 = "SELECT count(*) FROM invoice where s_id = ".$row['S_ID'];
          // $result = mysqli_query($conn, $sql1);
          $query = "SELECT count(*) as count from invoice where s_id = ".$row['S_ID'];
          $result = mysqli_query($conn, $query);
          $saleCount = mysqli_fetch_all ($result, MYSQLI_ASSOC);
          

          $data[$index]['S_ID'] = $row['S_ID'];
          $data[$index]['Salesman Name'] = $row['Salesman Name'];
          $data[$index]['DOB'] = $row['DOB'];
          $data[$index]['Email'] = $row['Email'];
          $data[$index]['Phone Number'] = $row['Phone Number'];
          $data[$index]['Years of Experience'] = $row['Years of Experience'];
          $data[$index]['Country'] = $row['Country'];
          $data[$index]['Available Start Date'] = $row['Available Start Date'];
          $data[$index]['totalCustomers'] = $saleCount[0]['count'];

          $index++;
        }

?>

            <div class="col-10" style="background: rgba(219, 226, 226); border-radius: 1.5rem;">
                <div class="card" style="width: 90%; margin-top: 5%; margin-bottom: 5%; margin-left: 5%; border-radius: 1.5rem;">
                  <div class="card-body">
                    <h4 class="card-title">Sales Men </h4>
                    <p class="card-description"><code></code>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> SID </th>
                          <th> Salesman Name </th>
                          <th> DOB </th>
                          <th> Email </th>
                          <th> Phone Number </th>
                          <th> Total Customers </th>
                          <th> Country </th>
                          <th> Start Date </th>
                          <!--<th> Actions </th>-->
                        </tr>
                      </thead>
                      <tbody>
                        
                      </tbody>

                        <?php

                            foreach($data as $row)
                            {
                                ?>

                                <tr>
                                    <td><?= $row['S_ID'];; ?></td>
                                    <td><?= $row['Salesman Name']; ?></td>
                                    <td><?= $row['DOB']; ?></td>
                                    <td><?= $row['Email']; ?></td>
                                    <td><?= $row['Phone Number']; ?></td>
                                    <td><?= $row['totalCustomers']; ?></td>
                                    <td><?= $row['Country']; ?></td>
                                    <td><?= $row['Available Start Date']; ?></td>
                                    
                                    <!--<td>
                                    <a  href="view.php?view=<?= $id;?>"> <button class="btn btn-gradient-success btn-rounded btn-fw"> View </button> </a>
                                    </td>-->
                                </tr>

                                <?php
                            }

                        ?>


                    </table>
                  </div>
                </div>
              </div>

  

<?php

  include('includes/footer.php');

?>