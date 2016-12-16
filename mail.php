<?php
$name=test($_POST["Name"]);
$email=test($_POST["Email"]);
$message=test($_POST["Message"]);
$mobile=$_POST["Mobilenumber"];
$mailto="akshit.grover2016@gmail";
$from="do_not_reply@akshitgrover.com";
function test($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$a="Name: ".$name."Mobile: ".$mobile."Message: ".$message;
mail($mailto,"From Preface",$a,$from);
?>