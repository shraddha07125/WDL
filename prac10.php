<?php
$input="hello world";
$length=string($input);
$reversed=strrev($input);
$substring=substr($input 0,5);
$lower=strtolower($input);
$upper=strtoupper($input);
$replace=str_replace("hello","world",$input);
$wordcount=str_word_count(input);
$trimmed=trim($input);


echo"original string:".$input."<br>";
echo"length of the string:". $length."<br>";
echo"reverse of the string:".$reverse."<br>";
echo"substring of the string:".$substring."<br>";
echo"lower of the string:". $lower."<br>";
echo"upper of the string:". $upper."<br>";
echo"replace of the string:". $replce."<br>";
echo"word count:". $wordcount."<br>";
echo"trim of the string:". $trim."<br>";
?>