<?php
$string_data=" This is a simple String ";

echo "String is ".$string_data;
echo "<br>";
//lets find size of string total charcater
echo "Length : ".strlen($string_data);

echo "<br>";
//lets find total number of word in string

echo "Word : ".str_word_count($string_data);

//lets reverse the string

echo "<br>";
echo "Reverse : ".strrev($string_data);

//lets search a position of word in string
echo "<br>";
echo "Position of simple is : ".strpos($string_data,"simple");

//lets replace a word from string

echo "<br>";

echo "New String is : ".str_replace("simple","Dynamic",$string_data);

//lets check if string contain word or not
echo "<br>";

if(strstr($string_data,"hello")){
	echo "String Contain WOrd";
}
else{
	echo "String Not Contain Word";
}

echo "<br>";

if(strstr($string_data,"simple")){
	echo "String Contain WOrd";
}
else{
	echo "String Not Contain Word";
}


//convert string to uppercase

echo "<br>";

echo "Uppercase : ".strtoupper($string_data);


echo "<br>";

//lets convert to lower case

echo "Lowercase : ".strtolower($string_data);

//lets covert sentence to capitalize

echo "<br>";

echo "Capitalize : ".ucwords($string_data);

//lets conver string only first letter capital


echo "<br>";

echo "First Letter Capital : ".ucfirst($string_data);

//lets extract string data from sentence or substring

echo "<br>";

echo "Substring : ".substr($string_data,2);
//this remove

echo "<br>";
//remove white space from string begginning or end of string
echo "Remove WhiteSpace : ".trim($string_data);

echo "<br>";

//convert string to array

//converting by space 
$array=explode(" ",$string_data);

print_r($array);

//convert an array to string


//joing array word by space
$string=implode(" ",$array);

echo "<br>";
echo "New String from Array : ".$string;