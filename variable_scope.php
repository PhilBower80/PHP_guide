<?php $title = 'Variable Scope';?>
<?php include 'inc/header.php'; ?>



<main>
    <div class="flex-container">
    <?php

    // global scope, use global keyword before variable name to access a variable set outdside of the function.

    $name = 'Mario';

    function sayHello() {
      global $name;
      echo "hello $name <br />";
    }

    sayHello();


    function sayBye(&$name){ // using the ampersand & before the variable name tells it that it is linked to the global variable of that name.
      $name = 'Wario';
      echo "bye $name <br />";
    }

    sayBye($name);
    echo $name;


    
    ?>
    </div>

</main>




<?php include 'inc/footer.php'; ?>