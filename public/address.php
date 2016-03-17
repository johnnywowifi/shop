<?php
    require_once('../src/bootstrap.php');
    $htmlTitle = "Willkommen beim Shop";
    require_once(PATHTEMPLATE . '/header.php');
?>

<h1>Bitte geben Sie Ihre Daten ein:</h1>
<form action="manageAddress.php" method="post">
    <p>Name: <input type="text" name="name" value="<?php print_r($SESSION['Address']['Name']);?>"></p>
    <p>Straße: <input type="text" name="strasse" value="Muster Strasse 12"></p>
    <p>PLZ: <input type="text" name="plz" value="1070"></p>
    <p>Ort: <input type="text" name="ort" value="Wien"></p>
    <p><input type="submit" name="adresse_senden" value="zum nächsten Schritt">
    
</form>
<?php var_dump($SESSION[]);?>

    
    
    

<?php require_once(PATHTEMPLATE . '/footer.php'); ?>

