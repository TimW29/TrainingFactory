<?php

namespace App\Models;

use CodeIgniter\Model;

class TfModel extends Model
{
    protected $table = 'gebruikers';

    protected $allowedFields = ['naam','geboortedatum','e-mailadres'];
}

?>