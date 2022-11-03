<?php
$_SESSION['name'] = $_POST['username'];

    if(empty($_SESSION['name'])) {
        echo 'Enter a username';
    } elseif (isset($_SESSION['name'])) {
        header('Location: index.php');
    }
