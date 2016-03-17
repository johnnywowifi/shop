<?php
require_once('../src/bootstrap.php');
$htmlTitle = "Bitte überprüfen Sie Ihre Daten";
require_once(PATHTEMPLATE . '/header.php');

$address_name = filter_input(INPUT_POST, 'name');
$address_strasse = filter_input(INPUT_POST, 'strasse');
$address_plz = filter_input(INPUT_POST, 'plz', FILTER_VALIDATE_INT);
$address_ort = filter_input(INPUT_POST, 'ort');

$address = new Wifi\Address();
$address->setName($address_name);
$address->setStreet($address_strasse);
$address->setPostal($address_plz);
$address->setCity($address_ort);

$SESSION['Address']['Name'] = $address->getName();
$SESSION['Address']['Street'] = $address->getStreet();
$SESSION['Address']['PLZ'] = $address->getPostal();
$SESSION['Address']['City'] = $address->getCity();
//var_dump($address->getAdressInfo());
?>


<h1>Bitte überprüfen Sie Ihre Daten:</h1>

<p>Name: <?php print($address->getName());?><br>
    Strasse: <?php print($address->getStreet()); ?><br>
    PLZ: <?php print($address->getPostal()); ?><br>
    Ort: <?php print($address->getCity()); ?></p>

<a href="address.php"><button>Schritt zurück</button></a>
<a href="kauf_abschliessen.php"><button>Jetzt verbindlich bestellen</button></a>




