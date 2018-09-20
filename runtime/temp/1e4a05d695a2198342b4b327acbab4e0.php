<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\phpStudy\WWW\feichangcelue/application/index\view\index\mobile\invite.html";i:1536660961;}*/ ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>非常谋略</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link href="__STATIC__/home/css/mui.min.css" rel="stylesheet" />
    <link href="__STATIC__/home/css/moblie/mobliecom.css" rel="stylesheet" />
</head>
<!--个人中心-推广赚钱-->

<body class="share_body bg_fff">
<header class="mui-bar mui-bar-nav bg_fff">
    <a class="color_red mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
    <h1 class="mui-title">推广赚钱</h1>
</header>
<div class="mui-content bg_fff">
    <div class="share_box">
        <!--控制器-->
        <div class="mui-segmented-control mui-segmented-control-inverted">
            <a class="mui-control-item mui-active" href="#item1">推广详情</a>
            <a class="mui-control-item" href="#item2">我的用户</a>
        </div>
        <!--内容-->
        <div class="">
            <!--item1-->
            <div id="item1" class="mui-control-content mui-active">
                <div class="topbg">
                    <?php if(!empty($data_statistics)): ?>
                    <div class="topBox mui-row">
                        <div class="top_item mui-col-xs-4 mui-col-sm-4 mui-text-center">
                            <h5 class="color_red"><?php echo $data_statistics['make_money']; ?>.00</h5>
                            <p>已赚佣金</p>
                        </div>
                        <!--<div class="top_item mui-col-xs-3 mui-col-sm-3 mui-text-center">-->
                            <!--<h5 class="color_red">6%</h5>-->
                            <!--<p>佣金比例</p>-->
                        <!--</div>-->
                        <div class="top_item mui-col-xs-4 mui-col-sm-4 mui-text-center">
                            <h5 class="color_red"><?php echo $data_statistics['selete_invite_num']; ?></h5>
                            <p>我的用户</p>
                        </div>
                        <div class="top_item mui-col-xs-4 mui-col-sm-4 mui-text-center">
                            <h5 class="color_red"><?php echo $data_statistics['selete_invite_num']; ?></h5>
                            <p>注册人数</p>
                        </div>
                    </div>
                    <?php endif; if(empty($data_statistics)): ?>
                    <div class="topBox mui-row">
                        <div class="top_item mui-col-xs-3 mui-col-sm-3 mui-text-center">
                            <h5 class="color_red">0.00</h5>
                            <p>已赚佣金</p>
                        </div>
                        <!--<div class="top_item mui-col-xs-3 mui-col-sm-3 mui-text-center">-->
                        <!--<h5 class="color_red">6%</h5>-->
                        <!--<p>佣金比例</p>-->
                        <!--</div>-->
                        <div class="top_item mui-col-xs-3 mui-col-sm-3 mui-text-center">
                            <h5 class="color_red">0</h5>
                            <p>我的用户</p>
                        </div>
                        <div class="top_item mui-col-xs-3 mui-col-sm-3 mui-text-center">
                            <h5 class="color_red">0</h5>
                            <p>注册人数</p>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>
                <div style="width: 100%;text-align: center;"><img class="ewm" src="<?php echo $share_code; ?>"/></div>

                <p class="color_black mui-text-center">推荐朋友扫码，成为您的用户</p>
                <div class="copyBox mui-row">
                    <div class="copy_l mui-pull-left">复制推广链接发给朋友 </br><span class="www"><?php echo $share_url; ?></span> </div>
                    <a id="copy_a" class="mui-pull-right" href="javascript:;">复制</a>
                </div>
                <h5 class="step_title color_black mui-text-center">只需一步 即可获得佣金</h5>
                <div class="step_box mui-clearfix">
                    <img class="step_img mui-pull-left" src="/public/static/home/img/moblie/thl.png"/>
                    <p class="mui-pull-left">通过以上方式邀请好友</p>
                    <p class="mui-pull-left">被邀请人成功操作点买策略</p>
                    <p class="mui-pull-left">获得佣金管理费的6%</p>
                </div>
            </div>
            <!--item2-->
            <div id="item2" class="mui-control-content">
                <div class="topbg">
                    <?php if(!empty($data_statistics)): ?>
                    <div class="topBox mui-row">
                        <div class="top_item mui-col-xs-4 mui-col-sm-4 mui-text-center">
                            <h5 class="color_red"><?php echo $data_statistics['make_money']; ?>.00</h5>
                            <p>已赚佣金</p>
                        </div>
                        <!--<div class="top_item mui-col-xs-3 mui-col-sm-3 mui-text-center">-->
                        <!--<h5 class="color_red">6%</h5>-->
                        <!--<p>佣金比例</p>-->
                        <!--</div>-->
                        <div class="top_item mui-col-xs-4 mui-col-sm-4 mui-text-center">
                            <h5 class="color_red"><?php echo $data_statistics['selete_invite_num']; ?></h5>
                            <p>我的用户</p>
                        </div>
                        <div class="top_item mui-col-xs-4 mui-col-sm-4 mui-text-center">
                            <h5 class="color_red"><?php echo $data_statistics['selete_invite_num']; ?></h5>
                            <p>注册人数</p>
                        </div>
                    </div>
                    <?php endif; if(empty($data_statistics)): ?>
                    <div class="topBox mui-row">
                        <div class="top_item mui-col-xs-3 mui-col-sm-3 mui-text-center">
                            <h5 class="color_red">0.00</h5>
                            <p>已赚佣金</p>
                        </div>
                        <!--<div class="top_item mui-col-xs-3 mui-col-sm-3 mui-text-center">-->
                        <!--<h5 class="color_red">6%</h5>-->
                        <!--<p>佣金比例</p>-->
                        <!--</div>-->
                        <div class="top_item mui-col-xs-3 mui-col-sm-3 mui-text-center">
                            <h5 class="color_red">0</h5>
                            <p>我的用户</p>
                        </div>
                        <div class="top_item mui-col-xs-3 mui-col-sm-3 mui-text-center">
                            <h5 class="color_red">0</h5>
                            <p>注册人数</p>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="share_people">
                    <?php if(!empty($select_all_data)): ?>
                    <div class="share_people_top mui-row mui-text-center">
                        <div class="mui-col-xs-4">用户名</div>
                        <div class="mui-col-xs-4">注册手机</div>
                        <div class="mui-col-xs-4">注册时间</div>
                    </div>
                    <?php if(is_array($select_all_data) || $select_all_data instanceof \think\Collection || $select_all_data instanceof \think\Paginator): $i = 0; $__LIST__ = $select_all_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <div class="share_people_top mui-row mui-text-center">
                        <div class="mui-col-xs-4"><?php echo $vo['username']; ?></div>
                        <div class="mui-col-xs-4"><?php echo $vo['mobile']; ?></div>
                        <div class="mui-col-xs-4"><?php echo $vo['createTime']; ?></div>
                     </div>
                    <?php endforeach; endif; else: echo "" ;endif; endif; if(empty($select_all_data)): ?>
                    <div class="share_people_bot">
                        <p class="data_empty mui-text-center">暂无数据</p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!---js---->

<script src="__STATIC__/home/js/moblie/mui.min.js"></script>
<script src="__STATIC__/home/js/moblie/jquery.js"></script>
<script src="__STATIC__/home/js/moblie/clipboard.min.js"></script>
<script type="text/javascript">
    mui.init({
        swipeBack: true //启用右滑关闭功能
    });
    var clipboard = new Clipboard('#copy_a', {
        text: function() {
            return '<?php echo $share_url; ?>';
        }
    });

    clipboard.on('success', function(e) {
        mui.toast('复制成功！')
    });

    clipboard.on('error', function(e) {
        mui.toast('此浏览器不支持自动复制！请手动输入！');
    });
</script>
<script type="text/javascript">

</script>
</body>

</html>