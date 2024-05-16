<?php

require_once __DIR__ . '/Model/Products.php';
require_once __DIR__ . '/Model/Cane.php';
require_once __DIR__ . '/data/db.php';

// $croccantiniCaneXL = new Products('Royal Canin giant adult', 64.99, 'https://shop-cdn-m.mediazs.com/bilder/7/800/rc_shn_giantadult_mv_1_7.jpg', 'Cani');

// $croccantiniCaneUrinary = new Products('Royal Canin Veterinary Urinary', 21.99, 'https://static.zoomalia.com/prod_img/30709/xl_164fa7cdfad1a5aaf8370ebeda47a1ff1c31553781090.jpg', 'Cani');

// $scatolettaGatti = new Products('Monge Monoprotein Cat Lattina', 33.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/225172/monge-cat-gr-80-sfilaccetti-tacchino-carote.jpg?v=637454750099070000', 'Gatti');

// var_dump($croccantiniCaneXL);
// var_dump($croccantiniCaneUrinary);
// var_dump($scatolettaGatti);



// var_dump($db);



?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container my-5">

        <nav class="navbar mb-5">
            <div class="container">
                <div class="container d-flex justify-content-center">
                    <a class="navbar-brand logo" href="#">
                        <img src="img/zarla-zampadotta-1x1-2400x2400-20210607-dg9bt479kwyprqb8k46x.png" alt="Bootstrap" width="30" height="24">
                    </a>
                </div>
            </div>
        </nav>

        <div>
            <div class="d-flex justify-content-between">
                <?php foreach ($db as $product) : ?>

                    <div class="card" style="width: 18rem;">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <?php echo "<img src='" . $product->immagine . "' class='img-fluid'>"; ?>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title"> <?php echo $product->nome ?> </h6>
                            <p> <?php echo $product->categoria ?> </p>
                            <p> <?php echo $product->prezzo ?> </p>
                            <?php if ($product->categoria === 'Cani') : ?>
                                <p> <?php echo $product->$taglia ? $product->$taglia : '' ?> </p>
                                <p> <?php echo $product->$ingredients ? $product->$ingredients : '' ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php endforeach ?>
            </div>

        </div>

    </div>
</body>

</html>