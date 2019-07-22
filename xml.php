<?php

$myxmldata=
"<?xml version='1.0' encoding='UTF-8' ?>
<note>
  <to>Tove</to>
  <from>Jani</from>
  <heading>Reminder</heading>
  <body>don't forget me this weekend!</body>
</note>";

$xml = simplexml_load_string($myxmldata) or die ("error: cannot create object");

print_r($xml);
echo "<br>";

?>

<?php
libxml_use_internal_errors(true);
$myxmlldata=
"<?xml version='1.0' encoding='UTF-8' ?>
<document>
<user>John Doe </wuser>
<email> John@example.com </wemail>
</document>
";

$xmll = simplexml_load_string($myxmlldata);
if ($xmll === false) {
  echo "failed loading xml:";
  foreach (libxml_get_errors() as $error) {
    echo "<br>", $error->message;
  }
}  else {
    print_r($xmll);
      }

    echo "<br>";
 ?>


 <?php

$xm = simplexml_load_file("pxml.xml") or die ("Error: Cannot create object");
print_r($xm);
echo "<br>";

  ?>

  <?php
$xml = simplexml_load_file("pxml.xml") or die ("error: ");
echo $xml ->to. "<br>";
echo $xml ->from. "<br>";
echo $xml ->heading. "<br>";
echo $xml ->body. "<br>";

   ?>


  <?php

$xml = simplexml_load_file("ppxm.xml") or die ("error:");

echo $xml->book[0]->title. "<br>";
echo $xml->book[1]->title. "<br>";

   ?>



   <?php

$xml = simplexml_load_file("ppxm.xml") or die ("error");

foreach ($xml->children() as $books) {
  echo $books->title. ", ";
  echo $books->author. ", ";
  echo $books->year. ", ";
  echo $books->price. ", " . "<br>";
}

    ?>



    <?php

$xml = simplexml_load_file("ppxm.xml") or die ("error");
echo $xml ->book[0]["category"]. "<br>";
echo $xml ->book[1]->title["lang"]. "<br>";

echo "<br>";
     ?>



     <?php

$xml = simplexml_load_file("ppxm.xml") or die ("error");

foreach ($xml->children() as $books) {
  echo $books->title["lang"];
  echo "<br>";
  // code...
}


      ?>
