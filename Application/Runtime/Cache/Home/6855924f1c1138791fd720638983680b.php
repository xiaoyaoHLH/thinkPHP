<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>中农在线</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Css/common.css" type="text/css">
	<link rel="stylesheet" href="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Css/buyerIndex.css" type="text/css">
	<link rel="stylesheet" href="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Css/seller.css" type="text/css">
	<script type="text/javascript" src="<?php echo (C("STYLE_URL")); ?>/Common/Js/jquery.1.11.3.min.js"></script>
	<script type="text/javascript" src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Js/common.js"></script>
	<script type="text/javascript" src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Js/footer.js"></script>
	<script type="text/javascript" src="<?php echo (C("STYLE_URL")); ?>/Common/Js/laydate/laydate.js"></script>
	<script type="text/javascript" src="<?php echo (C("STYLE_URL")); ?>/Common/Js/layer/layer.js"></script>
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
	<section class="containar"><!-- 主体内容开始 -->
		<div class="containarWrap clear">
			<div class="leftBar"><!-- 左边导航公共部分 -->
				<div class="lb-head"><!-- 头像 -->
					<div class="lb-head-bj">
						<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Image/lufei.jpg" alt="">
						<a href="" class="membrane">编辑资料</a><!-- 阴影 -->
					</div>
				</div><!-- 头像end -->
				<div class="lb-nav buyer-lb-nav"><!-- 左边导航 -->
					<dl>
						<dd><a href="buyerBuyedGoods.html">已买到的商品</a></dd>
					</dl>
					<dl>
						<dd><a href="goods/cart.html">我的购物车</a></dd>
					</dl>
					<dl>
						<dd><a href="buyerCollectStore.html">收藏的商铺</a></dd>
						<dd><a href="buyerCollectGoods.html">收藏的商品</a></dd>
					</dl>
					<dl>
						<dd><a href="buyerJoinShop.html">我加入的商铺</a></dd>
					</dl>
					<dl>
						<dd><a href="buyerCredit.html">授信申请</a></dd>
						<dd><a href="buyerCreditChange.html">授信额度调整</a></dd>
						<dd><a href="buyerCreditHistory.html">授信使用记录</a></dd>
					</dl>
					<dl style="margin-bottom: 0px">
						<dd><a href="buyerEvaluation.html">我的评价</a></dd>
					</dl>
				</div><!-- 左边导航end -->
			</div><!-- 左边导航公共结束 -->
			<div class="rightBar" style="overflow: hidden;"> <!-- 右边主体内容 -->
				<div class="titles clear">
					<h3>Hi! 我是买家</h3>
					<a href="" style="display: none;">进入卖家中心></a>	<!-- 一半买家状态 -->
					<a href="" class="shopOpen">申请开店</a> <!-- 申请开店的状态 -->
				</div>
				<div class="favoriteProduct clear" ><!-- 我的收藏商店 -->
					<div class="smallTitle" style="margin-left: -15px;">我收藏的商铺</div>
					<form action="">
						<div>
							<label for="" class="f12 c6">商铺类型：</label>
							<div class="selectBox">
								<select name="" id="">
									<option value="">选择类型</option>
									<option value="">好的商品</option>
								</select>
							</div>
							<label for="" class="f12 c6" style="margin-left: 28px;">所在地：</label>
							<div class="selectBox">
								<select name="" id="">
									<option value="">选择区域</option>
									<option value="">杭州</option>
								</select>
							</div>
							<input type="text" name="" id="" placeholder="输入商品名称直接搜索" class="searchBox" style="margin-left: 50px;">
							<input type="button" value="搜索" class="buttons">
						</div>
					</form>
					<div class="favoriteTitle">
						<input type="checkbox" name="" id="selectAll">
						<span style="margin-right:10px;">全选</span>
						<input type="button" value="批量删除" id="delAll">
					</div>
					<ul class="storeList clear" style="width: 1038px;">
						<li>
							<div class="checkboxs"><input type="checkbox" name="checkName" id=""></div>
							<div class="imgs"><a href=""><img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/collectStore.jpg" alt=""></a></div>
							<div class="rightTxt">
								<h2><a href="">宁波金泰惠多利农资连锁有限公司宁海分公司宁海分公司</a></h2>
								<p class="vipNum">会员号：12345678987654321</p>
								<p>所在地：浙江宁波浙江宁波浙江宁波浙江宁波浙江宁波浙江宁波浙江宁波浙江宁波</p>
								<p>评分：<strong>4.9</strong><em class="num-em">分</em><img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/start.png" alt=""><img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/start.png" alt=""><img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/start.png" alt=""><img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/start.png" alt=""></p>
							</div>
							<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/delete.png" alt="" class="delImg">
						</li>
						<li>
							<div class="checkboxs"><input type="checkbox" name="checkName" id=""></div>
							<div class="imgs">
								<a href=""><img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/collectStore.jpg" alt=""></a>
							</div>
							<div class="rightTxt">
								<h2><a href="">宁波金泰惠多利农资连锁有限公司宁海分公司宁海分公司</a></h2>
								<p class="vipNum">会员号：12345678987654321</p>
								<p>所在地：浙江宁波</p>
								<p>评分：<strong>4.9</strong><em class="num-em">分</em><img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/start2.png" alt=""><img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/start2.png" alt=""><img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/start2.png" alt=""><img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/start2.png" alt=""></p>
							</div>
							<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/delete.png" alt="" class="delImg">
						</li>
						<li>
							<div class="checkboxs"><input type="checkbox" name="checkName" id=""></div>
							<div class="imgs"><a href=""><img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/collectStore.jpg" alt=""></a></div>
							<div class="rightTxt">
								<h2><a href="">宁波金泰惠多利农资连锁有限公司宁海分公司宁海分公司</a></h2>
								<p class="vipNum">会员号：12345678987654321</p>
								<p>所在地：浙江宁波</p>
								<p>评分：<strong>4.9</strong><em class="num-em">分</em><img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/start2.png" alt=""><img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/start2.png" alt=""><img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/start2.png" alt=""><img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/start2.png" alt=""></p>
							</div>
							<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/delete.png" alt="" class="delImg" >
						</li>
					</ul>
				</div><!-- 我的收藏商品结束 -->
				<div class="pageBox"> <!-- 分页开始 -->
					<dl>
						<dd><a href=""><</a></dd>
						<dd ><a href="">1</a></dd>
						<dd class="active"><a href="">2</a></dd>
						<dd><a href="">3</a></dd>
						<dd><a href="">4</a></dd>
						<dd><a href="">5</a></dd>
						<dd><a href="">6</a></dd>
						<dd>...</dd>
						<dd><a href="">33</a></dd>
						<dd><a href="">34</a></dd>
						<dd><a href="">></a></dd>
						<dd class="pageBtn">
							<p>到第
								<input type="text" name="" id="" value="15">页
								<input type="button" value="确定">
							</p>
						</dd>
					</dl>
				</div><!-- 分页结束 -->
			</div>
		</div>
	</section>
	<div class="footer"><!-- 公共底部 -->
		<div class="footerWrap">
			<dl class="clear">
				<dt>猜你喜欢</dt>
				<dd><a href="" class="more">更多</a></dd>
				<dd><a href="">磷肥</a></dd>
				<dd><a href="">钾肥 </a></dd>
				<dd><a href="">钙肥</a></dd>
				<dd><a href="">棉花种子</a></dd>
				<dd><a href="">大豆种子 </a></dd>
				<dd><a href="">花生种子</a></dd>
				<dd><a href="">磷肥</a></dd>
				<dd><a href="">磷肥</a></dd>
				<dd><a href=""> 棉花种子 </a></dd>
				<dd><a href="">大豆种子</a></dd>
				<dd><a href="">花生种子</a></dd>
			</dl>
			<div style="height: 236px;margin-top: 20px;"><!-- 底部轮播 -->
				<div class="Div1">
				    <!-- <b class="Div1_prev Div1_prev1" ><img src="images/lizi_img011.jpg" title="上一页" /></b>
				    <b class="Div1_next Div1_next1" ><img src="images/lizi_img012.jpg"  title="下一页"/></b> -->
				    <div class="Div1_main">
				    	<div>
				        	<span class="Div1_main_span1">
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>     
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥击</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				        </div>
				        <div>
				        	<span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>  
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>         
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				        </div>
				        <div>
				        	<span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				        </div>
				        <div>
				        	<span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				        </div>
				        <div>
				        	<span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				        </div>
				    </div>
				    <div class="smallNav">
				    	<div class="list1 navs active"></div>
				    	<div class="list2 navs"></div>
				    	<div class="list3 navs"></div>
				    	<div class="list4 navs"></div>
				    	<div class="list5 navs"></div>
				    </div>
				</div>
			</div><!-- 底部轮播end -->
		</div>
	</div><!-- 公共底部结束 -->
	<div class="footNav">
		<ul class="clear">
			<li><a href="">公司简介</a><span>|</span></li>
			<li><a href="">帮助中心</a><span>|</span></li>
			<li><a href="">招商入驻</a><span>|</span></li>
			<li><a href="">网站合作</a><span>|</span></li>
			<li><a href="">法律申明</a><span>|</span></li>
			<li><a href="">联系我们</a><span>|</span></li>
			<li><a href="">举报中心</a></li>
		</ul>
		<p>© 2015 中农在线 版权所有，并保留所有权利增值电信业务经营许可证:浙B2-20150086</p>
	</div>
