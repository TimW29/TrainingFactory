<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $table = 'producten';

    protected $allowedFields = ['naam','foto','prijs'];

    public function getItems()
    {
        $user = auth()->user();
        $db = db_connect();
        $sql = "SELECT * FROM `producten` ORDER BY `id` ASC;";

        $selection =$db->query($sql);

        return $selection->getResult();
    }
}