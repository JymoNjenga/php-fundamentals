<?php
/*-------- for loop --------*/

/** for loop syntax
    for(initialize; condition; increment) {
      // code to be executed
    }
 */

for($x = 0; $x <= 10; $x++) {
  echo $x;
  echo nl2br("\n");
}

/*-------- while loop --------*/

/** while loop syntax
    while(condition) {
      // code to be executed
    }
 */

$x = 1;

while($x <= 10) {
  echo 'Number '.$x.'<br>';
  $x++;
}

/*-------- do while loop --------*/

/** do while loop syntax
    do{
      // code to be executed
    } while(condition);

    do...while loop will always execute the block of code once, even if the condition is false
 */

$x = 10;

do {
  echo 'Number '.$x.'<br>';
  $x--;
} while ($x >= 1);

/*-------- foreach loop --------*/

/*
 ** foreach loop syntax
    foreach($array as $value) {
      // code to be executed
    }
 */

$posts = ['First Post', 'Second Post', 'Third Post', 'Fourth Post'];

foreach ($posts as $post) {
  echo $post;
  echo nl2br("\n");
}

// To get the index
foreach ($posts as $index => $post) {
  echo $index.'-'.$post;
  echo nl2br("\n");
}

// For an assosiative array
$person = [
  'first_name' => 'James',
  'last_name' => 'Njenga', 
  'email' => 'jymo@gmail.com'
];

foreach ($person as $key => $value) {
  echo "${key} - ${value}";
  echo nl2br("\n");
}