<h2>maak hier uw lessen aan</h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>



<!-- <form action="/TrainingFactory/" method="post"> -->
    <?php echo form_open_multipart("TrainingFactory/profielform"); ?>

    <?= csrf_field() ?>
    <label for="naam">voer uw telefoon nummer in</label>
    <input type='number' value="<?= set_value('telefoonnummer') ?>" name="telefoonnummer" id="telefoonnummer">
    </select>
    <br>

    voer een profielfoto in<br>

    <input value="<?= set_value('profielfoto') ?>" accept="image/png, image/jpeg" name='profielfoto' for='foto' type="file" />
    <br>
    voer uw geboortedatum in.
    <input value="<?= set_value('geboortedatum') ?>" name='geboortedatum' type='date' for='geboortedatum' /><br>


    <input type="submit" name="submit" value="voeg gegevens toe" />
</form>