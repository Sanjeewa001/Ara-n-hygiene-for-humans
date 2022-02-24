<?php
//star session called
    session_start();
//global username session
    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }
?>
