<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <?php
        require 'access-required.php';
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    <h1>Welcome to Admin Page</h1>
    
    </head>
    <body>
        <h2>User ID : <?php $user = $_SESSION['user_id'];
        echo "$user"; ?></h2>
        <a href ='../logout.php'> Logout </a>
       
    </body>
</html>
