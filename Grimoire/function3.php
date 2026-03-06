<?php
// count
$fruits = ['apple', 'banana', 'orange'];
echo count($fruits); // Output: 3

// array_sum
$numbers = [1, 2, 3, 4, 5];
echo array_sum($numbers); // Output: 15

// sort
$fruits = ['banana', 'apple', 'orange'];
sort($fruits);
print_r($fruits); // Output: Array ( [0] => apple [1] => banana [2] => orange )

// array_rand
$fruits = ['apple', 'banana', 'orange'];
$randomKey = array_rand($fruits);
echo $fruits[$randomKey]; // Output: Random fruit from the array

// shuffle
$fruits = ['apple', 'banana', 'orange'];
shuffle($fruits);
print_r($fruits); // Output: Array ( [0] => orange [1] => apple [2] => banana ) (order may vary)

// array_push
$fruits = ['apple', 'banana'];
array_push($fruits, 'orange');
print_r($fruits); // Output: Array ( [0] => apple [1] => banana [2] => orange )

// array_pop
$fruits = ['apple', 'banana', 'orange'];
$lastFruit = array_pop($fruits);
echo $lastFruit; // Output: orange
print_r($fruits); // Output: Array ( [0] => apple [1] => banana )

// array_shift
$fruits = ['apple', 'banana', 'orange'];
$firstFruit = array_shift($fruits);
echo $firstFruit; // Output: apple
print_r($fruits); // Output: Array ( [0] => banana [1] => orange )

// array_unshift
$fruits = ['banana', 'orange'];
array_unshift($fruits, 'apple');
print_r($fruits); // Output: Array ( [0] => apple [1] => banana [2] => orange )

// current
$fruits = ['apple', 'banana', 'orange'];
echo current($fruits); // Output: apple

// next
$fruits = ['apple', 'banana', 'orange'];
echo current($fruits); // Output: apple
next($fruits);
echo current($fruits); // Output: banana

// prev
$fruits = ['apple', 'banana', 'orange'];
echo current($fruits); // Output: apple
next($fruits);
echo current($fruits); // Output: banana
prev($fruits);
echo current($fruits); // Output: apple

// end
$fruits = ['apple', 'banana', 'orange'];
echo end($fruits); // Output: orange

// reset
$fruits = ['apple', 'banana', 'orange'];
echo end($fruits); // Output: orange
reset($fruits);
echo current($fruits); // Output: apple

// in_array
$fruits = ['apple', 'banana', 'orange'];
if (in_array('banana', $fruits)) {
    echo 'Banana is in the array.'; // Output: Banana is in the array.
} else {
    echo 'Banana is not in the array.';
}

// array_key_exists
$fruits = ['apple' => 1, 'banana' => 2, 'orange' => 3];
if (array_key_exists('banana', $fruits)) {
    echo 'Key "banana" exists in the array.'; // Output: Key "banana" exists in the array.
} else {
    echo 'Key "banana" does not exist in the array.';
}

// array_search
$fruits = ['apple', 'banana', 'orange'];
$key = array_search('banana', $fruits);
if ($key !== false) {
    echo 'Banana found at index: ' . $key; // Output: Banana found at index: 1
} else {
    echo 'Banana not found in the array.';
}

// list
$fruits = ['apple', 'banana', 'orange'];
list($fruit1, $fruit2, $fruit3) = $fruits;
echo $fruit1; // Output: apple
echo $fruit2; // Output: banana
echo $fruit3; // Output: orange
?>