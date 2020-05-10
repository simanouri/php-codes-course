<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>algebra calculator</title>
</head>
<body>
<div style="margin: 50px auto;display: block">
    <form  method="post">

        <div style="margin: 50px 0 50px 566px;display: block"><br>
<h2 style="">ماشین حساب جبری</h2>
            <input type="submit" name="1" value="1" style="border: white;background-color: lightpink;color:darkgray;border-radius: 50%;width: 40px;height: 40px;">
            <input type="submit" name="2" value="2" style="border: white;background-color: lightpink;color:darkgray;border-radius: 50%;width: 40px;height: 40px;">
            <input type="submit" name="3" value="3" style="border: white;background-color: lightpink;color:darkgray;border-radius: 50%;width: 40px;height: 40px;">
            <input type="submit" name="4" value="4" style="border: white;background-color: lightpink;color:darkgray;border-radius: 50%;width: 40px;height: 40px;"><br><br>
            <input type="submit" name="5" value="5" style="border: white;background-color: lightpink;color:darkgray;border-radius: 50%;width: 40px;height: 40px;">
            <input type="submit" name="6" value="6" style="border: white;background-color: lightpink;color:darkgray;border-radius: 50%;width: 40px;height: 40px;">
            <input type="submit" name="7" value="7" style="border: white;background-color: lightpink;color:darkgray;border-radius: 50%;width: 40px;height: 40px;">
            <input type="submit" name="8" value="8" style="border: white;background-color: lightpink;color:darkgray;border-radius: 50%;width: 40px;height: 40px;"><br><br>
            <input type="submit" name="9" value="9" style="border: white;background-color: lightpink;color:darkgray;border-radius: 50%;width: 40px;height: 40px; margin-left: 42px;">
            <input type="submit" name="0" value="0" style="border: white;background-color: lightpink;color:darkgray;border-radius: 50%;width: 40px;height: 40px;"><br><br><br>
            <input type="submit" name="+" value="+" style="border: white;background-color: #f57689;color:gray;border-radius: 50%;width: 40px;height: 40px;">
            <input type="submit" name="-" value="-" style="border: white;background-color: #f57689;color:gray;border-radius: 50%;width: 40px;height: 40px;">
            <input type="submit" name="/" value="/" style="border: white;background-color: #f57689;color:gray;border-radius: 50%;width: 40px;height: 40px;">
            <input type="submit" name="*" value="*" style="border: white;background-color: #f57689;color:gray;border-radius: 50%;width: 40px;height: 40px;"><br><br>
            <input type="submit" name="c" value="c" style="border: white;background-color: grey;color:pink;border-radius: 50%;width: 40px;height: 40px; margin-left: 42px;">
            <input type="submit" name="=" value="=" style="border: white;background-color: gray;color:pink;border-radius: 50%;width: 40px;height: 40px;">

        </div>

        <?php
         $message=0;

         $answer=0;
         
        if (isset($_POST['txt'])) {
             $answer = $_POST['txt'];
        }

        if (isset($_POST['1'])) {
            $message = "1";
        }
        if (isset($_POST['2'])) {
            $message = "2";
        }
        if (isset($_POST['3'])) {
            $message = "3";
        }
        if (isset($_POST['4'])) {
            $message = "4";
        }
        if (isset($_POST[''])) {
            $message = "5";
        }
        if (isset($_POST['6'])) {
            $message = "6";
        }
        if (isset($_POST['7'])) {
            $message = "7";
        }
        if (isset($_POST['8'])) {
            $message = "8";
        }
        if (isset($_POST['9'])) {
            $message = "9";
        }
        if (isset($_POST['0'])) {
            $message = "0";
        }
        if (isset($_POST['+'])) {
            $message = "+";
        }
        if (isset($_POST['-'])) {
            $message = "-";
        }
        if (isset($_POST['/'])) {
            $message = "/";
        }
        if (isset($_POST['*'])) {
            $message = "*";
        }
        if (isset($_POST['c'])) {
            $message = "c";
        }
        if (isset($_POST['='])) {
            $message = "=";
        }

        if ($message == "=") {

            $answer .= " = " . eval('return ' . $answer . ' ; ');
        } else {

            $answer .= $message;
        }

        if ($message == "c") {
            $answer = "";
        }

        ?>
<div style="    margin: 50px 0 50px 566px; display: block;"> <p style="direction: rtl;font-weight: bold; margin-right: 633px">عبارت ریاضی را وارد کنید :</p>
    <input type="text" name="txt" value="<?php echo $answer ; ?>" style="padding: 10px 52px 10px 16px;margin-left: -83px;border-radius: 22px;font-size: 24px;border: 1px dashed #978282;"></div>


    </form>
</div>
</body>
