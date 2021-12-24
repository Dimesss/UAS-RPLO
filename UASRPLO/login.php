<?php
    session_start();
    include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        body{
            background-color: skyblue;
            max-width: 100%;
            overflow-x: hidden;
            overflow-y: hidden;
        }
        .box-login{
            width: 500px;
            height: 200%;
            margin-top: 150px;
            margin-left: 400px;
            background-color: royalblue;
            padding: 20px;
        }

        .username{
            margin-top: 50px;
            margin-bottom: 10px;
            margin-left: 40px;
        }
        
        .username input{
            width: 400px;
            height: 30px;
        }

        .password{
            margin-left: 40px;
            margin-bottom: 10px;
        }

        .password input{
            width: 400px;
            height: 30px;
        }

        .push{
            margin-left: 40px;
            margin-bottom: 10px;
        }
        
        .push input{
            width: 100px;
            height: 30px;
            background-color: skyblue;
            margin: 5% auto;
        }
    </style>
</head>
<body>
    <div class = "box-login">
        <font style="font-size: 30px; color: #f0fff0;"> Halaman Login </font>
        <form action = "beranda.php" method = "post">
            <div class="username">
                <input type = "text" name = "username" placeholder="Masukkan Username"> <br><br>
            </div>
            <div class="password">
                <input type = "password" name = "password" placeholder="Masukkan Password"> <br><br>
            </div>
            
            <div class="push">
                <input type="submit" name="login" value="LOGIN">
            </div>
        </form>
    </div>

</body>
</html> 