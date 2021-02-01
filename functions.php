<?php
$task = "encode";

if (isset($_REQUEST["task"]) && $_REQUEST["task"] != "") {
    $task = $_REQUEST["task"];
}
$key = "abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ*/-+!@#$%&";

if ("key" == $task) {
    // Splic each character to array element from the $key string
    $key_origin = str_split($key);
    // Shuffle The Array
    shuffle($key_origin);

    // Join the keys
    $key = join($key_origin);
    /// Convert to html special chars so that data can't because of special entities (e.g *$%&)
    // $key = htmlspecialchars($key);
} elseif (isset($_REQUEST["key"]) && $_REQUEST["key"] != "") {
    // Retain the Key on Submit
    $key = $_REQUEST["key"];
}

$scrambledData = "";
if ("encode" == $task) {
    $data = $_REQUEST["data"] ?? "";

    if ($data != "") {
        $scrambledData = encodeData($data, $key);
    }
}

if ("decode" == $task) {
    $data = $_REQUEST["data"] ?? "";

    if ($data != "") {
        $scrambledData = decodeData($data, $key);
    }
}


// Function to Display the Key
function dispKey($key)
{
    global $key; // get $key as global variable.
    printf(" value = '%s' ", $key);
}


// Function for Scramble Data

function encodeData($originalData, $key)
{
    $originalKey = "abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ*/-+!@#$%&";
    $data = "";

    $inputLength = strlen($originalData);
    for ($i = 0; $i < $inputLength; $i++) {
        $currentChar = $originalData[$i];
        $position = strpos($originalKey, $currentChar);

        if ($position !== false) {
            $data .= $key[$position];
        } else {
            $data .= $currentChar;
        }
    }
    return $data;
}

function decodeData($originalData, $key)
{
    $originalKey = "abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ*/-+!@#$%&";
    $data = "";

    $inputLength = strlen($originalData);
    for ($i = 0; $i < $inputLength; $i++) {
        $currentChar = $originalData[$i];
        $position = strpos($key, $currentChar);

        if ($position !== false) {
            $data .= $originalKey[$position];
        } else {
            $data .= $currentChar;
        }
    }
    return $data;
}
