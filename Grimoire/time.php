<?php
// time
echo time(); // current timestamp

// date
echo date("Y-m-d H:i:s"); // current date and time

// date default timezone
echo date_default_timezone_get(); // get default timezone

// date default timezone set
date_default_timezone_set("Asia/Shanghai"); // set default timezone
echo date("Y-m-d H:i:s"); // current date and time in Asia/Shanghai timezone

// mktime
echo mktime(0, 0, 0, 1, 1, 2020); // timestamp for January 1, 2020
echo date("Y-m-d H:i:s", mktime(0, 0, 0, 1, 1, 2020)); // date and time for January 1, 2020

// getdate
print_r(getdate()); // current date and time as an associative array
print_r(getdate(mktime(0, 0, 0, 1, 1, 2020))); // date and time for January 1, 2020 as an associative array

// strtotime
echo strtotime("2020-01-01 00:00:00"); // timestamp for January 1, 2020
echo date("Y-m-d H:i:s", strtotime("2020-01-01 00:00:00")); // date and time for January 1, 2020
echo strtotime("+1 day"); // timestamp for 1 day from now
echo date("Y-m-d H:i:s", strtotime("+1 day")); // date and time for 1 day from now
echo strtotime("-1 day"); // timestamp for 1 day ago
echo date("Y-m-d H:i:s", strtotime("-1 day")); // date and time for 1 day ago
echo strtotime("+1 week"); // timestamp for 1 week from now
echo date("Y-m-d H:i:s", strtotime("+1 week")); // date and time

// selisih tanggal
$date1 = strtotime("2020-01-01");
$date2 = strtotime("2020-01-10");
$diff = $date2 - $date1; // selisih dalam detik
$diffDays = $diff / (60 * 60 * 24); // selisih dalam hari
echo $diffDays; // output: 9

// date_create
$date = date_create("2020-01-01 00:00:00"); // create a date object
echo date_format($date, "Y-m-d H:i:s"); // format the date object

// date_diff
$date1 = date_create("2020-01-01");
$date2 = date_create("2020-01-10");
$diff = date_diff($date1, $date2); // get the difference between two dates
echo $diff->format("%a"); // output: 9

// refactoring function selisih tanggal
function selisihTanggal($date1, $date2) {
    $date1 = date_create($date1);
    $date2 = date_create($date2);
    $diff = date_diff($date1, $date2);
    return $diff->format("%a");
}
echo selisihTanggal("2020-01-01", "2020-01-10"); // output: 9

// magic_constants
echo __LINE__; // current line number
echo __FILE__; // current file path
echo __DIR__; // current directory path
echo __FUNCTION__; // current function name
echo __CLASS__; // current class name
echo __METHOD__; // current method name
echo __NAMESPACE__; // current namespace name

// superglobals
echo $_SERVER['PHP_SELF']; // current script name
echo $_SERVER['SERVER_NAME']; // server name
echo $_SERVER['HTTP_HOST']; // host name
echo $_SERVER['HTTP_USER_AGENT']; // user agent
echo $_SERVER['SCRIPT_NAME']; // current script path
echo $_SERVER['REQUEST_METHOD']; // request method
echo $_SERVER['REQUEST_URI']; // current request URI

// browser sniffer
$userAgent = $_SERVER['HTTP_USER_AGENT'];
if (strpos($userAgent, "Chrome") !== false) {
    echo "You are using Chrome";
} elseif (strpos($userAgent, "Firefox") !== false) {
    echo "You are using Firefox";
} elseif (strpos($userAgent, "Safari") !== false) {
    echo "You are using Safari";
} else {
    echo "You are using an unknown browser";
}

// superglobals $_GET
echo $_GET['name']; // get the value of the 'name' parameter from the URL

// mengirim pesan antar halaman dengan query string
// halaman1.php
header("Location: halaman2.php?message=Hello World"); // redirect to halaman2.php with a message
// halaman2.php
echo $_GET['message']; // output: Hello World

// url encode
echo urlencode("Hello World"); // output: Hello%20World

// url decode
echo urldecode("Hello%20World"); // output: Hello World

// raw url encode
echo rawurlencode("Hello World"); // output: Hello%20World

// raw url decode
echo rawurldecode("Hello%20World"); // output: Hello World
?>
