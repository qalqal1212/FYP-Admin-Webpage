<?php
    //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'herba';
    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    //get search term
    $searchTerm = $_GET['term'];
    
    //get matched data from skills table
    $query = $db->query("SELECT * FROM symptom WHERE symName LIKE '%".$searchTerm."%' ORDER BY symName ASC");
    $data = [];
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['symName'];
    }
    
    //return json data
    echo json_encode($data);
?>