<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php filter</title>
    <style media="screen">
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }
      th, td {
        padding: 5px;
      }
    </style>
  </head>
  <body>
    <table>
      <tr>
        <td>Filter Name</td>
        <td>Filter Id</td>
      </tr>_
      <?php

      foreach (filter_list() as $id => $filter) {
        echo "<tr><td>". $filter. "</td><td>". filter_id($filter). "</td></tr><br>";
        // code...
      }

       ?>
    </table>

    <?php

    $str = "<h1>Hello World</h1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    echo $newstr. "<br>";


    $int = 100;

    if (!filter_var($int, FILTER_VALIDATE_INT) == false) {
      echo "integer is valid";
      // code...
    } else {
      echo "integer is not valid";
    }
    echo "<br>";


    $ip = "127.0.0.1";

    if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
      echo "$ip is a valid IP address";
      // code...
    } else {
      echo "$ip is not a valid IP address";
    }
    echo "<br>";

    $email = "rijvimahmud@hotmail.com";

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    if (!filter_var($email , FILTER_VALIDATE_EMAIL)== false) {
      echo "$email is valid email address";

      // code...
    } else {
      echo "$email is not a valid email address";
    }
    echo "<br>";


    $url = "https://www.hynile.com";

    $url = filter_var($url , FILTER_SANITIZE_URL);

    if (!filter_var($url, FILTER_VALIDATE_URL)== false) {
      echo "$url is a valid URL";

      // code...
    } else {
      echo "$url is not a valid URL";


    }
    echo "<br>";


    $int = 122;
    $min = 1;
    $max = 200;

    if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min"=>$min, "max"=>$max)))===false) {
      echo "value is not in the range";
      // code...
    }else {
      echo "value is in the legal range";
    }
    echo "<br>";

    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

    if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)  === false) {
      echo "$ip is a valid IPv6 address";
      // code...
    }
    else {
      echo "$ip is not a valid IPv6 address";
    }
    echo "<br>";


    $url = "https://www.hynile.com";
    if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)) {
      echo "this url is valid";
      // code...
    }else {
      echo "it has not query string";
    }
    echo "<br>";


    $str= "<h1>Hello WorldÆØÅ!</h1>";

    $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

    echo $newstr;
    echo "<br>";

        ?>

  </body>
</html>
