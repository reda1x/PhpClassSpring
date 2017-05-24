<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<?php
$folder = '../uploads';
$directory = scandir('../uploads');
?>
<html>

    <head>
        <meta charset="UTF-8">
        <title> </title>


    </head>

    <body>
        <table class="table table-inverse ">
            <tr><td>#</td><td>File Name</td><td>View</td><td>delete</td><tr>
                <?php
                $i = 1;
                foreach ($directory as $file) :

                    if (is_file($folder . DIRECTORY_SEPARATOR . $file)) :
                        ?>
                    <tr>
                        <td><?php
                       
                            echo $i;
                            $i++;
                            ?></td>
                        <td><?php echo $file; ?></td>

                        <td><a href='../models/read.php?file=<?php echo $file ?>'>View File</a></td>
                        <td><a href='../models/deletepage.php?file=<?php echo $file ?>'>Delete File</a></td>


                    </tr>

    <?php endif; ?>
<?php endforeach; ?>
        </table>

    </body>
</html>
