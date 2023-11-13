<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = array();

    foreach ($_POST as $key => $value) {
        if (is_array($value)) {
            $tempArray = array();
            foreach ($value as $subkey => $subvalue) {
                $tempArray[$subkey] = $subvalue;
            }
            $data[$key] = $tempArray; // Encode the temp array as JSON
        } else {
            $data[$key] = $value; // Encode the value as JSON
        }
    }

    // echo json_encode($data);


    $servername = "DESKTOP-SH54RD2";
    $username = "AzureNexus";
    $password = "1111";
    $dbname = "UserSurvey";

    try {
        $conn = new PDO("mysql:host=$servername;port=1433;dbname=UserSurvey", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }      
    // echo json_encode($data);

    // foreach ($_POST['question5'] as $key => $value) {
    //     echo "$key: $value<br>";
    // }
}
?>