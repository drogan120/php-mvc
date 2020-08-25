<?php
class UserModel
{

    private $table  = 'posts';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getName()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->all();
    }
}
