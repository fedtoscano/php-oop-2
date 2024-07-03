<?php
require_once __DIR__.'/db/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <?php foreach ($itemList as $key => $item) {
                    var_dump($item);
                }?>
            </ul>
        </section>
    </main>
</body>
</html>