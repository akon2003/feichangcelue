<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpStudy\WWW\feichangcelue/application/index\view\index\mobile\pz.html";i:1539064450;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection"content="telephone=no, email=no" />
    <link href="./public/stock/css/reset.css" rel="stylesheet" type="text/css">
    <link href="./public/stock/css/swiper-3.3.1.min.css" rel="stylesheet" type="text/css">
    <link href="./public/stock/css/style.css" rel="stylesheet" type="text/css">
	<link href="./public/static/home/css/mui.min.css" rel="stylesheet" />
	<link href="./public/static/home/css/moblie/tradeCommon.css" rel="stylesheet" />

    <script src="./public/stock/js/sizes.js" type="text/javascript"></script>
	<title>尚牛在线</title>
	<style>
		.box{
			position: fixed;
			width: 100%;
			height: 100%;
			top:0;
			bottom: 0;
			left: 0;
			background: rgba(0,0,0,.3);
			display: none;
		}
		.box_con{
			position: absolute;
			top:40%;
			left: 20%;
			width: 60%;
			background-color: #fff;
			border-radius: 10px;
			padding-top: 10px;
		}
		.box_con p{
			overflow: hidden;
			text-align: center;
			margin-bottom: 10px;
		}
		.box_con div a{
			text-align: center;
			width: 100%;
			border: 1px solid #ccc;
			box-sizing: border-box;
			float: left;
			height:35px;
			line-height: 35px;
		}
		
		/*.floating-window{*/
			/*width: 5rem;*/
		    /*height: 5rem;*/
		    /*background: #000;*/
		    /*opacity: 0.1;*/
		    /*position: fixed;*/
		    /*top: 10rem;*/
		    /*right: 0;*/
		/*}*/
	</style>
</head>
<body>
<header class="tac co1 index_head ">
    <a href="#" class="jhd-lf"><i class="idx_icon1"></i></a>
    <div class="jhd-ct">在线配资</div>
    <a href="#" class="jhd-rt j-more"><i class="idx_icon2"></i></a>
