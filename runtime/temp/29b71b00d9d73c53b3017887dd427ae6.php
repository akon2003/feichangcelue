<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:74:"D:\phpStudy\WWW\feichangcelue/application/index\view\ucenter\security.html";i:1543645828;s:68:"D:\phpStudy\WWW\feichangcelue/application/index\view\public\top.html";i:1543649029;s:76:"D:\phpStudy\WWW\feichangcelue/application/index\view\public\member_left.html";i:1543645380;s:71:"D:\phpStudy\WWW\feichangcelue/application/index\view\public\footer.html";i:1543670644;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>尚牛在线</title>
</head>
<body class="membercenter logged-in">
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
<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/member.css"/>

<!--个人中心-充值-->
<div class="br-content">
<div class="w1200">
	<!--主体-->
<section class="page-main page-personal">
    <div class="container clearfix">
    	<!--public左边-->
    	
        <aside class="col-left">
            <div class="userinfo">
            	<form name="user_head" id="user_head">
					<input type="file" name="myfile222" id="img_upload" />
					<div class="img_download">
						<!--<img class="user-pic" id="headImg" src="<?php echo (isset($member['headImg']) && ($member['headImg'] !== '')?$member['headImg']:'/public/static/home/img/user.png'); ?>" >-->
						<img class="user-pic"  src="__STATIC__/home/img/user.png" >
					</div>
				</form>
                <!--<img src="/public/static/home/img/user.png" alt="" class="user-pic">-->
                <p class="user-info">Hi，<strong id="shared_layout_mem_lnm"><?php echo $_SESSION['member']['username']; ?></strong></p>
                <div class="iconrow">
                   <a href="./security.html"><span class="user-2"></span></a>
                    <a href="./security.html"><span class="user-3"></span></a>
                    <a href="./security.html"><span class="user-4"></span></a>
                </div>
            </div>
            <h4 class="new-head-line"><span class="user-5"></span>会员中心</h4>
            <nav id="personal-nav" class="left-nav">
                <ul>

                    <li class=""><a href="./index.html">我的首页&nbsp;<span class="mem_gt">&gt;</span></a></li>
                    <li class=""><a href="./bankcards.html">银行卡管理&nbsp;<span class="mem_gt">&gt;</span></a></li>
                    <li class=""><a href="./security.html">账户安全&nbsp;<span class="mem_gt">&gt;</span></a></li>
					<li class=""><a href="./payment.html">充值&nbsp;<span class="mem_gt">&gt;</span></a></li>
					<li class=""><a href="./withdraw.html">提现&nbsp;<span class="mem_gt">&gt;</span></a></li>
                    <li class=""><a href="./agent.html" style="display: none;">推广赚钱&nbsp;<span class="mem_gt">&gt;</span></a></li>
                </ul>
            </nav>
        </aside>


<script src="__STATIC__/home/js/moblie/jquery.ajaxfileupload.js"></script>
<!--<script type="text/javascript">-->
	<!---->
	<!--$(function() {-->
		<!--/**-->
		 <!--* active-->
		 <!--*/-->
			<!--//console.log(window.location.pathname)-->
		<!--$('#personal-nav li').removeClass('active');-->

		<!--//遍历-->
		<!--$('#personal-nav li>a').each(function () {-->
			<!--if ($($(this))[0].getAttribute('href') == String(window.location.pathname)) {-->
				<!--$(this).parent().addClass('active');-->
			<!--}-->
		<!--});-->
		<!---->
		<!---->
		<!--/**-->
		 <!--* 上传头像-->
		 <!--*/-->
        <!--$('#img_upload').AjaxFileUpload({-->
			<!--//处理文件上传操作的服务器端地址-->
			<!--//上传图片，返回图片地址-->
			<!--action: './index/index/doImgUpload',-->
			<!--onComplete: function(filename, resp) { //服务器响应成功时的处理函数-->
				<!--if(resp.code == '0') {-->
					<!--$('#headImg').attr('src', resp.data);-->
					<!--var params = {};-->
					<!--params['headImg'] = resp.data;-->
					<!--//保存图片到数据库，分两个地址是为了在很多地方公用-->
					<!--$.post("./index/ucenter/savePeopleImg", params, function(data) {-->
						<!--if(data.code == '0') {-->
							<!--tool.popup_err_msg("修改成功");-->
						<!--} else {-->
							<!--tool.popup_err_msg(data.msg);-->
						<!--}-->
					<!--}, 'json');-->
				<!--} else {-->
					<!--tool.popup_err_msg(resp.msg );-->
				<!--}-->
			<!--}-->
		<!--});-->
		<!---->
		<!---->
		<!---->
	<!--});-->

