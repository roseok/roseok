<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to Login and Registration</title>

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
            width: 150px;
            height: 25px;

            margin: 10px auto;
            margin-left: 20px;
            text-align: left;
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




    <div id="container">
        <h1>Rose stories control pannel</h1>
        <?php
        if(isset($res)){
            if($res[0]=="1"){ ?>
                <div align="center"><h3><b><font color="red">Error in Login</font></b></h3></div>
            <?php }} ?>

        <br><br>
        <form name="form_reg" action="<?= base_url('members');?>" method="POST">
            <div class="hed_in1">Email</div>
            <div class="hed_in2"><input type="text" name="text_Email_Address" placeholder="please enter Email Name"></div>
            <br>
            <div class="hed_in1">Password</div>
            <div class="hed_in2"><input type="password" name="text_Password" placeholder="please enter Password"></div>
            <br><br>

            <input type="submit" name="log"  value="Login">
        </form>

        <br>    <hr>    <br>
    </div>
    <p class="footer">Rose stories control pannel login page</p>
</div>
</body>
</html>