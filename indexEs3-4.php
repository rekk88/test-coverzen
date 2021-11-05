

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
echo "<h4>sql messages</h4> <br>";
// echo "<br>";
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test_coverzen_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  echo "connection successfull <br>";
}

//check if table exist
$checkTable = 'SELECT * FROM Student';

if ($conn->query($checkTable) === FALSE) {
  // -- id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,

  // sql to create table
  $sqlQuery = "CREATE TABLE Student (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  student_name VARCHAR(30) NOT NULL,
  surnname VARCHAR(30) NOT NULL,
  color VARCHAR(50)
  )";
  
  if ($conn->query($sqlQuery) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
}
else{
  echo "table exist already";
}



$conn->close();
?>
<hr>
<div class="container">
  <form action="register.php" method="post"> 
    
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" name="student_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Max of 30 characters" maxlength="30" pattern="[A-Z a-z]+"
      oninvalid="this.setCustomValidity('Numbers not allowed in this field')" onchange="this.setCustomValidity(' ')">
      <div id="emailHelp" class="form-text">required field | Numbers not allowed</div>
    </div>
    <div class="mb-3">
      <label for="exampleSurname" class="form-label">Surname</label>
      <input type="text" class="form-control" name="surname" id="exampleSurname" placeholder="Max of 30 characters" maxlength="30"
      pattern="[A-Z a-z]+" oninvalid="this.setCustomValidity('Numbers not allowed in this field')" onchange="this.setCustomValidity(' ')">
      <div id="emailHelp" class="form-text">required field</div>
    </div>
    <div class="mb-3">
      <label for="exampleColor" class="form-label">Color</label>
      <input type="text" class="form-control" name="color" id="exampleColor"
      pattern="[A-Z a-z]+" oninvalid="this.setCustomValidity('Numbers not allowed in this field')" onchange="this.setCustomValidity(' ')">
      <div id="emailHelp" class="form-text">required field</div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>