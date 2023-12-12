<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $name = test_input($_POST["name"]);
 $email = test_input($_POST["email"]);
 $website = test_input($_POST["website"]);
 $comment = test_input($_POST["komentar"]);
 $Jenis_Kelamin = test_input($_POST["Jenis_Kelamin"]);
}

function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}

// Display the data
echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";
echo "Website: " . $website . "<br>";
echo "Comment: " . $comment . "<br>";
echo "Gender: " . $Jenis_Kelamin . "<br>";
?>
