<?php

session_start();

  include('includes/header.php');
  include('includes/nav.php');
  include('includes/side_nav.php');
  include('includes/dbconfig.php');

?>

<?php


        $sql = "SELECT * FROM dealer_register";
        $run = mysqli_query($conn, $sql);

        $data = [];
        $index = 0;

        while($row=mysqli_fetch_assoc($run)){
          
          $query = "SELECT count(*) as count from salesman_register where Dealer_ID = ".$row['D_ID'];

          $result = mysqli_query($conn, $query);
          $saleCount = mysqli_fetch_all ($result, MYSQLI_ASSOC);


          $q = "SELECT count(*) as count from invoice where s_id in 
          (SELECT S_ID from salesman_register where Dealer_ID = ".$row['D_ID'].")";
          $result2 = mysqli_query($conn, $q);
          $invoiceCount = mysqli_fetch_all($result2, MYSQLI_ASSOC);

          $data[$index]['D_ID'] = $row['D_ID'];
          $data[$index]['Owner Name'] = $row['Owner Name'];
          $data[$index]['Date Of Birth'] = $row['Date Of Birth'];
          $data[$index]['Email'] = $row['Email'];
          $data[$index]['Phone Number'] = $row['Phone Number'];
          $data[$index]['Business Name'] = $row['Business Name'];
          $data[$index]['Country'] = $row['Country'];
          $data[$index]['totalSalesmen'] = $saleCount[0]['count'];
          $data[$index]['totalInvoice'] = $invoiceCount[0]['count'];

          $index++;
        }

    
?>

            <div class="col-10" style="background: rgba(219, 226, 226); border-radius: 1.5rem;">
                <div class="card" style="width: 90%; margin-top: 5%; margin-bottom: 5%; margin-left: 5%; border-radius: 1.5rem;">
                  <div class="card-body">
                    <h4 class="card-title">Dealers</h4>
                    <p class="card-description"><code></code>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> ID </th>
                          <th> Owner Name </th>
                          <th> Total Salesmen </th>
                          <th> Total Orders </th>
                          <th> Phone Number </th>
                          <th> Business Name </th>
                          <th> Country </th>
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
                                    <td><?= $row['D_ID'];; ?></td>
                                    <td><?= $row['Owner Name']; ?></td>
                                    <td><?= $row['totalSalesmen']; ?></td>
                                    <td><?= $row['totalInvoice']; ?></td>
                                    <td><?= $row['Phone Number']; ?></td>
                                    <td><?= $row['Business Name']; ?></td>
                                    <td><?= $row['Country']; ?></td>
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