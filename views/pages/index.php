<?php 
    require "../../config.php";
    require "../../models/Connection.php";

    $db = new Connection();



    require "../layouts/header.php"; 
    require "../pages/login.php"; 
    require "../layouts/footer.php"; 

?>