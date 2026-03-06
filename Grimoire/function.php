<?php
function salam() {
    echo "Assalamualaikum";
}

salam();

function tambah($a, $b) {
    return $a + $b;
}
echo tambah(5, 10);

function add($a, $b) {
    $hasil[] = $a + $b;
    $hasil[] = $a - $b;
    $hasil[] = $a * $b;
    $hasil[] = $a / $b;
    return $hasil;
}

$result = add(10, 5);
echo "Hasil Penjumlahan: " . $result[0] . "<br>";
echo "Hasil Pengurangan: " . $result[1] . "<br>";
echo "Hasil Perkalian: " . $result[2] . "<br>";
echo "Hasil Pembagian: " . $result[3] . "<br>";

// variadic function
function sum(...$numbers) {
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}

echo sum(1, 2, 3, 4, 5); // Output: 15

// fungsi pangkat
function power($base, $exponent) {
    return pow($base, $exponent);
}
echo power(2, 3); // Output: 8

// type declaration
function multiply(float $a, float $b): float {
    return $a * $b;
}
echo multiply(3.5, 2.0); // Output: 7.0

// union types
function displayValue(int|float|string $value) {
    echo "Nilai: $value";
}
displayValue(42); // Output: Nilai: 42
displayValue(3.14); // Output: Nilai: 3.14
displayValue("Hello"); // Output: Nilai: Hello

// named arguments
function greet(string $name, string $greeting = "Hello") {
    echo "$greeting, $name!";
}
greet(name: "Alice", greeting: "Hi"); // Output: Hi, Alice!

// array_walk
$numbers = [1, 2, 3, 4, 5];
array_walk($numbers, function(&$number) {
    $number *= 2;
});
print_r($numbers); // Output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )
?>
