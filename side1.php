<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
    require_once '/home/mir/lib/db.php';

//CHRIS - bygget videre på
for ($i=1; $i < 6; $i++) {
$oplæg = get_post($i);
$pids = get_post($i);
$content = get_post($i);
$date = get_post($i);
$forfatter = get_post($i);

// fornavn og efternavn virker ikke endnu
$fornavn = get_user($i);
$efternavn = get_user($i);

$billede = get_image($i);



echo "<tr>";
echo "<br><td> Indlægs id: ", $pids['pid'], "</td>";
echo "<br><td> Indlægs forfatter : ", $forfatter['uid'], "</td>", '<br> ';

// virker ikke endnu med at få fornavn og efternavn på forfatteren endnu
echo "<td> Fornavn og efternavn: ", $fornavn['firstname'], " ", $efternavn['lastname'], "</td>", '<br>';

echo "<td> Title: ", $oplæg['title'],"</td>", '<br>';
echo "<td> Indhold: ", $content['content'],"</td>", '<br>';
echo "<td> Dato: ", $date['date'],"</td>", '<br>';

echo "<td> Billede: ", $billede['path'],"</td>", '<br>';
echo "</tr>";

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
