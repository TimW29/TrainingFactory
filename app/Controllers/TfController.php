<?php
namespace App\Controllers;

use App\Models\TfModel;

class TfController extends BaseController
{
    public function index(){
        
    $model = model(MoodModel::class);

    return view('templates/header')
        . view('mood/index')
        . view('templates/footer');
    }
}
?>