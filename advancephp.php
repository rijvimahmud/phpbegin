<?php
session_start();
 ?>
<?php echo readfile("file.txt"); ?>
<?php include 'forms.php'; ?>

<?php
$cars = array(

  array("volvo", 22, 18),
  array("BMW",15,13),
  array("saab",5,2),
  array("Tesla",17,15)


);

for ($row=0; $row < 4; $row++) {
  echo "<P><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col=0; $col < 3; $col++) {
    echo "<li>". $cars[$row][$col]."</li>";
  }
  echo "</ul>";
}


//php date and time

 echo "Today is ". date("d l/m/Y"). "<br>";
 echo "Today is ". date("Y-m-d"). "<br>";
 echo "Today is ". date("Y.m.d"). "<br>";
 echo "Today is ". date("l")."<br>";


date_default_timezone_set("Asia/Dhaka");
 echo "The time is ". date("h:i:sa") . "<br>";
 echo "<br>";

$myfile = fopen("file.txt", "r") or die("unable to locate file");
echo fread($myfile, filesize("file.txt"));
fclose($myfile);
echo "<br><br>";

$myfile = fopen("file.txt", "r") or die("unable to locate file");
echo fgets($myfile);
fclose($myfile);
echo "<br><br>";

$myfile = fopen("file.txt", "r") or die("unable to locate file");
while (!feof($myfile)) {
  echo fgets($myfile)."<br>";
  // code...
}
fclose($myfile);
echo "<br><br>";

$myfil = fopen("this.txt", "r") or die("unable to locate file");
while (!feof($myfil)) {
  echo fgetc($myfil);
  // code...
}
fclose($myfil);
echo "<br><br>";


$create = fopen("create.txt", "w") or die("unable to locate file");
$txt = "john doe\n";
fwrite($create, $txt);
$txt = "jane doe\n";
fwrite($create, $txt);
fclose($create);

$uploadok = 0;
if (isset($_FILES["fileupload"]["name"]) && !empty($_FILES["fileupload"]["name"])) {
  $filename = $_FILES["fileupload"]["name"];
  $filetmp = $_FILES["fileupload"]["tmp_name"];
  //$filesize = $_FILES["fileupload"]["size"];
  // code...
  if (file_exists($filetmp)) {
    echo "sorry";

    // code...
  }

  move_uploaded_file($filetmp, "images/". $filename);
$uploadok=1;

}

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">

     <title></title>
   </head>
   <body>
     <?php

     if ($uploadok==1) {
         echo "<span style='color:green;'>file uploaded successfully!</span>";
       // code...
     }
     $cookievalue = "john doe";
     setcookie("user", $cookievalue , time()+ 86400, "/");

     if (!isset($_COOKIE["user"])) {
       echo "cookie named is not set";
       // code...
     }else {
       echo "<span style='color:red'>cookie is set</span>"."<br>" ;
       echo "Value is ".$_COOKIE["user"] ;
     }


      ?>

     <form class="" action="" method="post" enctype="multipart/form-data">
       Select image to upload: <br><br>
       <input type="file" name="fileupload" value="">
       <input type="submit" name="imageupload" value="submit"><br>

     </form>

     <?php

     $_SESSION["favcolor"] = "green";
     $_SESSION["favanimal"] = "cat";
     $_SESSION["favcolor"]= "yellow";

     echo "Session variables are set". "<br>";
     echo "favourite color is ". $_SESSION["favcolor"]."<br>";
     echo "favourite animal is ".$_SESSION["favanimal"]."<br>";
     print_r($_SESSION);
     echo "<br>";

     session_unset();
     session_destroy();




      ?>

      <?php

      include 'filter.php';

       ?>






      &copy; 2010 - <?php echo date("Y");?>
   </body>
 </html>
