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
$string1 = 'Hello my name is';
$string2 = 'Michael Jackson. ';
// We concatenate string using the "." character. ("+" is reserved for addition )
$concattedString = $string1 . $string2;
//Difference between single and double quotes 
$mySingleQuoteHelloString = 'Hi there! My name is $string2';
//Double quotes are PARSED. PHP checks for variable names to echo out. 
$myDoubleQuoteHelloString = "Howdy there! My name is $string2";