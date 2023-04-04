<style>
    body {
        font-family: Arial;
    }
    .users{
        background-color: aqua;
        width: auto;
        height: 50px;
    }
    .container{
        display: inline-grid;
    }
</style>
<body>
    
    
    <?php
    if(auth()->user()->rol == "admin"){
        echo("<h2>Hier kan u de rollen van gebruikers aanpassen.</h2>");
        for ($id = 0; $id < count($gebruikers);$id++): ?>
        <div class="container">
        <div class='users'>
          <?php  
          echo("naam: ". $gebruikers[$id]->naam.'<br>');
          echo('rol: '.$gebruikers[$id]->rol);
            ?>
            </div>
        </div><?php
        endfor;
}else if(auth()->user()->rol == "instructeur"){
    echo("<h2>maak hier uw lessen aan</h2>");
    include("create.php");
}
    ?>
    

</body>