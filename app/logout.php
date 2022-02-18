<?php

session_start();

unset($_SESSION['valid']);
unset($_SESSION['error']);

header('Location: ../sign-in.php');