</header>
<div class="wapper">
    <ul class="tab">
    	<li class="t_btn">按天配资</li>
    	<li>按月配资</li>
    </ul>
    <div class="content">
    	<div class="con_one dis">
    		<div class="con_list">
    			<p>风险保险金</p>
    		    <p><input type="text" placeholder="最少2百，最多500万，百的整数倍" /></p>
    			<div class="con_p">
	    			<p>配资倍数</p>
	    			<ul>
						<li class="con_li">
							<span><i>3</i>倍</span>
							<span><i>6</i>元</span>
						</li>
						<li><span><i>4</i>倍</span><span><i>8</i>元</span></li>
	    				<li><span><i>5</i>倍</span><span><i>10</i>元</span></li>
	    				<li><span><i>6</i>倍</span><span><i>12</i>元</span></li>
						<li><span><i>7</i>倍</span><span><i>14</i>元</span></li>
	    				<li><span><i>8</i>倍</span><span><i>16</i>元</span></li>
						<li><span><i>9</i>倍</span><span><i>18</i>元</span></li>
						<li><span><i>10</i>倍</span><span><i>20</i>元</span></li>
	    			</ul>
    			</div>
	    		<p><span>单票持仓</span><span>主板100%，创业板100%</span></p>

	    		<!--<p><span>持仓时间</span><span>自动延期</span></p>-->

				<p>
					<span>持仓时间</span>
					<select class="select_day">
						<option value="1" selected>1天</option>
						<option value="2">2天</option>
						<option value="3">3天</option>
						<option value="4">4天</option>
						<option value="5">5天</option>
						<option value="6">6天</option>
						<option value="7">7天</option>
						<option value="8">8天</option>
						<option value="9">9天</option>
						<option value="10">10天</option>
						<option value="11">11天</option>
						<option value="12">12天</option>
						<option value="13">13天</option>
						<option value="14">14天</option>
						<option value="15">15天</option>
						<option value="16">16天</option>
						<option value="17">17天</option>
						<option value="18">18天</option>
						<option value="19">19天</option>
						<option value="20">20天</option>
						<option value="21">21天</option>
						<option value="22">22天</option>
						<option value="23">23天</option>
						<option value="24">24天</option>
						<option value="25">25天</option>
						<option value="26">26天</option>
						<option value="27">27天</option>
						<option value="28">28天</option>
						<option value="29">29天</option>
						<option value="30">30天</option>
						<option value="31">31天</option>
					</select>
				</p>

				<p><span>我要配资金额</span><span><i class="ajax_html">0</i>元</span></p>
	    		<p><span>亏损警戒线</span><span><i>0</i>元</span></p>
	    		<p><span>亏损平仓线</span><span><i>0</i>元</span></p>
	    		<p><span>风险保障金</span><span><i>0</i>元</span></p>
	    		<p><span>预存管理费</span><span class="fs">非交易日不收取(按月配资除外)</span><span><i>0</i>元/日</span></p>
    		</div>
    		<div class="con_s">申请即表示已阅读并同意<a href="./gift.html"><<尚牛在线配资协议>></a></div>
    		<div class="con_pay">
    			<p class="con_ps">每个合约至少两个交易日，首次申请将扣取1个交易日的管理费</p>
    			<p class="con_spa"><span>共计应支付：</span><span>0</span></p>
    			<p class="con_ps">准备资金=风险保证金+日管理费*天数</p>
    		</div>
    		<div class="con_btn"><input type="button" value="立即申请" /></div>
    		 <!--<div class="floating-window">-->
				 <!--<a href="http://chat.livechatvalue.com/chat/chatClient/chatbox.jsp?companyID=1037386&configID=75734&jid=5421328761" target="_blank">-->
					 <!--<img src="./public/static/home/img/chat.jpg" alt="">-->
				 <!--</a>-->
			 <!--</div>-->
    	</div>

    	<div class="con_two">
    		<div class="con_list">
    			<p>风险保险金</p>
    		    <p><input type="text" placeholder="最少2百，最多500万，百的整数倍" /></p>
    			<div class="con_p">
	    			<p>配资倍数</p>
	    			<ul>
						<li class="con_li"><span><i>3</i>倍</span><span><i>6</i>元</span></li>
						<li><span><i>4</i>倍</span><span><i>8</i>元</span></li>
	    				<li><span><i>5</i>倍</span><span><i>10</i>元</span></li>
	    				<li><span><i>6</i>倍</span><span><i>12</i>元</span></li>
						<li><span><i>7</i>倍</span><span><i>14</i>元</span></li>
	    				<li><span><i>8</i>倍</span><span><i>16</i>元</span></li>
						<li><span><i>9</i>倍</span><span><i>18</i>元</span></li>
						<li><span><i>10</i>倍</span><span><i>20</i>元</span></li>
	    			</ul>
    			</div>
	    		<p><span>单票持仓</span><span>主板100%，创业板100%</span></p>

	    		<!--<p><span>持仓时间</span><span>自动延期</span></p>-->
	    		<p>
					<span>持仓时间</span>
					<select class="select_month">
						<option value="1" selected>1个月</option>
						<option value="2">2个月</option>
						<option value="3">3个月</option>
						<option value="4">4个月</option>
						<option value="5">5个月</option>
						<option value="6">6个月</option>
						<option value="7">7个月</option>
						<option value="8">8个月</option>
						<option value="9">9个月</option>
						<option value="10">10个月</option>
						<option value="11">11个月</option>
						<option value="12">12个月</option>
					</select>
				</p>

	    		<p><span>我要配资金额</span><span><i>0</i>元</span></p>
	    		<p><span>亏损警戒线</span><span><i>0</i>元</span></p>
	    		<p><span>亏损平仓线</span><span><i>0</i>元</span></p>
	    		<p><span>风险保障金</span><span><i>0</i>元</span></p>
	    		<p><span>预存管理费</span><span class="fs">非交易日不收取(按月配资除外)</span><span><i>0</i>元/月</span></p>
    		</div>
    		<div class="con_s">申请即表示已阅读并同意<a href="./gift.html"><<尚牛在线配资协议>></a></div>
    		<div class="con_pay">
    			<p class="con_spa"><span>共计应支付：</span><span class="all_allprice">0</span></p>
    			<p class="con_ps">准备资金=风险保证金+日管理费*天数</p>
    		</div>
    		<div class="con_btn"><input type="button" value="立即申请" /></div>

		</div>
		 <!--<div class="floating-window"></div>-->

    </div>
