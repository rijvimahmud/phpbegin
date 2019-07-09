<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    echo "this is my first php project";
    echo "<br>";


    $txt = "hello world";
    $x = 5;
    $y = 10.5;

    echo $txt;
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $sname = "w3school";
    echo "i love $sname";
    echo "<br>";

    $scname = "w3school";
    echo "i love " . $scname ;
    echo "<br>";
    $x =5;
    $y =6;
    echo $x + $y;

    $x = 5; //global

   /* function mytest() {
        echo "<p> variable x inside function is: $x</p>";
    }
    mytest();
    */
    echo "<p> variable x inside function is: $x</p>";

    function mytet () {
        $x = 6; //local scope
        echo $x;
        echo "<br>";
        //you can't use it outside
    }
    mytet();

    $x = 5;
    $y = 6;

    function my() {
        global $x, $y; //global keyword
        $y = $x + $y;
    }
    my();
    echo $y;
    echo "<br>";

    $x = "hello world";
    $y = 'hello world';

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";


    $x = 5889;
    var_dump($x);
    echo "<br>";

    $x= 10.768;
    var_dump($x);
    echo "<br>";

    $cars = array("valvo", "bmw", "tesla");
    var_dump ($cars);
    echo "<br>";

    $x= "hello world";
    $x = null;
    var_dump($x);
    echo "<br>";


    $x = "hello world";
    echo strlen ($x);
    echo"<br>";

    $x = "hello world";
    echo str_word_count ($x);
    echo "<br>";


    $x = "hello world";
    echo strrev ($x);
    echo "<br>";

    $x = "hello world";
    echo strpos ($x, "world");
    echo "<br>";


    echo str_replace ("world", "cezanne", "hello world");
    echo "<br>";

    //PHP Constants

    define ("greeting", "welcome to hynile");
    echo greeting;
    echo "<br>";

    define ("cars",["volvo", "bmw", "meredes-benz"]);
    echo cars[0];
    echo "<br>";

    function myi(){
        echo greeting;
    }
    myi();
    echo "<br>";

    $x = 5;
    $y = 5;

    echo $x + $y . "<br>";

    $x = 6;
    $y = 5;

    echo $x - $y . "<br>";

    $x = 5;
    $y = 5;

    echo $x * $y . "<br>";

    $x = 25;
    $y = 5;

    echo $x / $y . "<br>";


    $x = 10;
    $y = 3;


    echo $x % $y . "<br>";


    $x = 2;
    $y = 4;

    echo $x ** $y . "<br>";

    $x = 5;
    $y = $x;

    echo $y . "<br>";


    $x = 5;
    $x += 100;
    echo $x . "<br>";

    $y = 10;
    $y -= 5;

    echo $y . "<br>";

    $x = 6;
    $x *=6;
    echo $x . "<br>";

    $y = 30;
    $y /=10;

    echo $y . "<br>";

    $x = 20 ;
    $x %= 3;

    echo $x . "<br>";


    $x =100;
    $y = "100";

    var_dump ($x == $y);
    echo "<br>" ;

    $x = 100;
    $y = "100";

    var_dump ($x === $y);
    echo "<br>";

    $x = 100;
    $y = 100;

    var_dump ($x != $y);
    echo "<br>";

    $x = 100;
    $y = 100;

    var_dump ($x <> $y);
    echo "<br>";

    $x = 100;
    $y = "100";

    var_dump ($x !== $y);
    echo "<br>";

    $x = 100;
    $y = 99;

    var_dump ($x > $y);
    echo "<br>";


    $x = 99;
    $y = 100;

    var_dump ($y < $x);
    echo "<br>";

    $x = 100;
    $y = 100;

    var_dump ($x >= $y);
    echo "<br>";

    $x = 100;
    $y = 101;

    var_dump ($x <= $y);
    echo "<br>";

    $x = 5;
    $y = 10;

    echo ($x <=> $y); // returns -1 because $x is less than $y
    echo "<br>";

    $x = 10;
    $y = 10;

    echo ($x <=> $y);//returns 0 because values are equal
    echo "<br>";

    $x =15;
    $y = 10;

    echo ($x <=> $y);//returns +1 because $x is greater than $y
    echo "<br>";

    $x = 10;
    echo ++$x . "<br>";

    $x = 10;
    echo $x++ . "<br>";

    $x = 10;
    echo --$x . "<br>";

    $x = 10;
    echo $x-- . "<br>";


    $x = 100;
    $y = 50;

    if ($x == 100 and $y == 50){
        echo '"hello world"'. "<br>";
    }

    $x =10;
    $y = 5;

    if ($x == 10 or $y == 4){
        echo "hello php" . "<br>";


    }


    $x = 100;
    $y = 40;

    if ($x == 90 xor $y == 40){
        echo "hello hi" . "<br>";
    }


    $x = 100;
    $y = 50;

    if ($x == 100 && $y == 50){
        echo "hi today" . "<br>";
    }

    $x = 20;
    $y =20;

    if ($x = 20 || $y = 30){
        echo "today is a good day" . "<br>";
    }

    $x = 30;


    if ($x !== 34 ){
        echo "good day" . "<br>";

    }
    else {
        echo "nothing found" . "<br>";
    }

    $txt1 = "hello";
    $txt2 = " php";

    echo $txt1 . $txt2 . "<br>";


    $txt1 = "hello";
    $txt2 = " php";
    $txt1 .= $txt2;

    echo $txt1 . "<br>";

    $t = date ("H");

    if ($t > 20){
        echo "have a good day" . "<br>";
    }

    $t = date ("H");

    if ($t < 20){
        echo "have a good day";
    }

    else {
        echo "have a good night" . "<br>";
    }


    $t = date ("H");

    if ($t < "10"){
        echo "have a good day";

    }

    elseif ($t <20){
        echo "have a good night";
    }

    else {
        echo "have a good evening" . "<br>";
    }

    $favcolor = "black";


    switch ($favcolor) {
        case 'red':
            echo "your favourite color is red";
            break;

        case 'green':
            echo "your favourite color is green";
            break;
        case "black":
        echo "you got the right color";
        break;
        default:
            echo "here is no fav color";
            break;
    }
    echo "<br>";


    $x = 1;

    while ($x <= 5) {
        echo "the number is $x . <br>";
        $x++;
    }


    $x = 6;

    do{
        echo "the number is $x . <br>";
        $x++;
    }
    while ($x <= 5);

    for ($x = 0; $x <=10; $x++){
        echo "the number is for loop: $x <br>";
    }

    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo "$value <br>";
    }

    function writemsg (){
        echo "hello world";
    }
    writemsg();
    echo "<br>";

    function good ($sub , $color){
        echo "$sub favourite color is $color <br>";
    }

    good ("my", "red");
    good ("my", "blue");
    good ("my", "green");

    echo "<br>";

    function addNumbers(int $a, int $b) {
        return $a + $b;
    }
    echo addNumbers(5, "5 day");

    echo "<br>";


    //array

    $cars = array ("volvo", "bmw", "tesla");
    echo "i like ". $cars[2]. ", ". $cars[0]. ", ". $cars[1];

    echo "<br>";
    //PHP Indexed Arrays

    $cars = array ("volvo", "bmw", "tesla");
    echo "i like ". $cars[2]. ", ". $cars[0]. ", ". $cars[1];

    echo "<br>";

    $cars = array ("volvo", "bmw", "tesla");
    echo count($cars);

    echo "<br>";


    //loop through


    $cars = array ("volvo", "ferarri", "tesla");
    $arrlength = count ($cars);


    for ($x=0; $x < $arrlength; $x++){
        echo $cars [$x];
        echo "<br>";
    }


    //PHP Associative Arrays


    $age = array ("peter"=> "35", "ben"=> "20", "thomas"=>"18");

    echo "peter is ". $age["peter"] . " years old" . "<br>";

    echo "ben is ". $age["ben"] . " years old" . "<br>";

    echo "thomas is ". $age["thomas"] . " years old" . "<br>";



    $age = array ("peter"=> "35", "ben"=> "20", "thomas"=>"18");

    foreach ($age as $x => $value) {
        echo $x , $value . "<br>";

    }

    $age = array ("peter"=> "35", "ben"=> "20", "thomas"=>"18");

    foreach ($age as $x => $value) {
        echo "key= ". $x . " , value= ".$value;
        echo "<br>";
        # code...
    }


    $cars = array ("volvo", "toyota", "tesla");

    sort ($cars);


    $clen= count ($cars);


    for ($x=0; $x < $clen ; $x++) {
        echo $cars [$x];
        echo "<br>";
        # code...
    }

    $numbert = array (4,25,37,375,29,764);

    sort ($numbert);

    $nlen = count ($numbert);

    for ($x=0; $x < $nlen; $x++) {
        echo $numbert [$x];
        echo "<br>";
        # code...
    }

    //Sort Array in Descending Order - rsort()

    $cars = array ("volvo", "toyota", "tesla");
    rsort ($cars);

    $rlen = count ($cars);


    for ($x=0; $x < $rlen ; $x++) {
        echo $cars [$x];

        echo "<br>";
        # code...
    }


    $numbertt = array (4,25,37,375,29,764);
    rsort ($numbertt);

    $rslen = count ($numbertt);


    for ($x=0; $x < $rslen ; $x++) {
        echo $numbertt [$x];

        echo "<br>";
    }

    //Sort Array (Ascending Order), According to Value - asort()
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    asort ($age);

    foreach ($age as $x => $value) {
        echo $x , $value;
        echo "<br>";
        # code...
    }


    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    ksort($age);

    foreach ($age as $x => $value) {
        echo $x, $value;
        echo "<br>";


        # code...
    }


    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    arsort($age);

    foreach ($age as $x => $value) {
        echo $x, $value;
        echo "<br>";
        # code...
    }



    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    krsort($age);

    foreach ($age as $x => $value) {
        echo $x, $value;
        echo "<br/>";
        # code...
    }

    $x = 75;
    $y = 25;

    function addition(){
        $GLOBALS["z"] = $GLOBALS["x"] + $GLOBALS["y"];

    }

    addition();
    echo $z . "<br>";


    //PHP $_SERVER

    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["SERVER_NAME"];
    echo "<br>";
    echo $_SERVER["HTTP_HOST"];
    echo "<br>";
    echo $_SERVER["HTTP_REFERER"];
    echo "<br>";
    echo $_SERVER["HTTP_USER_AGENT"];
    echo "<br>";
    echo $_SERVER["SCRIPT_NAME"];
    echo "<br>";

    echo $_SERVER["GATEWAY_INTERFACE"];
    echo "<br>";
    echo $_SERVER["SERVER_ADDR"];
    echo "<br>";
    echo $_SERVER["SERVER_SOFTWARE"];
    echo "<br>";
    echo $_SERVER["SERVER_PROTOCOL"];
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"];
    echo "<br>";
    echo $_SERVER["REQUEST_TIME"];
    echo "<br>";
    echo $_SERVER["QUERY_STRING"];
    echo "<br>";
    echo $_SERVER["HTTP_ACCEPT"];
    echo "<br>";
    echo $_SERVER["HTTP_ACCEPT_CHARSET"];
    echo "<br>";
    echo $_SERVER["SERVER_HOST"];
    echo "<br>";
    echo $_SERVER["HTTPS"];
    echo "<br>";
    echo $_SERVER["REMOTE_ADDR"];
    echo "<br>";
    echo $_SERVER["REMOTE_HOST"];
    echo "<br>";
    echo $_SERVER["REMOTE_PORT"];
    echo "<br>";
    echo $_SERVER["SCRIPT_FILENAME"];
    echo "<br>";
    echo $_SERVER["SERVER_ADMIN"];
    echo "<br>";
    echo $_SERVER["SERVER_PORT"];
    echo "<br>";
    echo $_SERVER["SERVER_SIGNATURE"];
    echo "<br>";
    echo $_SERVER["PATH_TRANSLATED"];
    echo "<br>";
    echo $_SERVER["SCRIPT_NAME"];
    echo "<br>";
    echo $_SERVER["SCRIPT_URI"];
    echo "<br>";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = htmlspecialchars($_REQUEST['fname']);
        if (empty ($name)) {
          echo " name is empty";

          // code...
        }
        else {
          echo $name;
        }
      }

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Name = $_POST['lname'];
        if (empty($Name)) {
          echo "name is empty";
          // code...
        }
        else {
          echo $Name;
        }
        // code...
      }
      //multidimensional array

      
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      Name: <input type="text" name="fname">
      <input type="submit">
    </form>


    <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

      name: <input type="text" name="lname" value="">
      <input type="submit" name="" value="submit">

    </form>









</body>
</html>
