<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    public function getLogin($email){
        $builder = $this->db->table('users');
        $builder->select('*');
        $builder->where('email', $email);
        $result = $builder->get()->getRowArray();
        return $result;
    }

}