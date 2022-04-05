<?php
  /** Functions are blocks of code that run a certains functionality
   *  A function is declared by using the key word - function - then the function name follows
   *  For the code inside a function to run the function must be called
   *  Variables declared inside a function are usually available only within the function i.e on local scope. They are never accessible outside the function
   *  On the other hand, variable declared outside of the function - global variables - can be accessed in the function using the - global - keyword
   */

   // Declaring a function 
   function register_user() {
     echo 'User registered';
   }
   register_user();
   echo nl2br("\n");

   // Using a global variable in a function
   $name = 'Chuck';
   function login_user() {
     global $name;
     echo $name.' has been logged in!';
   }
   login_user();
   echo nl2br("\n");

   // Variables passed during function declaration are referred to as parameters
   // Variables passed during function calling are called arguements 
   function sum($num1, $num2) {
     return $num1 + $num2;
   }

   $total = sum(7, 4);
   echo $total;
