<h2>maak hier uw lessen aan</h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<?php if(auth()->user()->rol == "klant"){
    exit;
}?>

<form action="/trainingfactory/admin" method="post">
    <?= csrf_field() ?>

    <label for="title">kies wat u gaat doen</label>
    <select value="<?= set_value('beschrijving') ?>" name="beschrijving" id="title">
        <option value="slazak">slazak</option>
        <option value="kickboxxen">kickboxxen</option>
        <option value="fitness">fitness</option>
    </select>
    <br>

    voer het max aantal spelers in(max 20)<br>
    <input value="<?= set_value('maxdeelnemers') ?>" for='maxdeelnemers' type="number" max="20" name="" />
    <br>
    instructeur:
    <input for=body name="body" value='<?php echo(auth()->user()->username) ?>' disabled><br>
    kies een tijd en een datum:
    <input for="date" type=date>
    <input for='tijd' type=time step='1'><br>
    

    <input type="submit" name="submit" value="voeg les toe">
</form> 