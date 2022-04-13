<html>
<body>
<?php
#데이터 형변환
$a = 100;
echo gettype($a);   # integer
settype($a, 'double');
echo '<br />';
echo gettype($a);   # double 
?>
</body>
</html>