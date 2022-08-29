<!DOCTYPE html>
<html>
    <head>
        <title>Giải phương trình bậc nhất</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php 
            $result = '';
            if (isset($_POST['calculate']))
            {
                // Bước 1: Lấy tham số
                $a = isset($_POST['a']) ? $_POST['a'] : '';
                $b = isset($_POST['b']) ? $_POST['b'] : '';
             
                // Bước 2: Validate và tính toán
                if ($a == ''){
                    $result = 'Bạn chua nhập số a';
                }
                else if ($b == ''){
                    $result = 'Bạn chưa nhập số b';
                }
                else if ($a == 0){
                    $result = 'Số a phải nhập khác 0';
                }
                else {
                    $result = -($b) / $a;
                }
            }
        ?>
        <h1>Giải phương trình bậc nhất</h1>
        <form method="post" action="">
            <input type="text" style="width: 20px" name="a" value=""/>x 
            +
            <input type="text" style="width: 20px" name="b" value=""/> = 0
            <br/><br/>
            <input type="submit" name="calculate" value="Tính" />
        </form>
        <?php echo $result; ?>
    </body>
</html>