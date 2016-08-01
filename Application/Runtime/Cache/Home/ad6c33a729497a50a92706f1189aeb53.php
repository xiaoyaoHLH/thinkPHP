<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>中农在线</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Css/common.css" type="text/css">
	<link rel="stylesheet" href="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Css/brint.css" type="text/css">
	<script type="text/javascript" src="<?php echo (C("STYLE_URL")); ?>/Common/Js/jquery.1.11.3.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.1.0.js"></script>
	<script language="javascript" src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Js/jquery.jqprint-0.3.js"></script>
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
<div class="printWrap" id="cont">
	<div class="printBox">
		<h2>杭州萧山农业生产资料有限公司销售单</h2>
		<table class="printTop f14 fb c3">
			<tr>
				<td style="width: 326px;"><span>订单编号： </span>1001201503237736</td>
				<td style="width: 309px;"><span>买家会员： </span>12015032114131 </td>
				<td style="width: 254px;"><span>下单时间： </span>2015-03-23</td>
			</tr>
			<tr>
				<td style="width: 326px;"><span>交易方式： </span>直接交易</td>
				<td style="width: 309px;"><span>付款方式： </span>账户余额支付</td>
				<td style="width: 254px;"><span>订单状态： </span>交易成功</td>
			</tr>
			<tr>
				<td style="width: 790px" colspan="3">
					<span>收货信息： </span>
					<strong>浙江杭州市萧山区益农镇荣盛小区对面</strong>
					<strong>莫迪峰</strong>
					<strong>15268562085</strong>
				</td>
			</tr>
			<tr>
				<td>
					<span>发货仓库：</span>
					<i>王思聪</i>
				</td>
				<td>
					<span>业务员： </span>
					<i>王思聪</i>
				</td>
			</tr>
		</table>
		<table class="printBottom f14 c3 " border="1">
			<tr>
				<th style="width: 116px;">商品编号</th>
				<th style="width: 112px;">自定义编码</th>
				<th style="width: 224px;">商品名称</th>
				<th style="width: 93px;">规格</th>
				<th style="width: 54px;">数量</th>
				<th style="width: 91px;">单价(元)</th>
				<th style="width: 93px;">金额(元)</th>
			</tr>
			<tr>
				<td>ZNZX164</td>
				<td></td>
				<td>洋丰 </td>
				<td>50公斤/袋</td>
				<td>100</td>
				<td>142.00</td>
				<td>14,200.00</td>
			</tr>
			<tr>
				<td>ZNZX164</td>
				<td></td>
				<td>洋丰 </td>
				<td>50公斤/袋</td>
				<td>100</td>
				<td>142.00</td>
				<td>14,200.00</td>
			</tr>
			<tr>
				<td colspan="5"></td>
				<td>小计：</td>
				<td>20,700.00</td>
			</tr>
			<tr>
				<td colspan="7" style="text-align: right;"><i>优惠：-0.00元</i><i>运费：0.00元</i>实际付款总额：<strong class="fb orange num">20,700.00</strong><i>元</i></td>
			</tr>
		</table>
		<div class="remark">
			<span class="remark-left">备注：</span>
			<span class="remark-right">打印人：朱益峰 打印时间：2015-07-01 17:47打印人：朱益峰 打印时间：2015-07-01 17:47</span>
		</div>
		<p class="printName f12 c3">打印人：朱益峰 打印时间：2015-07-01 17:47</p>
	</div>
	<div class="ps orange fb f14">
		注：在打印时设置"打印背景图形"或"打印背景颜色和图像"才能打印表格中的边框
		<input type="button" value="打印" class="buttons" onclick="a()">
	</div>
</div>
<script type="text/javascript">
	//显示打印机
	function  a(){
	$("#cont").jqprint();
  }
//显示打印机end
</script>
</body>
</html>