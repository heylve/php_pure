<?php

$list=['1','5','4','2','3','9','1','12','45','7','13','0','-4'];
$list_ordered=[];
$start=microtime(true);
for ($i=0;$i<count($list);$i++) {


    $el=$list[$i];
    if (count($list_ordered)==0)
    { 
        $list_ordered[0]=$el;
        echo "premier el inseré dans la liste triée ".print_r($list_ordered)."<br>";
    }   
    else {
    $j=count($list_ordered);
        
         if ($el > $list_ordered[$j-1])
         {
              array_push($list_ordered,$el);
         }
         else
          {
                while ($el <= $list_ordered[$j-1]) {
                    $j--;
                }//end while
              array_splice( $list_ordered, $j, 0, $el);
        
          }//end else if
        
      }//end else
   
}//end for
 echo "list initiale";
 print_r($list);
echo "<br>liste triée ";

 print_r($list_ordered);
 $temps=microtime(true)-$start;
 echo $temps;
 
 
/*echo "sort method from php";
$list2=[4,8,6,7,2,45,56,78,1,2];
sort($list2);
foreach ($list2 as $value) {
     echo $value ;
 }*/


// $arr = array("un", "deux", "trois");
// // reset($arr);
// // while (list(, $value) = each($arr)) {
// //     echo "Valeur : $value<br />\n";
// // }

// foreach ($arr as $value) {
//     echo "Valeur : $value<br />\n";
// }

?>