<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>side 2</title>
  </head>
  <body>
    <form action="side2.php" method="get">
    <label for="id">  Angiv et id for en bruger (uid):
      <input type="text" id="id" name="id">
      <input type="submit">
    </form>
    <br>

    <?php require_once '/home/mir/lib/db.php';

    $uid = $_GET['id']; //kommer fra name="id" i input

    $getUser = get_user($uid);
    $getPost = get_post($getUser['uid']);


  //Printer en liste ud med alle (uids) brugere i databasen, organiseret i punktform
    $getUids = get_uids();
    echo "<br> Her kan du se listen af bruger uids: <br>";
    foreach ($getUids as $uid){
      echo ' <li> ', $uid, "<br>";
    }

  //Hvis der bliver skrevet et tal, vil der kommme en meddelelse op
    echo "<br>";
    if (is_numeric($_GET['id'])) {
    echo "Bruger uid er ikke et tal, prøv igen";
    exit;
    }

  // Hvis der mangler et bruger uid, vil der komme en meddelelse op
    if (empty($_GET['id'])) {
      echo "Parameteren bruger uid mangler ";
      exit;
    }

    echo "<br>Bruger: ", $getUser["uid"], '<br>';
    ?>
  </body>
</html>
