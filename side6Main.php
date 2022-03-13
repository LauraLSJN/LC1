<?php
  session_start();

  if (empty($_SESSION['user']))
  {
    header('Location:login.php');
    exit;
  }

  echo 'Secret!';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
