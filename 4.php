<?php
//利用php绘制一个图片//
//1)创建画板
$im=imagecreatetruecolor(300,200);

//2)创建颜色画笔
$pen=imagecolorallocate($im,0,200,0);

//为画板填充颜色

imagefill($im,10,10,$pen);

//暂停4s
sleep(4);

//输出图片
header("content-type:image/jpeg");
imagejpeg($im);

//销毁图片

imagedestroy($im);