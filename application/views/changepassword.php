<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Change master password</title>

    <style type="text/css">

        ::selection { background-color: #E13300; color: white; }
        ::-moz-selection { background-color: #E13300; color: white; }

        body {
            background-color: #fff;
            margin: 40px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
        }

        a {
            color: #003399;
            background-color: transparent;
            font-weight: normal;
        }

        h1 {
            color: #444;
            background-color: transparent;
            border-bottom: 1px solid #D0D0D0;
            font-size: 19px;
            font-weight: normal;
            margin: 0 0 14px 0;
            padding: 14px 15px 10px 15px;
        }

        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }

        .body {
            margin: 0 15px 0 15px;
        }

        p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
        }
        #main_container {

            text-align: center;
        }
        #container {
           display: inline-block;
            margin: 10px;
            vertical-align: top;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
        }
        #container2 {
            display: inline-block;
            margin: 10px;
            vertical-align: top;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
        }
        .hed_in1{
            width: 400px;
            height: 25px;

            margin: 10px auto;
            margin-left: 20px;
            text-align: left;
            display : inline-block;
            vertical-align: top;
        }
        .hed_in1x{
            width: 400px;
            height: 25px;

            margin: 10px auto;
            margin-left: 20px;
            text-align: center;
            display : inline-block;
            vertical-align: top;
        }
        .hed_in2{
            width: 200px;
            height: 25px;

            margin: 10px auto;
            text-align: left;
            display : inline-block;
            vertical-align: top;
        }
    </style>
</head>
<body>

<div id="main_container">
    <?php
    if(isset($res)){
        if($res[0]=="3"){ ?>
            <div align="center"><h3><b><font color="red">Error in when you try to change password</font></b></h3></div>
        <?php }
        if($res[0]=="2"){ ?>
            <div align="center"><h3><b><font color="red">Can not change password</font></b></h3></div>
        <?php }
    } ?>

   <div class="hed_in1x"><h3><b>Change master password</b></h3></div><br><hr><br>
    <form name="form_reg" action="<?= base_url('changepassword');?>" method="POST">
        <div class="hed_in1">Old Password</div>
        <div class="hed_in2"><input type="password" name="text_Password_old" placeholder="please enter old password"></div>
        <br>

        <div class="hed_in1">Password</div>
        <div class="hed_in2"><input type="password" name="text_Password" placeholder="please enter password"></div>
        <br>
        <div class="hed_in1">Confirm Password</div>
        <div class="hed_in2"><input type="password" name="text_Confirm_Password" placeholder="please enter Confirm_Password"></div>
        <br><br>

        <input type="submit" name="changepws" value="Change master password">
        <br><br>
    </form>


</div>
    <p class="footer">Rose stories control pannel change master password</p>
</div>
</body>
</html>