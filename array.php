<form action="array.php" class="GET">
    <input type="text" name="xname">
    <input type="submit">
</form>

<?php 
// تعريف المفوفة 
$family = array("father","mother","me");
// شكل اخر 
$family = ["father","mother","me"]; 

echo "<h2>$family[0]</h2>";
$family[2]="brother";
$family[3]="me";
$family[4]="sister";
for($i =0;$i<count($family);$i++){
    echo "$family[$i] ";
}
echo "<br><br><br>";


// المصفوفة المتصلة
// Associative Array
// لها لكل خانة مفتاح خاص فيها ولازم استخدمه

// $jobs = [
//     "Designer" => "Mohammed",
//     "Programmer" => "Khalifah",
//     "Gamer" => "Magdy"
// ];
// echo $jobs["Gamer"];

$xname = $_GET["xname"];
// echo $jobs[$xname]; 


$score = [
    "Mohammed" => [90,"A"],
    "Magdy" => [80,"B"],
    "Khalifah" =>[40,"D"]
];
echo "Score: ".$score[$xname][0]."<br>";
echo "Grade: ".$score[$xname][1]."<br>";


?>