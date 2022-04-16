<html>
<head>
<style media="screen">
td {
border: 1px solid black;
}
</style>
</head>
<body>
<?php
echo "<hr><h3>다른 방식의 구구단(^^);</h3><hr>";
echo "<table>";
for($i=0; $i<10; $i++){
echo "<tr border=1>";
for($j=2; $j<10; $j++){
if($i == 0){
echo "<th>"."{$j} 단</th>";
} else {
echo "<td>"."{$j} x {$i} = ".($i*$j)."</td>\t";
}
}
echo "</tr>";
}
echo "</table>";
?>
</body>
</html>