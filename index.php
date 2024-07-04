<?php
require_once __DIR__.'/db/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Boolshop</title>
</head>
<body>
    <header>
        <h1>Boolshop</h1>
    </header>

    <main>
        <h2>I nostri prodotti</h2>
        <section class="products">
            
            <ul>
                <?php foreach ($itemList as $key => $item) { ?>
                    <?php if($item instanceof Food) { ?>
                        <li>
                            <div class="image-container">
                                <img src="<?= $item->getImgUrl() ?>" alt="<?= $item->getTitle() ?>">                        
                            </div>
    
                            <div class="info-container">
                                <h3>
                                    <?= $item->getTitle(); ?>
                                </h3>
                                <p> 
                                    <?= $item->getCategory()?>
                                </p>
                                <p> 
                                    Prezzo: <?= $item->getPrice()?> euro
                                </p>
                                <p> 
                                    Peso Netto: <?= $item->getWeight()?>g
                                </p>
                                <p>
                                    Ingredienti: 
                                    <?php foreach ($item->getIngredients() as $ingredient) { ?>
                                        <span><?= $ingredient ?>, </span>
                                    <?php } ?>
                                </p>
                            </div>
                        </li>

                    <?php } ?>

                    <?php if($item instanceof Game) { ?>
                        <li>
                                <div class="image-container">
                                <img src="<?= $item->getImgUrl() ?>" alt="<?= $item->getTitle() ?>">                        
                                </div>
        
                                <div class="info-container">
                                    <h3>
                                        <?= $item->getTitle(); ?>
                                    </h3>
                                    <p> 
                                        <?= $item->getCategory()?>
                                    </p>
                                    <p> 
                                        Prezzo: <?= $item->getPrice()?> euro
                                    </p>
                                    <p> 
                                        Caratteristiche: <?= $item->getDescription()?>
                                    </p>
                                    <p>
                                        Dimensioni: <?= $item->getSize() ?>
                                    </p>
                                </div>
                        </li>
                    <?php } ?>

                    <?php if($item instanceof Gadget) { ?>
                        <li>
                            <div class="image-container">
                                <img src="<?= $item->getImgUrl() ?>" alt="<?= $item->getTitle() ?>">                        
                            </div>
                        
                            <div class="info-container">
                                <h3>
                                    <?= $item->getTitle(); ?>
                                </h3>
                                <p> 
                                    <?= $item->getCategory()?>
                                </p>
                                <p> 
                                    Prezzo: <?= $item->getPrice()?> euro
                                </p>
                                <p> 
                                    Materiale: <?= $item->getMaterial()?>
                                </p>
                                <p>
                                    Dimensioni: <?= $item->getSize() ?>
                                </p>
                            </div>
                        </li>
                    <?php } ?>

                <?php } ?>
            </ul>
        </section>
    </main>
</body>
</html>
