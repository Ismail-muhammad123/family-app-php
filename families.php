<?php
 $username = "username";
 $password = "password2";
 $servername = "localhost";
 $dbname = "family app";

 $connection = new mysqli($servername, $username, $password, $dbname);

 if ($connection->connect_error){
     die("Connection Error: " > $connection->connect_error);
    }
    
    
    $sql = "SELECT id, name, location FROM families";
    $result = $connection->query($sql);

    $res = array();

     if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
          header('Content-Type: application/json');
          header('Access-Control-Allow-Origin: *');
          array_push($res, array($row["id"], $row["name"], $row["location"]));
        }
    }
   echo json_encode($res);
    exit();
?>