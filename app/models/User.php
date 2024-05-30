<?php

require_once '../app/config/Database.php';

//Select records from users table.
class User
{
    private $id;
    private $name;

    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->dbConnection();
    }

    public function getAllUsers()
    {
        $stmt = $this->conn->prepare("SELECT name FROM users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

}