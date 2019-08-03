<html>
<body>
<?php
function findMaxValueInArray($arr1,$arr2,$arr3){
    $value_max = max(max($arr1),max($arr2),max($arr3));
    echo "Giá trị lớn nhất là:".$value_max;
}
$arr1=[-1,-2,656,78,8];
$arr2=[4,8,5-9,88];
$arr3=[44,77,99,100];
findMaxValueInArray($arr1,$arr2,$arr3);
?>
</body>
</html>
