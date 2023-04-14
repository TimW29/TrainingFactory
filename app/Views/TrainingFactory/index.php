<style>
    body {
        font-family: Arial;
    }
    .les{
        width:  300px;
        height: 300px;
        background-color: aqua;
        margin: 30px;
    }
    .container{
        display: inline-grid;
    }
</style>
<body>
    <h2>uw lessen</h2>
    <?php 
    for ($id = 0; $id < count($lessen);$id++): ?>
    <div class='container'>
        <div class="les">
            <?php echo('de les is begint om '. $lessen[$id]->tijd);?>
            <?php echo('en het is op '. $lessen[$id]->date);?>
            <?php echo("<br>het aantal max deelnemers zijn ". $lessen[$id]->maxdeelnemers);?>
            <?php echo("<br>beschrijving: ". $lessen[$id]->beschrijving);?>
            <?php echo("<br>instructeur: ". $lessen[$id]->instructeur);?><br>
            <?php if(auth()->user()->rol == "klant"){
                echo("<button type='submit'>schrijf je nu in</button>");
                }?>
        </div>
    </div>
<?php endfor; ?>
</body>