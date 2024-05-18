<?php 
function checkVowels($strings){
    $vowelCount = array();
    $reverrseString = array();
    $vowels = array('a','e','i','o','u');
    foreach($strings as $string){
        $count =0;
        $stringarray = str_split($string);


        foreach($stringarray as $alphabate){
            $alphabateLower = strtolower($alphabate);
            if (in_array($alphabateLower, $vowels)){
                $count++;
            }
            
        }
        array_push($vowelCount,$count);
        array_push($reverrseString, strrev($string));

    }
    for($i=0;$i< count($strings);$i++){
        printf("Original String: {$strings[$i]} , Vowel Count: {$vowelCount[$i]}, Reversed String: {$reverrseString[$i]} <br>");
    }


}
$strings = ["Hello", "World", "PHP", "Programming"];
checkVowels($strings);

?>