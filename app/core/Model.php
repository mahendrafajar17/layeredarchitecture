<?php

class Model{
    
    public $db; //database handler
    public $query; //statement query

    public function __construct()
    {
        try {
            $this->db = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
            $this->db->set_charset("utf8mb4");
        } catch(Exception $e) {
            error_log($e->getMessage());
            exit('Error connecting to database'); //Should be a message a typical user could understand
        }
    }
}