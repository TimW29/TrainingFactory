<style>
    body {
        font-family: Arial;
    }
</style>
<body>
    <h2>Hier kan u uw profiel zien.</h2>
    welkom terug <?php echo (auth()->user()->username);?>
</body>