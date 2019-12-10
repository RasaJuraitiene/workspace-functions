<?php
//1. Uzduotis
//$x = 0;
//
//function change_x(&$x){
//    $x = 1;
//
//}
//change_x($x);
//print $x;

//2. Uzduotis
//$x = 0;
//$b = &$x;
//unset($b);
//$b = 1;
// print $x;

// 3. Uzduotis
//
//$roll_joints = true;
//$joint1 = false;
//$joint1 = &$roll_joints;
//$joint2 = false;
//$joint2 = &$roll_joints;
//$joint3 = false;
//$joint3 = &$roll_joints;
//
// print $joint1;
// print $joint2;
// print $joint3;

//4. Uzduotis + //5. Uzduotis
//$sheep = ['blee'];
//
//for ($x = 1; $x < 5; $x++){
//    $sheep[] = &$sheep[$x - 1];
//  }
//
////$sheep[3] = 'mee';
////var_dump($sheep);
//
//foreach ($sheep as $id => $zodis){
//    unset($sheep[$id]);
//    $sheep[] = $zodis;
//   }
//$sheep[3] = 'velniop sistema';
//var_dump($sheep);

//6. Uzduotis
//
//$array = ['b', 'x', 'x', 'b', 's'];
//
//function count_values($array, $val){
//    $count = 0;
//    foreach ($array as $value){
//        if($value === $val){
//            $count++;
//        }
//    }
//    return $count;
//}
//
//$counter = count_values($array, 'x');
//var_dump($counter);

//7.Uzduotis



?>




