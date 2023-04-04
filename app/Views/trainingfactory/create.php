<h2>maak hier uw lessen aan</h2>



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

    <input type="submit" name="submit" value="voeg les toe">
</form> 