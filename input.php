<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'Posetiteli');
if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
if(empty($_POST['nickname']) || empty($_POST['password']))
       {
            echo "please fill blanks";
            header('Location: registration.php?Empty= Please Fill in the Blanks');
       }
else
{
        mysqli_query($connect, 'INSERT INTO logins (login, password, phonenumb, address, mail) VALUES ("'.$_POST['nickname'].'", "'.$_POST['password'].'", "'.$_POST['phone'].'", "'.$_POST['adres'].'", "'.$_POST['gmail'].'")');
        header('Location: login.php?success');
}


