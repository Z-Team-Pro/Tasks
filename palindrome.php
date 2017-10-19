
<?php
class Palindrome
{
 public static function isPalindrome($word)
 {
     //get the revert string from word
    $reversed= strtolower(strrev($word));

    if($reversed==strtolower($word)){
        return true;
    }
    else {
        return false;
    }

 }
}
echo Palindrome::isPalindrome('Deleveled'); 