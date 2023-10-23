<?php
$string = "Mohammed Khalifah";

echo "<h1>$string</h1>";
echo "<br>";
echo strtolower($string);
echo "<br>";
echo strtoupper($string);
echo "<br>";
// string Length
echo strlen($string);
echo "<br>";
// طباعة حرف معين
echo $string[0];
echo "<br>";
// تغيير كلمة معينة
echo str_replace("Khalifah","Magdy Khalifah",$string);
echo "<br>";
// قطع sub string
echo substr($string,9);

?>