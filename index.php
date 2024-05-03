<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="skeleton.css">
<style>
body {background-color:#1c1b22;}
img {width:100%;}
.text {position:absolute;top:0;left:0;margin:48px;font-size:96px;color:#fff;text-shadow:1px 1px 1px #000;}
.sub-text {font-size:48px;}
.sub-text a {color:#fff;text-decoration:none;}
.icon {position:fixed;bottom:0;left:0;width:100%;text-align:center;}
.icon img {width:100px;height:100px;margin:0;}
p {line-height:1em;}
</style>
</head>
<body>
<div class="container">
<img src="1_2.jpg">
<div class="text">
<?php date_default_timezone_set("Asia/Shanghai"); ?>
<p><?php echo date("H:i",time()); ?></p>
<p class="sub-text"><?php echo date("m月d日",time()); ?></p>
<p class="sub-text"><a href="music/index_n.html">song</a></p>
<p class="sub-text"><a href="photo/index_p.html">photo</a></p>
<p class="sub-text"><a href="draw/index_d.html">draw</a></p>
<p class="sub-text"><a href="open_concert/index_oc.html">concert</a></p>
<p class="sub-text"><a href="videos/index_vd.html">game</a></p>
<p class="sub-text"><a href="bh3/index_bh3.html">bh3</a></p>
</div>
<div class="icon">
<a href="http://192.168.0.200/bbs/viewforum.php?f=2"><img src="5.jpg"></a>
<a href="http://baidu.com"><img src="2.jpg"></a>
<a href="http://taobao.com"><img src="6.jpg"></a>
<a href="http://kuwo.cn"><img src="7.jpg"></a>
<a href="http://192.168.0.200/weather/index.php"><img src="8.jpg"></a>
<a href="http://search.5sing.kugou.com/"><img src="10.jpg"></a>
<a href="http://search.bilibili.com"><img src="3.jpg"></a>
<a href="https://zhouql.vip/bilibili/"><img src="9.jpg"></a>
<a href="http://douban.com"><img src="11.jpg"></a>
<a href="http://www.iciba.com"><img src="12.jpg"></a>
</div>
</div>
</body>
</html>
