<?php

$users = ['shady@login.com' => 12345678 , 'islam@login.com' => 1234567 ];

if(array_key_exists($_POST['email'],$users) && $_POST['password'] == $users[$_POST['email']] ){
    if($_POST['remember_me'] == 1){
        setcookie('name', $_POST['email'], time() + (86400 * 30), "/"); 
    }
    else{
        setcookie('name', $_POST['email'], time() +  30, "/"); 
    }
   header('LOCATION:welcome.php');
}else{
    header('LOCATION:index.php');
}