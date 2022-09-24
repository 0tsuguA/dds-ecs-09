<?php
class DataBase
{
    public $db;
    private static $dns = "mysql:host=localhost;dbname=ecs-09";
    private static $user = "root";
    private static $pass = "";
    private static $instance;

    public function __construct()
    {
        $this->db = new PDO(self::$dns, self::$user, self::$pass);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $object = __CLASS__;
            self::$instance = new $object;
        }
        return self::$instance;
    }
}
