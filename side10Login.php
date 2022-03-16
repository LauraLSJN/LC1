
<?php
session_start();
require_once '/home/mir/lib/db.php';

$inputUid = $_POST['uid']; //uid
$inputPassword= $_POST['password'];
$getUser = get_user($getPost['uid']);
$getPassword = get_user($getUser['password']);


if (!empty($_SESSION['user'])) { //tjekker om brugeren allerede er logget ind
  //echo $gerUser['uid'];
  header('Location:side9.php');
  exit;
}

if (isset($_POST['uid']) && isset($_POST['password'])) {
  if (login($inputUid, $inputPassword)) {
    echo "Logget ind";
    $_SESSION['user'] = $inputUid;
      header('Location:side10Login.php');
    exit;
  } else  {
    echo "Prøv igen";

  }

}






 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title> Session og cookies  </title>
   </head>
   <body>
     <!-- https://wits.ruc.dk/~cvanw/Aflevering01/side10Login.php-->

     <form  action="" method="post">
      <h2> Login </h2>
       <label for="uid"> <b> username </b></label>
       <br>
       <input type="text" name="uid" >
       <br>
       <label for="password"> <b> password </b></label>
       <br>
       <input type="password" name="password">
       <br>
       <input type="submit" name="submit" >
     </form>


  </body>
</html>
