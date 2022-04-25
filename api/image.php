<?php
//获取随机数
$num = rand(5,13);
//拼接图片地址
$picpath = "https://cdn.mrzefr.cn/IMG/Image/".$num.".jpg";
//重定位到图片
die(header("Location: $picpath"));
?>
