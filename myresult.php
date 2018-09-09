<?php
include("conn/mysqlconn.php");
// define variables and set to empty values
  $firstname = $lastname = $ID = $gender = $Email = $age = $Blood =
  $Adress = $cars = $country = $postcode = $phone = $size =" ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $ID = test_input($_POST["ID"]);
  $gender = test_input($_POST["gender"]);
  $Email = test_input($_POST["Email"]);
  $age = test_input($_POST["age"]);
  $Blood = test_input($_POST["Blood"]);  
  $Adress = test_input($_POST["Adress"]);
  $cars = test_input($_POST["cars"]);
  $country = test_input($_POST["country"]);
  $postcode = test_input($_POST["postcode"]);
  $phone = test_input($_POST["phone"]);
  $size= test_input($_POST["size"]);
 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $ID;
echo "<br>";
echo $Email;
echo "<br>";
echo $gender;
echo "<br>";
echo $age;
echo "<br>";
echo $Blood;
echo "<br>";
echo $Adress;
echo "<br>";
echo $cars;
echo "<br>";
echo $country;
echo "<br>";
echo $postcode;
echo "<br>";
echo $phone;
echo "<br>";
echo $size;

//insert data
$sql = "INSERT INTO userprofile_2 (firstname, lastname,ID,  Email , gender, age, Blood, Adress, cars, country, postcode, phone,  size) 
VALUES ('$firstname', '$lastname' , '$ID' , '$Email', '$gender', '$age', '$Blood', '$Adress', '$cars' , '$country', '$postcode', '$phone' , '$size')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>