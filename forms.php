

<!DOCTYPE html>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php forms</title>
  </head>
  <body>

    <?php
    $usernameErr = $mailErr = $websiteErr = $genderErr = "";
    $username = $mail = $website = $comment = $gender = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["username"])) {
        $usernameErr = "Name is required";
        // code...
      } else {
      $username   = validate ($_POST["username"]);
    }

    if (empty($_POST["mail"])) {
      $mailErr = "Mail is required";
      // code...
    } else {
      $mail       = validate ($_POST["mail"]);
    }

    if (empty($_POST["website"])) {
      $websiteErr = "";
      // code...
    } elseif (!filter_var($website, FILTER_VALIDATE_WEBSITE)) {
      $websiteErr = "INVALID WEB FORMAT";
    }

    else {
      $website    = validate ($_POST["website"]);
    }
      $comment    = validate ($_POST["comment"]);
      if (empty($_POST["gender"])) {
        $genderErr = "Must check the gender box";
        // code...
      } else {
      $gender     = validate ($_POST["gender"]);
    }


    }

    function validate ($data){

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars ($data);
    return $data;
    }


     ?>



<!-- <form class="" action="good.php" method="post">

   Name: <input type="text" name="fname" value=""><br>
   E-mail : <input type="text" name="email" value=""><br>
   <input type="submit" name="" value="submit"><br>




 </form>
-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
  <table>
    <p style="color:red;"> * Required Field</p>
    <tr>
      <td>Name  </td>
      <td> <input type="text" name="username" value=""> <span style="color:red;">* <?php echo $usernameErr;?></span> </td>
    </tr>

    <tr>
      <td>E-mail </td>
      <td> <input type="email" name="mail" value="" autocomplete> <span style="color:red;">* <?php echo $mailErr;?></span> </td>
    </tr>

    <tr>
      <td>Website </td>
      <td> <input type="text" name="website" value=""> <span style="color:red;">* <?php echo $websiteErr;?></span> </td>
    </tr>


    <tr>
      <td>Comment </td>
      <td> <textarea name="comment" rows="8" cols="80"></textarea> </td>
    </tr>

    <tr>
      <td>Gender </td>
      <td>

        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span style="color:red;">* <?php echo $genderErr;?></span>
      </td>

    </tr>

    <tr>
      <td></td>
      <td>
        <input type="submit" name="click" value="submit">
      </td>
    </tr>
  </table>

</form>

<?php
echo $username ."<br>";

echo  $mail . "<br>";

echo  $website ."<br>";

echo  $comment ."<br>";

echo  $gender . "<br>";

 ?>
  </body>
</html>
