<?php
 $username = "username";
 $password = "password2";
 $servername = "localhost";
 $dbname = "family app";

 $connection = new mysqli($servername, $username, $password, $dbname);

 if ($connection->connect_error){
     die("Connection Error: " > $connection->connect_error);
    }
    
    
    $sql = "SELECT id, family_id, title, location, budget, duration FROM projects";
    $result = $connection->query($sql);

    $res = array();

     if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
          header('Content-Type: application/json');
          header('Access-Control-Allow-Origin: *');
          array_push($res, $row);
          }
    }

    echo json_encode($res);

    exit();
?>
