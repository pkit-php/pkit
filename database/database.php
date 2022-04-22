<?php namespace Pkit\Database;

use \PDO;

class Database
{
  private PDO $pdo;

  private static string
    $driver,
    $host,
    $dbname,
    $user,
    $pass;

  public static function init($driver, $host, $name, $user, $pass)
  {
    self::$driver = $driver;
    self::$host = $host;
    self::$dbname = $name;
    self::$user = $user;
    self::$pass = $pass;
  }

  private function connect()
  {
    $driver = self::$driver;
    $host = self::$host;
    $dbname = self::$dbname;
    $user = self::$user;
    $pass = self::$pass;

    $config = "$driver:host=$host;dbname=$dbname";

    $this->pdo = new PDO($config, $user, $pass);
    // throw exceptions, when SQL error is caused
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // prevent emulation of prepared statements
    $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  }

  public function execute($query, $params = [])
  {
    $this->connect();
    $stmt = $this->pdo->prepare($query);
    $stmt->execute($params);
    return $stmt;
  }
}
