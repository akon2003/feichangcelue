<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\phpStudy\WWW\feichangcelue/application/index\view\ucenter\detail.html";i:1539830804;s:68:"D:\phpStudy\WWW\feichangcelue/application/index\view\public\top.html";i:1539832463;s:71:"D:\phpStudy\WWW\feichangcelue/application/index\view\public\footer.html";i:1539593722;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>非常谋略</title>
</head>
<body class="history_body grey buy-body logged-in">
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
                    <li class="br-fl"><a href="./index.html" class="active">首页</a></li>
                    <!-- <li class="br-fl"><a href="./buy2.html">A股点买</a></li>
                     <li class="br-fl"><a href="./freetrial2.html">免费体验</a></li>-->
                    <li class="br-fl"><a href="./safeensure.html">安全保障</a></li>
                    <li class="br-fl help_box">
                    	<a href="./guild.html">帮助中心</a>
                    	<ul class="new-sub-nav hide">
                            <li class=""><a href="./guild.html">新手教学</a></li>
                            <li class=""><a href="./help.html">常见问题</a></li>
                        </ul>
                    </li>
                    <li class="br-fl"><a href="./company.html">关于我们</a></li>
                    <li class="br-fl"><a href="./buy.html">A股点买</a></li>
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

<!--结算区-->
<div class="br-content">
<div class="w1024">
	<div class="stock-buy container">
    <section class="play-area detail-main">
        <div class="detail-title">
            <div class="f-left">
                <h1>交易单</h1>
                <span>交易单号:<?php echo $d['id']; ?></span>
            </div>
            <a href="javascript:history.go(-1)" class="f-right">返回</a>
        </div>
        <div class="detail-info">
            <div class="item">
                <span>交易合作</span>
                <a href="javascript:void(0);" id="popup-account-sanfang" class="f-right">三方协议</a>
            </div>
            <dl>
                <!--<dt>投资人：</dt>
                <dd></dd>-->
                <dt>点买人：</dt>
                <dd><?php echo $_SESSION['member']['username']; ?></dd>
            </dl>
            <div class="item">
                <span>交易明细</span>
                <a href="javascript:void(0);" id="popup-account-a" class="f-right">交易流水</a>
            </div>
            <table border="0" cellspacing="0" cellpadding="0" class="detail-tb">
                <tbody>
                    <tr>
                        <td width="10%">交易本金：</td>
                        <td width="10%"><?php echo round($d['dealAmount'] * 10000,2); ?>元</td>
                        <td width="10%">交易品种：</td>
                        <td width="20%"><?php echo $d['stockName']; ?>(<?php echo $d['stockCode']; ?>)</td>
                        <td width="10%">交易数量：</td>
                        <td width="15%"><?php echo $d['dealQuantity'] * 100; ?>股</td>
                    </tr>
                    <tr>
                        <td>买入价格：</td>
                        <td><?php echo round($d['dealPrice'],4); ?></td>
                        <td>成交时间：</td>
                        <td><?php echo $d['createTime']; ?></td>
                        <td>点买类型：</td>
                        <td>即时买入</td>
                    </tr>
                    <tr>
                        <td>卖出价格：</td>
                        <td><?php echo round($d['sellPrice'],4); ?></td>
                        <td>成交时间：</td>
                        <td><?php echo $d['sellTime']; ?></td>
                        <td>备注：</td>
                        <td><?php echo $d['remarks']; ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="item">
                <span>交易盈亏分配</span>
                <a href="javascript:void(0);" class="f-right">方案状态：<span id="jszt" class="c-red">已结算</span></a>
            </div>
            <dl>
                <dt>交易盈亏：</dt>
                <dd class="ft26 c-color "><?php echo round($d['profit'],2); ?></dd>
                <dt>盈利分配：</dt>
                <dd class="ft26 c-color "><?php echo round($d['profitSelf'],2); ?></dd>
                <dt> </dt>
                <dd class="ft26 "> </dd>
            </dl>
            <div class="item">
                <span>管理费</span>
            </div>
            <dl>
                <dt>交易综合费：</dt>
                <dd class="ft26 "><?php echo $d['publicFee']; ?></dd>
                <dt>递延次数：</dt>
                <dd class="ft26 "> <?php if($d['delayDays'] > 2): ?><?php echo $d['delayDays'] - 2; else: ?>0<?php endif; ?> </dd>
                <dt>递延费用：</dt>
                <dd class="ft26 "><?php echo round($d['delayFeeSum']); ?></dd>
            </dl>
            
        </div>
    </section>
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
        <table border="0" cellspacing="0" cellpadding="0" class="popup-sell-tb table-sell">
            <tbody><tr>
                <td width="15%">交易品种：</td>
                <td width="35%">-</td>
                <td width="15%">卖出数量：</td>
                <td width="35%">-</td>
            </tr>
            <tr>
                <td>买入时间：</td>
                <td>-</td>
                <td>递延天数：</td>
                <td>-</td>
            </tr>
            <tr>
                <td>浮动盈亏</td>
                <td class="c-red" id="sell_profit">-</td>
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
        <div class="f-right"><b class="red">5秒</b>后自动跳转至卖出区，<a href="./policy/history" class="js-close-popup">立即跳转</a></div>
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
        <div class="f-right"><b class="red">5秒</b>后自动跳转至结算区，<a href="./policy/history" class="js-close-popup">立即跳转</a></div>
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
            <a class="btn btn-pri" href="./Member/BankCards">去绑定</a>
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
<!--三方协议-->
<div class="popup popup-mbig popup-agree" id="popup-agree-sanfangxieyi" style="display: none; top: 0px;margin-left: -450px;width: 900px;">
    <div class="popup-body group">
        <div class="agree-main">
            <h1 style="font-size: 22px;"><label>非常谋略</label>投资人与点买人参与沪深A股交易合作协议</h1>
            <div class="article">
                <p>投资人昵称：<span id="Investor_name"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;点买人昵称：<span id="Spotbuyer_name">spark007</span></p>
                <p>投资人UID:<span id="InverstorUID">-1</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;点买人UID:<span id="SpotbuyerUID">5662</span></p>
                <p>本次交易合作由<label id="m_basic_netName"><label>非常谋略</label></label>交易平台（以下简称“<label id="m_basic_netName"><label>非常谋略</label></label>”）子平台<label>非常谋略</label>（以下简称“<label>非常谋略</label>”）提供撮合服务。在<label>非常谋略</label>的撮合下，投资人与点买人协商一致，就双方秉承共享收益共担风险之原则，由点买人提供交易谋略，由投资人利用自有资金和账户进行交易合作事宜订立如下协议，以兹共守：</p>
                <p><strong>一、定义</strong></p>
                <p>本协议中，除非上下文另有解释，下列词语具有如下含义：</p>
                <p>1、<label>非常谋略</label>：指<label>非常谋略</label>平台，由<label>沈阳飞鸟网络科技有限公司</label>运营。该平台网址为：<label>www.feichangcl.com</label>，及本公司根据业务需要不时修改的网址。平台面向<label>非常谋略</label>用户提供包括但不限于沪深所A股、中金所期指、上期所贵金属期货交易合作信息发布、交易合作撮合、交易指令通讯、交易风控管理、交易清结算、资金支付（由支付机构提供）等服务的线上中介服务平台。</p>
                <p>2、支付机构：指<label>非常谋略</label>委托的为<label>非常谋略</label>用户提供资金划转、查询、结算等支付服务的非金融支付机构。本协议项下提供上述服务的机构为汇潮支付有限公司（以下简称“汇潮支付”）。</p>
                <p>3、点买人：指通过<label>非常谋略</label>注册成为点买人的用户，作为投资人的交易合作方，负责向投资人提供交易谋略的自然人。</p>
                <p>4、投资人：指通过<label>非常谋略</label>注册成为投资人的用户，作为点买人的交易合作方，负责按点买人交易谋略并利用自有资金和账户进行交易的自然人或法人。</p>
                <p>5、点买：指点买人向投资人发出买入指令。点买指令为即时买入。即时买入指点买人要求投资人在收到交易指令所在时点起，即时以涨停价委托买入指定数量的交易品种。</p>
                <p>6、点卖：指点买人向投资人发出卖出指令。点卖指令为即时卖出。即时卖出为点买人要求投资人在收到交易指令所在时点起，即时以跌停价委托卖出全部数量的交易品种。</p>
                <p>7、持仓时间：分为T＋1持仓与T＋1｜D持仓。T＋1持仓，交易品种持仓时间固定截至T＋1日；T＋1｜D持仓，从T＋1日开始，至T＋20日止，点买人在当日符合递延条件情况下，可于当日规定时间内，向投资人申请将交易品种持仓时间递延至下一交易日。递延按日申请逐日递延，单笔交易连续递延最大次数为20次（含系统自动递延）。</p>
                <p>8、最后持仓日：T＋1持仓的最后持仓日即为T＋1日，T＋1｜D持仓的最后持仓日为不符合递延条件所在交易日，或符合递延条件但点买人放弃递延所在交易日，或已达到最大递延申请次数无法再递延的所在交易日即T＋20日。</p>
                <p>9、浮动盈亏与浮动盈亏率：浮动盈亏＝（最新价－买入均价）＊成交数量。计算结果为正值（含零）时即为浮盈金额，计算结果为负值时即为浮亏金额。浮动盈亏率＝浮动盈亏／交易本金 ×100％。</p>
                <p>10、触发止盈率：当合作交易品种的浮动盈亏率达到特定数值时，由投资人即时卖出交易品种全部持有数量进行止盈，此时该浮动盈亏率即为触发止盈率。无论交易品种的持仓时间为T+1还是T＋1｜D，触发止盈率为＋20％，+30%，+50%，点买人可根据实际需求在发起点买指令时自行选择。</p>
                <p>11、触发止损：当合作交易品种的浮动盈亏率达到特定数值时，由投资人即时卖出交易品种全部持有数量进行止损，此时该浮动盈亏即为触发止损。触发止损率具体数值通过<label>非常谋略</label>点买页面公布，以点买人实际选择为准。</p>

                <p><strong>二、本次交易合作基本信息</strong></p>
                <p>1、交易本金： <u><span id="Trading_money">2000元</span></u></p>
                <p>2、交易数量： <u><span id="Tranding-amount">300手</span></u></p>
                <p>3、交易品种： <u><span id="Trading_product">建设银行[601939]</span></u></p>
                <p>4、持仓时间： <u><span id="Keeping_time">2017-06-19</span></u></p>
                <p>5、触发止盈额:<u><span id="Most_earnmoney">400</span></u></p>
                <p>6、触发止损额：<u><span id="Most_losemoney">200</span></u></p>
                <p>7、委托方式： <u><span id="Entrustment">五档最优成交</span></u></p>

                <p><strong>三、投资人权利与义务</strong></p>
                <p>1、投资人负责提供用于本次交易合作的账户和资金。</p>
                <p>2、投资人承担本次交易产生的佣金、印花税和过户费。</p>
                <p>3、投资人按照点买人的点买指令/点卖指令执行交易品种的买入/卖出。</p>
                <p>4、投资人买入的时间为T日上午9:30:00－11:30:00，下午13:00 – 14:55:00</p>
                <p>5、投资人卖出的时间为最后持仓日上午9:30:00－11:30:00，下午13:00 – 14:55:00</p>
                <p>6、最后持仓日盘中，当交易品种“浮盈金额≥触发止盈时”或”浮亏金额≤触发止损时”，视同点买人已向投资人发出即时卖出指令，投资人执行即时卖出指令的，点买人对此不持有异议。</p>
                <p>7、点买人必须在最后持仓日14:55:00前向投资人发出卖出指令，否则视同点买人违约，投资人有权在此后任意交易时间卖出并以实际卖出成交价结算，点买人对此不持有异议。</p>
                <p>8、交易品种T日盘中涨幅≥8％或盘中跌幅≤-8％时，投资人均有权不接受并不执行点买人的点买指令，直至交易品种涨跌幅回落到（-8％,+8%）区间，投资人方接受并执行点买人的点买指令，但当交易品种被<label>非常谋略</label>列入《点买风险警示股名单》中，投资人有权不接受点买人的点买指令。</p>
                <p>9、T＋1｜D持仓，从T＋1日开始，至T＋20日止，凡当日14:30:00－14:49:59内的任一时点满足（交易品种的浮动盈亏＋点买人冻结的履约保证金）/交易本金&gt;6％，投资人应接受点买人的递延申请,但当交易品种被微操盘列入《递延风险警示股名单》中，投资人有权不接受点买人的递延申请。如T＋1日至T＋20日点买人股票全天停牌，则符合上述递延条件下，投资人自动为点买人递延，且该次递延收取递延费。如点买人不愿意支付递延费，视为点买人放弃该股票复盘后的收益，全归投资人所有。</p>
                <p>10、投资人应通过<label>非常谋略</label>账户委托汇潮支付系统冻结履约保证金，并授权汇潮支付系统在交易盈利时按本协议相关约定，从冻结的履约保证金中支付点买人盈利分配款。投资人冻结履约保证金金额应不低于 “止盈值”之数额。</p>
                <p>11、交易亏损大于点买人冻结履约保证金，则超过的亏损部分由投资人自行承担。</p>
                <p>12、投资人有义务履行交易合作约定，如发生投资人单方面违约行为，双方约定按理论上持有交易品种到最后持仓日期间的最优价格作为点买人卖出结算价，如交易盈利从投资人汇潮支付账户划拨盈利分配，如交易亏损则由投资人自行全部承担，点买人不予赔付。</p>
                <p><strong>四、点买人权利与义务</strong></p>
                <p>1、点买人负责提供本次交易合作的交易谋略，即点买指令／点卖指令。</p>
                <p>2、点买人应在T日9:30:00－14:54:59交易时段内向投资人发出点买指令，但当交易品种T日盘中涨幅≥8％或盘中跌幅≤-8％时，或交易品种被<label>非常谋略</label>列入《点买风险警示股名单》中，点买人不可向投资人申请点买 。</p>
                <p>3、点买人应在最后持仓日9:30:00－14:54:59向投资人发出点卖指令，否则视同点买人违约。</p>
                <p>4、T＋1｜D 持仓，从T＋1日开始，至T＋20日止，凡当日14:30:00－14:49:59内的任一时点满足（交易品种的浮动盈亏＋点买人冻结的履约保证金）/交易本金&gt;6％，点买人可通过<label>非常谋略</label>向投资人 申请将交易品种持仓时间递延至下一交易日14:54:59。但当交易品种被<label>非常谋略</label>平台列入《递延风险警示股名单》中，点买人不可向投资人申请递延。</p>
                <p>5、点买人应按照《附件1：<label>非常谋略</label>点买人参与沪深A股交易涉及费用及资费标准》，通过向<label>非常谋略</label>支付交易综合费，补偿投资人交易过程中发生的佣金、印花税和过户费等。</p>
                <p>6、点买人应按照《附件1：<label>非常谋略</label>点买人参与沪深A股交易涉及费用及资费标准》，委托汇潮支付冻结履约保证金，作为履行交易亏损赔付义务的保证。</p>
                <p>7、点买人承诺授权汇潮支付系统在交易亏损时按本协议相关约定，从冻结的履约保证金中向投资人支付应承担的亏损赔付款。</p>
                <p><strong>五、交易清结算和盈亏分配约定</strong></p>
                <p>投资人和点买人共同委托<label>非常谋略</label>按照以下规则对本次交易合作进行清结算，双方同意以<label>非常谋略</label>的清结算数据作为双方盈亏分配的共同依据：</p>
                <p>1、买入成交金额与买入成交均价：买入成交金额来自交易所回报数据，不含佣金、印花税和过户费。买入成交均价＝买入成交金额／交易数量。</p>
                <p>2、卖出成交金额与卖出成交均价：卖出成交金额来自交易所回报数据，不含佣金、印花税和过户费。卖出成交均价＝卖出成交金额／交易数量。</p>
                <p>3、交易盈亏：交易盈亏＝卖出成交金额－买入成交金额。计算结果为正值（含零）时即为交易盈利，计算结果为负值时即为交易亏损&nbsp;。</p>
                <p>4、盈利分配：点买人与投资人共同享有本次交易盈利。点买人获得交易盈利90％的盈利分配。交易盈利扣减点买人盈利分配即为投资人的盈利分配</p>
                <p>5、亏损赔付：点买人与投资人共同承担本次交易亏损。交易亏损首先由点买人承担，点买人以所冻结的履约保证金为最高上限承担交易亏损赔付，交易亏损超过点买人所冻结的履约保证金部分由投资人承担。即，当：交易亏损≤点买人冻结履约保证金时，交易亏损由点买人全部承担，投资人无需承担；当：交易亏损＞点买人冻结履约保证金时，点买人以冻结履约保证金额为限承担交易亏损，超过部分由投资人承担。</p>
                <p><strong>六、特别约定</strong></p>

                <p>1、双方约定为从投资人收到点买人交易指令时点起,至投资人委托下单成交时点止，两时点间隔不超过60秒即为即时买入／即时卖出的时间范畴。根据《<label>非常谋略</label>服务协议》，从点买人发出交易指令被<label>非常谋略</label>确认时点起，至交易指令成交时点止，两时点时间间隔不超过90秒。但：1）深市收盘集合竞成交价为买卖申报一次性集中撮合产生，投资人收到点买人交易指令时点在 14:56:00之后的，不属于以上时间范畴。2）如因网络等原因造成交易成交结果回报时间延迟的，以实际交易成交时间为准。</p>
                <p>2、交易品种在最后持仓日因停牌、跌停或其他原因导致无法卖出的，双方约定由投资人于下一交易日连续竞价前5分钟内即时卖出，并保持卖出委托直至卖出全部数量的交易品种，如整个交易日皆因停牌或跌停无法卖出，则继续顺延至下一交易日，直至全部卖出并按照实际卖出成交价进行清结算。</p>
                <p>3、T＋1｜D持仓且非最后持仓日，为最大程度避免交易品种因停牌导致无法正常卖出，双方约定如交易品种当日进入<label>非常谋略</label>实时发布的《递延风险警示股名单》，点买人将不得申请递延， 投资人有权拒绝接受递延申请。</p>
                <p>4、点买人在分红转增股权登记日收盘后仍持有交易品种的，双方约定于送转股票及派发红利实际到达投资人账户后方进行结算；点买人在增发、配股股权登记日收盘后仍持有交易品种的，交易品种的增发、配股等权利均归属投资人，点买人不享有参与增发、配股权利。</p>
                <p>5、双方授权汇潮支付系统依据<label>非常谋略</label>的清结算数据，通过双方在汇潮支付系统冻结的履约保证金进行盈利分配款或亏损赔付款的划拨。即：交易盈利时，从投资人履约保证金中划款至点买人账户，划拨金额等于点买人享有的盈利分配额；交易亏损时，从点买人履约保证金中划款至投资人账户，划拨金额等于点买人承担的亏损赔付额。</p>
                <p>6、因<label>非常谋略</label>清结算数据错误造成双方盈利分配或亏损赔付出现数额差错的，双方约定在<label>非常谋略</label>规定时限内将异议提交至<label>非常谋略</label>，通过<label>非常谋略</label>向对方索取差额补差。如异议一方未在规定时限内将提交异议，视同放弃通过<label>非常谋略</label>向对方索取差额补差之权利。</p>
                <p>7、因不可抗力导致<label>非常谋略</label>系统故障，引发交易指令通讯失败或交易指令执行失败，双方约定以<label>非常谋略</label>系统恢复就近时间重新执行并以执行的最终结果进行交易清结算。</p>
                <p><strong>七、协议的签订、成立和生效</strong></p>
                <p>1、签订：本协议由投资人和点买人通过<label>非常谋略</label>以网络页面点击确认的方式签署。</p>
                <p>2、成立：本协议自点买人或投资人签订本协议之日（以两者孰后签订时间为准）成立。</p>
                <p>3、生效：本协议一经双方签订即生效。</p>
                <p><strong>八、其他事项</strong></p>
                <p>1、点买人和投资人必须通过本协议约定的方式或其他<label>非常谋略</label>认可的方式进行交易合作,否则由此引起的法律后果及违约责任由投资人或点买人自行承担。</p>
                <p>2、本协议项下的双方非个人隐私信息，如昵称等，均为公开信息。</p>
                <p>3、本协议项下双方交易信息归属<label>非常谋略</label>所有，<label>非常谋略</label>可根据自身经营需求商业化无偿使用。</p>
                <p>4、本协议受中华人民共和国法律管辖并按中华人民共和国法律解释。协议履行中发生争议，可由各方协商解决，协商不成可向仲裁委员会提请仲裁。</p>
                <p>&nbsp;</p>
            </div>
        </div>
    </div>
    <div class="btn-div">
        <a href="javascript:;" class="js-close-popup btn btn-grey">关闭</a>
    </div>
    <br>
