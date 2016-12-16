<?php
$name=test($_GET["Name"]);
$email=test($_GET["Email"]);
$message=test($_GET["Message"]);
$mobile=$_GET["Mobilenumber"];
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
header('Location:index.html')
?>