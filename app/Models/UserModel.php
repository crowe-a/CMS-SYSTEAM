<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Veritabanınızdaki kullanıcı tablosunun adı
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'role']; // Kullanıcı tablonuzdaki sütunlar

    public function getUsers()
    {
        return $this->findAll(); // Tüm kullanıcıları döndür
    }
    
}

