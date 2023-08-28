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

        body {
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            overflow: hidden;
        }

        video {
            max-width: 100%;
            max-height: 100%;
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
    <!DOCTYPE html>
<html>
<head>
    <style>
        body{          
        margin:0;
        padding:0;
        background-color: black;       
        background-size:contain;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: "微軟正黑體","sans-serif";     
        display: flex; 
        background-position: center ;        
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: white;
        height: 100vh;
        overflow: hidden;       
        }
        @media (max-width: 600px) {
            .countdown {
                font-size: 24px; /* 调整字体大小 */
                bottom: 25%; /* 调整底部距离 */
            }
        }
        .countdown {
            font-size: 36px;
            color: white;
            position: absolute;
            bottom: 22%; /* 调整到底部的距离 */
            left: 50%;
            transform: translateX(-50%);
            white-space: nowrap; /* 阻止文字换行 */
        }
        video {
            position: fixed;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
        }

        .button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            position: absolute;
            bottom: 5%; /* 调整到底部的距离 */
            left: 50%;
            transform: translateX(-50%);
        }
        .playButton {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            position: absolute;
            bottom: 15%; /* 调整到底部的距离 */
            left: 50%;
            transform: translateX(-50%);
        }  
    </style>
</head>
<body>
<video autoplay loop muted>
        <source src="My Energy Code.mp4" type="video/mp4">        
        Your browser does not support the video tag.
    </video>
    
<div class="countdown" id="countdown">3:00</div> 
    <button class="playButton" id="playButton">播放能量音频</button>
    <button class="button" id="exitButton">退出</button>
   
    <script>
        let remainingTime = 180; // 3分钟的秒数
        let countdownInterval;

        function formatTime(time) {
            const minutes = Math.floor(time / 60);
            const seconds = time % 60;
            return `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
        }

        function startCountdown() {
            countdownInterval = setInterval(updateCountdown, 1000);
        }

        function updateCountdown() {
            if (remainingTime > 0) {
                remainingTime--;
                document.getElementById('countdown').textContent = `${formatTime(remainingTime)}`;
            } else {
                clearInterval(countdownInterval);
                window.location.href = 'experiences.php';
            }
        }

        document.getElementById('exitButton').addEventListener('click', function() {
            window.location.href = 'experiences.php'; // 跳转到退出页面
        });
        document.getElementById('playButton').addEventListener('click', function() {
            startCountdown();
            const audio = new Audio('My Energy Code.mp3');
            audio.play();
            playButton.style.display = 'none';
        });
    </script>
</body>

</html>