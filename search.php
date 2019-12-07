<?php
$path = "/images";
$files1 = basename($path,".jpg");
$files2 = scandir($files1, 1);
$age = $_GET['name'];
$result=[];
foreach($files2 as $key => $value){
   if(strpos($value, $age)!== false){
     $result[]= $value;
   }
}

echo json_encode($result);
?>