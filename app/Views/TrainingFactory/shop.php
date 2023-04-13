<style>
    body {
        font-family: Arial;
    }
    .item > img{
        height: 100px !important;
        width: 100px !important;
        border-radius: 0%;
    }
    .container{
        
    }
    .item{
        height: 150px;
        width: auto;
        display: inline-grid;
    }
    .item:not(:first-child) {
        padding-left: 5%;
}
</style>
<body>
    <h2>Hier kan u de producten kopen</h2>
    <div class='container'>
    <?php 
    use PhpParser\Node\Expr\Variable;
        for ($id = 0; $id < count($producten);$id++): ?>
        <div class='item'>
        <h2><?php echo ($producten[$id]->naam);?><br></h2>
        <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($producten[$id]->foto).'"/>';?><br>
        prijs: €<?php echo ($producten[$id]->prijs);?>
        </div>
    <?php endfor; ?>
</div>
</body>