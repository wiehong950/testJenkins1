<?php

$Servername = "172.17.0.2";
$username = "root";
$password = "mouse";
$database = "trucorp";

$connect = new mysqli($servername, $username, $password, $database);

if($connect->connect_error){
        die("Failed to connect");
}

$sql = "SELECT * FROM users";
$result = $connect->query($sql);
$countuser = 0;

if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
                echo "ID : " . $row["ID"]. "<br>Nama: " . $row["Nama"] . "<br>Kantor:" . $row["Kantor"]. "<br>";
               $countuser++; 
        }
        echo "Jumlah User : " . $countuser;
}
$connect->close();

?>
