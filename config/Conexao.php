<?php
  abstract class Connection {
    private static $conn;

    public static function getConn() {
      if (self::$conn == null) {
        self::$conn = new PDO("mysql:host=localhost;dbname=tradebook", "lucasfelinto", "Lucas.4dec");
      }
      return self::$conn;  
    }
  }