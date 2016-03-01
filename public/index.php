<?php
    require_once('../src/bootstrap.php');
    $htmlTitle = "Willkommen beim Shop";
    require_once(PATHTEMPLATE . '/header.php');
?>

<h1>Kategorien</h1>
<?php include_once(PATHPARTIAL . '/categoryNav.php');?>

<h1>Produkte</h1>
<?php
$x = new Wifi\Basket();
$cId = filter_input(INPUT_GET, 'cId', FILTER_VALIDATE_INT);
if ($cId){
    $products = Base\ProductQuery::create()->findByCategoryId($cId);
} else {
    $products = Base\ProductQuery::create()->find();
}
if ($products->count() > 0){
    foreach($products as $product){
        printf('<h2>%s</h2>
                <p>%s</p>
                <p>EUR %s</p>
                <form action="manageBasket.php" method="post">
                <input type="hidden" name="prodId" value="%s">
                <input type="hidden" name="basketAction" value="add">
                <input type="hidden" name="prodName" valuse="%s">
                <input type="hidden" name="prodPrice" valuse="%s">
                    <input type="text" name="prodCount" value="0" id="prodCount">
                    mal in den 
                    <input type="submit" name="prodIntoBasket" value="Warenkorb">
                </form>
                
                ', 
                $product->getProductname(), 
                $product->getDescription(),
                number_format($product->getPrice(), 2, ',', '.'),
                $product->getId(),
                $product->getProductname(),
                $product->getPrice()
                );
    }
}
?>

<?php require_once(PATHTEMPLATE . '/footer.php'); ?>

