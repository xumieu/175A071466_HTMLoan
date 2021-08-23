<?php
$conn = mysqli_connect('localhost', 'root', '', 'dhtl');
$id = $_GET["id"];
$sql = "select *  from canbo  where IDCanBo=$id  ";
$q = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa Giảng viên </title>
    <link rel="stylesheet" href="css/add.css">
</head>

<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Chỉnh sửa Giảng viên</h2>
            </div>
            <?php while ($rows = mysqli_fetch_assoc($q)) { ?>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tên giảng viên</label>
                            <input type="text" name="ten" class="form-control" value="<?php echo $rows['TenCanBo']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Chức vụ</label>
                            <input type="text" name="chucvu" class="form-control" value="<?php echo $rows['ChucVu']; ?>">
                        </div>

                        <!-- <div class="form-group">
                            <label>Đơn vị</label>
                            <input type="text" name="coquan" class="form-control" value="<?php echo $rows['IDDonVi']; ?>">
                        </div> -->

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="<?php echo $rows['Email']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="int" name="sdt" class="form-control" value="<?php echo $rows['SDT']; ?>">
                        </div>
                    <?php } ?>
                    <button name="submit" class="btn btn-success" type="submit">Cập nhật</button>
                    </form>
                    <?php
                    if (isset($_POST["submit"])) {
                        $ten = $_POST["ten"];
                        $chucvu = $_POST["chucvu"];
                        $coquan = $_POST["coquan"];
                        $email = $_POST["email"];
                        $sdt = $_POST["sdt"];

                        $query2 = "UPDATE canbo SET TenCanBo = '$ten', ChucVu = '$chucvu', Email = '$email', SDT = '$sdt' WHERE IDCanBo=$id";
                        mysqli_query($conn, $query2);

                        header("location: admin.php");
                    }
                    ?>
                </div>
        </div>
    </div>

</body>

</html>