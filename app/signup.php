<?php
namespace App;

include 'Authentication.php';
session_start();

use App\Authentication;

Authentication::login($_POST['username'], $_POST['password']);

if ($_SESSION['valid']) {
    header('Location: ../users.php');
} else {
    $_SESSION['error'] = $auth['message'];
    header('Location: ../sign-in.php');
}
