<?php

  /* -------- Superglabals --------*/
  // They are built in variables that are always available in all scopes
  // Are usually associative arrays

  /*
  $_GET - Contains information about variables passed in through a URL or a form
  $_POST - Contains information about variables passed through a form
  $_COOKIE - Contains information about variales passed through a cookie
  $_SESSION - Contains information about variable passed through a session 
  $_SERVER - Contains information about the server environment
  $_ENV -  Contains information about the environment variables
  $_FILES - Contains information about files uploaded to the script
  $_REQUEST - Contains information about variables passed in through a URL or a form
  */
?>

<!-- $_SERVER -->

<pre>
  <?php print_r($_SERVER); ?>
</pre>



