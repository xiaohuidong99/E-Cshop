<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!--标题-->
	
        <title>管理中心 - 添加角色</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="/E-Cshop/Public/Admin/Styles/general.css" rel="stylesheet" type="text/css" />
	<link href="/E-Cshop/Public/Admin/Styles/main.css" rel="stylesheet" type="text/css" />
	<link href="/E-Cshop/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="/E-Cshop/Public/bootstrap/js/jquery.min.js"></script>
	<!--其它样式-->
	
</head>
<body>
<h1 style="font-size:14px">
    <span><a href="<?php echo U('Index/main');?>" style="color:#9cf">管理中心</a></span>

    <!--具体操作-->
    
        <span class="action-span"><a href="<?php echo U('lst');?>">返回</a></span>
        <span id="search_id"> - 添加角色</span>


    <div style="clear:both"></div>
</h1>

<!--内容主题-->

    <div class="main-div">
        <form method="POST" action="/E-Cshop/Role/add.html">
            <p>角色名称：<input  type="text" name="role_name"/></p>
            <p><input type="submit" class="btn btn-primary" value="确定"/></p>
        </form>
    </div>


<div id="footer">版权所有,侵权必究@2016</div>
</body>
</html>