<?php
namespace App\Controllers;

use App\Models\TfModel;

class TfController extends BaseController
{
    public function index(){
        
    $model = model(TFModel::class);
    
    $data = [
        'lessen' => $model->getLes(),
    ];

    return view('templates/header', $data)
        . view('TrainingFactory/index')
        . view('templates/footer');
    }

    public function shop(){

        $model = model(TFModel::class);

        $data = [
            'gebruikers' => $model->getGebruiker()
        ];
    return view('templates/header', $data)
        . view('TrainingFactory/shop')
        . view('templates/footer');
    }

    public function profiel(){
    
    return view('templates/header')
        . view('TrainingFactory/profiel')
        . view('templates/footer');
    }

    public function admin(){
    
    return view('templates/header')
        . view('TrainingFactory/admin')
        . view('templates/footer');
    }
}
?>