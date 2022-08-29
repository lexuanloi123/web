<?php
// require_once("config.php");
require_once("functions/functions.php");
require_once("classes/dbConnection.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Le xuan loi</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="btnop.css">
    </head>
    <body>
        <div id="header"> 
           <div class="logo">
                <img src="images\Screenshot 2022-03-29 154248.png" alt="">
            </div>
            <div class="menu">
                <ul>
                    <!-- <li><a href="trangchu.html">Trang chủ</a></li>
                    <li><a href="gt.html">Giới thiệu</a></li>
                    <li><a href="sp.html">Sản phẩm</a></li>
                    <li><a href="tt.html">Tin Tức</a></li>
                    <li><a href="">Liên hệ</a></li> -->
                    <?
                        // query menu from db
                        $dbConnection = new dbConnection();
                        $conn = $dbConnection->getConnection();

                        $sql = "SELECT name FROM users";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            $stt = 0;
                            while ($row = $result->fetch_assoc()) {
                                $stt++;
                        ?>
                                <li><a>l1 <?= $row["email"] ?></a></li>
                        <?php
                            }
                        }
                        ?>
                </ul>
                <div class="timkiem">
                    <input type="text">
                    <a href="#">
                        <img src="images\568305.png" alt="">
                    </a>
                </div>
                <div class="dangnhap">
                        <div class="dangnhap1">
                            <a href="dn.html">
                                <img src="images\2883738.png" alt="">
                                <i id="dangnhap">Đăng nhập / Đăng kí</i><br>
                                <i>Tài khoản</i>
                            </a>
                        </div>
                        <div class="dangnhap2">
                            <a href="#">
                                <img src="images\223480.png" alt="">
                                <br><i>Giỏ hàng</i>
                            </a>
                        </div>
                </div>
            </div>
        </div>
        <!------------------------------------------------->
        <div id="banner">
            <div>
                <img src="images\Screenshot 2022-03-29 154117.png" alt="">
            </div>
        </div>
        <!---------------------------------------------------->
        <div id="main">
                <div class="td">
                    <b>KHUYẾN MÃI HOT</b>
                </div>
                <div class="box">
                    <div class="sp">
                        <p class="tensp"><a href="gh.html">Sữa Organic Goal</a></p>
                        <img src="images\Screenshot 2022-03-29 224340.png" alt="">
                        <p class="giag">300.000đ</p>
                        <p class="giam">199.00đ</p>
                    </div>
    
                    <div class="sp">
                        <p class="tensp"><a href="gh.html">Sữa Organic Goal</a></p>
                        <img src="images\Screenshot 2022-03-29 224340.png" alt="">
                        <p class="giag">300.000đ</p>
                        <p class="giam">199.00đ</p>
                    </div>
    
                    <div class="sp">
                        <p class="tensp"><a href="gh.html">Sữa Organic Goal</a></p>
                        <img src="images\Screenshot 2022-03-29 224340.png" alt="">
                        <p class="giag">300.000đ</p>
                        <p class="giam">199.00đ</p>
                    </div>
                </div>
                <div class="td">
                    <b>SẢN PHẨM MỚI</b>
                </div>
                    <div class="box">
                        <div class="sp">
                            <p class="tensp"><a href="">Sữa Colos Goal</a></p>
                            <img src="images\sua-vinamilk-colosgold-so-1-800g-0-1-tuoi.jpg" alt="">
                            <p class="giag">260.000đ</p>
                            <p class="giam">159.00đ</p>
                        </div>

                        <div class="sp">
                            <p class="tensp"><a href="">Sữa Colos Goal</a></p>
                            <img src="images\sua-vinamilk-colosgold-so-1-800g-0-1-tuoi.jpg" alt="">
                            <p class="giag">260.000đ</p>
                            <p class="giam">159.00đ</p>
                        </div>
        
                        <div class="sp">
                            <p class="tensp"><a href="">Sữa Col Goal</a></p>
                            <img src="images\sua-vinamilk-colosgold-so-1-800g-0-1-tuoi.jpg" alt="">
                            <p class="giag">260.000đ</p>
                            <p class="giam">159.00đ</p>
                        </div>
                    </div> 
        </div>
        <!----------------------------------------------------------->
        <div id="footer">
            <p>Địa chỉ: Tầng 15, Tòa nhà Xala, Phường Phúc La, Quận Hà Đông, Thành phố Hà Nội, Việt Nam</p>
            <p>Tổng đài hỗ Trợ:0123456789, Email: cskh@hotro.com</p>
        </div>
    </body>
</html>