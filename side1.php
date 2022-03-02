<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>side 1</title>
  </head>
  <body>

    <form action="side1.php" method="get">
      <label> <b> Angiv et id for et indlæg: </b></label>
        <input type="number" name="id">
      <input type="submit">
    </form>
    <br>

<?php  require_once '/home/mir/lib/db.php';
//Chris v3

$pid = $_GET['id'];

$getPost = get_post($pid);
$getUser = get_user($getPost['uid']);
$getImage = get_image($pid);
$getComment = get_comment($pid);


echo "<b> Indlægs id: </b> ", $getPost['pid'], '<br>';
echo "<b>Indlægs forfatter: </b>", $getPost['uid'], '<br> ';

echo "<b>Fornavn og efternavn: </b>", $getUser['firstname'], " ", $getUser['lastname'], '<br>';
  echo "<b>Dato: </b>", $getPost['date'], '<br>';

echo "<br> <b>Titel: </b>", $getPost['title'], '<br>';
echo "<br><b>Indhold: </b>", $getPost['content'], '<br>';


//Printer billeder ud tilknyttet det udvalgte (pid) post
  foreach (get_iids_by_pid($pid) as $iids){

       $imageinfo = get_image($iids);
       $image_url = $imageinfo['path'];

       echo "<img src='$image_url' height='300'/>";

     }



//Linjen nedenunder burde være nok. Indeholder både kommentar forfatterens navn og indhold af kommentar.
echo "<br><b>Kommentar fra </b>",$getComment['uid'], ": ",   $getComment['content'], '<br>';


/*
//CHRIS V2 - bygget videre på
      $pid = $_GET["id"];
     $title = get_post($pid);
     $content = get_post($pid);
     $date = get_post($pid);
     $forfatter = get_post($pid);

     $fornavn = get_user($forfatter['uid']);
     $efternavn = get_user($forfatter['uid']);

     $billede = get_image($pid);
     $comment = get_comment($pid);

     echo " Indlægs id: ", $pid["pid"], '<br>';
     echo "Indlægs forfatter: ", $forfatter['uid'], '<br> ';

     // virker ikke endnu med at få fornavn og efternavn på forfatteren endnu
     echo "Fornavn og efternavn: ", $fornavn['firstname'], " ", $efternavn['lastname'], '<br>';
       echo "Dato: ", $date['date'], '<br>';

     echo "<br>Title: ", $title['title'], '<br>';
     echo "<br>Indhold: ", $content['content'], '<br>';

//Billedet er ikke færdigt, der er kun link til billede lige nu
     echo "<br>Billede: ", $billede['path'], '<br>';


     //Linjen nedenunder burde være nok. Indeholder både kommentar forfatterens navn og indhold af kommentar.
     echo "<br>Kommentar fra ",$comment['uid'], ": ",   $comment['content'], '<br>';

*/


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
