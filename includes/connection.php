  <?php
  
  $server_conf = include "db_conf.php";  
  
  $connection = mysqli_connect($server_conf["db_address"], $server_conf["user"], $server_conf["password"], $server_conf["db_name"]);
  
  if ($connection == false)
  {
  	echo 'Не удалось подключиться к базе данных: '.mysqli_connect_error();
  	$connection->close();
  	exit();
  }

  return $connection;

  ?>