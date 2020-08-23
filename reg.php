<?php

$link = mysqli_connect("localhost", "root", "", "registration");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['st_name']);
$dep = mysqli_real_escape_string($link, $_REQUEST['department']);
$id = mysqli_real_escape_string($link, $_REQUEST['st_id']);
$email = mysqli_real_escape_string($link, $_REQUEST['st_email']);
$phone = mysqli_real_escape_string($link, $_REQUEST['st_phone']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
 
// Attempt insert query execution
$sql = "INSERT INTO student (st_name,department, st_id, st_email, st_phone, password) VALUES ('$name', '$dep', '$id', '$email', '$phone', '$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>