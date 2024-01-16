<!--Aggiungo i Models e Database-->

<?php

require_once __DIR__ . '/Models/Accessory.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Database/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Link Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--Link FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Link CSS-->
    <link rel="stylesheet" href="css/style.css">
    <title>php-oop-2</title>
</head>

<body>
    <!--Header-->
    <header class="bg-dark text-white text-start p-5">
        <h1>Pet Shop</h1>
    </header>
    <!--Fine Header-->
    <!--Main-->
    <main>
        <div class="text-white py-0 px-5">
            <h2 class="ms-4 pt-5 ps-5">Our products</h2>
        </div>
        <div class="container d-flex flex-wrap align-items-start my-5">
            <!-- //* stampare con un ciclo foreach l'array $products -->
            <?php foreach ($products as $product) : ?>
                <div class="text-black my-3 ms-4 me-4" id="container">
                    <div class="card">
                        <img src="<?php echo $product->getImage() ?>" class="card-img-top" alt="<?php echo $product->getTitle() ?>">
                        <div class="card-body">
                            <h5 class="card-title"><strong><?php echo $product->getTitle() ?></strong></h5>
                            <p class="card-text mb-1">Category: <i class="<?php echo $product->getCategory()->icon ?>"></i> <?php echo $product->getCategory()->name ?></p>
                            <!-- <p class="card-text mb-1">Price: &euro; <?php // echo $product->getPrice() 
                                                                            ?></p> -->
                            <!-- //* per ottenere il prezzo con le virgole -->
                            <!-- <p class="card-text mb-1">Price: &euro; <?php // echo $product->getFormatPrice() 
                                                                            ?></p> -->
                            <p class="card-text text-decoration-line-through mb-1">Original price: &euro; <?php echo $product->getFormatPrice() ?></p>
                            <!-- //* prezzo scontato                                                              percentuale   ↓           -->
                            <p class="card-text mb-1"><strong>Discounted price: &euro; <?php echo $product->getFormatDiscount(20) ?></strong> </p>
                            <?php if (get_class($product) == 'Food') : ?>
                                <p class="card-text mb-1">Weight: <?php echo $product->weight ?></p>
                                <p class="card-text mb-1">Ingredients: <?php echo implode(', ', $product->ingredients) ?></p>
                            <?php endif; ?>
                            <?php if (get_class($product) == 'Toy') : ?>
                                <p class="card-text mb-1">Features: <?php echo $product->features ?></p>
                                <p class="card-text mb-1">Size: <?php echo $product->size ?></p>
                            <?php endif; ?>
                            <?php if (get_class($product) == 'Accessory') : ?>
                                <p class="card-text mb-1">Material: <?php echo $product->material ?></p>
                                <p class="card-text mb-1">Size: <?php echo $product->size ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <!--Fine Main-->
</body>

</html>