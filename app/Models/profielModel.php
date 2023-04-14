<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfielModel extends Model
{
    protected $table = 'users';

    protected $allowedFields = ['profielfoto','telefoonnummer','geboortedatum','type'];

    public function getUsers()
    {
        $user = auth()->user();
        $db = db_connect();
        $sql = "SELECT * FROM `users` ORDER BY `id` ASC;";

        $selection =$db->query($sql);

        return $selection->getResult();
    }
}