<?php
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19];
function findValue($array, $number)
{
    $low = 0;
    $high = count($array) - 1;

    while ($low <= $high) {
        $mid = (int)(($low + $high) / 2);
        if ($array[$mid] > $number) {
            $high = $mid - 1;
        } else if ($array[$mid] < $number) {
            $low = $mid + 1;
        } else {
            return 'Yes Sir';
        }
    }
    return 'Not Found';
}

$userNumber = findValue($array, 16);
echo $userNumber;