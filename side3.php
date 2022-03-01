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
    echo "Her kan du se listen af brugere (uids): <br>";
    foreach ($getUids as $uid){
      echo ' <li> ', $uid, "<br>";
    }

     ?>
  </body>
</html>
