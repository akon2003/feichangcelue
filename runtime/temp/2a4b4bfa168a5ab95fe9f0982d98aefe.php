<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"D:\phpStudy\WWW\feichangcelue/application/index\view\ucenter\sell.html";i:1543660627;s:68:"D:\phpStudy\WWW\feichangcelue/application/index\view\public\top.html";i:1543649029;s:71:"D:\phpStudy\WWW\feichangcelue/application/index\view\public\footer.html";i:1543641251;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>尚牛在线</title>
</head>
<body class="sell_body grey buy-body logged-in">
<title>首页</title>

<meta name="keywords" content="<?php echo config('web_site_keywords'); ?>">
<meta name="description" content="<?php echo config('web_site_description'); ?>">
<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/common.css"/>

<!--头部-->
<header class="ml_header br-w100">
    <div class="h_top br-w100">
        <div class="w1024 br-clearfix">
            <div class="h_topL br-fl">
                服务热线：<?php echo $phone; ?>
            </div>
              <div class="h_topLL br-fl" style="padding-left: 10px;color: red;">
                   深圳市尚美时尚产业投资管理有限公司
            </div>
         
                <?php if(!empty($_SESSION['member'])): ?>
            <div   style="text-align: right;" >
                <?php if(!empty($_SESSION['member']['username'])): ?>
                用户：<?php echo $_SESSION['member']['username']; else: ?>
                用户信息：<?php echo $_SESSION['member']['mobile']; endif; ?>
                <span class="loginout"><a href="<?php echo url('index/index/logout'); ?>">退出登录</a></span>
            </div>
                <?php endif; ?>


           <!-- <div id="page_shared_layout_login" class="h_topR br-fr" <?php if($_SESSION['member'] != ''): ?> style="display: none;" <?php endif; ?> >
                <a class="login" href="javascript:void(0);">登录</a>
                <a class="register" href="./reg.html">注册</a>
            </div>

            <ul id="page_shared_layout_unlogin" class="top-links f-right" <?php if($_SESSION['member'] == ''): ?> style="display: none;" <?php endif; ?>>
            <li class="show-logout" style="display: list-item;"><a href="javascript:_hmt.push(['_trackEvent', 'login', 'click', 'head-login',1]);" name="popup-user-login-click">登录</a></li>
            <li class="show-logout sep" style="display: list-item;">|</li>
            <li class="show-logout" style="display: list-item;"><a href="/user/reg">注册</a></li>
            <li class="show-login" style="display: block;">您好，&nbsp;</li>
            <li class="show-login top-user-wrapper" style="display: block;">
                    <span class="top-username">
                    	<a id="page_shared_layout_login_name" href="./ucenter/index"><?php echo $_SESSION['member']['username']; ?></a>
                    	<i class="icon icon-arrow-drop-down"></i>
                    </span>
                <div class="overlay-account">
                    <div class="group account-group">
                        <span class="f-left">可用<b class="account-val" id="shared_header_mb"><?php echo $usableSum; ?></b></span>
                        <a name="realnameAuth" class="f-right" href="./ucenter/payment.html">充值</a>
                    </div>
                    <div class="account-links group">
                        <a class="f-left" href="./ucenter/index.html">个人中心</a>
                        <span class="f-left sep">|</span>


                        <a class="f-right js-logout" href="<?php echo url('index/index/logout'); ?>">安全退出</a>
                    </div>
                </div>
                /.overlay-account
            </li>
            </ul>-->
    </div>
