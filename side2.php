<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>side 2</title>
  </head>
  <!-- Christine Van Wulffeld (cvan) og Laura Juel Nielsen (lsjn) -->

  <body>
    <form action="side2.php" method="get">
    <label for="id"> <b> Angiv et id for en bruger (uid): </b></label>
      <input type="text" id="id" name="id">
      <input type="submit">
    </form>
    <br>

    <?php require_once '/home/mir/lib/db.php';

    $uid = $_GET['id']; //kommer fra name="id" i input

    //Henter uid fra database users
    $getUser = get_user($uid);

    //Henter indlægget/post med den specifikke uid som er indtastet
    //$getPost = get_post($getUser['uid']);

      echo "<b>Bruger: </b>", $getUser['uid'], '<br>';
      echo "<br>";

      //Returnerer et array af id'ere for alle indlæg skrevet af bruger $uid
        foreach (get_pids_by_uid($uid) as $pid){
          //Returnerer en repræsentation af det indlæg der har id $pid. Et indlæg repræsenteres af en associativt array af følgende form:
          //Netop get_post som muliggør at vi kan hente titel
          $getPost = get_post($pid);
          //.$getPost['pid']. referer til variablen i url, som bruges til side1 - og .getPost['title'] referer til arrayet som bliver printet ud
          echo "<li> <b>Titlen er: </b> <a href='side1.php?id=".$getPost['pid']."'>".$getPost['title']."</a> </li> <br>";
        }



  //Hvis der bliver skrevet et tal, vil der kommme en meddelelse op
    echo "<br>";
    if (is_numeric($_GET['id'])) {
    echo "Bruger uid er ikke et tal, prøv igen";
    exit;
    }




    ?>
  </body>
</html>
