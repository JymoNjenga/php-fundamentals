<?php

  /*-------- File Handling --------*/

  /*
    File handling is the ability to read and write file on the server
    PHP has built in funcitons for reading and writing files
  */

  $file = 'extras/users.txt';

  if(file_exists($file)) {
    // 1.
    // echo readfile($file);

    // 2.
    // $handle = fopen($file, 'r');
    // $contents = fread($handle, filesize($file));
    // fclose($handle);
    // echo $contents;

    // 3.
    $read = file($file);
    $count = count($read);
    $i = 1;
    foreach ($read as $key => $line) {
      echo ($key + 1).' : '.$line;
      if($i < $count) {
        echo ", ";
      }
      $i++;
    }


  } else {
    $handle = fopen($file, 'w');
    $content = 'dave'.PHP_EOL;
    fwrite($hadle, $content);
    fclose($handle);
  }

