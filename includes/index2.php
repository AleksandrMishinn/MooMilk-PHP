<?php
  
  header('Content-Type: text/html; charset=utf-8');

  $connection = mysqli_connect('127.0.0.1', 'root', '', 'moomilk');
  
  if ($connection == false)
 {
    echo 'Не удалось подключиться к базе данных: '.mysqli_connect_error();
    $connection->close();
    exit();
  }

  $query_result = mysqli_query($connection, "SELECT * FROM  `products`");

if ($query_result == false)
 {
    echo 'Ошибка выполнения запроса.';
    $connection->close();
    exit();
  }  

  while ( ($current_prod = mysqli_fetch_assoc($query_result))) {
  	echo $current_prod['name'].'<br/>';
  }

  $connection->close();

?>