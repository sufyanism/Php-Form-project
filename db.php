<?php 

$server = "localhost";
$dbName="root";
$dbPassword="";
$db="form-details";

$connection = mysqli_connect($server,$dbName,$dbPassword,$db);

//If there is Connection.
if($connection){
    echo "";
}
else{
    echo "Error";
}

?>