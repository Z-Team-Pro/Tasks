<?php
/**
 * get the number which occurs odd times in the source array
 *
 * @param $arrValues array
 * @return int
 */

function getOddNumber($srcValues) {
 
  $occure_number=array_count_values($srcValues);
    foreach($occure_number as $key =>$value){
 if($value%2!=0){ return $key; }
    }

}
/*
class OddNumberTest extends \PHPUnit_Framework_TestCase
{
 public function testOddNumber()
 {
 $result = getOddNumber([2,5,9,1,5,1,8,2,8]);
 $this->assertEquals(9,$result);
 $result = getOddNumber([2,3,4,3,1,4,5,1,4,2,5]);
 $this->assertEquals(4,$result);
 }
}

 */