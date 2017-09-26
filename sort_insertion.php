<?php
$masterList = [21, 25, 100, 98, 89, 77,-1];

$subList = [];
$start=microtime(true);
for ($i = 0; $i < count($masterList); $i++) {

    $extractItem = $masterList[$i];
    
    $subList[] = $extractItem;
    print_r($subList);
    print "<br>";
// Locate the position to insert by comparing with items from sub-list
    $positionFound = $i;
    while ($positionFound > 0 && $extractItem < $subList[$positionFound - 1]) {
        $subList[$positionFound] = $subList[$positionFound - 1];
        $positionFound = $positionFound - 1;
    }
// Insert the item to the position
$subList[$positionFound] = $extractItem;

}

print_r($subList);
$temps=microtime(true)-$start;
echo "temps".$temps;