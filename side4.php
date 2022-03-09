<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Side 4</title>
  </head>
    <!-- Christine Van Wulffeld (cvan) og Laura Juel Nielsen (lsjn) -->
<body>

    <form  action="side4.php" method="post">
      <label for="uid"> <b> Uid: </b> </label>
<br>
    <input type="text" name="uid">
<br>

      <label for="title"> <b> Title: </b> </label>
<br>
         <input  type="text" id="title" name="title">
<br>
         <label for="indhold"> <b> Indhold: </b> </label>
<br>
         <textarea id="indhold" name="indhold" rows="25" cols="100">
       </textarea>
<br>
        <input type="submit" name="submit">
    </form>


    <?php require_once '/home/mir/lib/db.php';
    //Tilføjer brugerinput til en variabel i PHP koden
    $uid = $_POST['uid'];
    $title = $_POST['title'];
    $indhold = $_POST['indhold'];



    //Udfører metoden add_post med de indtastede værdier i uid, title og indhold
    add_post($uid, $title, $indhold);




     ?>

  </body>
</html>
