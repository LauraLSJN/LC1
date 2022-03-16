<?php  require_once '/home/mir/lib/db.php';
session_start();

 if (empty($_SESSION['user']))
 {
   header('Location:side10Login.php');
   exit;
 }



 $user = $_SESSION['user'];
 $hentInfo = get_user($user);

 echo "<h2> Dine hemmelige informationer </h2>  <br>";

echo "<b> Brugers uid: </b> ", $hentInfo['uid'], '<br>';
echo "<b> Fornavn:  </b>", $hentInfo['firstname'], '<br>' ;
echo "<b> Efternavn: </b>", $hentInfo['lastname'], '<br>';


 ?>
