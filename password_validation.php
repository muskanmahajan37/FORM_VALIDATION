<?php
$password='qweasdzxc@123';
$password_hash=sha1($password);
if(isset($_POST['user_password'])&&!empty($_POST['user_password']))
{
    $user_password=$_POST['user_password'];
    $user_pass_sha=sha1($user_password);
        if($password_hash == $user_pass_sha){
            echo 'password is correct '.'<br>';
            echo 'enter your credentials here'.'<br>';
            echo 'your password is:'.$user_password.'<br>';
            echo 'your sha password is:'.$user_pass_sha.'<br>';
        }
        else{
            echo 'entered password is wrong';
        }
}
else
{
    echo 'field is empty';
 }
?>

<form action="password_validation.php" method="POST">
  password:<input type='password' name='user_password'>
  <input type='submit' name='submit' value='submit'>
</form>