<div>
</div>

	<div id="footer">
		<nav class="ml_tab mui-bar mui-bar-tab">
			<a class="mui-tab-item" href="<?php echo url('/index'); ?>">
				<span class="mui-icon mui-icon-home"></span>
				<span class="mui-tab-label">首页</span>
			</a>
			<a class="mui-tab-item mui-active" href="<?php echo url('/stock'); ?>">
				<span class="mui-icon mui-icon-phone"></span>
				<span class="mui-tab-label">我要配资</span>
			</a>
			<a class="mui-tab-item" href="<?php echo url('/invite'); ?>">
				<span class="mui-icon mui-icon-postion"></span>
				<span class="mui-tab-label">我要推广</span>
			</a>
			<a class="mui-tab-item" href="<?php echo url('/buy'); ?>">
				<span class="mui-icon mui-icon-stock"></span>
				<span class="mui-tab-label">我要交易</span>
			</a>
			<a class="mui-tab-item " href="<?php echo url('/ucenter/home'); ?>">
				<span class="mui-icon mui-icon-email"></span>
				<span class="mui-tab-label" id="abc">账户中心</span>
			</a>
		</nav>
	</div>

	<script>

        //数据初始化
        var delayFee = parseInt("<?php echo $delayFee; ?>");
        var dealFee = parseInt("<?php echo $dealFee; ?>");
        var publicFee = parseInt("<?php echo $delayFee * 2 + $dealFee; ?>");
        var delayLineRate = parseFloat("<?php echo $delayLineRate; ?>");
        var stopLossRate = parseFloat("<?php echo $stopLossRate; ?>");
        var lossLine =parseFloat("<?php echo $lossLine; ?>");


        //按天杠杆倍率1到10倍
        var levers_1 =parseFloat("<?php echo $levers_1; ?>");
        var levers_2 =parseFloat("<?php echo $levers_2; ?>");
        var levers_3 =parseFloat("<?php echo $levers_3; ?>");
        var levers_4 =parseFloat("<?php echo $levers_4; ?>");
        var levers_5 =parseFloat("<?php echo $levers_5; ?>");
        var levers_6 =parseFloat("<?php echo $levers_6; ?>");
        var levers_7 =parseFloat("<?php echo $levers_7; ?>");
        var levers_8 =parseFloat("<?php echo $levers_8; ?>");
        var levers_9 =parseFloat("<?php echo $levers_9; ?>");
        var levers_10 =parseFloat("<?php echo $levers_10; ?>");




        //按月杠杆倍率1到10倍
        var levers_month_1 =parseFloat("<?php echo $levers_month_1; ?>");
        var levers_month_2 =parseFloat("<?php echo $levers_month_2; ?>");
        var levers_month_3 =parseFloat("<?php echo $levers_month_3; ?>");
        var levers_month_4 =parseFloat("<?php echo $levers_month_4; ?>");
        var levers_month_5 =parseFloat("<?php echo $levers_month_5; ?>");
        var levers_month_6 =parseFloat("<?php echo $levers_month_6; ?>");
        var levers_month_7 =parseFloat("<?php echo $levers_month_7; ?>");
        var levers_month_8 =parseFloat("<?php echo $levers_month_8; ?>");
        var levers_month_9 =parseFloat("<?php echo $levers_month_9; ?>");
        var levers_month_10 =parseFloat("<?php echo $levers_month_10; ?>");





	</script>
<script src="./public/stock/js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="./public/stock/js/swiper.jquery.min.js" type="text/javascript"></script>
<script>
    var mySwiper = new Swiper('.swiper-container', {
        autoplay : 4000,//可选选项，自动滑动
        loop : true,
        // 如果需要分页器
        pagination : '.swiper-pagination'
    });