</div>
    <div class="h_bot br-w100">
        <div class="w1024 br-clearfix">
            <div class="h_botL br-fl">
                <a href="./">
                	<img src="__STATIC__/home/img/moblie/fcml2.png" style="height:80px; " />
                	<span style="color: #FF3439;">深圳市尚美时尚产业投资管理有限公司</span>
                </a>
            </div>
            <div class="h_botR br-fr">
                    <!--<li class="br-fl"><a href="<?php echo url('index'); ?>" class="active">首页</a></li>-->
                    <li class="br-fl"><a href="<?php echo url('index/index/index'); ?>" class="active">首页</a></li>
                    <!-- <li class="br-fl"><a href="./buy2.html">A股点买</a></li>
                     <li class="br-fl"><a href="./freetrial2.html">免费体验</a></li>-->
                    <li class="br-fl"><a href="<?php echo url('index/index/safeensure'); ?>">安全保障</a></li>
                    <li class="br-fl help_box">
                    	<a href="<?php echo url('index/index/guild'); ?>">帮助中心</a>
                    	<ul class="new-sub-nav hide">
                            <li class=""><a href="<?php echo url('index/index/guild'); ?>">新手教学</a></li>
                            <li class=""><a href="<?php echo url('index/index/help'); ?>">常见问题</a></li>
                        </ul>
                    </li>
                    <li class="br-fl"><a href="<?php echo url('index/index/company'); ?>">关于我们</a></li>
                    <li class="br-fl"><a href="<?php echo url('index/index/buy?code'); ?>">A股点买</a></li>
                    <li class="br-fl"><a href="<?php echo url('index/ucenter/member'); ?>">个人中心</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>


<script src="__STATIC__/libs/jquery-2.2.0/jquery-2.2.0.min.js"></script>
<script src="__STATIC__/home/js/general.js"></script>

<script>

//	$("#menu-ul li").on('click',function(){
//
//             $(this).siblings().children('a').removeClass('active');
//			$(this).children('a').addClass('active');
//			console.log($(this).children('a'))
//
//		});

    //自动选中active
//  $(function(){
//      var menuArr = [];
//      menuArr[0] = ["index.html"  ];
//      menuArr[1] = ["buy.html", "sell.html", "history.html" ];
//      menuArr[2] = ["freetrial.html", "freetrialSell.html", "freetrialHistory.html"  ];
//      menuArr[3] = ["mobile.html",  ];
//      menuArr[4] = [ "guild.html" ,"help.html" ];
//      menuArr[5] = [ "safeensure.html"];
//      for(var i = 0 ; i < menuArr.length; i++ ){
//          for(var j = 0 ; j < menuArr[i].length; j++){
//              if(location.href.indexOf(menuArr[i][j]) > 0){
//                  $("#menu-ul > li a").removeClass("active");
//                  $("#menu-ul > li").eq(i).find("a").eq(0).addClass("active");
//                  $("#menu-ul > li").eq(i).find("a").eq(j+1).addClass("active");
//                    console.log(i+'------'+j);
//                  return;
//              }
//          }
//      }
//  });
    //退出登录



