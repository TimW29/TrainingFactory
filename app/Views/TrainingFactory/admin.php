<style>
    body {
        font-family: Arial;
    }
    .users{
        background-color: aqua;
        width: auto;
        height: auto;
    }
    .container{
        display: inline-grid;
    }
</style>
<body>
    
    
    <?php
    if(auth()->user()->rol == "admin"){
        echo("<h2>Hier kan u de rollen van gebruikers aanpassen.</h2>");
        echo("<h4><a href='http://localhost:8080/TrainingFactory/shopform'>maak hier een nieuw product aan</a></h1>");
        for ($id = 0; $id < count($user);$id++): ?>
        <div class="container">
        <div class='users'>
          <?php  
          echo("naam: ". $user[$id]->username.'<br>');
          echo("email: ". $email[$id]->secret .'<br>'); 
          echo("telefoonummer: ". $user[$id]->telefoonnummer .'<br>');
          echo("geboortedatum: ". $user[$id]->geboortedatum .'<br>');
          echo('rol: '.$user[$id]->rol);
            ?>
            </div>
        </div>
        <?php
        endfor;
}else if(auth()->user()->rol == "instructeur"){
    echo("<h2>maak hier uw lessen aan</h2>");
    echo("<a href=http://localhost:8080/TrainingFactory/create>maak hier een les aan</a>");
}
    ?>
    

</body>