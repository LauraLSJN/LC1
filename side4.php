<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Side 4</title>
  </head>

    <form  action="side4.php" method="get">
      <label for="title"> <b> Title: </b> </label>
      <br>
         <input  type="text" id="title" name="title">
<br>
         <label for="indhold"> <b> Indhold: </b> </label>
         <br>
         <textarea id="indhold" name="indhold" rows="25" cols="100">
       </textarea>
         <br>
        <input type="submit">
    </form>

  <body>

    <?php require_once '/home/mir/lib/db.php';

     ?>

  </body>
</html>
