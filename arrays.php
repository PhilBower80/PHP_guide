<?php $title = 'Arrays';?>
<?php include 'inc/header.php'; ?>

<?php
// indexed arrays
$peopleOne = ['shaun', 'crystal', 'ryu'];
print_r($peopleOne);
echo '<br>';
// another way of writing asn indexed array
$peopleTwo = array('shaun', 'crystal', 'ryu');
print_r($peopleTwo);
echo '<br>';

// add to an array
$ages = [20, 30, 40, 50];
// print_r($ages);

$ages[1] = 25; // this will overwrite position 1 of the array
$ages[] = 60; // add an extra value to the array.
array_push($ages, 70); // add an extra value to the array.

echo count($ages);
echo '<br>';

// merging arrays
$peopleThree = array_merge($peopleOne, $peopleTwo);
print_r($peopleThree);
echo '<br>';

// associative array (key and value pairs)
$ninjasOne = ['shaun'=>'black', 'mario'=>'orange', 'luigi'=>'brown']; // create an associative array
print_r($ninjasOne);
echo '<br>';
echo $ninjasOne['mario'];
echo '<br>';

$ninjasTwo = array('bowser'=>'green', 'peach'=>'yellow'); // alternative way to create an associative array
print_r($ninjasTwo);
echo '<br>';

$ninjasTwo['toad'] = 'pink'; // add another key value pair to associative array.
print_r($ninjasTwo);
echo '<br>';

$ninjasThree = array_merge($ninjasOne, $ninjasTwo); // merge associative arrays together
print_r($ninjasThree);
echo '<br>';

// multi-dimensional arrays
$blogs = [
    ['title'=>'mario party', 'author'=>'mario', 'content'=>'lorem', 'likes'=>30],
    ['title'=>'mario kart cheats', 'author'=>'toad', 'content'=>'lorem', 'likes'=>25],
    ['title'=>'zelda hidden chests', 'author'=>'link', 'content'=>'lorem', 'likes'=>50]
];

print_r($blogs);
echo '<br>';
echo $blogs[2]['author'];
echo '<br>';

$blogs[] = ['title'=> 'castle party', 'author'=>'peach', 'content'=>'lorem', 'likes'=>100 ];
print_r($blogs);
echo '<br>';

$popped = array_pop($blogs); // remove last item from array
print_r($popped);

?>

<main>

    <div class="flex-container arrays">
        <!-- <p><?php echo $peopleOne[0]; ?></p><br> -->
        <!-- <p><?php echo $peopleTwo[1]; ?></p> -->               
    </div> 

</main>




<?php include 'inc/footer.php'; ?>