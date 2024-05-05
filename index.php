<?php
    if(!isset($_SESSION)) { 
        session_start(); 
    }

    if(isset($_SESSION['nome'])){ 
        //header ("location: home.php"); 
        include_once ("home.php");
    }
    else{
        //header ("location: login.php");
        include_once ("login.php");
    }
?>