<!--</script>-->
        <!--右边-->
<div id="page_member_security" class="col-main">
    <div class="personal-main">
        <h2>账户安全</h2>

        <ul class="list-personal-security">
            <li class="group">
                <div class="security-level security-level-middle">
                    <label>安全级别: </label>
                    <?php if($realName == '' || $IDNumber == ''): ?>
                    <div class="bar-wrapper">
                        <div id="mem_security_lvl" class="bar"
                             <?php if($realName == '' || $IDNumber == ''): ?> style="width: 65%;"<?php else: ?> style="width:100%;"<?php endif; ?> >
                    </div>
                    </div>
                    <label class="safe-ranke" id="mem_security_lv">中</label>
                    <span class="tip" id="safe_tip">建议您完善全部安全设置，以保障账户及资金安全</span>
                    <?php else: ?> 
                    <div class="bar-wrapper">
                        <div id="mem_security_lvl" class="bar" style="width: 100%;"></div>
                    </div>
                    <label class="safe-ranke" id="mem_security_lv">高</label>
                    <?php endif; ?>
                    
                </div>
            </li>
            <li class="group">
                <div class="col-3 security-name"><i <?php if($realName == '' || $IDNumber == ''): ?>class='icon'<?php else: ?>class='icon icon-checkmark2'<?php endif; ?> id="id_card_icon"></i>实名认证</div>
                <div class="col-5 security-desc" id="身份证"><?php if($realName == '' || $IDNumber == ''): ?>未认证<?php else: ?> <?php echo $IDNumber; endif; ?></div>
                <div class="col-4 security-action"><a href="javascript:;" name="realnameAuth" id="btn_auth_name" onclick="form_validation = false;">
                    <?php if($realName == '' || $IDNumber == ''): ?>认证<?php else: ?> 修改<?php endif; ?>
                </a></div>
            </li>
            <li class="group">
                <div class="col-3 security-name"><i class="icon icon-checkmark2" id="id_phone_icon"></i>绑定手机</div>
                <div class="col-5 security-desc" id="手机号i"><?php echo $mobile; ?></div>
                <!--<div class="col-4 security-action"><a id="umA" href="javascript:;" data-popup="popup-edit-phone" onclick="form_validation = false;">修改</a></div>-->
            </li>
            
            <!--<li class="group">-->

                <!--<div class="col-3 security-name"><i class="icon icon-checkmark2" id="id_pwd_icon"></i>登录密码</div>-->
                <!--<div class="col-5 security-desc">登录网站时需要输入的密码</div>-->
                <!--<div class="col-4 security-action"><a href="javascript:;" id="editPwd" class="js-show-popup" data-popup="popup-edit-login-pwd" onclick="form_validation = false;">修改</a></div>-->
            <!--</li>-->
            
        </ul>
    </div>
</div>

    </div>
