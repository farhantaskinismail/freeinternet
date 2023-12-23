<?php
$Email = $_POST['email'];  
$Passwordd = $_POST['pwd'];
$conn = new mysqli('localhost','id20940268_farhan','Farhan2023@@','id20940268_lokjon');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into public(email, password)values(?,?)");
    $stmt->bind_param("ss",$Email, $Passwordd);
    $stmt->execute();
    echo "registration hoisa...";
    $stmt->close();
    $conn->close();
}
?>