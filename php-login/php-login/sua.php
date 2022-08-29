<?php
require_once("config.php");
require_once("functions/functions.php");
require_once("classes/dbConnection.php");

$id = $_GET['id'];

$dbConnection = new dbConnection();
$conn = $dbConnection->getConnection();

$sua_sql = "SELECT * FROM  users WHERE id =$id";

$result = mysqli_query($conn, $sua_sql);
$row = mysql_fetch_assoc($result);
echo "thanh công";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bài tập PHP Form - MySQL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .bs-example {
            margin: 20px;
        }
    </style>
</head>

<body>
    <?php include("danhsach.php"); ?>
    <h1>Sửa thông tin người dùng</h1>
    <div class="bs-example">
        
        <form id="frmsua" action="" method="POST">
            <div class="form-group">
                <label for="inputIDC">ID</label>
                <input type="id" class="form-control" id="inputID" name="inputID"  placeholder="ID" required value = "<?php echo $row['ID']?>">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email" required value = "<?php echo $row['Email']?>">
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password" required value = "<?php echo $row['Password']?>">
            </div>
            <input type="hidden" name="action" value="submit" />
            <button id="btnThemMoi" type="submit" class="btn btn-primary">sửa thông tin</button>
        </form>
        
    </div>
</body>

</html>