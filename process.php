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
            $select = "SELECT * FROM logins WHERE login = '".$_POST['nickname']."'";
            $result=mysqli_query($connect,$select);

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