</script>
<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/buy.css"/>
<!--点卖区-->
<div class="br-content">
<div class="w1024">
<div class="stock-buy stock-sell">
    <section class="play-area">
        <nav>
            <ul class="clearfix">
                <li class=""><a href="./buy.html"><em> 01 </em>| 点买区</a></li>
                <li class=""><a href="./month_buy.html"><em> 02 </em>| 点买区</a></li>
                <li class="active"><a href="./sell.html"><em>03 </em>| 点卖区</a></li>
                <li class=""><a href="./history"><em>04 </em> | 结算区</a></li>
            </ul>
        </nav>
        <section>
            <center>
                当前持仓所需递延费为&nbsp;<label id="delayLbl" style="color:#d42b2e ;font-size:22px;font-weight:600"><?php echo (isset($delayFeeSum) && ($delayFeeSum !== '')?$delayFeeSum:0); ?></label>&nbsp;元
                &nbsp;<label style="font-size:18px">(周末及节假日免费)</label>，持仓盈利总计：<span id="totalProfit" style="font-size: 22px;"> <?php echo (isset($profitSum) && ($profitSum !== '')?$profitSum:0); ?> </span>元
            </center>

            <?php if(($list|count) >  0): ?>
            <ul id="sell-list">
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            	<li class="br-clearfix">
            		<label class="w186">
                        <em>下单：<b><?php echo $vo['createTime']; ?></b></em>
                        <em>单号：<?php echo $vo['id']; ?></em>
                        <em>到期：<b><?php echo $vo['buy_day_end_time']; ?></b></em>
                        <em>保证金：<b><?php echo $vo['guaranteeFee']; ?>元</b></em>
                    </label>
            		<label class="w125">
                        <em><?php echo round($vo['dealAmount'],2); ?>万元</em>
                        <em>止损：<b><?php echo $vo['loss']; ?>元</b></em>
                        <em>警戒线：<b><?php echo $vo['surplus']; ?>元</b></em>
                        <em>已付综合费：<b><?php echo $vo['publicFee']; ?>元</b></em>
                    </label>
                    <label class="w115">
                        <em><strong><?php echo $vo['stockName']; ?>(<?php echo $vo['stockCode']; ?>)</strong></em>
                        <em><b class=""><?php echo $vo['dealQuantity'] * 100; ?></b>股可用</em>

                        <?php if(!empty($vo['buy_day_num'])): ?>
                        <em>配资时间：<b><?php echo $vo['buy_day_num']; ?>天</b></em>
                        <?php endif; if(!empty($vo['buy_month_num'])): ?>
                        <em>配资时间：<b><?php echo $vo['buy_month_num']; ?>月</b></em>
                        <?php endif; ?>

                    </label>
                    <label class="w140">
                        <em><strong></strong></em>
                        <em><b class=""><?php echo round($vo['dealPrice'],2); ?></b><i class="icon icon-arrow-right"></i>-><b class=""><?php echo round($list2[$i-1][nowPrice],2); ?></b></em><em>
                        <strong class="" <?php if($list2[$i-1][profitAmount] < 0): ?> style="color:green" <?php else: ?> style="color:red" <?php endif; ?> >
                        <?php echo $list2[$i-1][profitAmount]; ?>(<?php echo $list2[$i-1][rate] * 100; ?>%)</strong></em>
                    </label>


                    <label class="w180">
                        <input type="text"  value="" class="money_update">
                        <button data-id="<?php echo $vo['id']; ?>"  class="money_add  font12" >补仓</button>
                        <button class="btnSell" id="<?php echo $vo['id']; ?>" index="<?php echo $i; ?>" class="btn btn-pri sell-btn " >点卖</button>
                    </label>
            	</li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <?php echo $list->render(); else: ?>
            <div class="data-empty"><p>暂时没有等待卖出的A股</p><a href="<?php echo url('index/index/buy'); ?>">立即去点买</a></div>
            <?php endif; ?>

        </section>
    </section>
    <!--确认点卖？-->
    <div class="confirm-sell" style="display: none;">
        <p>确定点卖？</p>
        <button class="wap-confirm">确定</button>
        <button class="wap-deny">取消</button>
    </div>
</div>

</div>
</div>
<!--申请递延-->
<div class="popup popup-middle" id="popup-delay">
    <div class="popup-header group">
        <h2>申请递延</h2>
        <a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
    </div>
    <div class="popup-body group">
        <div class="delay-box">
            <div class="delay-info">当前非递延申请时间,请稍后再来！</div>
            <div class="delay-foot">
                <button class="btn btn-pri">确定</button>
                <a href="javascript:;" class="delay-btn f-right">递延规则<i class="icon icon-caret-up"></i></a>
            </div>
        </div>
    </div>
    <div class="delay-rule hide popup-footer">
        <p>递延申请：点买人付费申请</p>
        <p>申请时间：00:00:00-12:00:00</p>
        <p>递延申请：点买人付费申请</p>
        <p>递延申请：点买人付费申请</p>
    </div>
