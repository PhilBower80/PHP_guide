<?php $title = 'Booleans and Comparisons';?>
<?php include 'inc/header.php'; ?>

<?php
// comparisons booleans (true or false)
echo 'true = ' . true . '<br>'; // true will echo '1'
echo 'false = ' . false . '<br>'; // false will echo '' (nothing)

// numbers
echo 'Numbers' . '<br>';
echo 5 < 10;
echo 5 > 10;
echo 5 == 10;
echo 10 == 10;

// strings
echo 'shaun' < 'yoshi';
echo 'shaun' > 'yoshi';



// loose vs strict equal comparison

echo 5 == '5';
echo 5 === '5';

?>

<main>


</main>




<?php include 'inc/footer.php'; ?>