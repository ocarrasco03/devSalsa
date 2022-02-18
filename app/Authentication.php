<?php

namespace App;

include('Database.php');
session_start();

class Authentication extends Database
{
    protected $token;

    public function __construct()
    {
        $this->token = $_SESSION['CODE'] ? $_SESSION['CODE'] : '';
    }

    public static function login($user, $password)
    {
        if (self::checkUser($user, $password)) {
            self::store_session($user);
            return ['status' => 200, 'message' => 'login succsessfuly'];
        }
        return ['status' => 401, 'message' => 'that credentials not match with our records!'];
    }

    public function register($username, $email, $password)
    {
        //
    }

    public function change_password()
    {
        //
    }

    public static function store_session($user)
    {
        $_SESSION['valid'] = true;

        return $_SESSION['valid'];
    }

    public static function checkUser($user, $password)
    {
        $conn = Database::connect();
        $query = mysqli_query($conn ,'SELECT * FROM users WHERE username="' . $user .'" AND password = "'.$password.'";');

        if (!$query) {
          die('Invalid query: ' . mysqli_error($conn));
          return false;
        }

        Database::close_connection($conn);
        return true;
    }
}
