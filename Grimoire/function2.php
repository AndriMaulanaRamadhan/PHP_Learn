<?php
// strtolower
$str = "Hello World!";
echo strtolower($str); // Output: hello world!

// strtoupper
$str = "Hello World!";
echo strtoupper($str); // Output: HELLO WORLD!

// ucfirst
$str = "hello world!";
echo ucfirst($str); // Output: Hello world!

// lcfirst
$str = "Hello World!";
echo lcfirst($str); // Output: hello World!

// strlen
$str = "Hello World!";
echo strlen($str); // Output: 12

// trim
$str = "   Hello World!   ";
echo trim($str); // Output: Hello World!

// ltrim
$str = "   Hello World!";
echo ltrim($str); // Output: Hello World!

// rtrim
$str = "Hello World!   ";
echo rtrim($str); // Output: Hello World!

// str_pad
$str = "Hello";
echo str_pad($str, 10, "*"); // Output: Hello*****

// strip_tags
$str = "<p>Hello <b>World</b>!</p>";
echo strip_tags($str); // Output: Hello World!

// str_shuffle
$str = "Hello World!";
echo str_shuffle($str); // Output: (randomly shuffled string)

// number_format
$num = 1234567.89;
echo number_format($num, 2); // Output: 1,234,567.89

// substr
$str = "Hello World!";
echo substr($str, 0, 5); // Output: Hello
echo substr($str, 6); // Output: World!

// strpos
$str = "Hello World!";
echo strpos($str, "World"); // Output: 6
echo strpos($str, "PHP"); // Output: false

// str_replace
$str = "Hello World!";
echo str_replace("World", "PHP", $str); // Output: Hello PHP!

// explode
$str = "Hello,World,PHP";
$arr = explode(",", $str);
print_r($arr); // Output: Array ( [0] => Hello [1] => World [2] => PHP )

// implode
$arr = ["Hello", "World", "PHP"];
$str = implode(",", $arr);
echo $str; // Output: Hello,World,PHP
?>