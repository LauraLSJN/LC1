<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tilføj bruger </title>
  </head>
  <body>
<form  action="" method="post">
  <label for="uid"><b> Brugernavn: </b></label>
  <br>
  <input type="text" name="uid">
  <br>
  <label for="fornavn"><b>Fornavn: </b></label>
  <br>
  <input type="text" name="fornavn" >
  <br>
  <label for="efternvn"><b>Efternavn: </b></label>
  <br>
  <input type="text" name="efternavn">
  <br>
  <label for="password"> <b> Adgangskode: </b></label>
  <br>
  <input type="password" name="password" >
  <br>
  <input type="submit" name="submit">

</form>

    <?php
    require_once '/home/mir/lib/db.php';
    $uid = $_POST['uid'];
    $firstname = $_POST['fornavn'];
    $password = $_POST['password'];
    $lastname = $_POST['efternavn'];

    add_user($uid, $firstname, $lastname, $password);

     ?>


  </body>
</html>
