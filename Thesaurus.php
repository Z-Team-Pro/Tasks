<?php
class Thesaurus
{
 private $thesaurus;
 function Thesaurus($thesaurus)
 {
 $this->thesaurus = $thesaurus;
 }
 public function getSynonyms($word)
 {
    $output=array();
      $output['word']=$word;
     $output['synonyms']=[];
    if(isset($this->thesaurus[$word])){

   $output['synonyms']=$this->thesaurus[$word];
    }
    return  json_encode($output);
    

   }
     }
$thesaurus = new Thesaurus(
 array
 (
 "buy" => array("purchase"),
 "big" => array("great", "large")
 ));
echo $thesaurus->getSynonyms("big");
echo "\n";
echo $thesaurus->getSynonyms("agelast");