<?php 
    session_start();
    $_SESSION["username"] = "";
    $_SESSION["games"]= "";
    $_SESSION["image"] = "";
    header("location:index.html");
?> 