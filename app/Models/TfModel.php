<?php

namespace App\Models;

use CodeIgniter\Model;

class TfModel extends Model
{
    protected $table = 'lessen';

    // protected $allowedFields = ['idlessen','tijd','maxdeelnemers','instructeur','SoortenLessen_idSoortenLessen'];

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
}
    

?>