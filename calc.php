<?php
// Calculator
$num1=$_GET["number1"];
$num2=$_GET["number2"];
$op = $_GET["op"];

if(empty($num1)){
    $result = "الرقم الأول فارغ";
}else if(empty($num2)){
    $result = "الرقم الثاني فارغ";
}else if (empty($op)){
    $result = "العملية فارغة";
}else {
    // الحالة الإفتراضية
if($op==="+"){
    $result=$num1+$num2;
}else if ($op==="-"){
    $result=$num1-$num2;
}else if($op==="*"){
    $result=$num1*$num2;
}else if($op==="/"){
    $result=$num1/$num2;
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="calc.php" method="GET" class="form">
            <div>
                <label for="">Enter number 1:</label>
                <input type="number" id="num1" name="number1" class="form-control">
            </div>

            <div>
                <label for="">Enter number 2:</label>
                <input type="number" id="num2" name="number2" class="form-control">
            </div>
            <br>
            <div>
                <label for="">the opration:</label>
                <input type="text" name="op" class="form-control">
            </div>

            <div class="alert alert-success">
                <?php echo $result; ?>
            </div>
            <br>
            
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</body>
</html>