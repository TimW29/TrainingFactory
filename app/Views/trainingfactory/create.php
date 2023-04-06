<h2>maak hier uw lessen aan</h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<?php if(auth()->user()->rol == "klant"){
    exit;
}?>

<form action="/news/create" method="post">
    <?= csrf_field() ?>

    <label for="title">kies wat u gaat doen</label>
    <select value="<?= set_value('beschrijving') ?>" name="title" id="title">
        <option value="slazak">slazak</option>
        <option value="kickboxxen">kickboxxen</option>
        <option value="fitness">fitness</option>
    </select>
    <br>

    <label for="body">voer het max aantal spelers in(max 20)</label><br>
    <input value="<?= set_value('maxdeelnemers') ?>" type="number" max="20" name="" />
    <br>
    <label for="body">Text</label>
    <textarea name="body" cols="10" value='<? $lessen[$id]->instructeur ?>' rows="4"><?= set_value('instructeur') ?></textarea>

    <input type="submit" name="submit" value="voeg les toe">
</form> 