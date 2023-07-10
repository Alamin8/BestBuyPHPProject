<?php
    if(isset($_SESSION['user_login']) && $_SESSION['user_login'] !=''){
        
    }else{
        header('location:index.php');
        die();
    }
?>

// $Restrictions = array ( "/BestBuy/index.php");
        // echo $_SERVER['REQUEST_URI'];
        // if (in_array($_SERVER['REQUEST_URI'], $Restrictions ))
        // {
        //     header('location:report.php');
        // } 