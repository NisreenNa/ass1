<?php 

$name = $email = $password = $birth = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["first-name"]);

  $email = test_input($_POST["email-mobile"]);
  $password = test_input($_POST["up-password"]);
  $birth = test_input($_POST["birth-year"]);
  $gender = test_input($_POST["gen"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isset($_POST['signup'])){
echo "hello";
echo '<pre>';
print_r($_POST);
echo '</pre>';
}else {
    echo "error 404";
}

echo "<h2>Your Data:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
echo "<br>";
echo  $birth;
echo "<br>";
echo $gender;

?>
