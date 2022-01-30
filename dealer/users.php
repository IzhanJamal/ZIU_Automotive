<?php

session_start();
session_id();

  include('includes/header.php');
  include('includes/nav.php');
  include('includes/side_nav.php');
  include('includes/dbconfig.php');

?>

<?php
        $sql = "SELECT * FROM salesman_register";
        $run = mysqli_query($conn, $sql);

?>

            <div class="col-10" style="background: rgba(219, 226, 226); border-radius: 1.5rem;">
                <div class="card" style="width: 90%; margin-top: 5%; margin-bottom: 5%; margin-left: 5%; border-radius: 1.5rem;">
                  <div class="card-body">
                    <h4 class="card-title">Salesman</h4>
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
                          <th> Years Of Experience </th>
                          <th> Country </th>
                          <th> Start Date </th>
                          <!--<th> Actions </th>-->
                        </tr>
                      </thead>
                      <tbody>
                        
                      </tbody>

                        <?php

                            while($row=mysqli_fetch_assoc($run))
                            {  
                                ?>

                                <tr>
                                    <td><?php echo $row['S_ID'];; ?></td>
                                    <td><?php echo $row['Salesman Name']; ?></td>
                                    <td><?php echo $row['DOB']; ?></td>
                                    <td><?php echo $row['Email']; ?></td>
                                    <td><?php echo $row['Phone Number']; ?></td>
                                    <td><?php echo $row['Years of Experience']; ?></td>
                                    <td><?php echo $row['Country']; ?></td>
                                    <td><?php echo $row['Available Start Date']; ?></td>
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

  

<?php

  include('includes/footer.php');

?>