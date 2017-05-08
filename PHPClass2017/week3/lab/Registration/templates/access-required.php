<?php

session_start();
if (!isset($_SESSION['user_id'])|| $SESSION[user_id]->rowCount > 0){
    exit('Please log in.');
}