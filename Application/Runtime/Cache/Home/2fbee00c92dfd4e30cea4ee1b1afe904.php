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
			<div class="rightBar"> <!-- 右边主体内容 -->
				<div class="titles clear">
					<h3>Hi! 我是买家</h3>
					<a href="" style="display: none;">进入卖家中心></a>	<!-- 一半买家状态 -->
					<a href="" class="shopOpen">申请开店</a> <!-- 申请开店的状态 -->
				</div>
				<div class="favoriteProduct"><!-- 我的收藏商品 -->
					<div class="smallTitle" style="margin-left: -15px;">我收藏的商品</div>
					<form action="">
						<div>
							<input type="text" name="" id="" placeholder="输入商品名称直接搜索" class="searchBox">
							<input type="button" value="搜索" class="buttons" style="margin-right: 30px;">
							<label for="" class="f12 c6">商品分类：</label>
							<div class="selectBox select1">
								<select name="" id="" >
									<option value="">选择类型</option>
									<option value="">好的商品</option>
								</select>
							</div>
						</div>
					</form>
					<div class="favoriteTitle">
						<input type="button" value="批量管理" id="management">
							<div id="hideBox">
								<input type="button" value="取消管理" id="cancel">
								<input type="checkbox" name="" id="selectAll" style="margin-left:10px;">
								<span style="margin-right: 10px;">全选</span>
								<span class="del">删除</span>
							</div>
					</div>
					<ul class="goodsList clear">
						<li>
							<div class="imgs"><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/collectGoods.jpg" alt=""></div>
							<h5>道尔纯硫酸钾复合肥葡萄专用多功能棚膜果3332</h5>
							<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/FarmMallPersonal/Image/delete2.png" alt="" class="delImg">
							<div class="delBtn">
								<input type="checkbox" name="checkName" id="" class="delbtns">
							</div>
						</li>
						<li>
							<div class="imgs"><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/collectGoods.jpg" alt=""></div>
							<h5>道尔纯硫酸钾复合肥葡萄专用多功能棚膜果蔬钙肥11111111111</h5>
							<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/FarmMallPersonal/Image/delete2.png" alt="" class="delImg">
							<div class="delBtn">
								<input type="checkbox" name="checkName" id="" class="delbtns">
							</div>
						</li>
						<li>
							<div class="imgs"><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/collectGoods.jpg" alt=""></div>
							<h5>道尔纯硫酸钾复合肥葡萄专用多功能棚膜果蔬钙肥1111111111111111</h5>
							<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/FarmMallPersonal/Image/delete2.png" alt="" class="delImg">
							<div class="delBtn">
								<input type="checkbox" name="checkName" id="" class="delbtns">
							</div>
						</li>
						<li>
							<div class="imgs"><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/collectGoods.jpg" alt=""></div>
							<h5>道尔纯硫酸钾复合肥葡萄专用多功能棚膜果蔬钙肥</h5>
							<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/FarmMallPersonal/Image/delete2.png" alt="" class="delImg">
							<div class="delBtn">
								<input type="checkbox" name="checkName" id="" class="delbtns">
							</div>
						</li>
						<li>
							<div class="imgs"><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/collectGoods.jpg" alt=""></div>
							<h5>道尔纯硫酸钾复合肥葡萄专用多功能棚膜果蔬钙肥</h5>
							<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/FarmMallPersonal/Image/delete2.png" alt="" class="delImg">
							<div class="delBtn">
								<input type="checkbox" name="checkName" id="">
							</div>
						</li>
						<li>
							<div class="imgs"><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/collectGoods.jpg" alt=""></div>
							<h5>道尔纯硫酸钾复合肥葡萄专用多功能棚膜果蔬钙肥</h5>
							<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/FarmMallPersonal/Image/delete2.png" alt="" class="delImg">
							<div class="delBtn">
								<input type="checkbox" name="checkName" id="">
							</div>
						</li>
						<li>
							<div class="imgs"><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/collectGoods.jpg" alt=""></div>
							<h5>道尔纯硫酸钾复合肥葡萄专用多功能棚膜果蔬钙肥</h5>
							<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/FarmMallPersonal/Image/delete2.png" alt="" class="delImg">
							<div class="delBtn">
								<input type="checkbox" name="checkName" id="">
							</div>
						</li>
						<li>
							<div class="imgs"><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/collectGoods.jpg" alt=""></div>
							<h5>道尔纯硫酸钾复合肥葡萄专用多功能棚膜果蔬钙肥</h5>
							<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/FarmMallPersonal/Image/delete2.png" alt="" class="delImg">
							<div class="delBtn">
								<input type="checkbox" name="checkName" id="">
							</div>
						</li>
						<li>
							<div class="imgs"><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/collectGoods.jpg" alt=""></div>
							<h5>道尔纯硫酸钾复合肥葡萄专用多功能棚膜果蔬钙肥</h5>
							<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/FarmMallPersonal/Image/delete2.png" alt="" class="delImg">
							<div class="delBtn">
								<input type="checkbox" name="checkName" id="">
							</div>
						</li>
						<li>
							<div class="imgs"><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/collectGoods.jpg" alt=""></div>
							<h5>道尔纯硫酸钾复合肥葡萄专用多功能棚膜果蔬钙肥</h5>
							<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/FarmMallPersonal/Image/delete2.png" alt="" class="delImg">
							<div class="delBtn">
								<input type="checkbox" name="checkName" id="">
							</div>
						</li>
						<li>
							<div class="imgs"><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/collectGoods.jpg" alt=""></div>
							<h5>道尔纯硫酸钾复合肥葡萄专用多功能棚膜果蔬钙肥</h5>
							<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/FarmMallPersonal/Image/delete2.png" alt="" class="delImg">
							<div class="delBtn">
								<input type="checkbox" name="checkName" id="">
							</div>
						</li>
						<li>
							<div class="imgs"><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/collectGoods.jpg" alt=""></div>
							<h5>道尔纯硫酸钾复合肥葡萄专用多功能棚膜果蔬钙肥</h5>
							<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/FarmMallPersonal/Image/delete2.png" alt="" class="delImg">
							<div class="delBtn">
								<input type="checkbox" name="checkName" id="">
							</div>
						</li>
						<li>
							<div class="imgs"><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/collectGoods.jpg" alt=""></div>
							<h5>道尔纯硫酸钾复合肥葡萄专用多功能棚膜果蔬钙肥</h5>
							<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/FarmMallPersonal/Image/delete2.png" alt="" class="delImg">
							<div class="delBtn">
								<input type="checkbox" name="checkName" id="">
							</div>
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

