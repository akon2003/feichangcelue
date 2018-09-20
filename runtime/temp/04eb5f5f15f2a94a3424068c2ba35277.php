<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"D:\phpStudy\PHPTutorial\WWW\feichangcelue/application/index\view\index\mobile\index.html";i:1537429271;}*/ ?>
<!DOCTYPE html>
<html>

	<head lang="en">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<meta name="format-detection" content="telephone=no, email=no" />
		<link href="./public/stock/css/reset.css" rel="stylesheet" type="text/css">
		<link href="./public/stock/css/swiper-3.3.1.min.css" rel="stylesheet" type="text/css">
		<link href="./public/stock/css/style.css" rel="stylesheet" type="text/css">
		<link href="./public/static/home/css/mui.min.css" rel="stylesheet" />
		<link href="./public/static/home/css/moblie/tradeCommon.css" rel="stylesheet" />
		<link href="./public/static/home/css/moblie/person.css" rel="stylesheet" />
		<script src="./public/stock/js/sizes.js" type="text/javascript"></script>
		<title>首页</title>
		<style type="text/css">
			.floating-window {
				width: 5rem;
				height: 5rem;
				position: fixed;
				top: 10rem;
				right: 0;
			}
			
			.lim_m_rm #lim_mchat_wrapper a {
				width: 30px !important;
				padding: 7px !important;
			}
			
			.lim_m_rm {
				right: 1px !important;
				top: 41% !important;
			}
			
			.stock-data {
				background-color: #fff;
			}
			
			.stock-data .hd {
				font-size: 18px;
				padding: 0 15px;
				line-height: 44px;
				border-bottom: 1px solid #EDEDED;
			}
			
			.stock-data .hd .icon-prefixer {
				display: inline-block;
				width: 4px;
				height: 14px;
				-webkit-background-size: cover;
				background-size: cover;
			}
			
			.stock-number {
				font-size: 22px;
				line-height: 1.2;
			}
			
			.number-red {
				color: #E54349;
			}
			
			.stock-data__item {
				width: 50%;
				text-align: center;
			}
			
			.stock-data__item:first-child {
				border-right: 1px solid #E2E2E2;
			}
			
			.stock-data__item .title {
				color: #525252;
			}
			
			.flex-item-wrapper {
				padding: 10px 15px;
			}
			
			.stock-data__item .meta>span {
				display: inline-block;
				padding: 0 10px;
				font-size: 14px;
			}
			
			.weui-flex {
				display: flex;
			}
		</style>
	</head>

	<body>

		<div class="wapper">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide" id="banner1"><img src="" alt=""></div>
					<div class="swiper-slide" id="banner2"><img src="" alt=""></div>
					<div class="swiper-slide" id="banner3"><img src="" alt=""></div>
				</div>
				<!--<div class="swiper-wrapper">-->
				<!--<div class="swiper-slide" id="banner1"><img src="/feichangcelue/public/uploads/images/20180713/3d416b03da1b9123bdb83623842d879d.png" alt=""></div>-->
				<!--<div class="swiper-slide" id="banner2"><img src="/feichangcelue/public/uploads/images/20180713/3d416b03da1b9123bdb83623842d879d.png" alt=""></div>-->
				<!--<div class="swiper-slide" id="banner3"><img src="/feichangcelue/public/uploads/images/20180713/3d416b03da1b9123bdb83623842d879d.png" alt=""></div>-->
				<!--</div>-->
				<!-- 如果需要分页器 -->
				<div class="swiper-pagination"></div>
			</div>
			<div class="pz">
				<ul>
					<li>
						<a href="<?php echo url('index/index/stock'); ?>"><img src="./public/stock/img/ri.png" alt="">按天配资</a>
					</li>
					<li>
						<a href="<?php echo url('index/index/stock'); ?>"><img src="./public/stock/img/yue.png" alt="">按月配资</a>
					</li>
					<li>
						<a href="./freetrial.html"><img src="./public/stock/img/mian.png" alt="">免费体验</a>
					</li>
				</ul>
			</div>
			<div class="list">
				<!--动态资金就是余额进行-->
				<ul><?php if(!empty($_SESSION['member_id'])): ?>
					<li>动态资产<span id="active_Assets"><?php echo $ablePrice; ?></span></li>
					<li>可用金额<span><?php echo $balance['usableSum']; ?></span></li>
					<li>冻结资金<span id="frozen_Assets"><?php echo $guaranteeFee; ?></span></li>
					<!--<li>实盘可买<span <?php if(0): ?> selected ="selected" <?php endif; ?> ><?php echo $peizi; ?></span></li>-->
					<li>实盘可买<span <?php if(0): ?> selected="selected" <?php endif; ?>><?php echo $real_disk_sum; ?></span></li>
					<li>证券市值<span><?php echo $guaranteeFee; ?></span></li>
					<!--<li>持仓盈亏<span <?php if(0): ?> selected ="selected" <?php endif; ?>>-->
					<!--<?php echo $earnSum; ?></span>-->
					</li>
					<li>持仓盈亏<span <?php if(0): ?> selected="selected" <?php endif; ?>>
				<?php echo $profitSum; ?></span></li>
					<?php else: ?>
					<li>动态资产<span id="active_Assets">0.00</span></li>
					<li>可用金额<span>0.00</span></li>
					<li>冻结资金<span id="frozen_Assets">0.00</span></li>
					<li>实盘可买<span id="real_buy">0.00</span></li>
					<li>证券市值<span id="market">0.00</span></li>
					<li>持仓盈亏<span id="Profit_loss">0.00</span></li>
					<?php endif; ?>

				</ul>
			</div>
			<div class="news">
				<a href="<?php echo url('index/index/news'); ?>">
					<dl>
						<dt><img src="./public/stock/img/cai.png"></dt>
						<dd>财经资讯</dd>
						<dd>(最新鲜最全面的财经资讯)</dd>
					</dl>
				</a>
				<!--<dl>-->
				<!--<dt><img src="./public/stock/img/liu.png"></dt>-->
				<!--<dd>牛散实操</dd>-->
				<!--<dd>(经典实战,牛散的操作)</dd>-->
				<!--</dl>-->
			</div>
			<div id="stock-data" class="stock-data">
				<div class="hd"><i class="icon-prefixer"></i> 国内指数
				</div>
				<div class="weui-flex bd">
					<div class="weui-flex__item stock-data__item">
						<div class="flex-item-wrapper">
							<div class="title">上证指数</div>
							<div class="stock-number  number-red">
								<span class="shnum">2699.9501</span>
							</div>
							<div class="meta"><span class="point number-red shpercent_one">48.16</span> <span class="percent-red number-red shpercent_tow">1.82%</span></div>
						</div>
					</div>
					<div class="weui-flex__item stock-data__item">
						<div class="flex-item-wrapper">
							<div class="title">深证成指</div>
							<div class="stock-number number-xxl number-red">
								<span class="sznum">8133.22</span>
							</div>
							<div class="meta"><span class="point number-red szpercent_one">133.87</span> <span class="percent number-red szpercent_tow">1.67%</span></div>
						</div>
					</div>
				</div>
			</div>

			<!--<div class="floating-window">-->
			<!--<a href="http://chat.livechatvalue.com/chat/chatClient/chatbox.jsp?companyID=1037386&configID=75734&jid=5421328761" target="_blank">-->
			<!--<img src="./public/static/home/img/chat.jpg" alt="">-->
			<!--</a>-->
			<!--</div>-->
		</div>

		<!--<div id="footer">-->
		<!--<ul class="clear">-->
		<!--<li class="active"><a href="./index.html"><i></i><span>首页</span></a></li>-->
		<!--<li><a href="<?php echo url('/stock'); ?>"><i></i>我要配资</a></li>-->
		<!--<li><a href="<?php echo url('/buy'); ?>"><i></i>我要交易</a></li>-->
		<!--<li><a href="./ucenter/home.html"><i></i>账户中心</a></li>-->
		<!--</ul>-->
		<!--</div>-->
		<div id="footer">
			<nav class="ml_tab mui-bar mui-bar-tab">
				<a class="mui-tab-item mui-active" href="<?php echo url('/index'); ?>">
					<span class="mui-icon mui-icon-home"></span>
					<span class="mui-tab-label">首页</span>
				</a>
				<a class="mui-tab-item " href="<?php echo url('/stock'); ?>">
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

		<script src="./public/stock/js/jquery-1.11.1.min.js" type="text/javascript"></script>
		<script src="./public/stock/js/swiper.jquery.min.js" type="text/javascript"></script>
		<script>
			//	var active_Assets =$("#active_Assets").val();
			//
			//	console.log(active_Assets);
			//	if(active_Assets == null){
			//        $("#active_Assets").html(0.00);
			//	}else {
			//        $("#active_Assets").html(<?php echo $balance['usableSum']; ?>);
			//	}

			var mySwiper = new Swiper('.swiper-container', {
				autoplay: 4000, //可选选项，自动滑动
				loop: true,
				// 如果需要分页器
				pagination: '.swiper-pagination'
			});
		</script>
		<script>
			$(function() {
				$("#footer li").click(function() {
					$(this).addClass('active').siblings().removeClass('active');
				});
				$(".list").on("click", function() {
					$("#lim_mobile_chat").hide();
				});

			});
		</script>
		<!--<script>-->
		<!--$(function(){-->
		<!--$.ajax({-->
		<!--type:"post",-->
		<!--url:"<?php echo url('index/index/index'); ?>",-->
		<!--data:{},-->
		<!--dataType:'json',-->
		<!--success:function(data){-->
		<!--//                window.location.href= './sell';-->
		<!--console.log('成功');-->
		<!--},-->
		<!--error:function (data) {-->
		<!--console.log("错误");-->
		<!--}-->
		<!--})-->
		<!--});-->
		<!--</script>-->

		<!--首页轮播图-->
		<script>
			(function() {
				$.ajax({
					type: "post",
					url: "<?php echo url('index/index/app_broadcast'); ?>",
					data: {},
					dataType: 'json',
					success: function(data) {
						//                console.log(data);
						var banner1 = data.data[0].src;
						$('#banner1 img')[0].src = banner1;
						$('#banner1 img')[1].src = banner1;
						var banner2 = data.data[1].src;
						$('#banner2 img')[0].src = banner2;
						var banner3 = data.data[2].src;
						$('#banner3 img')[1].src = banner3;
					},
					error: function(data) {
						console.log("错误");
					}
				});
			})();
		</script>
		<script language="javascript" src="http://chat.livechatvalue.com/chat/chatClient/monitor.js?jid=5421328761&companyID=1037386&configID=75733&codeType=custom"></script>
		<!--深证指数接口-->
		<script>
            (function() {
                $.ajax({
                    type: "post",
                    url: "<?php echo url('index/index/stock_exponential_sz'); ?>",
                    data: {},
                    dataType: 'json',
                    success: function(data) {
						var abc =data.data;
                        var obj2=eval("("+abc+")")
                        var leg =obj2.datas.length-1;
                        $('.sznum').html(obj2.datas[leg][1]);
                        $('.szpercent_one').html(obj2.datas[leg][5]);
                        $('.szpercent_tow').html(obj2.datas[leg][4]);
                        if(obj2.datas[leg][5] <0){
                            $('.sznum').css('color','#20821C');
                            $('.szpercent_one').css('color','#20821C');
                            $('.szpercent_tow').css('color','#20821C');
                        }
                        if(obj2.datas[leg][5] >0){
                            $('.sznum').css('color','#E54349');
                            $('.szpercent_one').css('color','#E54349');
                            $('.szpercent_tow').css('color','#E54349');
                        }
                    },
                    error: function() {
                        console.log("错误");
                    }
                });
            })();
		</script>
		<!--上证指数接口-->
		<script>
            (function() {
                $.ajax({
                    type: "post",
                    url: "<?php echo url('index/index/stock_exponential_sh'); ?>",
                    data: {},
                    dataType: 'json',
                    success: function(data) {
                        var abc =data.data;
                        var obj2=eval("("+abc+")");
                        var leg =obj2.datas.length-1;
                        $('.shnum').html(obj2.datas[leg][1]);
                        $('.shpercent_one').html(obj2.datas[leg][5]);
                        $('.shpercent_tow').html(obj2.datas[leg][4]);
                        if(obj2.datas[leg][5] <0){
                            $('.shnum').css('color','#20821C');
                            $('.shpercent_one').css('color','#20821C');
                            $('.shpercent_tow').css('color','#20821C');
                        }
                        if(obj2.datas[leg][5] >0){
                            $('.shnum').css('color','#E54349');
                            $('.shpercent_one').css('color','#E54349');
                            $('.shpercent_tow').css('color','#E54349');
                        }
                    },
                    error: function() {
                        console.log("错误");
                    }
                });
            })();
		</script>

	</body>

</html>