<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
$password1=sha1("password");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  @$name = test_input($_POST["name"]);
  @$email = test_input($_POST["email"]);
  @$password = test_input(sha1($_POST["password"]));
  @$website = test_input($_POST["website"]);
  @$comment = test_input($_POST["comment"]);
  @$gender = test_input($_POST["gender"]);
}


function test_input($data) {
  @$data = trim($data);
  @$data = stripslashes($data);
  @$data = htmlspecialchars($data);
  return $data;
}
?>

<h2>FORM VALIDATION</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name:   <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Password: <input type="Password" name="password" id="Password" autocomplete="off">
  <br><br>
  Website:<input type="text" name="website">
  <br><br>
  Comment:<textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<?php
if($password==$password1){
echo "<h2>Your Input:</h2>";
echo "your name is : ".$name;
echo "<br>";
echo "your email address is : ".$email;
echo "<br>";
echo "your entered password is : ".$password;
echo "<br>";
echo "your website is : ".$website;
echo "<br>";
echo "your entered comments are : ".$comment;
echo "<br>";
echo "your gender is : ".$gender;}
else
{
    echo "cannot show invalid password";
}
?>
</body>
</html>