</div>


<!--底部-->
<footer class="br-w100">
    <div class="footer_top">
        <a href="./company.html">关于我们</a>
        <a href="./contact.html">联系我们</a>
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
                    <span><a target="_blank" href="https://credit.cecdc.com"><img src="./public/static/home/img/cxwz.jpg"/></a></span>
                    <span class="br-fl"><a target="_blank" href="https://v.pinpaibao.com.cn/cert/site/?site=www.sm00009.com&at=business" ><img src="https://static.anquan.org/static/outer/image/aqkx_124x47.png"/></a></span>
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
<script src="__STATIC__/static/home/js/moblie/mui.min.js"></script>
<script src="__STATIC__/static/home/js/moblie/reg.js"></script>

<!--<script src="/public/static/home/js/buy.js"></script>-->
<script type="text/javascript">
	$("#selectByDate,#recent7,#recent30,#status-0,#status-7,#status-6,#status-5,#status-4,#status-3,#status-1,#status-r").click(function () {
                $(this).siblings("a").removeClass("active").end().addClass("active");
    });
    
    $("#selectByDate").click(function () {
                var x = $(this).position();
                $("#JchooseDate").css({ left: x.left, top: x.top + 35 }).show();
                timer = setTimeout(function () { $("#JchooseDate").hide(); }, 2000);
            });
    $("#JchooseDate").mouseenter(function () { window.clearTimeout(timer) }).mouseleave(function () { timer = setTimeout(function () { $("#JchooseDate").hide(); }, 300); });
	$("#JchooseDate").find(".left_gray,.right_gray").click(function () {
                var year = parseInt($("#yearSpan").html()) + ($(this).hasClass("left_gray") ? -1 : 1);
                choiseYear(year);
    });
      $("#JchooseDate").find(".left_gray,.right_gray").click(function () {
                var year = parseInt($("#yearSpan").html()) + ($(this).hasClass("left_gray") ? -1 : 1);
                choiseYear(year);
    });

    $(".c-color").each(function(i, o){
        var h = parseFloat($(o).html());
        if( h > 0){
            $(o).addClass("c-red");
        }else{
            $(o).addClass("c-green");
        }
    });

    //选中菜单
    setMunuSelected();
    function setMunuSelected(){
        var selIndex = 1;
        if("<?php echo $d['isFreetrial']; ?>" == "1"){
            selIndex = 2;
        }
        $("#menu-ul > li a").removeClass("active");
        $("#menu-ul > li").eq(selIndex).find("a").addClass("active");
    }
	
	//三方协议
	$("#popup-account-sanfang").click(function () {
                tool.popup.showPopup($("#popup-agree-sanfangxieyi"));
    });
</script>
</body>
</html>