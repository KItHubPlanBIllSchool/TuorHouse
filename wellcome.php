<?php
    session_start();

    if(isset($_SESSION['login']))
    {
        echo ' Well Come ' . $_SESSION['login'].'<br/>';
        echo '<a href="logout.php?logout">Logout</a>';
    }
    else
    {
        header("location:index.php?Empty=Please login or register to continue");
    }

?>