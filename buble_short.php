<?php
$arr = array('A','D','B','C','F');

for($i=0; $i<count($arr)-1; $i++)
{
    for($j=0; $j<count($arr)-1; $j++)
    {
        if($arr[$j]> $arr[$j+1]){
            list($arr[$j],$arr[$j+1]) = array($arr[$j+1], $arr[$j]); 
        }
    }

}
foreach ($arr as $key => $value) {
    echo $value.',';
}