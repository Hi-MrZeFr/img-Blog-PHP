<?php
header('content-type:image/png;')
//获取随机数
$num = rand(5,15);
//拼接图片地址
$picpath = "https://jsd.mrzefr.cn/npm/hexo-mrzefr-filebed@1.6.7/image/Image/".$num.".png";
//重定位到图片
$content=file_get_contents($picpath)
echo $content;
?>
