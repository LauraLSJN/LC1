<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="side1_v2.php" method="get">
      Angiv et id for et indlæg: <input type="number" name="id">
      <input type="submit">
    </form>
    <br>

<?php
    require_once '/home/mir/lib/db.php';

//CHRIS V2 - bygget videre på
      $pid = $_GET["id"];
     $title = get_post($pid);
     $content = get_post($pid);
     $date = get_post($pid);
     $forfatter = get_post($pid);

     // fornavn og efternavn  -> virker ikke endnu
     $fornavn = get_user($pid);
     $efternavn = get_user($pid);

     $billede = get_image($pid);
     $comment = get_comment($pid);

     echo " Indlægs id: ", $pid["pid"], '<br>';
     echo "Indlægs forfatter: ", $forfatter['uid'], '<br> ';

     // virker ikke endnu med at få fornavn og efternavn på forfatteren endnu
     echo "Fornavn og efternavn: ", $fornavn['firstname'], " ", $efternavn['lastname'], '<br>';
       echo "Dato: ", $date['date'], '<br>';

     echo "<br>Title: ", $title['title'], '<br>';
     echo "<br>Indhold: ", $content['content'], '<br>';


     echo "<br>Billede: ", $billede['path'], '<br>';

   // virker ikke endnu
     //Linjen nedenunder burde være nok. Indeholder både kommentar forfatterens navn og indhold af kommentar.
     echo "<br>Kommentar fra ",$comment['uid'], ": ",   $comment['content'], '<br>';




/*
//CHRIS V1  - bygget videre på
for ($i=1; $i < 6; $i++) {
//Variabler for post -> virker
$oplæg = get_post($i);
$pids = get_post($i);
$content = get_post($i);
$date = get_post($i);
$forfatter = get_post($i);

// fornavn og efternavn  -> virker ikke endnu
$fornavn = get_user($i);
$efternavn = get_user($i);

//Billede -> ikke færdig endnu, men variablen virker
$billede = get_image($i);

//Variabel til kommentar -> virker
$comment = get_comment($i);

echo "<tr>";
echo "<br><td> Indlægs id: ", $pids['pid'], "</td>";
echo "<br><td> Dato: ", $date['date'],"</td>", '<br>';
echo "<td> Indlægs forfatter : ", $forfatter['uid'], "</td>", '<br> ';

// virker ikke endnu med at få fornavn og efternavn på forfatteren endnu
echo "<td> Fornavn og efternavn: ", $fornavn['firstname'], " ", $efternavn['lastname'], "</td>", '<br>';

echo "<td> Title: ", $oplæg['title'],"</td>", '<br>';
echo "<td> Indhold: ", $content['content'],"</td>", '<br>';

echo "<td> Billede: ", $billede['path'],"</td>", '<br>';

//echo "<td> Kommentar forfatter: ", $comment['uid'],"</td>", '<br>';
//Linjen nedenunder burde være nok. Indeholder både kommentar forfatterens navn og indhold af kommentar.
echo "<td> Kommentar fra ",$comment['uid'], ": ",   $comment['content'],"</td>", '<br>';
echo "</tr>";
}*/

/* LAURA
    $postID = get_pids();
    foreach ($postID as $postid){
      echo ' id: ', $postid;
    }

    for ($i=1; $i < 6; $i++) {
      $oplæg = get_post($i);
      echo 'Titlen er: ', $oplæg['title'], '<br> </br>';
      echo 'Indholdet: ', $oplæg['content'];
    }

    */

?>
  </body>
</html>
