<?php
    require_once('../src/bootstrap.php');
    $htmlTitle = "Willkommen beim Shop";
    require_once(PATHTEMPLATE . '/header.php');
?>

<h1>Ihr Warenkorb</h1>
<?php include_once(PATHPARTIAL . '/categoryNav.php');?>

<table>
    <tr>
        <th>Name</th>
        <th>Anzahl</th>
        <th>Preis</th>
        <th>&nbsp;</th>
    </tr>
    <?php
    //var_dump($_SESSION);
        $basket = new Wifi\Basket();
        $basket->restore();
        /* @var $product \Wifi\BasketProduct */
        foreach ($basket->getProducts() as $id => $product) {
            printf('
              <tr>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>
                    <form action="manageBasket.php" method="post">
                        <input type="hidden" name="basketAction" value="remove">
                        <input type="hidden" name="prodItemId" value="%s">
                        <input type="submit" value="Produkt aus Warenkorb löschen" name="prodRemove">
                    </form>
                </td>
              <tr>        
            ',
              $product->getName(),
              $product->getAmount(),
              $product->getTotal('de'),
              $id
            );
        }
    ?>
    <tr>
        <td colspan="2">Gesamtpreis</td>
        <td><?php print($basket->getTotalsum('de')); ?></td>
        <td>&nbsp;</td>
    </tr>
</table>

<?php require_once(PATHTEMPLATE . '/footer.php'); ?>

