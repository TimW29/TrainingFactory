<h2>maak hier uw lessen aan</h2>



<?php if(auth()->user()->rol == "klant"){
    exit;
}?>

<form action="/TrainingFactory/create" method="post">
    <?= csrf_field() ?>

    <label for="title">kies wat u gaat doen</label>
    <select value="<?= set_value('beschrijving') ?>" name="beschrijving" id="title">
        <option value="slazak">slazak</option>
        <option value="kickboxxen">kickboxxen</option>
        <option value="fitness">fitness</option>
    </select>
    <br>

</label name='maxdeelnemers'>voer het max aantal spelers in(max 20)<br></label>
    <input value="<?= set_value('maxdeelnemers') ?>" name='maxdeelnemers' for='maxdeelnemers' type="number" max="20" name="" />
    <br>
    instructeur:
    <input for=body name="instructeur" value='<?php echo(auth()->user()->username) ?>' disabled><br>
    kies een tijd en een datum:
    <input for="date" name='datum' type='date'>
    <input for='tijd' type=time name='tijd' step='1'><br>
    

    <input type="submit" name="submit" value="voeg les toe">
</form> 