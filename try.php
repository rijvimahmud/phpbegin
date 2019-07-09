
<!DOCTYPE html>
<html lang="eng" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


     <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >

      Name: <input type="text" name="fname">
      <input type="submit">
     </form>


     <br>
     <br>

     <form class="" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
       Name = <input type="text" name="lname" value=""><br>
       <input type="submit" name="submit" value="submit">
     </form>

     <?php
    /* if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $name = htmlspecialchars($_REQUEST['fname']);
       if (empty($name)) {
         echo "name is empty";
         // code...
       }
       else {
         echo $name;
       }
       // code...
     }
     */

     if ($_SERVER["REQUEST_METHOD"] == "POST") {
       // code...
       $name = htmlspecialchars ($_REQUEST['lname']);

       if (empty($name)) {
         echo "name is empty";
         // code...
       }
       else {
         echo $name;
       }
     }


      ?>




  </body>
</html>
