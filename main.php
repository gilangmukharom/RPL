<?php

class Database
{
    private static $instance = NULL;

    public function __construct()
    {
        return mysqli_connect("localhost", "root", "", "algen");
    }

    public static function getInstance()
    {
        if (self::$instance == NULL){
            self::$instance = new Database;
        }
        return self::$instance;
    }

    public function query($sql)
    {
        echo "Jalankan \"{$sql}\"..<br/>";
    }
}
 
$DB1 = Database::getInstance();
$DB2 = Database::getInstance();
$DB3 = Database::getInstance();
$DB4 = Database::getInstance();

if ($DB1 === $DB2){
    echo "SAMA!<br>";
}
 
$DB1->query("SELECT * FROM USER");
$DB2->query("SELECT * FROM USER");
$DB3->query("SELECT * FROM USER");
$DB4->query("SELECT * FROM USER");
?>