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

      echo "<tr>";
      echo "<br><td> ID er: ", $pids['pid'], "</td>", '<br> ';
      echo "<td> Titlen er: ", $oplæg['title'],"</td>", '<br>';
      echo "<td> Indholdet er: ", $content['content'],"</td>", '<br>';
      echo "<td> Dato: ", $date['date'],"</td>", '<br>';

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
