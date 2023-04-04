<style>
    body {
        font-family: Arial;
    }
</style>
<body>
    <h2>Hier kan u de producten kopen</h2>
    <?php 
    if($gebruikers[0]->rol == "instructeur"){
    echo("goed bezig steven");
    echo(auth()->user()->username);
    }
    ?>
</body>