</div>
<!--点卖确认-->
<div class="popup popup-big" id="popup-sell">
    <div class="popup-header group">
        <h2>点卖确认</h2>
        <a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
    </div>
    <div class="popup-body group">
        <input type="hidden" id="orderId" />
        <table border="0" cellspacing="0" cellpadding="0" class="popup-sell-tb table-sell">
            <tbody><tr>
                <td width="15%">交易品种：</td>
                <td width="35%" id="t_code">-</td>
                <td width="15%">卖出数量：</td>
                <td width="35%" id="t_quantity">-</td>
            </tr>
            <tr>
                <td>买入时间：</td>
                <td id="t_time">-</td>
                <td>递延天数：</td>
                <td id="t_delayDays">-</td>
            </tr>
            <tr>
                <td>浮动盈亏</td>
                <td class="c-red" id="t_profit">-</td>
                <td>(仅供参考)</td>
                <td></td>
            </tr>
        </tbody></table>
        <div class="btn-div">
            <button class="btn btn-pri" id="popup-confirm-btn">确定</button>
            <a href="javascript:;" class="js-close-popup btn btn-grey">取消</a>
        </div>
    </div>

</div>
<!--即时卖出-->
<div class="popup popup-middle" id="popup-buy-apply">
    <div class="popup-header group">
        <h2>即时卖出</h2>
    </div>
    <div class="popup-body group">
    </div>
</div>
<!--限价卖出-->
<div class="popup popup-middle" id="popup-sell-price-success">
    <div class="popup-header group">
        <h2>限价卖出</h2>
        <a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
    </div>
    <div class="popup-body group">
        <center><i class="icon icon-circle-check"></i>限价委托提交成功！</center>
        <div class="f-right"><b class="red">5秒</b>后自动跳转至卖出区，<a href="/ucenter/history.html" class="js-close-popup">立即跳转</a></div>
    </div>
</div>
<!--卖出委托价格修改-->
<div class="popup popup-big" id="popup-change-price">
    <div class="popup-header group">
        <h2>卖出委托价格修改</h2>
        <a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
    </div>
    <div class="popup-body group">
        <table border="0" cellspacing="0" cellpadding="0" class="popup-sell-tb table-change-price">
            <tbody><tr>
                <td width="15%">最&nbsp;&nbsp;新&nbsp;&nbsp;价：</td>
                <td width="35%">-</td>
                <td width="15%">委托价格：</td>
                <td width="35%"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="change-price-1" class="active">
                        <input type="radio" name="change-sell-price" id="change-price-1" class="radio" checked="">即时卖出
                    </label>
                </td>
                <td colspan="2">
                    <label for="change-price-2">
                        <input type="radio" name="change-sell-price" id="change-price-2" class="radio">最新价触发<input type="text" id="change-sell-price" size="8" placeholder="输入价格" class="text" style="position:relative">时，即时卖出
                    </label>
                </td>
            </tr>
        </tbody></table>
        <div class="btn-div">
            <button class="btn btn-pri" id="popup-confirm-change-price-btn">确定</button>
            <a href="javascript:;" class="js-close-popup btn btn-grey">取消</a>
        </div>
    </div>
</div>
<!--即时卖出-->
<div class="popup popup-middle" id="popup-sell-success">
    <div class="popup-header group">
        <h2>即时卖出</h2>
        <a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
    </div>
    <div class="popup-body group">
        <center><i class="icon icon-circle-check"></i>卖出成功！</center>
        <div class="f-right"><b class="red">5秒</b>后自动跳转至结算区，<a href="/ucenter/history.html" class="js-close-popup">立即跳转</a></div>
    </div>
</div>
<!--认证银行卡-->
<div class="popup" id="popup-id-verify">
    <div class="popup-header group">
        <h2>认证银行卡</h2>
        <a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
    </div>
    <div class="popup-body group">
        <div class="field-row group" style="text-align:center">
            <ol class="popup-note">
                <li style="text-align:left;">提现和免费体验前必须先绑定一张银行卡</li>
                <li style="text-align:left;">请务必认真填写真实资料</li>
                <li style="text-align:left;">银行卡采用实名认证，一个身份证只能绑定一个账号</li>
                <li style="text-align:left;">如遇到问题，请联系客服 <label id="m_basic_mobile">021-80321818</label></li>
            </ol>
            <p>为了保障您的账户安全，请先绑定银行卡</p>
        </div>
        <div class="btn-row group">
            <a class="btn btn-pri" href="/ucenter/BankCards.html">去绑定</a>
            <a class="btn btn-pri js-close-popup" href="javascript:;">暂不绑定</a>
        </div>
    </div>
