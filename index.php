<?php
function countValue($numbers, $value)
{
    $count = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] === $value) {
            $count++;
        }
    }
    return $count;
}

$arr = array();
for ($i = 0; $i < 100; $i++) {
    $arr[$i] = rand(0, 100);
}
foreach ($arr as $number) {
    echo $number . ' ';
}

echo '<br>';
echo 'Display: ' . countValue($arr,3);
