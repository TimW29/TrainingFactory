<?php

namespace App\Models;

use CodeIgniter\Model;

class TfModel extends Model
{
    // protected $table = 'producten';
    protected $table = 'lessen';

    protected $allowedFields = ['tijd','date','maxdeelnemers','instructeur','beschrijving'];

    public function getLes()
    {
        $user = auth()->user();
        $db = db_connect();
        $sql = "SELECT * FROM `lessen` ORDER BY `date` ASC;";

        $selection =$db->query($sql);

        return $selection->getResult();
    }
    public function getGebruiker(){

        $user = auth()->user();
        $db = db_connect();
        $sql = "SELECT * FROM `gebruikers`;";

        $selection =$db->query($sql);

        return $selection->getResult();
    }
    public function getEmail()
    {
        $user = auth()->user();
        $db = db_connect();
        $sql = "SELECT * FROM `auth_identities` ORDER BY `id` ASC;";

        $selection =$db->query($sql);

        return $selection->getResult();
    }

    public function getUser()
    {
        $user = auth()->user();
        $db = db_connect();
        $sql = "SELECT * FROM `users` ORDER BY `id` ASC;";

        $selection =$db->query($sql);

        return $selection->getResult();
    }
 }
?>