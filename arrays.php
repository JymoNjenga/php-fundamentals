<br>
<h2>Arrays</h2>
<br><hr><br>
<?php
/**
 * -Arrays are variables that hold more than one value
 * -Arrays are usually zero based indexed
 * -There are two ways of creating arrays
 */

 $numbers = [44, 55, 66, 77];
 $fruits = array('apple', 'orange', 'banana', 'pear');

 /** 
  * There are two types of arrays 
 */
 // 1. Numeric arrays - which are accessed using the indexes
 $utensils = ['spoon', 'plate', 'fork', 'cup'];
 echo $utensils[1];

 // 2. Assosiative arrays - which are accessed using the keys that maps to the values
 $hex = [
   'red' => '#f00',
   'blue' => '#0f0',
   'green' => '#00f'
 ];
 echo nl2br("\n");
 echo $hex['blue'];

 // Assosiative arrays can be created to go several levels creating - Multidimensional Arrays
 $people = [
   [
     'first_name' => 'jymo',
     'last_name' => 'njenga',
     'email' => 'jymo@gmail.com'
   ],
   [
     'first_name' => 'john',
     'last_name' => 'doe',
     'email' => 'john@gmail.com'
   ],
   [
     'first_name' => 'marie',
     'last_name' => 'curie',
     'email' => 'marie@gmail.com'
   ]
 ];
 // To obtain the email of the second person 
 echo nl2br("\n");
 echo $people[1]['email'];
?>

<br><br><hr>
<h3>Turning an array to a JSON object</h3>
<hr>
<?php
  // To turn an array to a json object we use json_encode() method
  $JSONpeople = json_encode($people);
  print_r($JSONpeople);
  echo nl2br("\n");
  
  // To turn a JSON object back to php array we use json_decode() method
  echo nl2br("\n");
  $people = json_decode($JSONpeople);
  print_r($JSONpeople);
?>
