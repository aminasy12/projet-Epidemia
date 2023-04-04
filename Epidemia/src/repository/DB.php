<?php

class Db
{
    protected $db;
    public function __construct()
    {
        $this->getConnection();
    }

    public function getConnection()
    {
        $host = "localhost";
        $user = "root";
        $password = "";
        $dbname = "bdEpidemia";

        $dsn = "mysql:host=$host;dbname=$dbname";

        try {
            $this->db = new PDO($dsn, $user, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "some error occurred". $e->getMessage();
        }
    }
}





?>