//批量管理效果
$('#management').click(function(){ //点击批量管理，
	$(this).hide();					//隐藏批量管理按钮，
	$('#hideBox').show();			//出现取消管理按钮
	$('.goodsList .delBtn').show(); //默认选中出现
});

$('#cancel').click(function(){  //点击取消管理按钮
	$('#management').show();	 //出现批量管理按钮
	$(this).parent().hide();	//取消按钮隐藏
	$('.goodsList .delBtn').hide(); //默认选中消失
})
$('.goodsList li .delImg').hover(function(){ //删除图片的hover效果
	$(this).show();
	$(this).parent().find('.imgs').css("border","1px solid #589325");
},function(){
	$(this).hide();
	$(this).parent().find('.imgs').css("border","1px solid #e5e5e5");
})
//收藏的商品鼠标划过的效果
$('.goodsList li .imgs').hover(function(){
	$(this).css("border","1px solid #589325"); //边框变绿色
	$(this).parent().find('.delImg').attr("src","/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/delete2.png"); //变绿色的删除图片
	$(this).parent().find('.delImg').show();
	if($('#management').is(":hidden")){ 			//批量管理按钮隐藏时
		$(this).parent().find('.delImg').hide();	//批量管理按钮隐藏时，删除图片不显示
		$(this).css("border","1px solid #e5e5e5");  //图片边框变灰色
	}else{

	}
},function(){
	$(this).css("border","1px solid #e5e5e5");//边框变灰色
	$(this).parent().find('.delImg').hide()  //删除图片隐藏
})
//全选按钮
$('#selectAll').click(function(){
	if($(this).prop("checked")){
		$('.goodsList input[type=checkbox]').each(function(){
			$(this).prop("checked",true);
			$(this).parent().addClass('on-check');//添加选择的打勾效果
		})
	}else{
		$('.goodsList input[type=checkbox]').each(function(){
			$(this).prop("checked",false);
			$(this).parent().removeClass('on-check');//去除选中的打勾效果
		})
	}
});
//商品单个复选框
$('.goodsList input[type=checkbox]').click(function(){
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


//全部删除
$('.del').click(function(){
	$('.goodsList input[type=checkbox]').each(function(){
		if($(this).prop("checked")){            //商品列表内。被选中的复选框
			$(this).parent().parent().remove();  //删除整个商品列表，
			$('#selectAll').prop("checked",false); //全选按钮变成非选中状态
		}else{

		}
	})
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

</script>
</body>
</html>