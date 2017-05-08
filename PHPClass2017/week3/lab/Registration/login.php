
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './autoload.php';
        $reg = new Registration();
        $util = new Util();

        if ($util->isPostRequest()) {
            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');
            $user_id = $reg->login($email, $password);

            if ($user_id >0){
                session_start();
                $_SESSION['user_id']= $user_id;
                header('Location: templates/Admin.php');
            }
        }
        include '/templates/login.html.php';
        ?>
        <a href ='signup.php'> Signup </a>
    </body>
</html>
