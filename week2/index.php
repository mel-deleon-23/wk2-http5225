<!doctype html>
<html>
  <head>
    
    <title>PHP and Creating Output</title>
    
  </head>
  <body>
  
  <!-- PHP Output -->
    <?php

    echo '<h1>PHP and Creating Output</h1>';

    echo '<p>The PHP echo command can be used to create output.</p>';

    echo '<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>';

    echo '<ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>';

    echo '<h2>More HTML to Convert</h2>';

    print '<p>PHP says "Hello World!"</p>';

    echo "<p>Can you display a sentence with \' and \"\"\"?</p>";

    // echo '<img src="php-logo.png">';

    ?>
  
    <img src="php-logo.png">



    <!-- PHP Variables -->
    <?php
    
    $linkName = 'Codecademy';
    $linkURL = 'https://www.codecademy.com/';
    $linkImage = 'codecademy.png';
    $linkDescription = 'Learn to code interactively, for free.';
    
    // echo '<h1>'.$linkName.'</h1>';

    ?>
    <br><br>
    <!-- <?php echo $linkName?> -->

    <a href="<?php echo $linkURL ?>">
        <?php echo '<h1>' .$linkName. '</h1>'?>
    </a>
    <?php echo '<img src=' .$linkImage. '>'?>
    <?php echo '<p>' .$linkDescription. '</p>'?>


    <br><br>
    
    <!-- PHP Arrays -->
    <?php 

    $person['first'] = 'Melissa';
    $person['last'] = 'De Leon';
    $languages = array( 'PHP', 'HTML', 'JavaScript', 'CSS' );

    echo '<p>Hello '.$person['first'].' '.$person['last'].'!</p>';

    echo '<p>' .$person['first']. '<p> is learning ' .$languages[0]. ', ' .$languages[1]. ', ' .$languages[2]. ', ' .$languages[3].'</p>';

    ?>

  </body>
</html>
