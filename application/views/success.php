<html>

<head>

    <title>Codeigniter File Upload Success</title>

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

        #body {
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
        p.footer2 {
            text-align: right;
            font-size: 11px;
            background: #EBE5E6;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
        }
        #container {
            margin: 10px;
            border: 1px solid #D0D0D0;
            align-content: center;
            box-shadow: 0 0 8px #D0D0D0;
            text-align: center;
        }
        #container2 {
            width: 50%;
            display: inline-block;
            margin: 10px;
            text-align: center;
            vertical-align: top;
            align-content: center;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
        }
        .hed_in1{
            width: 30%;
            font-size: 12px;
            margin: 10px auto;
            margin-left: 20px;
            text-align: left;
            display : inline-block;
            vertical-align: top;
        }
        .hed_in2{
            width: 60%;
            font-size: 12px;
            margin: 10px auto;
            margin-left: 20px;
            text-align: left;
            display : inline-block;
            vertical-align: top;
        }
        .hed_in1n{
            width: 30%;
            font-size: 12px;
            margin: 10px auto;
            margin-left: 20px;
            text-align: left;
            display : inline-block;
            vertical-align: top;
        }
        .hed_in2n{
            width: 20%;
            font-size: 12px;
            margin: 10px auto;
            margin-left: 20px;
            text-align: left;
            display : inline-block;
            vertical-align: top;
        }

        .hed_in3n{
            width: 40%;
            font-size: 12px;
            margin: 10px auto;
            margin-left: 20px;
            text-align: left;
            display : inline-block;
            vertical-align: top;
        }

    </style>
</head>
<body>
<div id="container">
<h3>File has been uploaded.</h3>

<ul>
<!--    -->
<?//=$upload_data['file_name']?>
<!--    --><?php //foreach ($upload_data as $item => $value): ?>
<!---->
<!--        <li>--><?php //echo $item;?><!--: --><?php //echo $value;?><!--</li>-->
<!---->
<!--    --><?php //endforeach; ?>

    <li><?php echo "<h3>Uploaded file:</h3>"; ?></li>
    <li>
        <img src="<?php echo base_url().'/uploads/'.$upload_data['file_name']; ?>" /></li>

</ul>



<div id="container2">
    <h1>Add event <img src="<?php echo  base_url('/public/images/new.gif'); ?>"></h1>

    <form name="form_up" action="<?= base_url('uploadfile');?>" method="POST">
        <?php
        if (isset($res[0]))
        {
            echo "<font color='red'>".$res[0]."</font><br>";
        }
        ?>
        <div class="hed_in1">Image name</div>
        <div class="hed_in2"><input type="text" name="text_Image_name" value="<?=$upload_data['file_name']?>" readonly></div>
        <br>
        <div class="hed_in1">Event titel</div>
        <div class="hed_in2"><input type="text" name="text_event_titel" placeholder="Please enter event titel" size="40"></div>
        <br>
        <div class="hed_in1">Event discription</div>
        <div class="hed_in2">

            <textarea rows="3" cols="40"  name="text_Event_discription" placeholder="please enter Event discription"></textarea>
        </div>
        <br><br>


        <input  type="submit" name="upme1" value="Save event"/>
    </form>


    <p class="footer2"><br></p>
</div>
<p class="footer">Add event</p>

</div>
<!--<p>--><?php //echo anchor('upload', 'Upload Another File!'); ?><!--</p>-->

</body>

</html>