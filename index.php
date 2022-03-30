<?php
/*
作者：古图(GAVgutu)
日期：2022年03月30日
说明：
相信还挺更方便的方式快速进行HTML的页面创建，
目前我觉得这种方式比较方便些，如果你有更好的方式也互相交流。
请勿违规使用，谢谢！
*/

require './tmpl.php';
//除标题外其他均可为false设置成关闭状态
//标题
$title = "网站标题";
//关键词 
$keywords = false;
//描述
$description = false;
//虚拟窗口 
$viewport = false;
//css样式路径
$css = false;
//网站logo图标路径
$ico = false;
//HTML内容路径
$html = false;

main($title,$viewport,$keywords,$description,$css,$ico,$html);


/*

false = 关闭

关键词、描述：
    false或者或者内容

虚拟窗口：
    false或者true

css、ico、HTML：
    false或者路径
*/


?>