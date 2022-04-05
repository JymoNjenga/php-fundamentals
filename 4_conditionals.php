<?php
  // COMPARISON OPERATORS
  /**
    < less than
    > greater than
    <= less than or equal to
    >= greater than or equal to 
    == equal to
    === identical to {matches both the values and datatype}
    != not equal to 
    !== not identical to
   */


  /*-------- if Statements --------*/
  /*
  ** if statement syntax
  
  if(condition) {
    // code to be executed if the condition is true
  }

  */

  // if else statement
  $age = 20;

  if($age >= 18) {
    echo 'You are old enough to vote.';
  } else {
    echo 'Sorry, you are not old enough to vote.';
  }

  // if elseif else statement
  $time = date("H");

  if($time < 12) {
    echo 'Good Morning';
  } elseif ($time < 16) {
    echo 'Good Afternoon';
  } elseif ($time < 19) {
    echo 'Good evening';
  } else {
    echo 'Good Night';
  }

  // Ternary operator - can be substituted with if else statement
  $posts = ['First Post'];

  $first_post = !empty($posts) ? $posts[0] : 'No Posts!';
  echo $first_post;

  // switch statement - can be used when there is a lot of if elseif else statements
  $day = date("D");
  echo $day;

  switch ($day) {
    case 'Mon':
      echo 'Today is on a Monday';
      break;
    case 'Tue':
      echo 'Today is on a Tuesday';
      break;
    case 'Wed':
      echo 'Today is on a Wednesday';
      break;
    case 'Thur':
      echo 'Today is on a Thursday';
      break;
    case 'Fri':
      echo 'Today is on a Friday';
      break;
    case 'Sat':
      echo 'Today is on a Saturday';
      break;
    case 'Sun':
      echo 'Today is on a Sunday';
      break;
    default:
      echo 'Incorrect day of the Week';
      break;
  }

