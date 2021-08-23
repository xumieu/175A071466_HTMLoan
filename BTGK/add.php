<?php
$conn = mysqli_connect('localhost','root','','dhtl');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Giảng viên</title>
    <link rel="stylesheet" href="css/add.css">
</head>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Thêm giảng viên</h2>
            </div>
    
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <label>Tên giảng viên</label>
                        <input type="text" name="ten" class="form-control">
                    </div>
    
                    <div class="form-group">
                        <label>Chức vụ</label>
                        <input type="text" name="chucvu" class="form-control">
                    </div>
    
                    <div class="form-group">
                        <label>Đơn vị</label>
                        <input type="text" name="coquan" class="form-control">
                    </div>
    
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="int" name="sdt" class="form-control">
                    </div>
                    
                        <button name="sbm" class="btn btn-success" type="submit">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $ten = $_POST["ten"];
    $chucvu = $_POST["chucvu"];
    $coquan = $_POST["coquan"];
    $email = $_POST["email"];
    $sdt = $_POST["sdt"];
    $sql = "INSERT INTO canbo (TenCanBo, ChucVu, Email, SDT, IDDonVi)
    VALUES  ('$ten', '$chucvu', '$email', '$sdt', '$coquan');";
    $q=mysqli_query($conn, $sql);
    // if (mysqli_num_rows($q)>0)
    //     {
    // header ("location: admin.php");
    // }
   
    if ( mysqli_error($conn)){
        echo  mysqli_error($conn);
    }
    
    else {
        header ("location: admin.php");
    }
    }
    
    
?>
</body>
</html>