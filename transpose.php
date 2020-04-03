# Find the transpose of a matrix








<?php
$a = array(array(1,2,3),array(4,5,6),array(7,8,9));
$b = array(array(7,8,9),array(4,5,6),array(1,2,3));
$m=count($a);
$n=count($a[2]);
$p=count($b);
$q=count($b[2]);
echo "the first matrix :"."<br/>";
for ($row = 0; $row < $m; $row++) {
for ($col = 0; $col < $n; $col++)
echo " ".$a[$row][$col];
echo "<br/>";
}
echo "the second matrix :"."<br/>";
for ($row = 0; $row < $p; $row++) {
for ($col = 0; $col < $q; $col++)
echo " ".$b[$row][$col];
echo "<br/>";
}
echo "the transpose for the first matrix is:"."<br/>";
for ($row = 0; $row < $m; $row++) {
for ($col = 0; $col < $n; $col++)
echo " ".$a[$col][$row];
echo "<br/>";
}