</div>
<!--实名认证-->
<div class="popup" id="popup-realname-auth">
    <div class="popup-header group">
        <h2>实名认证</h2>
        <a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
    </div>
    <div class="popup-body group">
        <div class="field-row group" style="text-align:center">
            <ol class="popup-note">
                <li style="text-align:left;">一个身份证对应一个账号</li>

                <li style="text-align:left;">如遇到问题，请联系客服 <label id="m_basic_mobile">021-80321818</label></li>
            </ol>
            <p>为了保障您的账户安全，请先进行实名认证</p>
        </div>
        <div class="field-row group">
            <label>真实姓名：</label>
            <div class="field-val"><input id="姓名i" type="text" class="text" onchange="user_updateid_zsxm_valid()"></div>
        </div>
        <div id="zsxm_err1" class="error-wrapper" style="margin-left:100px; display:none"><div><i class="icon icon-x-altx-alt"></i>未填写姓名</div></div>
        <div class="field-row group">
            <label>身份证号：</label>
            <div class="field-val">
                <div class="field-val">
                    <input id="身份证i" type="text" class="text" onchange="user_updateid_sfzh_valid()">
                </div>
            </div>
        </div>
        <div id="sfzh_err1" class="error-wrapper" style="margin-left:100px; display:none"><div><i class="icon icon-x-altx-alt"></i>请填写准确的身份证</div></div>
        <div class="btn-row group">
            <a id="user_UpdateSelfIdA" class="btn btn-pri" href="javascript:void(0)">确认</a>
            <a class="btn btn-sec js-close-popup" href="javascript:;">取消</a>
        </div>
    </div>
</div>


<!--底部-->
<footer class="br-w100">
    <div class="footer_top">
        <a href="<?php echo url('index/index/company'); ?>">关于我们</a>
        <a href="<?php echo url('index/index/contact'); ?>">联系我们</a>
    </div>
    <div class="footer_bot">
        <div class="w1024 br-clearfix">
            <div class="bot_l br-fl">
                <p>全国统一服务热线 ：4001665652<br>客服服务时间工作日：9:00-18:00</p></div>
            <div class="bot_r br-fr br-text-center">
                <div class="bot_r_img br-clearfix ">
                    <span><a target="_blank" href="https://qwrz.baidu.com/id/bcab3808e1be12501f0aa132a2b2b802"><img src="./public/static/home/img/bdxy.jpg"/></a></span>
                    <span id="kx_verify"></span><script type="text/javascript">(function (){var _kxs = document.createElement('script');_kxs.id = 'kx_script';_kxs.async = true;_kxs.setAttribute('cid', 'kx_verify');_kxs.src = ('https:' == document.location.protocol ? 'https://ss.knet.cn' : 'http://rr.knet.cn')+'/static/js/icon3.js?sn=e18053044030074109ys5u000000&tp=icon3';_kxs.setAttribute('size', 0);var _kx = document.getElementById('kx_verify');_kx.parentNode.insertBefore(_kxs, _kx);})();</script>
                    <span class="br-fl"><a target="_blank" href="https://v.pinpaibao.com.cn/cert/site/?site=www.sm00009.com&at=business" ><img src="https://static.anquan.org/static/outer/image/hy_124x47.png?id=www.221.com.cn?t=52"/></a></span>
                    <span><a id="jsl_speed_stat0" href="http://www.sm00009.com/" target="_blank">知道创宇云安全</a><script src="//static.yunaq.com/static/js/stat/picture_stat.js" charset="utf-8" type="text/javascript"></script></a></span>
                    <!--<span class="br-fl"><a target="_blank" href="https://v.pinpaibao.com.cn/cert/site/?site=www.sm00009.com&at=business" ><img src="https://static.anquan.org/static/outer/image/aqkx_124x47.png"/></a></span>-->
                    <span class="br-fl"><a target="_blank" href="http://www.cn-ecusc.org.cn/cert/aqkx/site/?site=www.sm00009.com" ><img src="https://static.anquan.org/static/outer/image/aqkx_124x47.png"/></a></span>

                </div>
                <p>版权所有 © 深圳尚美时尚产业投资管理有限公司  </p>
                <p>粤ICP备18060985号  投资有风险 入市需谨慎</p>
            </div>
        </div>
    </div>
