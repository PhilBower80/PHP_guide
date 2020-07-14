<?php $title = 'Functions';?>
<?php include 'inc/header.php'; ?>



<main>
    <div class="flex-container">
    <?php

    function sayHello($name = 'Phil') { // default value for $name set
    echo "Good morning $name <br />"; //use double quotes when referencing a variable inside quotes
    }

    sayHello();



    function formatProduct($product){
        // echo "{$product['name']} costs £{product['price']} to buy <br />"; //use curly braces when wanting to access property of variable.
        return "{$product['name']} costs £{product['price']} to buy <br />";
    }


    $formatted = formatProduct(['name'=>'gold star', 'price'=>20]);
    echo $formatted;


    
    ?>
    </div>


</main>




<?php include 'inc/footer.php'; ?>