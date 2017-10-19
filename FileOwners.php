<?php
class FileOwners
{
 public static function groupByOwners($files)
 {

     $output=array();
    foreach ($files as $key=>$value){
       if(isset($output[$value])){
       $output[$value][]=$key;}
       else {
   $output[$value]=array();
   $output[$value][]=$key;

       }




    }
           return $output;


 }
}
$files = array
(
 "Input.txt" => "Randy",
 "Code.py" => "Stan",
 "Output.txt" => "Randy"
);
var_dump(FileOwners::groupByOwners($files)); 