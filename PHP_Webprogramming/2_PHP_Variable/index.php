<?php
  // ตัวแปร
  $name = "Thanakorn";
  $lname = "Chupromsorn";
  $age = 20;
  $sext = true;
  $sexf = false;
  $price = 20.99;

  echo "<h1>ชื่อ: $name</h1>";
  echo "<h1>ชื่อ: ".$name."<br />นามสกุล: ".$lname."</h1>";

  echo "DOUBLE CODE: ";
  echo "$name<br />";
  echo "SINGLE CODE: ";
  echo '$name';

  echo "<h1>BOOLEAN</h1>";
  echo "TRUE: $sext ";
  echo '$sext';
  echo "<br />FALSE: $sexf ";
  echo '$sexf';

  echo "<br />sext: ";
  echo $sext;
  echo "<br />sexf: ";
  echo $sexf;

  echo "<br />$price";1
 ?>
