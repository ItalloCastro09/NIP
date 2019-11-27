<?php
  abstract class Connection {
    private static $conn;

    public static function getConn() {
      if (self::$conn == null) {
        //self::$conn = new PDO("mysql:host=localhost;dbname=tradebook", "lucasfelinto", "Lucas.4dec");

        self::$conn = new PDO("mysql:host=us-cdbr-iron-east-05.cleardb.net;dbname=heroku_c609488ebc40dfc", "b7b27676c80ded", "80a82e9f");
      }
      return self::$conn;
    }
  }
