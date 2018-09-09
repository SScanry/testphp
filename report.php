<!DOCTYPE html>
<html lang="th">
<head>
  <title>BIB for ตุ๊ดตู่</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<table class="table table-hover">
    <thead>
      <tr>
        <th>firstname</th>
        <th>lastname</th>
        <th>ID</th>
        <th>gender</th>
        
        <th>Email</th>
        <th>age</th>
        <th>Blood</th>
        <th>Adress</th>
        <th>cars</th>
        <th>country</th>
        <th>postcode</th>
        <th>phone</th>
        <th>size</th>
      </tr>
    </thead>
    <tbody>
<?php
include("conn/mysqlconn.php");

$sql = "SELECT * FROM userprofile_2";
$result = mysqli_query($conn , $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result))
   {
    ?>
     <tr>
        <td><?php echo $row["firstname"];?></td>
        <td><?php echo $row["lastname"];?></td>
        <td><?php echo $row["ID"];?></td>
        <td><?php echo $row["gender"];?></td>
        <td><?php echo $row["Email"];?></td>
        <td><?php echo $row["age"];?></td>
        <td><?php echo $row["Blood"];?></td>
        <td><?php echo $row["Adress"];?></td>
        <td><?php echo $row["cars"];?></td>
        <td><?php echo $row["country"];?></td>
        <td><?php echo $row["postcode"];?></td>
        <td><?php echo $row["phone"];?></td>
        <td><?php echo $row["size"];?></td>
    </tr>   
 <?php
  }
} else {
    echo "0 results";
}

?>
 </tbody>
</table>
</body>
</html>