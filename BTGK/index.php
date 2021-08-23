<?php
$conn = mysqli_connect('localhost','root','','dhtl');   
 $sql="select *  from canbo,donvichinh  where canbo.IDDonVi=donvichinh.ID ORDER BY IDCanBo asc ";

 $q=mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh bạ Trường Đại học Thủy Lợi</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="header">
    <div style="background-color: #00008B; height:10px"></div>
    <div class="title col-md-6">
        <a href=""><img src="img/logo.png" alt="" style=" margin-top: 20px" class="img-reponsive"></a>
        </div>  
    <div class="ad_logout col-md-3">
        <ul  class="navbar-nav">
          <!-- <a href="login.php" style=" text-decoration: none" > Đăng nhập</a> -->
            <button style="width:100px; margin-left: 70%"> <a href="login.php" style=" text-decoration: none" > Đăng nhập</a></button>
         </ul>
     </div>
  </div>
<div class="table-1">
   <h2>Danh sách Giảng viên trường Đại học Thủy Lợi</h2>
   <table>
    <thead>
        <tr>
            <th class="text-left">Họ và tên</th>
            <th class="text-left">Chức vụ</th>
            <th class="text-left">Cơ quan</th>
            <th class="text-left">Email</th>
            <th class="text-left">Di động</th>
          <?php
            while ($row = mysqli_fetch_array($q)) {
                
                echo "<tr>";
                echo "<td>".$row['TenCanBo']."</td>";
                echo "<td>".$row['ChucVu']."</td>";
                echo "<td>".$row['TenDonVi']."</td>";
                echo "<td>".$row['Email']."</td>";
                echo "<td>".$row['SDT']."</td>";

                echo "<td class='text-right'>";
               
                echo "</td>";
                echo "</tr>";
                

            }
        ?> 
        </tr>
    </thead>
   </table>
   <div class="table-right">
       <div class="box-2">
        <div class="container-2">
            <input type="search" id="search" placeholder="Tìm kiếm..." /><br>
            
        </div>
</div>
   </div>
</div>


</body>
</html>