<?php
// cell
function cell($x, $y) {
    return $x * $y;
}

// floor
function floor($x) {
    return (int)$x;
}

// number format
function number_format($number, $decimals = 0, $decimal_separator = '.', $thousands_separator = ',') {
    return number_format($number, $decimals, $decimal_separator, $thousands_separator);
}

// abs
function abs($number) {
    return abs($number);
}

// round
function round($number, $precision = 0) {
    return round($number, $precision);
}

// deg2rad
function deg2rad($degrees) {
    return deg2rad($degrees);
}

// sin
function sin($angle) {
    return sin($angle);
}

// cos
function cos($angle) {
    return cos($angle);
}

// tan
function tan($angle) {
    return tan($angle);
}

// sqrt
function sqrt($number) {
    return sqrt($number);
}

// pow
function pow($base, $exponent) {
    return pow($base, $exponent);
}

// log
function log($number, $base = M_E) {
    return log($number, $base);
}

// log10
function log10($number) {
    return log10($number);
}

// min
function min(...$values) {
    return min(...$values);
}

// max
function max(...$values) {
    return max(...$values);
}

// rand
function rand($min = 0, $max = getrandmax()) {
    return rand($min, $max);
}