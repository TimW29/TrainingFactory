<h2>maak hier uw lessen aan</h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<?php if(auth()->user()->rol == "klant"){
    exit;
}?>

<form action="/TrainingFactory/shopform" method="post">
    <?= csrf_field() ?>

    <label for="naam">geef het product een naam</label>
    <input type='text' value="<?= set_value('naam') ?>" name="naam" id="naam">
    </select>
    <br>

    voer een afbeelding in<br>
    <input value="<?= set_value('foto') ?>" accept="image/png, image/jpeg" name='foto' for='foto' type="file" />
    <br>
    hoeveel kost het product
    <input value="<?= set_value('prijs') ?>" name='prijs' for='prijs' /><br>


    <input type="submit" name="submit" value="voeg les toe" />
</form>