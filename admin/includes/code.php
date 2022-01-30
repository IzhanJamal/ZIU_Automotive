<!-- Sweet Alert -->
<script src="assets/js/sweetalert.js"></script>
    <?php

      if(isset($_SESSION['status']) && $_SESSION['status'] !=''){

        ?>
          <script>

            swal({
              title: "<?php echo $_SESSION['status']; ?>",
              //text: "You clicked the button!",
              icon: "<?php echo $_SESSION['status_code']; ?>",
              button: "Ok",
            });

          </script>
        <?php
        unset($_SESSION['status']);

      }

      
if(mysqli_query($conn, $sql)){

    $_SESSION['status'] = "Successfully Registered!";
    $_SESSION['status_code'] = "success";
    header("location: register.php");
    exit(); 
    }else{
    $_SESSION['status'] = "Registration failed!";
    $_SESSION['status_code'] = "error";
    header("location: register.php");
    exit();
    }

    ?>