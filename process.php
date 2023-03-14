<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'Posetiteli');;
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['nickname']) || empty($_POST['password']))
       {
            header("location:index.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from logins where login ='".$_POST['nickname']."' and password='".$_POST['password']."'";
            $result=mysqli_query($connect,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['login']=$_POST['nickname'];
                header("location:wellcome.php");
            }
            else
            {
                header("location:index.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>