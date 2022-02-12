<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once $filepath."/../classes/Shout.php";
    include_once $filepath."/../helpars/Format.php";
    $shout = new Shout();
    $fm    = new Format();
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $fm->title(); ?> - <?php echo TITLE; ?></title>
    <style>
    *{margin: 0;padding: 0; outline: none;}
        body{font-family: Verdana, Geneva, sans-serif; box-sizing: border-box; color: #444;}
        .clear{overflow: hidden;}
        .wrapper{width: 800px; margin: 0 auto;}
        .headerarea, .footerarea{background: #ddd;padding: 10px;text-align: center;}
        .content{border: 15px solid #ddd;min-height: 500px;}
        .box{border: 5px solid #999; margin: 30px auto 0; padding: 20px;width: 600px; height: 180px;overflow: scroll;}
        .box ul{margin: 0;padding: 0;list-style-type: none;}
        .box ul li{display: block; border-bottom: 1px solid #ddd;margin-bottom: 5px;padding-bottom: 5px;}
        .box ul li:last-child{border-bottom: 0px solid #ddd;margin-bottom: 0px;padding-bottom: 0px;}
        .box ul li span{color: #888;}
        .shoutfrom{border: 5px solid #999; margin: 30px auto 0; padding: 20px;width: 600px;}
        .shoutfrom input[type="text"]{padding: 5px;margin-bottom: 10px;width: 500px;}
        .shoutfrom input[type="submit"]{padding: 3px 10px; background-color: #666; color: #fff; border: 1px solid #444; font-size: 25px; cursor: pointer;} 
    </style>
</head>
<body>
    <div class="wrapper clear">
        <div class="headerarea clear">
            <h2>Basic shoutbox with PHP and mysqli</h2>
        </div>
        <div class="content clear">