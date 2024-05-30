<?php

namespace app\Model;

class Advertisement
{
    private $id;
    private $userid;
    private $title;

    public function __construct($id, $userid, $title)
    {
        $this->id = $id;
        $this->userid = $userid;
        $this->title = $title;
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