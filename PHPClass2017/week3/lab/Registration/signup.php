
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include '/templates/signup.html.php';
        include './autoload.php';
        $reg = new Registration();
        $util = new Util();

        if ($util->isPostRequest()) {
            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');
            echo "$email $password";
            if (!$reg->signup($email, $password)){
                echo 'data not saved';
            }
            
        }
        
        ?>
        <a href ='login.php'> Login </a>
    </body>
</html>
