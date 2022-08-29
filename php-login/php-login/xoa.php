<?php
require_once("config.php");
require_once("functions/functions.php");
require_once("classes/dbConnection.php");

$inputID = $_GET['id'];

$dbConnection = new dbConnection();
$conn = $dbConnection->getConnection();

$xoa_sql = "DELETE FROM users WHERE id =$inputID";

mysqli_query($conn, $xoa_sql);
header("location: themmoi.php");

/* $message = "";
$error = "";

$action = getValue("action", "POST", "str", "");
if ($action != "") {
    // Lay POST Value
    $inputID = getValue("inputID", "POST", "int", 0);
    $inputEmail = getValue("inputEmail", "POST", "str", "");
    $inputPassword = getValue("inputPassword", "POST", "str", "");

    if ($inputID > 0 && $inputEmail != "" && $inputPassword != "") {
        // Insert SQL
        $dbConnection = new dbConnection();
        $conn = $dbConnection->getConnection();

        $xoa_sql = 'DELETE FROM users WHERE id =$inputID';

        if ($conn->query($sql) === true) {
            $message = "New record created successfully";
        } else {
            $error = "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        $error = "Thông tin nhập không đủ !";
    }
} */
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
    <h1>Thêm mới người dùng</h1>
    <div class="bs-example">
        
        <form id="frmThemMoi" action="" method="POST">
            <div class="form-group">
                <label for="inputIDC">ID</label>
                <input type="id" class="form-control" id="inputID" name="inputID" placeholder="ID" required>
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password" required>
            </div>
            <input type="hidden" name="action" value="submit" />
            <button id="btnThemMoi" type="submit" class="btn btn-primary">Thêm mới</button>
        </form>
        
    </div>
</body>

</html>