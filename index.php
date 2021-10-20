<?php
  // Create connection
  $connect = mysqli_connect("localhost", "root", "", "company");

  if (mysqli_connect_errno($connect)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  // mysqli_query($connect,"INSERT INTO employees (first_name,last_name,department,email)
  // VALUES ('Jeff','Dole','Programming','jdole@gmail.com');");

  //Create Result
  $result = mysqli_query($connect,"SELECT * FROM employees");

  //Loop Through Result & echo data
  while($row = mysqli_fetch_array($result)) {
    echo $row['first_name'] . " " . $row['last_name']."<br />";
  } 
?>