</section>
	
	
	
	
	
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
                <li style="text-align:left;">如遇到问题，请联系客服 <label id="m_basic_mobile"><?php echo $phone; ?></label></li>
            </ol>
            <p>为了保障您的账户安全，请先绑定银行卡</p>
        </div>
        <div class="btn-row group">
            <a class="btn btn-pri" href="./bankcards.html">去绑定</a>
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
                
                <li style="text-align:left;">如遇到问题，请联系客服 <label id="m_basic_mobile"></label></li>
            </ol>
            <p>为了保障您的账户安全，请先进行实名认证</p>
        </div>
        <div class="field-row group">
            <label>真实姓名：</label>
            <div class="field-val"><input id="姓名i" type="text" class="text" value=""></div>
        </div>
        <div id="zsxm_err1" class="error-wrapper" style="margin-left:100px; display:none"><div><i class="icon icon-x-altx-alt"></i>未填写姓名</div></div>
        <div class="field-row group">
            <label>身份证号：</label>
            <div class="field-val">
                <div class="field-val">
                    <input id="身份证i" type="text" class="text" value="">
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

<!--更改手机号-->
<div class="popup" id="popup-edit-phone" style="display: none;top: 0px;">
        <div class="popup-header group">
            <h2>更换手机</h2>
            <a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
        </div>
        <div class="popup-body group">
            <form action="#">
                <div class="field-row group">
                    <label>当前手机号：</label>
                    <div class="field-val" id="手机号"><?php echo $mobile; ?></div>
                </div>
                <div class="field-row group">
                    <label>验证码：</label>
                    <div class="field-val capcha-wrapper capcha-count-down">
                        <input type="text" id="绑定手机校验码i" placeholder="请输入校验码" class="text" onkeyup="    this.value = this.value.replace(/\D/g, '')" onafterpaste="    this.value = this.value.replace(/\D/g, '')">
                        <a id="sms_SendAuthAA" class="btn-get-capcha active" href="javascript:void(0);">获取校验码</a>
                        <div class="time-counter"><span>90</span></div>
                    </div>
                </div>
                <div id="bdsjjym_err1" class="error-wrapper" style="margin-left:100px; display:none"><div><i class="icon icon-x-altx-alt"></i><span>请填写准确的验证码</span></div></div>
                <div class="btn-row group">
                    <a class="btn btn-pri" href="javascript:;" id="edit-phone-submit-next">确定</a>
                    <a class="btn btn-sec js-close-popup" href="javascript:;">取消</a>
                </div>
                <input id="hiddenText" type="text" style="display:none" />
            </form>
        </div>
    </div>
<!--绑定手机-->   
<div class="popup" id="popup-edit-phone-2" style="display: none;top: 0px;">
        <div class="popup-header group">
            <h2>绑定手机</h2>
            <a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
        </div>
        <div class="popup-body group">
            <form action="#">
                <div class="field-row group">
                    <label>新手机号：</label>
                    <div class="field-val"><input id="新手机号i" class="text" onkeyup="    this.value = this.value.substr(0, 11).replace(/\D/g, '')" onafterpaste="    this.value = this.value.substr(0, 11).replace(/\D/g, '')"></div>
                </div>
                <div id="bdsjjym_err2" class="error-wrapper" style="margin-left:100px; display:none"><div><i class="icon icon-x-altx-alt"></i>请填写准确的手机号</div></div>
                <div class="field-row group" id="newPhone">
                    <label>验证码：</label>
                    <div class="field-val capcha-wrapper capcha-count-down">
                        <input id="新手机号校验码i" type="text" name="capcha" placeholder="请输入短信校验码" class="text" onkeyup="this.value = this.value.replace(/\D/g, '')" onafterpaste="    this.value = this.value.replace(/\D/g, '')">
                        <a id="sms_SendAuthAA2" class="btn-get-capcha active" href="javascript:;">获取校验码</a>
                        <div class="time-counter" id="newPhoneSpeed" style="display: none;"><i class="icon icon-caret-left"></i><span>90</span></div>
                    </div>
                </div>
                <div id="bdsjjym_err3" class="error-wrapper" style="margin-left:100px; display:none"><div><i class="icon icon-x-altx-alt"></i><span>请填写准确的验证码</span></div></div>
                <div class="btn-row group">
                    <a id="update_mobileA" class="btn btn-pri" href="javascript:void(0)">确定</a>
                    <a class="btn btn-sec js-close-popup" href="javascript:;">取消</a>
                </div>
            </form>
        </div>
    </div>
