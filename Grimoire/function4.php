<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // html entities
    $str = "<h1> Hello World </h1>";
    echo htmlentities($str);

    // html special chars
    $str2 = "<h1> Hello World </h1>";
    echo htmlspecialchars($str2);

    // html special chars decode
    $str3 = "&lt;h1&gt; Hello World &lt;/h1&gt;";
    echo htmlspecialchars_decode($str3);

    // html entities decode
    $str4 = "&lt;h1&gt; Hello World &lt;/h1&gt;";
    echo html_entity_decode($str4);

    // include
    include "function4_include.php";

    // require
    require "function4_require.php";

    // redirect header
    // header("Location: https://www.google.com");

    // die
    // die("This is a die message");

    // exit
    // exit("This is an exit message");

    // ob_start
    ob_start();
    echo "This is a test message";
    $output = ob_get_clean();
    echo $output;

    // ob_end_clean
    ob_start();
    echo "This is a test message";
    ob_end_clean();

    // ob_end_flush
    ob_start();
    echo "This is a test message";
    ob_end_flush();
    ?>
</body>
</html>