</footer>
<!--Start Pop-ups-->
<!--遮罩层-->
<!--<div class="mask"></div>-->
<!--确认，取消提示框-->
<!--<div class="popup" id="popup-p-confirm">
    <div class="popup-header group">
        <h2>提示</h2>
    </div>
    <div class="popup-body group">
        <div class="btn-row group">
            <a class="btn btn-pri js-close-popup" href="javascript:popup_confirm_go()">确定</a>
            <a class="btn btn-pri js-close-popup" href="javascript:;">取消</a>
        </div>
    </div>
</div>-->
<!--开设账户提示-->
<!--<div class="popup" id="popup-yeepay">
    <div id="yeepayPopupContent" class="popup-header group">
        <h2>提示</h2>
    </div>
    <div class="popup-body group">
        <div class="btn-row group">
            <a id="yeepayNextLink" target="_blank" class="btn btn-pri" href="javascript:;">开设账户</a>
            <a class="btn btn-pri js-close-popup" href="javascript:;">暂不充值</a>
        </div>
    </div>
</div>-->
<!--是，否提示框-->
<!--<div class="popup" id="popup-yeepay-confirm" >
    <div id="yeepayConfirmContent" class="popup-header group">
        <h2>提示</h2>
    </div>
    <div class="popup-body group">
        <div class="btn-row group">
            <a class="btn btn-pri js-close-popup" href="javascript:;">是</a>
            <a class="btn btn-pri js-close-popup" href="javascript:;">否</a>
        </div>
    </div>
</div>-->
<!--提示信息提示框-->
<!--<div id="popup-p-error" class="popup">
    <div class="popup-header group">
        <h2>提示</h2>
        <a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
    </div>
    <div class="popup-body group">
        <p id="popup-p-error-msg">提示信息</p>
    </div>
</div>-->
<!--意见反馈提示框-->
<!--<div class="popup" id="popup-feedback">
    <div class="popup-header group">
        <h2>意见反馈</h2>
        <a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
    </div>
    <div class="popup-body group">
        <form action="#">
            <div class="field-row group">
                <label>留言类型：</label>
                <div class="field-val">
                    <select id="留言类型s">
                        <option value="">请选择留言类型</option>
                        <option value="1">交易问题</option>
                        <option value="2">充值/提款问题</option>
                        <option value="3">交易问题</option>
                        <option value="4">我要投诉</option>
                        <option value="5">意见反馈</option>
                        <option value="6">其它</option>
                    </select>
                </div>
            </div>
            <div class="field-row group show-logout">
                <label>手机/邮箱：</label>
                <div class="field-val"><input type="text" class="text" placeholder="请输入手机号或邮箱"></div>
            </div>
            <div class="field-row group">
                <label>&nbsp;</label>
                <div class="field-val">
                    <textarea id="留言内容i" placeholder="请填写留言内容" class="textarea"></textarea>
                </div>
            </div>
            <div class="btn-row group">
                <a class="btn btn-pri" href="javascript:feedback_Insert()">提交</a>
            </div>
        </form>
    </div>
