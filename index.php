
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2 style="color: deeppink">Nhập vào hệ số abc của phuong trình</h2>
<form method="post">
        <input type="number" name="num1" size="20"  placeholder="a" />
        <input type="number" name="num2" size="20" placeholder="b" />
        <input type="number" name="num3" size="20" placeholder="c" />
        <input type="submit" value="result"/>
</form>
<?php include "QuadraticEquation.php"?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];

}
    $test1 = new QuadraticEquation($num1,$num2,$num3);
    if ($test1->getDiscriminant()>0) {
        echo ("phuong trinh co hai nghiem la: ".$test1->getRoot1()." va ".$test1->getRoot2());
    } else if ($test1->getDiscriminant()==0) {
        echo ("phuong trinh co nghiem kep la: ".$test1->getRoot1());
    } else {
        echo ("Phuong trinh vo nghiem");
    }
?>
</body>
</html>
