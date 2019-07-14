<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mysql tutorial</title>
  </head>
  <body>
    <?php

    $host = "localhost";
    $username = "hynile";
    $dbpwd = "rijvi003c";
    $dbname = "hyniletest";

    $connection = mysqli_connect($host , $username , $dbpwd , $dbname);

    if (!$connection) {
      die("connection failed :". mysqli_connect_error());
      // code...
    }
    $sql = "SELECT * FROM my_users ";
    if (mysqli_query($connection, $sql)) {
      echo "database created successfully";
      // code...
    }else {
      echo "error database:". mysqli_error($connection);
    }

    mysqli_close($connection);
     ?>
  </body>
</html>