</script>
<script>
	$(function(){
		$("#footer li").click(function(){
			$(this).addClass('active').siblings().removeClass('active');
		})
	});
	
	$(function(){
		//按天配资
		$(".con_one .con_p li").click(function(){
			$(this).addClass('con_li').siblings().removeClass('con_li');
			var a=parseInt($(".con_one .con_list p input").val());//保证金
			var b=parseInt($(this).children("span").eq(0).find("i").html());//倍数
			$(".con_one .con_list>p").eq(4).find("i").html(a*b.toFixed(2));
			$(".con_one .con_list>p").eq(5).find("i").html(-(a*lossLine+a*b).toFixed(2));//警戒线
			if(b==3){
             	$(".con_one .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
               abc = parseInt($(this).children("span").eq(0).find("i").html());
                var levers = levers_3;
                var Multiple = 3;
			};
            if(b==4){
//                $(".con_one .con_list>p").eq(6).find("i").html(-(a*b*0.2).toFixed(2));
                $(".con_one .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                var levers = levers_4;
                var Multiple = 4;
            };
            if(b==5){
//                $(".con_one .con_list>p").eq(6).find("i").html(-(a*b*0.16).toFixed(2));
                $(".con_one .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                var levers = levers_5;//杠杆率
                var Multiple = 5;//倍数
            };
            if(b==6){
//                $(".con_one .con_list>p").eq(6).find("i").html(-(a*b*0.1333).toFixed(2));
                $(".con_one .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                var levers = levers_6;
                var Multiple = 6;
            };
            if(b==7){
//                $(".con_one .con_list>p").eq(6).find("i").html(-(a*b*0.11429).toFixed(2));
                $(".con_one .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                var levers = levers_7;
                var Multiple = 7;
            };
            if(b==8){
//                $(".con_one .con_list>p").eq(6).find("i").html(-(a*b*0.1).toFixed(2));
                $(".con_one .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                var levers = levers_8;
                var Multiple = 8;
            };
            if(b==9){
//                $(".con_one .con_list>p").eq(6).find("i").html(-(a*b*0.0889).toFixed(2));
                $(".con_one .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                var levers = levers_9;
                var Multiple = 9;
            };
            if(b==10){
//                $(".con_one .con_list>p").eq(6).find("i").html(-(a*b*0.08).toFixed(2));
                $(".con_one .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                var levers = levers_10;
                var Multiple = 10;
            };
			$(".con_one .con_list>p").eq(7).find("i").html(a);

//			$(".con_one .con_list>p").eq(8).find("i").html((a*b/10000*18).toFixed(2));
            var day_numbers=$(".select_day option:selected").val();

			$(".con_one .con_list>p").eq(8).find("i").html((a*b/10000*delayFee +levers*a*Multiple*day_numbers/100).toFixed(2));

			var c=$(".con_one .con_list>p").eq(8).find("i").html();

				var nc=Number(c);
				$(".con_one .con_spa span").eq(1).html(a+nc);
           		 $(".con_all").html(a+nc);
				
		});
		//按月配资
		$(".con_two .con_p li").click(function(){
			$(this).addClass('con_li').siblings().removeClass('con_li');
			var a=parseInt($(".con_two .con_list p input").val());
			var b=parseInt($(this).children("span").eq(0).find("i").html());
			$(".con_two .con_list>p").eq(4).find("i").html(a*b.toFixed(2));
//			$(".con_two .con_list>p").eq(5).find("i").html((a*b/2).toFixed(2));
			$(".con_two .con_list>p").eq(5).find("i").html(-(a*lossLine+a*b).toFixed(2));//警戒线
            if(b==3){
//                $(".con_two .con_list>p").eq(6).find("i").html(-(a*b*0.26667).toFixed(2));
                $(".con_two .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
               var levers_month = levers_month_3;
                var Multiple = 3;

            };
            if(b==4){
//                $(".con_two .con_list>p").eq(6).find("i").html(-(a*b*0.2).toFixed(2));
                $(".con_two .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                var levers_month = levers_month_4;
                var Multiple = 4;
            };
            if(b==5){
//                $(".con_two .con_list>p").eq(6).find("i").html(-(a*b*0.16).toFixed(2));
                $(".con_two .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                var levers_month = levers_month_5;
                var Multiple = 5;
            };
            if(b==6){
//                $(".con_two .con_list>p").eq(6).find("i").html(-(a*b*0.1333).toFixed(2));
                $(".con_two .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                var levers_month = levers_month_6;
                var Multiple = 6;
            };
            if(b==7){
//                $(".con_two .con_list>p").eq(6).find("i").html(-(a*b*0.11429).toFixed(2));
                $(".con_two .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                var levers_month = levers_month_7;
                var Multiple = 7;
            };
            if(b==8){
//                $(".con_two .con_list>p").eq(6).find("i").html(-(a*b*0.1).toFixed(2));
                $(".con_two .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                var levers_month = levers_month_8;
                var Multiple = 8;
            };
            if(b==9){
//                $(".con_two .con_list>p").eq(6).find("i").html(-(a*b*0.0889).toFixed(2));
                $(".con_two .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                var levers_month = levers_month_9;
                var Multiple = 9;
            };
            if(b==10){
                $(".con_two .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
//                $(".con_two .con_list>p").eq(6).find("i").html(-(a*b*0.08).toFixed(2));
                var levers_month = levers_month_10;
                var Multiple = 10;
            };
			$(".con_two .con_list>p").eq(7).find("i").html(a);

//			$(".con_two .con_list>p").eq(8).find("i").html((a*b/10000*18*30*0.7).toFixed(2));
			$(".con_two .con_list>p").eq(8).find("i").html((levers_month*a*Multiple/100).toFixed(2));

			var c=$(".con_two .con_list>p").eq(8).find("i").html();
			var nc=parseFloat(c);
			$(".con_two .con_spa span").eq(1).html(a+nc);
            $(".con_all").html(a+nc);
			
		});

		//按天配资选择天数触发的事件，让管理费收取
        $(".select_day").change(function () {
            var day_numbers = $(".select_day option:selected").val();
            var a=parseInt($(".con_one .con_list p input").val());
			var Multiple =$('.con_one .con_p  .con_li>span').eq(0).find('i')[0].innerHTML;
			var levers_multiple;
            switch(Multiple)
            {
                case '3':
					 levers_multiple = levers_3;
                    break;
                case '4':
                     levers_multiple = levers_4;
                    break;
                case '5':
                     levers_multiple = levers_5;
                    break;
                case '6':
                     levers_multiple = levers_6;
                    break;
                case '7':
                     levers_multiple = levers_7;
                    break;
                case '8':
                     levers_multiple = levers_8;
                    break;
                case '9':
                     levers_multiple = levers_9;
                    break;
                case '10':
					 levers_multiple = levers_10;
                    break;
				default:
                    levers_multiple = levers_3;
            }
            $(".con_one .con_list>p").eq(8).find("i").html((levers_multiple*a*Multiple*day_numbers/100).toFixed(2));
            var c=$(".con_one .con_list>p").eq(8).find("i").html();
            var nc=Number(c);
            $(".con_one .con_spa span").eq(1).html(a+nc);
            $(".con_all").html(a+nc);

        });

        //按月配资选择天数触发的事件，让管理费收取
        $(".select_month").change(function () {
            var month_numbers = $(".select_month option:selected").val();
            var a=parseInt($(".con_two .con_list p input").val());
            var Multiple =$('.con_two .con_p  .con_li>span').eq(0).find('i')[0].innerHTML;

            switch(Multiple)
            {
                case '3':
                    var levers_month = levers_month_3;
                    break;
                case '4':
                    var levers_month = levers_month_4;
                    break;
                case '5':
                    var levers_month = levers_month_5;
                    break;
                case '6':
                    var levers_month = levers_month_6;
                    break;
                case '7':
                    var levers_month = levers_month_7;
                    break;
                case '8':
                    var levers_month = levers_month_8;
                    break;
                case '9':
                    var levers_month = levers_month_9;
                    break;
                case '10':
                    var levers_month = levers_month_10;
                    break;
                default:
                    var levers_month =levers_month_3;
            }
            $(".con_two .con_list>p").eq(8).find("i").html((levers_month*a*Multiple*month_numbers/100).toFixed(2));
            var c=$(".con_two .con_list>p").eq(8).find("i").html();
            var nc=Number(c);
            $(".con_two .con_spa span").eq(1).html(a+nc);
            $(".con_all").html(a+nc);

        })




	});


	
	$(function(){
		$(".tab li").click(function(){
			var index=$(this).index();
			$(this).addClass('t_btn').siblings().removeClass('t_btn');
			$(".content>div").eq(index).addClass('dis').siblings().removeClass('dis');

		})
	});
	
	$(function(){
		//第一个文本框（按天点击文本框默认的数据）
		$(".con_one .con_list input").bind("input propertychange change",function(event){
        	if($(this).val()!=""&&$(this).val()%100==0){
        		var _this=this;
				$('.con_one .con_p').addClass('dis_list');
				$(".con_one .con_p li").each(function(){
				    $(this).find("i").eq(1).html(parseInt($(_this).val())*parseInt($(this).find("i").eq(0).html()));
				    
				});
				var a=parseInt($(_this).val());
				var b=parseInt($(".con_one .con_li").find("i").eq(0).html());
				$(".con_one .con_list>p").eq(4).find("i").html(a*b);
//				$(".con_one .con_list>p").eq(5).find("i").html((a*b/2).toFixed(2));
				$(".con_one .con_list>p").eq(5).find("i").html((a*lossLine+a*b).toFixed(2));
                if(b==3){
//                    $(".con_one .con_list>p").eq(6).find("i").html(-(a*b*0.26667).toFixed(2));
                    $(".con_one .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                    var Multiple = 3;
                    var levers = levers_3;

                };
                if(b==4){
//                    $(".con_one .con_list>p").eq(6).find("i").html(-(a*b*0.2).toFixed(2));
                    $(".con_one .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                    var Multiple = 4;
                    var levers = levers_4;
                };
                if(b==5){
//                    $(".con_one .con_list>p").eq(6).find("i").html(-(a*b*0.16).toFixed(2));
                    $(".con_one .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                    var Multiple = 5;
                    var levers = levers_5;
                };
                if(b==6){
//                    $(".con_one .con_list>p").eq(6).find("i").html(-(a*b*0.1333).toFixed(2));
                    $(".con_one .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                    var Multiple = 6;
                    var levers = levers_6;
                };
                if(b==7){
//                    $(".con_one .con_list>p").eq(6).find("i").html(-(a*b*0.11429).toFixed(2));
                    $(".con_one .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                    var Multiple = 7;
                    var levers = levers_7;
                };
                if(b==8){
//                    $(".con_one .con_list>p").eq(6).find("i").html(-(a*b*0.1).toFixed(2));
                    $(".con_one .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                    var Multiple = 8;
                    var levers = levers_8;
                };
                if(b==9){
//                    $(".con_one .con_list>p").eq(6).find("i").html(-(a*b*0.0889).toFixed(2));
                    $(".con_one .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                    var Multiple = 9;
                    var levers = levers_9;
                };
                if(b==10){
//                    $(".con_one .con_list>p").eq(6).find("i").html(-(a*b*0.08).toFixed(2));
                    $(".con_one .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                    var Multiple = 10;
                    var levers = levers_10;

                };
				$(".con_one .con_list>p").eq(7).find("i").html(a);

//				$(".con_one .con_list>p").eq(8).find("i").html((a*b/10000*18).toFixed(2));
				//a*倍数*杠杆倍率%*天数(默认一天)
                var day_number=$(".select_day option:selected").val();
				$(".con_one .con_list>p").eq(8).find("i").html((a*b/10000*delayFee+levers*a*Multiple*day_number/100).toFixed(2));

				var c=$(".con_one .con_list>p").eq(8).find("i").html();
				var nc=Number(c);
                $(".con_one .con_spa span").eq(1).html(a+nc);
//			    var all_allprice = $(".con_one .con_spa span").eq(1).html();
//
//                $(".con_all").html(all_allprice);

//                通过ajax传值到后台，进行

				
			}else{
				$('.con_one .con_p').removeClass('dis_list');
				$(".con_one .con_list>p").eq(4).find("i").html(0);
				$(".con_one .con_list>p").eq(5).find("i").html(0);
				$(".con_one .con_list>p").eq(6).find("i").html(0);
				$(".con_one .con_list>p").eq(7).find("i").html(0);
				$(".con_one .con_list>p").eq(8).find("i").html(0);
				$(".con_one .con_spa span").eq(1).html(0)
			}
		});
		//第二个文本框（按月点击文本框默认的数据）
		$(".con_two .con_list input").bind("input propertychange change",function(event){
        	if($(this).val()!=""){
        		var _this=this;
				$('.con_two .con_p').addClass('dis_list');
				$(".con_two .con_p li").each(function(){
				    $(this).find("i").eq(1).html(parseInt($(_this).val())*parseInt($(this).find("i").eq(0).html()));
				});
				var a=parseInt($(_this).val());
				var b=parseInt($(".con_two .con_li").find("i").eq(0).html());
				var ajax_html = $(".con_two .con_list>p").eq(4).find("i").html(a*b);
//				$(".con_two .con_list>p").eq(5).find("i").html((a*b/2).toFixed(2));
				$(".con_two .con_list>p").eq(5).find("i").html(-(a*lossLine+a*b).toFixed(2));//警戒线
                if(b==3){
//                    $(".con_two .con_list>p").eq(6).find("i").html(-(a*b*0.26667).toFixed(2));
                    $(".con_two .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                    //倍数下标
                    var Multiple =  3;
                    var levers_month = levers_month_3;
                };
                if(b==4){
//                    $(".con_two .con_list>p").eq(6).find("i").html(-(a*b*0.2).toFixed(2));
                    $(".con_two .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                    var Multiple = 4;
                    var levers_month = levers_month_4;
                };
                if(b==5){
//                    $(".con_two .con_list>p").eq(6).find("i").html(-(a*b*0.16).toFixed(2));
                    $(".con_two .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                    var Multiple = 5;
                    var levers_month = levers_month_5;
                };
                if(b==6){
//                    $(".con_two .con_list>p").eq(6).find("i").html(-(a*b*0.1333).toFixed(2));
                    $(".con_two .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                    var Multiple = 6;
                    var levers_month = levers_month_6;
                };
                if(b==7){
//                    $(".con_two .con_list>p").eq(6).find("i").html(-(a*b*0.11429).toFixed(2));
                    $(".con_two .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                    var Multiple = 7;
                    var levers_month = levers_month_7;
                };
                if(b==8){
//                    $(".con_two .con_list>p").eq(6).find("i").html(-(a*b*0.1).toFixed(2));
                    $(".con_two .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                    var Multiple = 8;
                    var levers_month = levers_month_8;
                };
                if(b==9){
//                    $(".con_two .con_list>p").eq(6).find("i").html(-(a*b*0.0889).toFixed(2));
                    $(".con_two .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                    var Multiple = 9;
                    var levers_month = levers_month_9;
                };
                if(b==10){
//                    $(".con_two .con_list>p").eq(6).find("i").html(-(a*b*0.08).toFixed(2));
                    $(".con_two .con_list>p").eq(6).find("i").html(-(a*stopLossRate+a*b).toFixed(2));
                    var Multiple = 10;
                    var levers_month = levers_month_10;
                };
				$(".con_two .con_list>p").eq(7).find("i").html(a);

//				$(".con_two .con_list>p").eq(8).find("i").html((a*b/10000*18*30*0.7).toFixed(2));
				$(".con_two .con_list>p").eq(8).find("i").html((a*levers_month*Multiple/100).toFixed(2));

				var c=$(".con_two .con_list>p").eq(8).find("i").html();
				var nc=Number(c);
				var all_con =a+nc;
				$(".con_two .con_spa span").eq(1).html(a+nc);
//                $(".con_all").html(a+nc)
			}else{
				$('.con_two .con_p').removeClass('dis_list');
				$(".con_two .con_list>p").eq(4).find("i").html(0);
				$(".con_two .con_list>p").eq(5).find("i").html(0);
				$(".con_two .con_list>p").eq(6).find("i").html(0);
				$(".con_two .con_list>p").eq(7).find("i").html(0);
				$(".con_two .con_list>p").eq(8).find("i").html(0);
				$(".con_two .con_spa span").eq(1).html(0)
			}
		});

		//第一个文本框
       /* $(".con_one .con_list input").blur(function(){
            var nub=$(".con_one .con_list input").val();
            if(nub<200){
                $(".con_one .con_list input").val("200");
            }
        });
        //第二个文本框
        $(".con_two .con_list input").blur(function(){
            var nub=$(".con_two .con_list input").val();
            if(nub<200){
                $(".con_two .con_list input").val("200");
            }
        });*/
//        $(".con_btn input").click(function () {
//            var Con_Lists = $(".con_one .con_list>p").eq(4).find("i").html();
//            var beishu =$(".con_one .con_li span").eq(0).find("i").html()-2;
//
//            $(".box").css("display","block");
//            $.ajax({
//                type: 'POST',
//                url: "<?php echo url('index/index/ajax_html'); ?>",
//                data: {'ajax_html':ajax_html,'Con_Lists':Con_Lists,'beishu':beishu,'performance_bond':performance_bond},
//                dataType: 'json',
//                success: function (data) {
//
////                    window.location.href = "./buy";
//                },
//                fail: function (err, status) {
//                    console.log(2)
//                }
//            })
//
//
//
//
//
//        });
//        $(".box_con div a").eq(1).click(function () {
//            $(".box").css("display","none")
//        });
        //按日配资
        $(" .con_one .con_btn input").click(function () {
        	var day_select=$(".select_day option:selected").val(); //所选中的天数
            var Con_Lists = $(".con_one .con_list>p").eq(4).find("i").html();
            var beishu =$(".con_one .con_li span").eq(0).find("i").html()-2;
            $(".box").css("display","block");
            $.ajax({
                type: 'POST',
                url: "<?php echo url('index/index/ajax_html'); ?>",
                data: {'Con_Lists':Con_Lists,'beishu':beishu,'day_select':day_select},
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    window.location.href = "./buy";
                },
                fail: function (err, status) {
                    console.log(2)
                }
            })
        });
        //按月配资
		$(" .con_two .con_btn input").click(function () {
        	var month_select=$(".select_month option:selected").val();//选中的月数的值
            var ajax_html = $(".con_two .con_list>p").eq(4).find("i").html(); //总配资的值
            var yuebeishu =$(".con_two .con_li span").eq(0).find("i").html()-2;
            $(".box").css("display","block");
            $.ajax({
                type: 'POST',
                url: "<?php echo url('index/index/ajax_yue'); ?>",
                data: {'ajax_html':ajax_html,'yuebeishu':yuebeishu,'month_select':month_select},
                dataType: 'json',
                success: function (data) {
                    window.location.href = "./month_buy";
                },
                fail: function (err, status) {
                    console.log(3)
                }
            })
        });

    });
    //点击任意地方客服消失
//    $(".content").click(function(){
//    	$(".floating-window").hide()
//    });
//    $(".tab").click(function(){
//    	$(".floating-window").show()
//    });
    $(".content").click(function(){
        	$("#lim_mob_chat").hide()
        });
//        $(".tab").click(function(){
//        	$(".floating-window").show()
//        });

//    $(function () {
//        $(".con_btn input").click(function () {
//            var ajax_html = $(".con_two .con_list>p").eq(4).find("i").html();
//            var Con_Lists = $(".con_one .con_list>p").eq(4).find("i").html();
//
//            $(".box").css("display","block");
//            $.ajax({
//                type: 'POST',
//                url: "<?php echo url('index/index/ajax_html'); ?>",
//                data: {'ajax_html':ajax_html,'Con_Lists':Con_Lists},
//                dataType: 'json',
//                success: function (data) {
//                    window.location.href = "./buy";
//                },
//                fail: function (err, status) {
//                    console.log(2)
//                }
//            })
//        });
//        $(".box_con div a").eq(1).click(function () {
//            $(".box").css("display","none")
//        });
//
//    });
</script>
	<div class="box">
		<div class="box_con ">
			<p>提示</p>
			<p>资配交易</p>
			<p class="con_spa"><span>交易资金:</span><span class="con_all">0</span></p>
			<!--<div><a href="<?php echo url('/buy'); ?>">确认</a></div>-->
		</div>
	</div>
	<script language="javascript" src="http://chat.livechatvalue.com/chat/chatClient/monitor.js?jid=5421328761&companyID=1037386&configID=75733&codeType=custom"></script>
</body>

</html>