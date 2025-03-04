<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST['dataInput'];

    $nodemcu_ip = '192.168.1.43';  // NodeMCU IP
    $url = "http://$nodemcu_ip:8080/receive-data";

    $postData = json_encode(array("data" => $data));

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($postData)
    ));

    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if (curl_errno($ch)) {
        echo "cURL Error: " . curl_error($ch);  // Logs the error
    } elseif ($http_code == 0) {
        echo "Failed to send data. Unable to reach NodeMCU.";
    } else {
        echo "HTTP Code: $http_code, Response: $response";
    }

  curl_close($ch);
}
