<style>
    body {
        font-family: Arial;
    }
</style>
<body>
    <h2>Hier kan u de lessen aanpassen.</h2>
    <?php
    if(auth()->user()->rol == "admin"){
        echo("goed bezig steven");
        }
    ?>

</body>