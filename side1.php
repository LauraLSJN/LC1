<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
    require_once '/home/mir/lib/db.php';

    $postID = get_pids();
    foreach ($postID as $postid){
      echo ' id: ', $postid;
    }

    for ($i=1; $i < 6; $i++) {
      $oplæg = get_post($i);
      echo 'Titlen er: ', $oplæg['title'], '<br> </br>';
      echo 'Indholdet: ', $oplæg['content'];
    }

?>
  </body>
</html>
