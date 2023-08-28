<?php
 $user = 'root';
 $password = 'root';
 $db = 'energy_system';
 $host = 'localhost';
 $port = 3306;
 
 $link = mysqli_connect($host, $user, $password, $db); // 使用正确的变量名
 
 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        body{
        margin:0;
        padding:0;
        width: 100%;
        height: 100%;
        background-image: url("Energy_bg.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: "微軟正黑體","sans-serif";     
        display: flex;
        flex-direction: column; /* 垂直排列内容 */
        align-items: center; /* 水平居中内容 */
        justify-content: center; /* 垂直居中内容 */          
        }
        p{
            color: white;
            text-align:center ;
        }
        .central{
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            font-size: 28px;          
        }
        .memberdays{
            position: fixed;
            left: 50%;
            top: 70%;
            transform: translate(-50%,-50%);
            font-size: 28px;
        }
        .image-container {
            display: flex;
            align-items: center; /* 垂直居中图片和文本 */
            text-align: center; /* 水平居中图片和文本 */
            padding: 20px; /* 容器内边距 */
            margin:10px;
        }

        .image {
            width: 200px; /* 设置图片宽度 */
            height: auto; /* 高度根据宽度的比例自动调整 */
            margin: 15px 30px; /* 图片之间的间距 */
        }       
        .text {
            margin-top: 20px; /* 调整文本与图片的间距 */
        }
        @media (max-width: 600px) {
            .image {
                margin: 10px 10px; /* 较小的图片间距 */
                width: 120px;
            }
        }
        .image-link {
            display: inline-block; /* 将 <a> 元素转换为块级元素，以便可以设置宽度和高度 */
        }
    </style>    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>生命能量场系统体验介面</title>
  </head>
    <body>
    <div class="image-container">
            <a class="image-link" href="energyoutput.php">
            <img class="image" src="HealthyEnergy Code.jpg" alt="Image 1">   
            </a>            
            <a class="image-link" href="voice.php">
            <img class="image" src="quantumactivity.jpg" alt="Image 2">   
            </a>
        </div>
        <div class="central">
            <p>每天早晚一颗细胞锭补充您细胞营养能量 </p>
        </div>
        <?php 
        $Phone = "1234567894";
        $query = "SELECT remaining_days FROM user_data WHERE phone = '$Phone'";
        $result = mysqli_query($link, $query);
        if ($row = mysqli_fetch_assoc($result)) {
            $remainingDays = $row['remaining_days'];
        } else {
            $remainingDays = 0; // 默认剩余天数
        }
        mysqli_close($link);
        ?>
        <p class="memberdays">剩余天数为 <?php echo $remainingDays; ?> 天。</p>
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  </body>
</html>