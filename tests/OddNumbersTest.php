<?php 
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../OddNumbers.php';
use PHPUnit\Framework\TestCase;


class OddNumberTest extends TestCase
{
 public function testOddNumber()
 {
 $result = getOddNumber([2,5,9,1,5,1,8,2,8]);
 $this->assertEquals(9,$result);
 $result = getOddNumber([2,3,4,3,1,4,5,1,4,2,5]);
 $this->assertEquals(4,$result);
 }
}

 