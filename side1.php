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


$pid = $_GET['id'];

$getPost = get_post($pid);
$getUser = get_user($getPost['uid']);
$getComment = get_comment($pid);


echo "<b> Indlægs id: </b> ", $getPost['pid'], '<br>';

//Echoer bruger id ud, og laver det til et link.
  echo "<b>Indlægs forfatter: </b> <a href='side2.php?id=".$getPost['uid']."'>".$getPost['uid']."</a>  <br>";
  //<a href='side2.php?id=".$getPost['uid']."'>".$getPost['uid']."</a> - .$getPost['uid'] tilføjer variablen til url. og den sidste del er bare tekst


echo "<b>Fornavn og efternavn: </b>", $getUser['firstname'], " ", $getUser['lastname'], '<br>';
  echo "<b>Dato: </b>", $getPost['date'], '<br>';

echo "<br> <b>Titel: </b>", $getPost['title'], '<br>';
echo "<br><b>Indhold: </b>", $getPost['content'], '<br>';


//Printer billeder ud tilknyttet det udvalgte (pid) post
  foreach (get_iids_by_pid($pid) as $iid){

       $getImage = get_image($iid);
       $image_url = $getImage['path'];

       echo "<img src='$image_url' height='300'/>";

     }



//Linjen nedenunder burde være nok. Indeholder både kommentar forfatterens navn og indhold af kommentar.
echo "<br><b>Kommentar fra </b>",$getComment['uid'], ": ",   $getComment['content'], '<br>';


?>
  </body>
</html>
