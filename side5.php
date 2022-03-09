<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Side 5</title>
  </head>
  <body>
    <form action="side5.php" method="get">
    <label for="pid"> <b> Angiv et id for et indlæg (pid): </b> </label>
       <input  type="number" id="pid" name="pid">
       <br>
    <label for="uid"> <b> Angiv et uid for en bruger (uid): </b> </label>
      <input  type="text" id="uid" name="uid">
      <br>

      <input type="submit">

    </form>

    <?php require_once '/home/mir/lib/db.php';
    $pid = $_GET['pid'];
    $getPost = get_post($pid); // denne henter data fra post databasen ud fra input pid

    $inputUid = $_GET['uid'];
    $getUser = get_user($getPost['uid']);

    //$getUser = get_user($getPost['uid']); //Denne kode henter uid fra user database
    //$getUidPost = get_post($pid);

    //Henter indlægget id + uid i henhold til det specifikke post. Den er derfor ikke sensitiv overfor om brugeren er oprettt
    //Hvis isset.. og empty.. er sand
if (isset($pid) && empty($inputUid)) {
  echo "<b> Indlægs id: </b> ", $getPost['pid'], '<br>';
  echo "<b> Indlægs Titel: </b> ", $getPost['title'], '<br>';
  echo "<b> Indlægs Indhold: </b> ", $getPost['content'], '<br>';
  echo "<b> Indlægs uid: </b> ", $getPost['uid'], '<br>';
} else if ($getUser['uid'] == $inputUid) {
  //print "Titel: <br/><b>" . $getPost['title'] . "</b>";
echo "<b>Title: </b>";
  echo "<form action='side5.php' method='POST'>";


  echo "  <input name='title' ";
  echo " value='" . $getPost['title'] . "'>";

  echo "<br>";
  echo "<b>Indhold </b><br>";

  echo " <textarea name='indhold' rows='25' cols='100'> ";
  echo $getPost['content'];
  echo "</textarea>";
  echo "<br>";


  echo "<input type='hidden' name = 'inputPid'";
  echo " value='" . $getPost['pid'] . "'>";

echo "<br>";
echo "<input type='submit'>";
  echo "</form>";



} else {
echo "Fejl, prøv igen <br>";
echo "Tjek om pid og uid stemmeroverens";

}

$title = $_POST['title'];
$indhold = $_POST['indhold'];
$brugerPid = $_POST['inputPid'];


 modify_post($brugerPid,$title,$indhold);


     ?>


  </body>
</html>
