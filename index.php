<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="skeleton.css">
<style>
body {background-color:#1c1b22;}
.container {max-width:960px;}
img {width:100%;}
.text {position:absolute;top:0;left:0;margin:48px;font-size:96px;color:#fff;text-shadow:1px 1px 1px #000;}
.sub_text {font-size:48px;}
.icon {position:fixed;bottom:0;left:0;width:100%;text-align:center;}
.icon img {width:100px;height:100px;margin:0;}
.button_primary_0 {border:1px solid #1EAEDB;background-color:rgba(0, 0, 0, 0.2);font-size:36px;padding:10px;margin:10px;text-decoration:none;}
p {line-height:1em;}
.stamp {position:absolute;top:0;right:0;width:200px;}
ul {list-style:none;}
li {display:inline-block;margin:0;}
</style>
</head>
<body>
<div class="container">
<img src="1_4.jpg">

<div class="text">
<div class="stamp">
<img src="13.webp">
</div>
<?php date_default_timezone_set("Asia/Shanghai"); ?>
<p><?php echo date("g:i A",time()); ?></p>
<p class="sub_text"><?php echo date("m-d",time()); ?></p>
<ul>
<li><a class="button_primary_0" href="about/index.html">about</a></li>
<li><a class="button_primary_0" href="fishing/index.html">fishing</a></li>
<li><a class="button_primary_0" href="acgn/index.html">all stuff</a></li>
<li><a class="button_primary_0" href="http://github.com/vinkenvvt1/vinkenvvt1.github.io">github</a></li>
<li><a class="button_primary_0" href="eat/index.html">eat</a></li>
<li><a class="button_primary_0" href="aigo/index.html">aigo</a></li>
</ul>
</div>

<div class="icon">
<a href="http://192.168.0.200/bbs/viewforum.php?f=2"><img src="5_3.jpg"></a>
<a href="http://taobao.com"><img src="6.jpg"></a>
<a href="http://kuwo.cn"><img src="7.jpg"></a>
<a href="http://192.168.0.200/weather/index.php"><img src="8.jpg"></a>
<a href="http://snapany.com/zh/bilibili"><img src="9.jpg"></a>
<a href="http://douban.com"><img src="11.jpg"></a>
<a href="http://www.iciba.com"><img src="12.jpg"></a>
<a href="http://dnschecker.org"><img src="14.jpg"></a>
<a href="http://ncs.io"><img src="16.jpg"></a>
<a href="http://verycd.com"><img src="17.jpg"></a>
<a href="http://cn.bing.com/?ensearch=1"><img src="18.jpg"></a>
<a href="http://promodj.com/"><img src="19.jpg"></a>
<a href="http://www.videvo.net/"><img src="15.jpg"></a>
</div>

</div>
</body>
</html>
