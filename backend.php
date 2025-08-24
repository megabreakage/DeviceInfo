<?php
// Get raw POST data
$data = json_decode(file_get_contents("php://input"), true);

if ($data) {
    // Example: log to a file
    $log = "Battery: " . $data['battery'] . "%, Charging: " . ($data['charging'] ? "Yes" : "No") .
        ", Mouse activity: " . ($data['mouseActivity'] ? "Detected" : "None") . "\n";

    file_put_contents("device_log.txt", $log, FILE_APPEND);

    echo "Logged: " . $log;
} else {
    echo "No data received";
}
