<?php
$settings=$this->settings;
?>
<!doctype html>
<html lang="fa">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="<?php if(isset($settings['logo']))echo $settings['logo'];else{?>#<?php } ?>"/>
    <meta name="keywords" content="<?php if(isset($settings['keywords']))echo $settings['keywords'];else{?>امنیران<?php } ?>"/>
    <meta name="description" content="<?php
    if(isset($desc)){
        echo $desc;
    }elseif(isset($settings['description'])){
        echo $settings['description'];
    }else{echo 'AMNIRAN';
    }?>"/>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?= URL ?>public/bootstrap-3.3.6-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= display(URL) ?>public/css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?= URL ?>public/css/mycss.css">

<?php require_once('app/views/font.php'); ?>
<!-- jQuery library -->
<script src="<?= URL ?>public/bootstrap-3.3.6-dist/js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="<?= URL ?>public/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script src="<?= URL ?>public/js/myscript.js"></script>
<script src="<?= URL ?>public/js/header.js.php"></script>
<title><?php if(isset($title) and isset($settings['title'])){
    $pos=strpos($settings['title'],'-');
    if($pos>=0)
        echo $title.'-'.substr($settings['title'],0,$pos);
    else
        echo $title.'-'.$settings['title'];

}
elseif(isset($settings['title']))echo $settings['title'];else{?>AMNIRAN<?php } ?></title>
<style>

</style>
    <style>
        .in {
            /*display: block;*/
            position: relative;
            animation-name: sliderightin;
            animation-duration: 2s;
            z-index: 5;
        }
        .hold{
            z-index: 2;
        }
        .out {
            position: relative;
            animation-name: slideleftin;
            animation-duration: 2s;
            z-index: 5;
        }
        /* Standard syntax */
        @keyframes sliderightout {
            from   {left:0%; top:0px;}
            to { left:100%; top:0px;}
        }
        @keyframes sliderightin {
            from   {left:-100%; top:0px;}
            to {left:0%; top:0px;}
        }
        @keyframes slideleftout {
            from   {left:0%; top:0px;}
            to { left:-100%; top:0px;}
        }
        @keyframes slideleftin {
            from   {left:100%; top:0px;}
            to {left:0%; top:0px;}
        }
	.bgimg-1 {
		background-image: url("<?=$settings['background']?>");
	}
        .xxx{
            cursor: pointer;
        }
        body,h3{
            font-family: 'Yekan' ;
            /*font-size: 15px;*/
            text-align: right;
            direction: rtl;
        }
        #footer{
            margin: 0px;
            padding: 0px;
            height: 150px;
            border: none;
        }
        body{
            padding-bottom: 0px;
        }
        a:link, a:visited{
            text-decoration:none;
        }
        ul li{
            list-style-type: none;
        }
        li ul li{
            margin-left:-1em;
        }
        
        .fa {
            padding: 10px;
            font-size: 30px;
            width: 50px;
            text-align: center;
            text-decoration: none;
            margin: 6px 2px;
            border-radius: 50%;
        }

        .fa:hover {
            /*opacity: 0.7;*/
            color: black;
            /*box-shadow: yellow 10px;*/
        }
        .fa-telegram {
            background: #fff;
            color: #00aff0;
        }
        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        .fa-twitter {
            background: #55ACEE;
            color: white;
        }
        .fa-instagram {
            background: #125688;
            color: white;
        }
    </style>
</head>
