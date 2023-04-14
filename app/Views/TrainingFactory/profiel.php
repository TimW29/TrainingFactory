<style>
    body {
        font-family: Arial;
    }
.container > img {
    width: 200px;
    height: 200px;
}
</style>
<body>
    <div class='container'>
    <h2>Hier kan u uw profiel zien.</h2>
    welkom terug <?php echo (auth()->user()->username);?><br>
    <?php echo '<img src="data:'.auth()->user()->type.';base64,'.base64_encode(auth()->user()->profielfoto).'"/>';
    echo "uw geboortedatum".auth()->user()->geboortedatum;
    echo "uw telefoonnummer".auth()->user()->telefoonnummer;
    ?>
    <a href='http://localhost:8080/TrainingFactory/profielform'>verander uw gegevens hier</a>
    
</div>
</body>