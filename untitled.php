<?php


$data =file_get_contents('php://input');

$input = json_decode($data);


try {
  $conn = new PDO("mysql:host=127.0.0.;dbname=web", nkamuo, pass);
  
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



  $stmt = $conn->prepare("INSERT INTO users (fullname, phone, email,password)
  VALUES (:fullname, :phone, :email, :password)");
  
  
  $stmt->bindParam(':fullname', $input->fullname
  $stmt->bindParam(':phone', $input>phone);
  $stmt->bindParam(':email', $input->email);

  $stmt->bindParam(':password', $input->password);
 
  $stmt->execute();
  
}
catch(PDOException $e){
  
  header('HTTP 500 Internal Server Error');
}