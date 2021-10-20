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
  /* while($row = mysqli_fetch_array($result)) {
    echo $row['first_name'] . " " . $row['last_name']."<br />";
  } */
?>

<table width="500" cellpadding="5" cellspacing="5" border="1">
  <tr>
    <th>ID#</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Department</th>
    <th>Email</th>
  </tr>
  <?php while($row = mysqli_fetch_array($result)) : ?>
  <tr>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['first_name'] ?></td>
    <td><?php echo $row['last_name'] ?></td>
    <td><?php echo $row['department'] ?></td>
    <td><?php echo $row['email'] ?></td>
  </tr>
  <?php endwhile; ?>
</table>