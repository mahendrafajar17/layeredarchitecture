<?php

class User_model extends Model{

    public function login($username, $password)
    {
        $this->query = $this->db->prepare("SELECT * FROM users WHERE username=? AND password=?");
        $this->query->bind_param('ss', $username, $password);
        $this->query->execute();

        if($this->query->get_result()->num_rows == 1){
            return true;
        }else{
            return false;
        }

        $this->query->close();
    }
}