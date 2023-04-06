<?php

namespace App\Models;

use CodeIgniter\Model;

class TfModel extends Model
{
    // protected $table = 'lessen';

    protected $allowedFields = ['tijd','datum','maxdeelnemers','instructeur','beschrijving'];

    public function getLes()
    {
        $user = auth()->user();
        $db = db_connect();
        $sql = "SELECT * FROM `lessen` ORDER BY `tijd` ASC;";

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
        $sql = "SELECT `secret` FROM `auth_identities` ORDER BY `id` ASC;";

        $selection =$db->query($sql);

        return $selection->getResult();
    }
}
    

?>