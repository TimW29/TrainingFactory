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
            'producten' => $model->getItems()
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
        $model = model(TFModel::class);

        $data = [
            'gebruikers' => $model->getGebruiker(),
            'email' => $model->getEmail(),
            'lessen' => $model->getLes(),
            'user'=> $model->getUser()
        ];
    return view('templates/header', $data)
        . view('TrainingFactory/admin')
        . view('templates/footer');
    }
    public function shopform(){
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['beschrijving' => 'maak een nieuw product aan'])
                . view('trainingfactory/shopform')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['naam','foto','prijs']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'naam' => 'required|max_length[255]|min_length[3]',
            'foto'  => 'required|max_length[5000]|min_length[1]',
            'prijs' => 'required|max_length[5000]|min_length[1]',
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['beschrijving' => 'maak een product aan'])
                . view('trainingfactory/shopform')
                . view('templates/footer');
        }

        $model = model(TFModel::class);

        $model->save([
            'naam' => $post['naam'],
            'foto'  => $post['foto'],
            'prijs'  => $post['prijs']
        ]);

        return view('templates/header', ['beschrijving' => 'Create a news item'])
            . view('trainingfactory/admin')
            . view('templates/footer');
    }
    public function create() {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['beschrijving' => 'maak een les aan'])
                . view('trainingfactory/create')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['beschrijving','maxdeelnemers','date','tijd','instructeur']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'beschrijving' => 'required|max_length[255]|min_length[3]',
            'maxdeelnemers'  => 'required|max_length[5000]|min_length[1]',
            'date' => 'required|max_length[5000]|min_length[1]',
            'tijd' => 'required|max_length[5000]|min_length[1]',
            'instructeur' => 'required|max_length[5000]|min_length[1]',
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['beschrijving' => 'maak een les aan'])
                . view('trainingfactory/create')
                . view('templates/footer');
        }

        $model = model(TFModel::class);

        $model->save([
            'beschrijving' => $post['beschrijving'],
            'instructeur'  => $post['instructeur'],
            'maxdeelnemers'  => $post['maxdeelnemers'],
            'date' => $post['date'],
            'tijd' => $post['tijd'],
        ]);

        return view('templates/header', ['beschrijving' => 'Create a news item'])
            . view('trainingfactory/admin')
            . view('templates/footer');
    }
    
}
?>