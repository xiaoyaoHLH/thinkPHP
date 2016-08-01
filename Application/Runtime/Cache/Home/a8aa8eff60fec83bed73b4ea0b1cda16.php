<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>中农在线</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Css/common.css" type="text/css">
	<link rel="stylesheet" href="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/CommonPersonal/Css/help.css" type="text/css">
	<script type="text/javascript" src="<?php echo (C("STYLE_URL")); ?>/Common/Js/jquery.1.11.3.min.js"></script>
	<script type="text/javascript" src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Js/common.js"></script>
	<script type="text/javascript" src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/CommonPersonal/Js/helpLeftBar.js"></script>
	<!--[if IE 8.0]><link href="<?php echo (C("STYLE_URL")); ?>/Common/Css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
	<!--[if IE]> 
	<script type="text/javascript"> 
		(function(){if(!/*@cc_on!@*/0)return;var e = "header,footer,nav,article,section".split(','),i=e.length;while(i--){document.createElement(e[i])}})() 
	</script> 
	<![endif]-->
	<!--[if lt IE 8]>
	<script src="/Public/mall/wuhelong/IE8.js" type="text/javascript"></script>
	<![endif]-->
</head>
<body>
	<div class="header"><!-- 头部开始 -->
		<div class="header-wrap">
			<div class="header-top"><!-- 头部上面部分 -->
				<div class="left">
					<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Image/bslogo.png" alt=""><!-- logo -->
				</div>
				<div class="right"><!-- 右边内容 -->
					<ul class="ul1 clear"><!-- 帮助中心 -->
						<li style="cursor: default;">服务热线：0571-87661693</li>
						<li onclick="AddFavorite('中农在线','http://www.baidu.com')">收藏本站</li>
						<li><a href="/home/CommonPersonal/help.html" class="f12 cf">帮助中心</a></li>
						<li class="name">Hi,ceshiyi<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Image/headLoginNameUp.png">
							<div class="nameCont">
								<a href="">退出登录</a>
								<a href="">帐号管理</a>
							</div>
						</li>
						<li>请登录</li>
					</ul>
					<ul class="ul2 clear"><!-- 商城链接 -->
						<li><a href="http://www.114nz.com" target="_blank">中农在线</a></li>
						<li><a href="http://wen.114nz.com" target="_blank">网上庄稼医院</a><span>|</span></li>
						<li><a href="http://mall.114nz.com" target="_blank">农资商城</a><span>|</span></li>	
					</ul>
				</div>
			</div>
		</div><!-- 头部上面部分end -->
		<div class="header-nav"><!-- 头部导航部分 -->
			<div class="navCont">
				<a href="/home/CommonPersonal/index.html" class="active1"><span class="active2">首页</span></a>
				<a href="/home/CommonPersonal/BasicInfo.html" class="active"><span>会员设置</span></a>
				<a href="/home/FarmMallPersonal/buyerIndex.html" class="active"><span>农资商城管理</span></a>
				<a href="/home/FarmMallPersonal/sellerIndex.html" class="active"><span>网上庄稼医院管理</span></a>
			</div>
		</div><!-- 头部上面部分end -->
	</div><!-- 头部开始end -->
	<section class="containar" style="background: #fff;"><!-- 主体内容开始 -->
		<div class="searchBox"> <!-- 搜索框的内容 -->
			<div class="searchCont clear">
				<div class="SearchLeft clear">
					<div class="inputBpx">
						<input type="text" name="" id="" placeholder="完整的描述问题,可提高搜索的精准性">
						<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Image/helpSearch.png" alt="">
					</div>
					<input type="submit" value="搜索">
					<div class="hrefs"><a href="">如何注册</a><a href=""> 如何成为卖家</a><a href="">支付不了怎么办</a><a href="">红包能提现</a><a href="">余额充值</a></div>
				</div>
				<div class="SearchRight">
					<h2>自助服务快速通道</h2>
					<ul>
						<li><a href="">注册中农通</a></li>
						<li><a href="">找回密码</a></li>
						<li><a href="">修改绑定手机</a></li>
						<li><a href="">注册中农通</a></li>
						<li><a href="">注册中农通</a></li>
						<li><a href="">修改企业名称</a></li>
					</ul>
				</div>
			</div>
		</div><!-- 搜索框的内容结束 -->
		<div class="helpWrap clear"><!-- 帮助中心主体内容 -->
			<div class="leftBar"> <!-- 左边导航 -->
				<dl>
					<dt class="active dt">注册登录<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Image/helpUp.png" alt=""></dt>
					<div class="ddBox" style="display: block;">
						<dd><a href="">账户注册</a></dd>
						<dd><a href="">账户登录</a></dd>
						<dd><a href="">账户信息</a></dd>
						<dd><a href="">会员开店</a></dd>
						<dd><a href="">账户注册</a></dd>
						<dd><a href="">账户登录</a></dd>
					</div>
				</dl>
				<dl>
					<dt class="dt">账户安全<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Image/helpDown.png" alt=""></dt>
					<div class="ddBox">
						<dd><a href="">账户注册</a></dd>
						<dd><a href="">账户登录</a></dd>
						<dd><a href="">账户信息</a></dd>
						<dd><a href="">会员开店</a></dd>
						<dd><a href="">账户注册</a></dd>
						<dd><a href="">账户登录</a></dd>
					</div>
				</dl>
				<dl>
					<dt class="dt">购物流程<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Image/helpDown.png" alt=""></dt>
					<div class="ddBox">
						<dd><a href="">账户注册</a></dd>
						<dd><a href="">账户登录</a></dd>
						<dd><a href="">账户信息</a></dd>
						<dd><a href="">会员开店</a></dd>
						<dd><a href="">账户注册</a></dd>
						<dd><a href="">账户登录</a></dd>
					</div>
				</dl>
				<dl>
					<dt class="dt">商铺问题<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Image/helpDown.png" alt=""></dt>
					<div class="ddBox">
						<dd><a href="">账户注册</a></dd>
						<dd><a href="">账户登录</a></dd>
						<dd><a href="">账户信息</a></dd>
						<dd><a href="">会员开店</a></dd>
						<dd><a href="">账户注册</a></dd>
						<dd><a href="">账户登录</a></dd>
					</div>
				</dl>
				<dl>
					<dt class="dt">查询订单<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Image/helpDown.png" alt=""></dt>
					<div class="ddBox">
						<dd><a href="">账户注册</a></dd>
						<dd><a href="">账户登录</a></dd>
						<dd><a href="">账户信息</a></dd>
						<dd><a href="">会员开店</a></dd>
						<dd><a href="">账户注册</a></dd>
						<dd><a href="">账户登录</a></dd>
					</div>
				</dl>
				<dl>
					<dt class="dt">新手指南<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Image/helpDown.png" alt=""></dt>
					<div class="ddBox">
						<dd><a href="">账户注册</a></dd>
						<dd><a href="">账户登录</a></dd>
						<dd><a href="">账户信息</a></dd>
						<dd><a href="">会员开店</a></dd>
						<dd><a href="">账户注册</a></dd>
						<dd><a href="">账户登录</a></dd>
					</div>
				</dl>
				<dl>
					<dt class="dt">联系客服<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Image/helpDown.png" alt=""></dt>
					<div class="ddBox">
						<dd><a href="">账户注册</a></dd>
						<dd><a href="">账户登录</a></dd>
						<dd><a href="">账户信息</a></dd>
						<dd><a href="">会员开店</a></dd>
						<dd><a href="">账户注册</a></dd>
						<dd><a href="">账户登录</a></dd>
					</div>
				</dl>
			</div><!-- 左边导航end -->
			<div class="rightBar"> <!-- 右边内容 -->
				<div class="qsBox">
					<ul class="clear">
						<li class="active"><a href="">如何注册账号？</a></li>
						<li><a href="">手机收不到验证码？</a></li>
						<li><a href="">邮箱为什么收不到验证码</a></li>
						<li><a href="">手机收不到验证码？</a></li>
						<li><a href="">注册的时候提示手机格式错误怎么办？</a></li>
						<li><a href="">如何注册账号？</a></li>
						<li><a href="">手机收不到验证码？</a></li>
						<li><a href="">手机收不到验证码？</a></li>
						<li><a href="">手机收不到验证码？</a></li>
						<li><a href="">手机收不到验证码？</a></li>
						<li><a href="">如何注册账号？</a></li>
						<li><a href="">注册的时候提示手机格式错误怎么办？</a></li>
						<li><a href="">手机收不到验证码？</a></li>
						<li><a href="">邮箱为什么收不到验证码</a></li>
						<li><a href="">注册的时候提示手机格式错误怎么办？</a></li>
						<li><a href="">如何注册账号？</a></li>
						<li><a href="">手机收不到验证码？</a></li>
						<li><a href="">注册的时候提示手机格式错误怎么办？</a></li>
						<li><a href="">手机收不到验证码？</a></li>
						<li><a href="">邮箱为什么收不到验证码</a></li>
					</ul>
					<div class="pages cleat">
						<div class="pageLeft">< 上一页</div>
						<div class="pageRIght">下一页 ></div>
					</div>
				</div>
				<div class="ansBox">
					<h2>如何注册账号？</h2>
					<div class="ansCont">
						<h5>1.在商城首页的工具栏找到登录/注册按钮，点击进去</h5>
						<img src="" alt="" style="	height: 300px;"> <!-- 这里图片限制宽度，不限制高度，高度随意。这里的style记得去掉 -->
					</div>
					<div class="ansCont">
						<h5>2.在商城首页的右侧功能栏里有提示用户需要登录/注册</h5>
						<img src="" alt="" style="	height: 300px;"> <!-- 这里图片限制宽度，不限制高度，高度随意。这里的style记得去掉 -->
					</div>
					<div class="ansCont">
						<h5>3.在注册界面，新用户直接用手机注册</h5>
						<img src="" alt="" style="	height: 300px;"> <!-- 这里图片限制宽度，不限制高度，高度随意。这里的style记得去掉 -->
					</div>
				</div>
			</div><!-- 右边内容 end-->
		</div><!-- 帮助中心主体内容end -->
	</section>	<!-- 主体内容end -->
</body>
</html>