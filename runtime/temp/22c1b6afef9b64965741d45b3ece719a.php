<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:97:"/data/wwwroot/sm00009.sm00009.com/feichangcelue/application/index/view/ucenter/mobile/re_tip.html";i:1534912502;}*/ ?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>尚牛在线</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="../public/static/home/css/mui.min.css" rel="stylesheet" />
		<link href="../public/static/home/css/moblie/mobliecom.css" rel="stylesheet" />
		<style type="text/css">
			*{-webkit-user-select: text;user-select: text;}
		</style>
	</head>
<!--个人中心-->
	<body class="person_body">   
		<header class="mui-bar mui-bar-nav bg_fff">
		    <a class="color_red mui-action-back mui-icon mui-icon-left-nav mui-pull-left" href="javascript:history.back(-1)"></a>
		    <h1 class="mui-title">账户充值</h1>
		</header>
		<div class="mui-content">
		    <div class="pay_title">第一步：请复制或牢记我们的支付宝账号</div>
		    <section class="sec1 bg_fff mui-clearfix">
		    	<img class="mui-pull-left mui-col-xs-2" src="../public/static/home/img/moblie/Apay.png"/>
		    	<div class="text mui-pull-left mui-col-xs-9">
		    		<p>支付账号：<span class="copy" id="copyText">sm00009@163.com</span></p>
		    		<p> 尚牛在线商贸有限公司</p>
		    		<p class="zhuyi">注：请务必在转账备注中填写注册手机号 这样方便我们多重信息确认你的汇款</p>
		    	</div>
		    	<a id="copy_btn" class="copy mui-pull-right mui-col-xs-1" href="javascript:;">复制</a>
		    </section>
		   <!--  <div class="pay_title">第二步：手机打开支付宝，快速转账</div>
		    <section class="sec2 bg_fff">
		    	<img src="../public/static/home/img/moblie/ali-pay.png"/>
		    </section>
		    <p class="over_p mui-text-center bg_fff">完成后，请到个人中心查看<a href="../ucenter/home.html">账户余额</a></p>
			<a type="button" class="ml_btn mui-btn mui-btn-block" href="https://ds.alipay.com/?from=mobilecodec&scheme=alipays%3A%2F%2Fplatformapi%2Fstartapp%3FsaId%3D10000007%26clientVersion%3D3.7.0.0718%26qrcode%3Dhttps%253A%252F%252Fqr.alipay.com%252Fa6x061714walnkq3lfptl18%253F_s%253Dweb-other">去转账</a> -->
			<p class="mui-text-center font12 re_p1">如微信中不能正常打开，请按照上面步骤进入支付宝手动转账</p>
			<p class="mui-text-center re_p2">到账时间</p>
			<p class="mui-text-center font12 re_p3">08：45-17:00（30分钟内到账） 17:00以后（次日09:30到账）</br> 如急需到账，请电话 <a href="javascript:void(0);" target="_blank">联系客服</a></p>
		
		
		
		
		</div>
	
		
		<!---js---->
		<script src="../public/static/libs/jquery-2.2.0/jquery-2.2.0.min.js"></script>
		<script src="../public/static/home/js/moblie/mui.min.js"></script>
		<script src="../public/static/home/js/moblie/clipboard.min.js"></script>
		<script type="text/javascript">
			mui.init({
				swipeBack: true //启用右滑关闭功能
			})

					var clipboard = new Clipboard('#copy_btn', {
				        text: function() {
				            return 'sm00009@163.com';
				        }
				    });
				
				    clipboard.on('success', function(e) {
				        mui.toast('复制成功！')
				    });
				
				    clipboard.on('error', function(e) {
				        mui.toast('此浏览器不支持自动复制！请手动输入！');
				    });
	


			
    
		</script>
	</body>
</html>