</div>-->
<!--账户登录提示框-->
<!--<div class="popup popup-small" id="popup-user-login">
    <div class="popup-header group">
        <h2>账户登录</h2>
        <a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
    </div>
    <div class="popup-body group" style="padding-bottom:10px">
        <div class="group section-form" style="margin: 0px;" id="popup-login-section">
            <div class="form">
                <div class="field-wrapper">
                    <input type="text" class="text" placeholder="用户名/手机号" name="phone" id="popup_user_login_name">
                </div>
                <div id="error_name" class="error-wrapper" style="display:none; margin-top:5px;"><div>用户名不能为空！</div></div>
                <div class="field-wrapper">
                    <input type="password" class="text" placeholder="请输入密码" name="pwd" id="popup_user_login_pwd">
                </div>
                <div id="error_psw" class="error-wrapper" style="display:none; margin-top:5px;"><div>密码不能为空！</div></div>
                <div class="field-wrapper" id="popup-user-login-valid-img" style="display:none;">
                    <input type="text" class="text" style="width:100px; margin-right:5px; float: left;" placeholder="4位验证码" name="txt_valid_code">
                    <img name="img-block" class="captcha-img" alt="">
                    <a name="btn-change-img" style="font-size:13px; line-height:45px;" href="javascript:void(0)">看不清楚？</a>
                </div>
                <div class="error-wrapper" style="display:none; margin-top:5px;"><div>验证码错误！</div></div>

                &lt;!&ndash;<div class="error-wrapper" style="display:none;  margin-top:5px;"><div></div></div>&ndash;&gt;

                <div class="btn-wrapper">
                    <a href="javascript:void(0);" id="popup_user_login_submit" class="btn btn-pri">登录</a>
                </div>
                <div class="link-wrapper group clearfix" style="margin-top:10px;">
                    <a href="/forgot_pass.html" class="f-left">忘记密码</a><a href="/reg.html" class="f-right">马上注册</a>
                </div>
            </div>


        </div>
    </div>
</div>-->
 <!--浮窗 -->
<ul class="side-pannel">
                <li>
                    <a href="http://chat.livechatvalue.com/chat/chatClient/chatbox.jsp?companyID=1037386&configID=75734&jid=5421328761" target="_blank">
                        <i class="icon-qq"></i>
                        <span style="color:#E01923">在线客服</span>
                    </a>
                </li>
    <!-- Live800在线客服图标:默认图标[浮动图标]开始-->
    <div style='display:none;'>
        <a href='http://www.live800.com'>网页聊天</a>
    </div>
    <div style='display:none;'>
        <a href='http://en.live800.com'>livechat</a>
    </div>


    <!-- 在线客服图标:默认图标结束-->
				<li>
					<a href="javascript:void(0);" onclick="jia_qq(910605652)">
						<i class="icon-qq"></i>
						<span style="color:#E01923">客服QQ</span>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);" onclick="jia_qq(810705652)">
						<i class="icon-qq"></i>
						<span style="color:#E01923">财务QQ</span>
					</a>
				</li>

				<li class="wechat">
					<i class="icon-wechat"></i>
					<span style="color:#E01923">公众号</span>
					<div class="wechat" style="display: none;">
						<i class="tb2"><em></em></i>
						 <img src="./public/static/home/img/ewm1.jpg" width="180" height="180" style="margin-top:5px;">
					</div>
				</li>

</ul>

<script language="javascript" src="http://chat.livechatvalue.com/chat/chatClient/floatButton.js?jid=5421328761&companyID=1037386&configID=75734&codeType=custom">
</script>
<!-- Live800默认功能代码: 开始-->
<script language="javascript" src="http://chat.livechatvalue.com/chat/chatClient/monitor.js?jid=5421328761&companyID=1037386&configID=75733&codeType=custom"></script>
<!-- Live800默认功能代码: 结束-->
<script>
    $(".side-pannel>li.wechat").hover(function(){
        $(this).children("div.wechat").show();
    },function(){
        $(this).children("div.wechat").hide();
    });
