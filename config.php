<?php  
  error_reporting(0);
  $host = "";
  $username = "";
  $dbname = "";
  $password = "";
  
  $loggedin = 'no';
  try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $con = $db;
    $conn = $db;
    
  } catch(PDOException $e) {
    echo "Database Died so sad mode: " . $e->getMessage();
  }
  
  // Maintenance Key
  $maintenance_key = '';
?>
