<style>
    body {
        font-family: Arial;
    }
</style>
<body>
    <h2>Hier kan u de lessen aanpassen.</h2>
    <?php
    if($gebruikers[$id]->rol == "instructeur"){
        echo("welkom instructeur");
        
    }
    ?>

</body>