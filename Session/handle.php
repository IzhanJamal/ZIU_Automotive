<?php 


$url = $_SERVER["REQUEST_SCHEME"] . "://". $_SERVER["HTTP_HOST"] . "/" . explode("/", $_SERVER["REQUEST_URI"])[1] . "/";

if(isset($_SESSION['is_login']))
{   
        
    if($_SESSION['role']=="dealer"){
        
        $url = $url . "dealer/dealer.php";
    }

    if($_SESSION['role']=="admin")
    {
        $url = $url . "admin/admin.php";
    }

    if($_SESSION['role'] == "salesmen")
    {
        $url = $url . "Salesman/invoice.php";
    }

    header("location: " . $url);


}


?>