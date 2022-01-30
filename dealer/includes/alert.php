<?php
    if(isset($_GET['message'])){
        $msg = $_GET['message']; 
        echo '<div class = "alert alert-success alert-dismissible fade show" role="alert">
        '.$msg.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
?>

<?php
    if(isset($_GET['messageD'])){
        $msg = $_GET['messageD']; 
        echo '<div class = "alert alert-danger alert-dismissible fade show" role="alert">
        '.$msg.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
?>