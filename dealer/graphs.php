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
        // echo '<pre>';
        // print_r(mysqli_fetch_array($run));
        // echo '</pre>';
        // die('----------TEST----------');
        $chardata='';
        while($row=mysqli_fetch_array($run))
        {
            $chardata .= "{ SalesmenName: '".$row['Salesman Name']."', Joining: '".$row['Available Start Date']."'}, ";
            
        }
        $chardata=substr($chardata,0,-2);
            // echo '<pre>';
            // echo $chardata;
 ?>

        <div class="col-10" style="background: rgba(219, 226, 226); border-radius: 1.5rem;">
            
            <div id="chart"></div>  

        </div>

            
        <script>
            Morris.Bar({
            element:'chart',
            data:[<?= $chardata; ?>],
            xkey:'SalesmenName',
            ykeys:['Joining'],
            labels:['Joining'],
            hideHower:'auto',
        });
        </script>
<?php
    
  include('includes/footer.php');

?>

