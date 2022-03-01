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

    <?php  require_once '/home/mir/lib/db.php';

    $uid = $_GET["id"];
    $title = get_post($uid);

//title virker ikke endnu
        echo "<br>Bruger: ", $_GET["id"], '<br>';
        echo "<br> Titel: ", $title['title'];
    ?>
  </body>
</html>
