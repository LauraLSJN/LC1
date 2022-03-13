<?php
  session_start();

  // 1. If someone already logged in, redirect to secret page.
  if (! empty($_SESSION['user']))
  {
    header('Location:main.php');
    exit;
  }

  // 2. Otherwise, if known user tried to log in, register her as
  //    logged in and redirect to secret page.
  if (isset($_POST['username']) && $_POST['username'] == 'mary')
  {
    $_SESSION['user'] = $_POST['username'];
    header('Location:main.php');
    exit;
  }

  // 3. Otherwise, display login form.
  echo <<<END
<!doctype html>
<html>
  <head>
    <title>Login</title>
  </head>
  <body>
    <form method="POST" action="">
      <input type="text" name="username"> <br>
      <input type="submit" value="Login">
    </form>
  </body>
</html>
END;
?>
