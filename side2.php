<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>side 2</title>
  </head>
  <body>
    <form action="side2.php" method="get">
    <label for="id"> <b> Angiv et id for en bruger (uid): </b></label
      <input type="text" id="id" name="id">
      <input type="submit">
    </form>
    <br>

    <?php require_once '/home/mir/lib/db.php';

    $uid = $_GET['id']; //kommer fra name="id" i input

    $getUser = get_user($uid);
    $getPost = get_post($getUser['uid']);

    //Hvis der bliver skrevet et tal, vil der kommme en meddelelse op
      echo "<br>";
      if (is_numeric($_GET['id'])) {
      echo "Bruger uid er ikke et tal, prøv igen";
      exit;
      }

  //Hvis der bliver skrevet et tal, vil der kommme en meddelelse op
    echo "<br>";
    if (is_numeric($_GET['id'])) {
    echo "Bruger uid er ikke et tal, prøv igen";
    exit;
    }

      echo "<br>Bruger: ", $getUser["uid"], '<br>';
      echo "<br>Test om der er hul til databasen: ", $getUser['date'], '<br>';
      //Titel virker ikke endnu
      //echo "<br>Titel: ", $getPost['title'], '<br>';

    echo "<br>Bruger: ", $getUser["uid"], '<br>';
    ?>
  </body>
</html>
