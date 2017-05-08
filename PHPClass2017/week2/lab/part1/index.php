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
        $error = new ErrorMessage();
        $success = new SuccessMessage();
        $msg->addMessage('test1', 'this is a test 1');
        $msg->addMessage('test2', 'this is a test 2');
        $msg->addMessage('test3', 'this is a test 3');
        $msg->addMessage('test4', 'this is a test 4');
        $msg->addMessage('test5', 'this is a test 5');
        $msg->addMessage('test6', 'this is a test 6');
        $msg->addMessage('test7', 'this is a test 7');

        $error->addMessage('Error1', 'Error 1');
        $error->addMessage('Error2', 'Error 2');
        $error->addMessage('Error3', 'Error 3');
        $error->addMessage('Error4', 'Error 4');
        $error->addMessage('Error5', 'Error 5');

        $success->addMessage('Success1', 'succes 1');
        $success->addMessage('Success2', 'succes 2');
        $success->addMessage('Success3', 'succes 3');

        
        var_dump($msg->getAllMessages());
        $msg->removeMessage('test3');
        ?>
        <br>
        <?php
        var_dump($msg->getAllMessages());
        ?>
        <br>
        <?php
        
        
        var_dump($success->getAllMessages());
        $success->removeMessage('Success2');
        ?>
        <br>
        <?php
        var_dump($success->getAllMessages());
        ?>
        <br>
        <?php
        var_dump($error->getAllMessages());
        $error->removeMessage('Error3');
        ?>
        <br>
        <?php
        var_dump($error->getAllMessages());
        ?>
    </body>
</html>
