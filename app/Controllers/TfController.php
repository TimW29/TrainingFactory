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
        $model = model(TFModel::class);

        $data = [
            'gebruikers' => $model->getGebruiker(),
            'email' => $model->getEmail()
        ];
    return view('templates/header', $data)
        . view('TrainingFactory/admin')
        . view('templates/footer');
    }
    public function create() {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'maak een les aan'])
                . view('trainingfactory/create')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['title', 'body']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'title' => 'required|max_length[255]|min_length[3]',
            'body'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'maak een les aan'])
                . view('trainingfactory/create')
                . view('templates/footer');
        }

        $model = model(TFModel::class);

        $model->save([
            'title' => $post['title'],
            'slug'  => url_title($post['title'], '-', true),
            'body'  => $post['body'],
        ]);

        return view('templates/header', ['title' => 'Create a news item'])
            . view('trainingfactory/admin')
            . view('templates/footer');
    }
    
}
?>