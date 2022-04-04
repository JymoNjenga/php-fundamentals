<?php

/* --------PHP Data Types-------- */
/**
 * -String    : Series of characters sorounded by quotes
 * -Integer   : Whole numbers
 * -Float     : Decimal numbers
 * -Boolean   : true or false
 * -Null      : Empty variable
 * -Array     : Special variable that can hold more than one value
 * -Object    : An instance of a class
 * -Resource  : Special variable that holds a resource
 */

 /* --------Variable Rules-------- */
 /**
  * -Variables must be prefixed with a $ sign
  * -Variables must start with a letter or the underscore character
  * -Variables can't start with a number
  * -Variables can only contain alpha numeric characters and underscores (A-Z, 0-9, and _)
  * -Variable are case sensitive ($name and $NAME are two different variables)  
  */

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Data Types</h2>
  <hr><br>
  <p>
    String : <?php 
    $name = 'James'; // String
    echo $name; 
    ?>
  </p>
  <hr><br>
  <p>
    Integer : <?php 
    $age = '25'; // Integer
    echo $age; 
    ?>
  </p>
  <hr><br>
  <p>
    Float : <?php 
    $weight = '69.8'; // Float
    echo $weight; 
    ?>
  </p>
  <hr><br>
  <p>
    Boolean : <?php 
    $has_kids = true; // Boolean
    $is_down = false;
    ?>
    <br>
    <strong>echo output of a boolean true: </strong>
    <?php echo $has_kids; ?>
    <br>
    <strong>echo output of a boolean false: </strong>
    <?php echo $is_down; ?>
    <p>(<i>N/B A boolean false outputs nothing.</i>)</p>
    <br>
    <strong>var_dump() output of a boolean true: </strong>
    <?php var_dump($has_kids); ?>
    <br>
    <strong>var_dump() output of a boolean false: </strong>
    <?php var_dump($is_down); ?>
    <br>

  </p>
  <hr><br><br>
  
</body>
</html>

<?php
/*--------Having Variables Within Strings-------- */
/**
* The variable in concatenated into the string using .
*/

// Using the .
echo $name.' is '.$age.' years old.'; 

// While using the double quote, one can just include the variables directly to the string
echo nl2br("\n");
echo "$name is $age years old.";

// Also one can wrap variable names in curly braces. This is the most adviseable way
echo nl2br("\n");
echo "${name} is ${age} years old.";

?>

<!DOCTYPE html>
<html lang="en">
<body>
  <hr><br>
  <h2>Constants</h2>
  <?php
    /**
     * -Constants are variables that do not change
     * -Constants names are usually in uppercase
     * -while making a reference to them the $ sign in not used 
     */
    define('HOST', 'localhost');
    define('DB_NAME', 'dev_db');
    echo HOST;
    echo nl2br("\n");
    echo DB_NAME; 
   ?>
  
</body>
</html>