<!--/#popup-edit-login-pwd-修改登录密码-->
<div class="popup" id="popup-edit-login-pwd" style="display: none;top: 0px;">
        <div class="popup-header group">
            <h2>登录密码</h2>
            <a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
        </div>
        <div class="popup-body group">
            <form action="#" style="padding: 0 0 10px 0;">
                <div class="field-row group">
                    <label>当前登录密码：</label>
                    <div class="field-val"><input id="当前登录密码i" type="password" class="text"></div>
                </div>
                <div id="bdsjjym_err4" class="error-wrapper" style="margin-left:100px; display:none"><div><i class="icon icon-x-altx-alt"></i>请正确填写当前密码</div></div>
                <div class="field-row group">
                    <label>新密码：</label>
                    <div class="field-val"><input id="新密码i" type="password" class="text"></div>
                </div>
                <div id="bdsjjym_err5" class="error-wrapper" style="margin-left:100px; display:none"><div><i class="icon icon-x-altx-alt"></i>密码长度不能少于6位</div></div>
                <div class="field-row group">
                    <label>确认密码：</label>
                    <div class="field-val"><input id="确认密码i" type="password" class="text"></div>
                </div>
                <div id="bdsjjym_err6" class="error-wrapper" style="margin-left:100px; display:none"><div><i class="icon icon-x-altx-alt"></i>两次密码不一致</div></div>
                <div id="bdsjjym_err7" class="error-wrapper" style="margin:20px 0 0 140px; display:none; color:#e8331b;">000</div>
                <div class="btn-row group">
                    <a id="登录密码修改A" class="btn btn-pri" href="javascript:void(0)">确定</a>
                    <a class="btn btn-sec js-close-popup" href="javascript:;">取消</a>
                </div>
            </form>
        </div>
    </div>
    <!--valid-img-->
<!--<div class="popup" id="popup-valid-img">-->
    <!--<div class="popup-header group">-->
        <!--<h2>请先输入验证码</h2>-->
        <!--<a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>-->
    <!--</div>-->
    <!--<div class="popup-body group">-->
        <!--<form action="#">-->
            <!--<div class="field-row group">-->
                <!--<label>验证码：</label>-->
                <!--<div class="field-val" style="width:350px">-->
                    <!--<input type="text" class="text" style="width: 80px; float: left; padding: 6px 10px;" placeholder="4位验证码" name="txt_valid_code" id="txt_valid_code">-->
                    <!--<img src="./captcha.html" id="forgot_passImg" style="height:35px;float:left;margin-right:5px;">-->
                   	<!--<a id="forgot_passImgA" href="javascript:void(0)" onclick="$('#forgot_passImg').attr('src', '/index.php/captcha.html');" style="color:#E01923">看不清楚？</a>-->
                <!--</div>-->
            <!--</div>-->
            <!--<div id="valid_code" class="error-wrapper" style="display:none; margin-top:5px;"><div><i class="icon icon-x-altx-alt"></i><span>输入的验证码有误！</span></div></div>-->

            <!--<div class="btn-row group">-->
                <!--<a class="btn btn-pri js-close-popup" style="display:none;" href="javascript:;">确定</a>-->
            <!--</div>-->
            <!--<input id="hiddenText" type="text" style="display:none" />-->
        <!--</form>-->
    <!--</div>-->
<!--</div>-->

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
                    <span style="width: 128px; height: 47px;"><a target="_blank" href="http://baike.shuidi.cn/companywiki-d99681af981734f8b1965f371ebd03fb.html"><img src="./public/static/home/img/dishui.jpg" style="width: 100%;height: 100%;"/></a></span>
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


<script src="__STATIC__/home/js/general.js"></script>
<script src="__STATIC__/home/js/security.js"></script>
<script type="text/javascript">
	$(function(){security.init()});
	var mobileTrue='<?php echo $mobile1; ?>';
</script>
</body>
</html>
