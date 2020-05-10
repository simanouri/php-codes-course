
<?php
function array_sort(&$arr, $n)
{
    for ($i = 1; $i < $n; $i++)
    {
        $temp = $arr[$i];
        $j = $i-1;
        while ($j >= 0 && $arr[$j] > $temp)
        {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        $arr[$j + 1] = $temp;
    }
}
function printArray(&$arr, $n)
{
    for ($i = 0; $i < $n; $i++)
        echo $arr[$i]."<br>";

}
$arr = array(12, 14, 13, 5, 6,10,4);
$n = sizeof($arr);
array_sort($arr, $n);
printArray($arr, $n);
