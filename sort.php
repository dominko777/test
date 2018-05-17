<?php
$arr = [5, 2, 4, 6, 1, 3];
for($i = 1; $i < count($arr); $i++)
{
    $rValue = $arr[$i];
    $lValue = $i - 1;

    while($lValue >= 0 && $arr[$lValue] > $rValue)
    {
        $arr[$lValue+1] = $arr[$lValue];
        $lValue--;
    }

    $arr[++$lValue] = $rValue;
}