<script type="text/javascript">
	//全选按钮
$('#selectAll').click(function(){
	if($(this).prop("checked")){
		$('.storeList input[type=checkbox]').each(function(){
			$(this).prop("checked",true);
			$(this).parent().addClass('on-check');//添加选择的打勾效果
		})
	}else{
		$('.storeList input[type=checkbox]').each(function(){
			$(this).prop("checked",false);
			$(this).parent().removeClass('on-check');//去除选中的打勾效果
		})
	}
});
//商品单个复选框
$('.storeList input[type=checkbox]').click(function(){
		if ($(this).prop("checked")) {
			$(this).parent().addClass('on-check');		//添加选择的打勾效果
		}else{
			$('#selectAll').prop("checked",false);
			$(this).parent().removeClass('on-check'); //去除选中的打勾效果
		};
		var checkedNum = $("input:checkbox[name='checkName']:checked").length; //复选狂选中的个数
		var checkboxNum = $("input:checkbox[name='checkName']").length;       //复选框的个数
		console.log(checkedNum);
		console.log(checkboxNum);
		if (checkedNum == checkboxNum) {          //选中个数等于复选框个数
			$('#selectAll').prop("checked",true);  //全选框变成选中状态
		}
	})
//删除按钮弹窗
$(".delImg").click(function(){  //立即发货按钮弹出
	var _this = $(this);
	layer.open({
		    type: 1,
		    title:false,
		    skin: 'layer-sendBox', //样式类名
		    closeBtn: 0, //不显示关闭按钮
		    shift: 0,
		    area: ['330px', '155px'],
		    shadeClose: false, //开启遮罩关闭
		    content: '<div class="delBox"><h5>确定要删除此商品么?</h5><div><input type="button" class="delBoxBtn1" value="取消"><input type="button" class="delBoxBtn2" value="确定"></div></div>', //弹窗内容
		    success:function(){
		    	$(".delBoxBtn1").click(function(){ //取消按钮
		    		layer.closeAll('page'); //遮罩关闭 
		    	});
		    	$(".delBoxBtn2").click(function(){ //确定按钮
		    		layer.closeAll('page');  //遮罩关闭 
		    		_this.parent().remove();  //删除商品li
		    	});
		    }
		});
	});
$(document).ready(function(){
	$("#delAll").click(function(){
		if ($("#selectAll").prop("checked")==true) {
			$(".storeList li").remove();
		} else {

		}
	})
})
</script>
</body>
</html>