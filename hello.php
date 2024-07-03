<?php 

    header('Content-Type: application/Json');

    if (isset($_SERVER['REMOTE_ADDR'])) {


        $ip = $_SERVER['REMOTE_ADDR'];   
        $visitor_name = $_GET['visitor_name'];
        $visitor_name =trim($visitor_name, "\"' ");
        $visitor_name = empty($visitor_name) ? "Guest" : $visitor_name;
        $api_key = "4d9459c79d3d42e6a69153640240307";
        $api = "http://api.weatherapi.com/v1/current.json?key=$api_key&q=$ip";
        
        

        $api_data = file_get_contents($api);
        $response = json_decode($api_data);
        // print_r($response);
       
        echo json_encode([
            "client_ip" => $ip,
            "location" => $response->location->name,
            "greeting" => "Hello, $visitor_name!, the temperature is " . $response->current->temp_c . " degree celcius in " . $response->location->name,
        ]);
    }
?>