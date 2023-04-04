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
    <div class=container>
        <div class="les">
            <?php echo($lessen[$id]->tijd);?>
            <?php echo("<br>het aantal max deelnemers zijn ". $lessen[$id]->maxdeelnemers);?>
        </div>
    </div>
<?php endfor; ?>
</body>