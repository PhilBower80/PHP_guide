<?php $title = 'DateTime() Function';?>
<?php include 'inc/header.php'; ?>

<main>
  <div class="flex-container">

    <?php
    // DateTime function

    $raw = '03. 04. 1980';
    // $output = DateTime::createFromFormat('m . d . Y', $raw);
    $output = date_create_from_format('m . d . Y', $raw);
    echo $output->format('d m Y') . '<br>';
    ?>

  </div>
  
  <div class="flex-container">  
    <?php
    // Comparisons
    $phil = new DateTime('March 4, 1980');
    $derek = new DateTime('September 4, 1948');

    echo $phil->format('d m Y');

    if ($phil > $derek) {
      echo '<p> Phil is younger than Derek</p>';
    } else {
      echo '<p> Phil is older than Derek</p>';
    }
    ?>
  </div>

  <div class="flex-container">
    <?php
    // Age Difference

    $diff = $phil->diff($derek);
    echo $diff->format("<p>There is %y years, and %m months and %d days between Phil and Derek</p>");

    // Timezones
    $publishDate = '2014-08-24 09:14:00';

    $localDateTime = new DateTime($publishDate, new DateTimeZone('America/New_York'));
    $utcDateTime = clone $localDateTime;
    $utcDateTime->setTimeZone(new DateTimeZone('UTC'));
    ?>

    <p>The UTC date/time is : <?= $utcDateTime->format("Y-m-d H:i:s") ?></p>
    <p>The New York date/time is : <?= $localDateTime->format("Y-m-d H:i:s") ?></p>
  </div>
</main>


<?php include 'inc/footer.php'; ?>