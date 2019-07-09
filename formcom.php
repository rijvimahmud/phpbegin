<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>form complete</title>
    <style media="screen">
      .error {
        color: #ff0000;
      }
    </style>
  </head>
  <body>
    <?php
$nameerr=$emailerr=$websiteerr=$gendererr="";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"]== "POST") {
  if (empty($_POST["name"])) {
    $nameerr = "name is required";
    // code...
  }else {
    $name = validate($_POST["name"]);
  }
 if (empty($_POST["email"])) {
   $emailerr = "email is required";
   // code...
 }else {
   $email = validate ($_POST["email"]);
 }

 if (empty($_POST["website"])) {
   $websiteerr = "";
   // code...
 }else {
   $website = validate($_POST['website']);
 }

if (empty($_POST["comment"])) {
  $comment = "";
  // code...
}else {
  $comment = validate($_POST["comment"]);
}

if (empty($_POST["gender"])) {
  $gendererr = "Gender is required";
  // code...
}else {
  $gender = validate($_POST['gender']);
}

}

function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
{
  // code...
}
     ?>

<form class="" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>" method="post">
  Name : <input type="text" name="name" value="<?php echo $name; ?>"> <span class="error">* <?php echo $nameerr; ?></span>
  <br><br>

  E-mail : <input type="email" name="email" value="<?php echo $email; ?>"> <span class="error">* <?php echo $emailerr; ?></span>
  <br><br>

  Website : <input type="text" name="website" value="<?php echo $website; ?>"> <span class="error">* <?php echo $websiteerr; ?></span>
  <br><br>

  Comment : <textarea name="comment" rows="5" cols="50"><?php echo $comment; ?></textarea>
  <br><br>

  Gender :

  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked"
    // code...
 ?> value="female">female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked"?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked"?> value="other">other
  <span class="error">* <?php echo $gendererr; ?></span>
  <br><br>

  <input type="submit" name="submit" value="submit">
</form>

<?php
echo "<h2>Your Input</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";


 ?>

  </body>
</html>
