<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>side 3</title>
  </head>
  <body>
    <?php require_once '/home/mir/lib/db.php';

    //Printer en liste ud med alle (uids) brugere i databasen, organiseret i punktform
    $getUids = get_uids();
    echo "Der er ", count($getUids), " bruger id (uids) <br>"; //count funktionen returnere længden af arrayet der ligger i variablen $getUids
    echo "<br>Her kan du se listen af brugere (uids): <br>";
    foreach ($getUids as $uid){
    echo "<li> <a href='side2.php?id=".$uid."'>".$uid."</a> </li> <br>";
  }
     ?>
  </body>
</html>
