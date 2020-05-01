<?php
  /**
   * DEBUG error reporting!
   * !!! REMOVE BEFORE PUSHING TO PROD !!!
   */
  ini_set( 'display_errors', 1 );
  ini_set( 'display_startup_errors', 1 );
  error_reporting( E_ALL );
  /**
   * A basic object.
   */
  $myObject = new stdClass(); // "new" keyword is REQUIRED when making an object from a CLASS (or BLUEPRINT.)
  // To add a property to our object we use the -> arrow syntax 
  $myObject ->name = ' Jim Bob-Bob';
  $myObject ->age = 69; 
  $myObject ->interests = array('hockey', 'skiing', 'jogging');
  /**
   * Inclue our class / blueprint file, so we can use our class. 
   */
  include './includes/snack.class.php';
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP</title>
</head>
<body>
  <h1>PHP OOP</h1>
  <?php include './includes/navigation.php'; ?>
  <h2>$myObject dump:</h2>
  <pre><?php var_dump( $myObject ); ?></pre>
</body>
</html>