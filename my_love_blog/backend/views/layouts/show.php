<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Panelo - Free Admin Template</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
<!-- jQuery file -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.tabify.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
var $ = jQuery.noConflict();
$(function() {
$('#tabsmenu').tabify();
$(".toggle_container").hide(); 
$(".trigger").click(function(){
    $(this).toggleClass("active").next().slideToggle("slow");
    return false;
});
});
</script>
</head>
<body>
<?php $this->beginBody() ?>

<div id="panelwrap">
    
    <div class="header">
    <div class="title"><a href="#">Panelo Admin</a></div>
    
    <div class="header_right">Welcome , <a href="#" class="settings">Settings</a> <a href="#" class="logout">Logout</a> </div>
    
    <div class="menu">
    <ul>
    <li><a href="#" class="selected">主页</a></li>
    <li><a href="#">设置</a></li>
    <li><a href="#">添加一个类别</a></li>
    <li><a href="#">编辑类别</a></li>
    <li><a href="#">分类</a></li>
    <li><a href="#">选项</a></li>
    <li><a href="#">管理员设置</a></li>
    <li><a href="#">帮助</a></li>
    </ul>
    </div>
    
    </div>
    
    <div class="submenu">
    <ul>
    <li><a href="#" class="selected">设置</a></li>
    <li><a href="#">用户</a></li>
    <li><a href="#">类别</a></li>
    <li><a href="#">编辑部分</a></li>
    <li><a href="#">模板</a></li>
    </ul>
    </div>          
                    
    <div class="center_content">  
 
    <div id="right_wrap">
    <div id="right_content">   
<?=$content?>
      
     </div>
     </div><!-- end of right content-->
                     
                    
    <div class="sidebar" id="sidebar">
    <h2>浏览分类</h2>
        <ul>
            <li><a href="#" class="selected">主页</a></li>
            <li><a href="#">模板设置</a></li>
            <li><a href="#">添加页面</a></li>
            <li><a href="#">编辑部分</a></li>
            <li><a href="#">模板</a></li>
            <li><a href="#">客户端</a></li>
        </ul>
        
    <h2>页面部分</h2>
    
        <ul>
            <li><a href="#">编辑部分</a></li>
            <li><a href="#">模板</a></li>
            <li><a href="#">客户端</a></li>
            <li><a href="#">文档和信息</a></li>
        </ul> 
        
    <h2>用户设置</h2>
    
        <ul>
            <li><a href="#">编辑用户</a></li>
            <li><a href="#">添加用户</a></li>
            <li><a href="#">帮助用户</a></li>
            <li><a href="#">帮帮我</a></li>
        </ul>   
         
    <h2>文本部分</h2> 
    <div class="sidebar_section_text">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </div>         
    
    </div>             
    
    
    <div class="clear"></div>
    </div> <!--end of center_content-->
    
    <div class="footer">
Panelo - Free Admin Collect from <a href="http://www.cssmoban.com/" title="网站模板" target="_blank">网站模板</a>
</div>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
