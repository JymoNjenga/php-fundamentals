<?php

/*-------- Sessions --------*/

/*
  Sessions are a way to store information(in variables) to be used across multiple pages
  Unlike cookies, sessions are stored on the server
  By default, session variable last until the user closes the browser 
  Also session variables get destroyed the user logs out of the site
  N/B : While creating a session, the - session_start() - function must be the very first thing in your document. Should be before any of the <html> tags
*/

// Creating a session of a user with username= elon and password= test1234

session_start();

if(isset($_POST['submit'])) {
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];

  if($username == 'elon' && $password == 'test1234') {
    $_SESSION['username'] = $username;
    header('Location: /php-fundamentals/extras/dashboard.php');
  } else {
    echo '<p style="color: red;">Incorrect credentials while logging in!</p>';
  }
}

?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  <div>
    <label for="username">Username: </label>
    <input type="text" name="username" id="">
  </div>
  <div>
    <label for="password">Password: </label>
    <input type="password" name="password" id="">
  </div>
  <input type="submit" value="submit" name="submit">
</form>
<br><br>
<a href="/php-fundamentals/extras/dashboard.php">Proceed to dashboard without logging in.</a>