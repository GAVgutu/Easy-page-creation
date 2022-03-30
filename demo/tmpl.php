<?php
/*
作者：古图(GAVgutu)
日期：2022年03月30日
说明：
相信还挺更方便的方式快速进行HTML的页面创建，
目前我觉得这种方式比较方便些，如果你有更好的方式也互相交流。
请勿违规使用，谢谢！
*/
//HTML头部
function head($title,$viewport,$keywords,$description,$css,$ico){
    //关键词开关
    if($keywords!=false){
        $keywords = "\n    <meta name=\"keywords\" content=\"$keywords\"/>";
    }
    //描述开关
    if($description!=false){
        $description = "\n    <meta name=\"description\" content=\"$description\">";
    }
    //虚拟窗口开关
    if($viewport!=false){
        $viewport = "\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
    }
    //css样式开关
    if($css!=false){
        $css = "\n    <link rel=\"stylesheet\" type=\"text/css\" href=\"$css\">";
    }
    //网站logo开关
    if($ico!=false){
        $ico = "\n    <link rel=\"shortcut icon\" href=\"$ico\" type=\"image/x-icon\" />";
    }
    echo "<!DOCTYPE html>
<html lang=\"zh\">
<head>
    <meta charset=\"UTF-8\">$viewport $css$ico $keywords $description
    <title>$title</title>
</head>
<body>
    ";
}

//主函数
function main($title,$viewport,$keywords,$description,$css,$ico,$html){
    head($title,$viewport,$keywords,$description,$css,$ico);
    content($html);
    tail();
}

//HTML尾部
function tail(){
echo "
</body>
</html>";
}

//HTML内容
function content($html){
    //网站内容开关
    if($html!=false){
        include $html;
    }else{
        //可自定义
    }
}
    
?>