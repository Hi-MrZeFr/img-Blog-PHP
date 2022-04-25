<?php
//拼接图片地址
$picpath = "https://cdn.mrzefr.cn/IMG/Image/".$num.".jpg" ,".png";
//重定位到图片
die(header("Location: $picpath"));
?>
