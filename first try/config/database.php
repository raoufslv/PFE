<?php
  define('DB_HOST', 'sql11.freemysqlhosting.net');
  define('DB_USER', 'sql11489971');
  define('DB_PASS', 'g8AxlQ3YzR');
  define('DB_NAME','sql11489971');

//create connection
  $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//check connection
  if($conn -> connect_error){
      die('Connection failed:' . $conn ->connect_error);
  }else{
        echo "Connected successfully";
  }
  