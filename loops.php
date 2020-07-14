<?php $title = 'Loops';?>
<?php include 'inc/header.php'; ?>



<main>
    <!-- for loops -->
    <div class="flex-container arrays">
        <h2>For Loop</h2>
        <pre>
        $ninjas = ['shaun', 'ryu', 'yoshi'];

        for ($i = 0; $i < count($ninjas); $i++) {
        echo $ninjas[$i];
        }
        </pre>
    </div> 

    <div class="flex-container arrays">
    <?php

    $ninjas = ['shaun', 'ryu', 'yoshi'];

    for ($i = 0; $i < count($ninjas); $i++) {
    echo $ninjas[$i] . '<br>';
    }

    ?>
    </div>

    <!-- foreach loops -->
    <div class="flex-container arrays">
        <h2>foreach Loop</h2>
        <pre>
        foreach ($ninjas as $ninja) {
            echo $ninja;
        }
        </pre>
    </div> 

    <div class="flex-container arrays">
    <?php

        foreach ($ninjas as $ninja) {
            echo $ninja . '<br>';
        }

    ?>
    </div>
    <?php
    $products = [
        ['name'=>'shiny star', 'price'=>20],
        ['name'=>'green shell', 'price'=>10],
        ['name'=>'red shell', 'price'=>15],
        ['name'=>'gold coin', 'price'=>5],
        ['name'=>'lightning bolt', 'price'=>40],
        ['name'=>'banana skin', 'price'=>2]
    ];

    foreach ($products as $product) {
        echo $product['name'] . ' - ' . $product['price'] . '<br>';
    }

    ?>

    <?php

    // while loop
    $i = 0;
    while($i < count($products)) {
        echo $products[$i]['name'] . '<br>';
        $i++;
    }

    ?>


    <h1>Products</h1>
    <ul>
        <?php foreach($products as $product) { ?>

            <h3><?php echo $product['name']; ?></h3>
            <p>£ <?php echo $product['price']; ?></p>

        <?php } ?>
    </ul>

</main>




<?php include 'inc/footer.php'; ?>