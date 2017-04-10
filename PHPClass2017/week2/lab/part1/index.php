<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './autoload.php';
        $msg = new Message();
        $msg->addMessage('test1', 'this is a test 1');
        $msg->addMessage('test2', 'this is a test 2');
        $msg->addMessage('test3', 'this is a test 3');
        $msg->addMessage('test4', 'this is a test 4');
        $msg->addMessage('test5', 'this is a test 5');
        $msg->addMessage('test6', 'this is a test 6');
        $msg->addMessage('test7', 'this is a test 7');


        var_dump($msg->getAllMessages());
        $msg->removeMessage('test3');
        ?>
        <br>
        <?php
        var_dump($msg->getAllMessages());
        ?>
    </body>
</html>
