<?php
    $conn = mysqli_connect('localhost','root','','dhtl');
    if(!$conn){
	    die('Khong the ket noi DB');
    };
    echo ""
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐĂNG NHẬP</title>
    <link rel="stylesheet" href="css/login.css">
    
</head>
<body style="background-image: url(img/anh.jpg); ">
<?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $pass = $_POST["password"];
            $sql = "SELECT * from admin where username='$username'";
            $result = mysqli_query($conn, $sql);
		    $row = mysqli_fetch_assoc($result);
		    if($password == $row['password']) {
			    $_SESSION['username'] = $row['username'];
			    header('location:admin.php');// đúng thì vào trang admin
		    }
		    else{
			    echo 'mat khau sai';
			    header('location:login.php');
		    }
        }
    ?>
    <div class="menu" >
        <div class="login">
            <form method="post">
                <h2>ĐĂNG NHẬP</h2>
                <input type="text" placeholder="Username" name="username" class="username" required>
                <input type="password" placeholder="Password" name="password" class="password" required>
                <!--<button name="login" id="login" value="Login" type="submit"> Login</button> -->
                <input type="submit" name="submit" value="Đăng nhập" class="submit">  
                <br>
                <a href="#"> Đăng ký</a>  &nbsp &nbsp  &nbsp &nbsp 
                <a href="#">Quên mật khẩu?</a>
            </form>
        </div>
    </div>    
     
</body>
</html>