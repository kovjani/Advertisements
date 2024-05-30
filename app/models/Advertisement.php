<?php

require_once '../app/config/Database.php';

//Select Advertisements and related users from database.
class Advertisement
{
    private $id;
    private $userid;
    private $title;
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->dbConnection();
    }

    public function getAllAdvertisements()
    {
        $stmt = $this->conn->prepare("SELECT title, users.name FROM advertisements INNER JOIN users ON advertisements.userid = users.id");
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
    public function getUserid()
    {
        return $this->userid;
    }
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
}