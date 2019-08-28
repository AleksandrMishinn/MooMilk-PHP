<?php 

$connection = include "connection.php"; 

$query_value_text = "('".$_POST['name']."','".$_POST['number']."','".$_POST['comment']."')";

$query_text = "INSERT INTO `contacts` (`name`,`phone`,`note`) VALUES".$query_value_text;

$query_result = mysqli_query($connection, $query_text);


if ($query_result === true)
{
	$query_status = 'Успех.';
}else{
	$query_status = 'Провал.'."<br>".$connection->error;
}  

echo $query_status; 

$connection->close();

exit();

?>