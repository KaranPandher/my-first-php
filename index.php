<?php 
// Basic Assignment 
// Echo is used to send message to browswer or output something 
    $myMessage = 'My First PHP!';
# This is also a comment 
/* 
Multi-line comments! 
Yay! 
*/ 

/** 
 * Data Types 
 */
// String 
$myString = 'Hello, World!';
// Integer
$myInteger = 34; 
// Float / Double 
$myFloat = 3.14; 
// Boolean
$myBoolTrue = TRUE; 
$myBoolFalse = false;
// NULL 
$myNull = NULL; 
// Object 
$myObject = new stdClass(); 
// Array 
$myArray = [' First Item', 2, 'third item'];
$myOtherArray = array(
        $myString,
        $myInteger,
        $myFloat,
        $myBoolTrue,
        $myBoolFalse,
        $myNull,
        $myObject
); 

?> <!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title><?php echo $myMessage; ?></title>
</head> 

<body>
    <h1><?php echo $myMessage; ?></h1> 
    <!-- Echo is used to send message to browser -->
</body>
</html>
