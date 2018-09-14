<html>
<head><title>Login Here</title></head>
<body>
<FORM ACTION="login.php" METHOD="POST" NAME="input">
<h2>Login Here...</h2>
Username : <input type="text" name="Email"><br>
Password : <input type="password" name="Password"><br>
<input type="submit" name="Login" value="Login">
<input type="reset" name="reset" value="Reset">
</FORM>
</body>
</html>
<?php
if(isset($_POST["Login"])){
    $email = $_POST['Email'];
    $pass = $_POST['Password'];
    if($email == "admin1@gmail.com" && $pass == "123456"){
        echo"<h2>Login Berhasil</h2>";
    }else{
        echo"<h2>Login Gagal</h2>";
    }
}
?>