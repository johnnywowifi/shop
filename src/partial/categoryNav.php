<div id="categoryNav">
<?php     

    $categorie = Base\CategoryQuery::create()->find();
    foreach ($categorie as $cat) {
        printf('<a href="index.php?cId=%s">%s</a><br>',
                $cat->getId(),
                $cat->getCategoryname()
               );
    }
?>
</div>