</script>
<script type="text/javascript">
    var qq_jia = true;
    function jia_qq(data) {
        if (qq_jia) {
            var sUserAgent = navigator.userAgent.toLowerCase();
            var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
            var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
            var bIsMidp = sUserAgent.match(/midp/i) == "midp";
            var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
            var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
            var bIsAndroid = sUserAgent.match(/android/i) == "android";
            var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
            var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
            if (!(bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM)) {
                popwin = window.location.href = "tencent://AddContact/?fromId=45&fromSubId=1&subcmd=all&uin=" + data;
            } else {
                // popwin = window.location.href = "mqqwpa://im/chat?chat_type=wpa&uin=1061525487&version=1&src_type=web&web_src=oicqzone.com"
                popwin = window.location.href = "mqqwpa://im/chat?chat_type=wpa&uin="+data+"&version=1&src_type=web&web_src=bjhuli.com"
                // popwin="mqqwpa://im/chat?chat_type=wpa&uin="+datas;
                // startActivity(new Intent(Intent.ACTION_VIEW, Uri.parse(popwin)));
                // try{
                //     Intent intent =getPackManager().getLaunchIntentForpacKage("com.tencent.mobileqq");
                // }catch(Exception e){
                //     eprintStackTrace();
                //     ToastUtil.makeshortText(LeagueCreateActivity.this,"请检查是否安装QQ");
                // }

            }
        }
        setTimeout("CloseWebPage()", 3000)
    };
    function CloseWebPage() {
        if (navigator.userAgent.indexOf("MSIE") > 0) {
            if (navigator.userAgent.indexOf("MSIE 6.0") > 0) {
                window.opener = null;
                window.close()
            } else {
                window.open('', '_top');
                window.top.close()
            }
        } else if (navigator.userAgent.indexOf("Firefox") > 0) {
            window.location.href = 'about:blank '
        } else {
            window.opener = null;
            window.open('', '_self', '');
            window.close()
        }
    }
</script>

<script src="__STATIC__/libs/jquery-2.2.0/jquery-2.2.0.min.js"></script>
<script src="__STATIC__/home/js/moblie/mui.min.js"></script>
<script src="__STATIC__/home/js/moblie/reg.js"></script>


<!--<script src="/public/static/home/js/sell.js"></script>-->
</body>
</html>

<script>
$(".btnSell").click(function(e){
    var index = $(this).attr("index");
    var listJson = JSON.parse('<?php echo $listJson; ?>').data;
    var listJson2 = JSON.parse('<?php echo $listJson2; ?>');
    console.log(listJson)

    var i = index - 1;
    $("#t_code").html(listJson[i]['stockName'] + "(" + listJson[i]['stockCode'] + ")");
    $("#t_quantity").html(listJson[i]['dealQuantity'] + "手");
    $("#t_time").html(listJson[i]['createTime']);
    $("#t_delayDays").html(listJson2[i]['delayDays']);
    $("#t_profit").html(listJson2[i]['profitAmount']);

    var prf = parseFloat(listJson2[i]['profitAmount']);
    if(prf < 0){
        $("#t_profit").attr("class", "c-green");
    }else if(prf > 0){
        $("#t_profit").attr("class", "c-red");
    }else{
        $("#t_profit").removeAttr("class");
    }

    var orderId = $(this).attr('id');
    $("#orderId").val(orderId);

    tool.popup.showPopup($("#popup-sell"));
});


$("#popup-confirm-btn").click(function(e){

    var orderId = $("#orderId").val();
    var params = { orderId : orderId };
    if(orderId <= 0){
        alert("订单号不正确");
        return;
    }
    $(this).attr("disabled", true);
    $.post("./index/ucenter/stockSell", params, function(data){
        $("#popup-confirm-btn").attr("disabled", false);
        if(data.code =='-1'){
            alert(data.msg);
        }
        if(data.code =='0'){
            alert("交易成功");
            location.href = "./history.html";
        }
//        if(data.code == '0'){
//            tool.popup_err_msg("交易成功");
//            location.href = "./history.html";
//        }else{
//            tool.popup_err_msg(data.msg);
//        }
    }, 'json');
});



</script>

<!--补仓-->
<script>
    $('.money_add').click(function () {
        var money=$(this).siblings(".money_update").val();
//                var money =$(".money_update").val();

        var order_id = $(this).attr('data-id');
        $.ajax({
            type:"POST",
            url:"./ucenter/money_add",
            data:{
                "money_update":money,
                "order_id":order_id
            },
            dataType:"json",
            success:function (data) {
//                        console.log(data);
                if(data.data.status=1){
                    alert(data.info);
                    location.reload();
                }
                else if(data.data.status=2){
                    alert(data.info);
                }

            },
            error:function () {
                console.log("错误");
            }
        })
    })
</script>