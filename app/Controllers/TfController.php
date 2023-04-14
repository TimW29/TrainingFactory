<?php
namespace App\Controllers;

use App\Models\TfModel;
use App\Models\ProductsModel;

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

        $model = model(ProductsModel::class);

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
    public function profielform(){
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['beschrijving' => 'maak een nieuw product aan'])
                . view('trainingfactory/profielform')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['geboortedatum','telefoonnummer']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'geboortedatum' => 'required|max_length[255]|min_length[3]',
            // 'foto'  => 'required|max_length[5000]|min_length[1]',
            'telefoonnummer' => 'required|max_length[5000]|min_length[1]',
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['beschrijving' => 'maak een product aan'])
                . view('trainingfactory/profielform')
                . view('templates/footer');
        }
        $img = $this->request->getFile('profielfoto');
        var_dump($img);
        echo $img->getBaseName();
        $targetDir = "C:/xampp/tmp";
        // if (count($_FILES)>0) {
            // var_dump(is_uploaded_file($img->getBasename()));
            // if(is_uploaded_file($img->getBasename())){
                
            //     if(move_uploaded_file($img->getBasename(), "$targetDir/" . $img->getBasename())){
            //         echo ('test');
        
            //     }
            if($img > null){
                
            }else{
                $imgdata = file_get_contents("$targetDir/" . $img->getBasename());
                $imgtype = $img->getMimeType();
                var_dump($imgdata);
            }
        // }
        $model = model(ProfielModel::class);

        $model->update(auth()->user()->id,[
            'geboortedatum' => $post['geboortedatum'],
            'telefoonnummer'  => $post['telefoonnummer']
        ]);
        if($img > null){

        }else{
        $model->update(auth()->user()->id,[
            'profielfoto'  => $imgdata,
            'type' => $imgtype,
        ]);}
        return view('templates/header', ['beschrijving' => 'Create a news item'])
            . view('trainingfactory/shop')
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

        $post = $this->request->getPost(['naam','prijs']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'naam' => 'required|max_length[255]|min_length[3]',
            // 'foto'  => 'required|max_length[5000]|min_length[1]',
            'prijs' => 'required|max_length[5000]|min_length[1]',
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['beschrijving' => 'maak een product aan'])
                . view('trainingfactory/shopform')
                . view('templates/footer');
        }
        $img = $this->request->getFile('foto');
        var_dump($img);
        echo $img->getBaseName();
        $targetDir = "C:/xampp/tmp";
        // if (count($_FILES)>0) {
            // var_dump(is_uploaded_file($img->getBasename()));
            // if(is_uploaded_file($img->getBasename())){
                
            //     if(move_uploaded_file($img->getBasename(), "$targetDir/" . $img->getBasename())){
            //         echo ('test');
        
            //     }
                $imgdata = file_get_contents("$targetDir/" . $img->getBasename());
                $imgtype = $img->getMimeType();
                var_dump($imgdata);
            // }
        // }
        $model = model(ProductsModel::class);

        $model->save([
            'naam' => $post['naam'],
            'foto'  => $imgdata,
            'type' => $imgtype,
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