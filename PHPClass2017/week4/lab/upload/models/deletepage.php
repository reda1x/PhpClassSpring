<?php

$filename = $_GET['file']; //get the filename
try {
    unlink('../uploads'.DIRECTORY_SEPARATOR.$filename); //delete it
header('location:../templates/view-page.php'); //redirect back to the other page
} catch (Exception $ex) {
    echo $ex->getMessage();
    ?><a href='../templates/view-page.php?'>Return</a>
        <?php
}
