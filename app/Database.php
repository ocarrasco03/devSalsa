<?php

namespace App;

class Database 
{
  protected static $host = 'localhost';
  protected static $userame = 'base';
  protected static $password = 'base';
  protected static $database = 'exam';

  public static function connect()
  {
    $connection = mysqli_connect(self::$host, self::$userame, self::$password, self::$database);

    if (!$connection) {
      die('Connection failed: ' . mysqli_connect_error());
    }

    return $connection;
  }

  public static function close_connection($mysql)
  {
    return mysqli_close($mysql);
  }
}