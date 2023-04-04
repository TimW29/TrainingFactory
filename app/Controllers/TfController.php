<?php
namespace App\Controllers;

use App\Models\TfModel;

class TfController extends BaseController
{
    public function index(){
        
    $model = model(TFModel::class);
    
    $data = [
        'lessen' => $model->getLes()
    ];

    return view('templates/header', $data)
        . view('TrainingFactory/index')
        . view('templates/footer');
    }
}
?>