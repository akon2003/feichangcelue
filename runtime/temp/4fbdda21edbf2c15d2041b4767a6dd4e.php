<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:93:"/data/wwwroot/sm00009.sm00009.com/feichangcelue/application/index/view/index/mobile/news.html";i:1536301640;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>尚牛在线</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link href="./public/static/home/css/mui.min.css" rel="stylesheet" />
    <link href="./public/static/home/css/moblie/login.css" rel="stylesheet" />
    <style>
        .red{
            color: red;
        }
        .pagination{text-align:center;margin-top:20px;margin-bottom: 20px;}
        .pagination li{margin:0px 10px; border:1px solid #e6e6e6;padding: 3px 8px;display: inline-block;}
        .pagination .active{background-color: #dd1a20;color: #fff;}
        .pagination .disabled{color:#aaa;}
        .dept_select{min-width: 200px;}
        .shade {
            position: absolute;
            display: none;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.55);
        }

        .shade div {
            width: 300px;
            height: 200px;
            line-height: 200px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -100px;
            margin-left: -150px;
            background: white;
            border-radius: 5px;
            text-align: center;
        }

        .a-upload {
            padding: 4px 10px;
            height: 20px;
            line-height: 20px;
            position: relative;
            cursor: pointer;
            color: #888;
            background: #fafafa;
            border: 1px solid #ddd;
            border-radius: 4px;
            overflow: hidden;
            display: inline-block;
            *display: inline;
            *zoom: 1
        }

        .a-upload input {
            position: absolute;
            font-size: 100px;
            right: 0;
            top: 0;
            opacity: 0;
            filter: alpha(opacity=0);
            cursor: pointer
        }

        .a-upload:hover {
            color: #444;
            background: #eee;
            border-color: #ccc;
            text-decoration: none
        }
        .img_div{min-height: 100px; min-width: 100px;}
        .isImg{width: 120px; height: 120px; position: relative; float: left; margin-left: 10px;}
        .removeBtn{position: absolute; top: 0; right: 0; z-index: 11; border: 0px; border-radius: 50px; background: red; width: 22px; height: 22px; color: white;}
        .shadeImg{position: absolute;
            display: none;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 15;
            text-align: center;
            background: rgba(0, 0, 0, 0.55);}
        .showImg{width: 400px; height: 500px; margin-top: 140px;}


    </style>

</head>
<!--登录-->
<body class="reg_body">
<!--标题-->
<header class="ml_header mui-bar mui-bar-nav">
    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
    <h1 class="mui-title">财经资讯</h1>
</header>
<!--主体-->
<div class="mui-content" style="margin: 10px 20px 0;">
<?php if(!empty($res)): ?>
    <ul>
        <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li>
            <div class="item clearfix">
                <a class="get_onclik" id="get_onclik_<?php echo $vo['id']; ?>">
                    <div class="img_box">
                        <img src="/public/static/admin/img/avatar.jpg" alt="">
                    </div>
                    <div class="right_cont">
                        <div class="cont_title"><?php echo $vo['title']; ?></div>
                        <div class="time_box"><?php echo $vo['createTime']; ?></div>
                    </div>
                </a>
            </div>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <?php endif; ?>
    <?php echo $page; ?>
</div>

<script src="./public/static/libs/jquery-2.2.0/jquery-2.2.0.min.js"></script>
<script src="./public/static/home/js/moblie/mui.min.js"></script>
<script src="./public/static/home/js/moblie/reg.js"></script>
<script >
    $(".get_onclik").click(function () {
        var article_id = $(this)[0].id.split('_')[2];
       
        $.ajax({
            type:'POST',
            url:'<?php echo url("index/index/new_id"); ?>',
            dataType: 'json',
            data:{
                "article_id":article_id
            },
            success: function(data){
                console.log(data);
                window.location.href="<?php echo url('index/index/news_t'); ?>";
            },
            error:function(data) {
                console.log("获取失败");
            },
        });

    });



</script>
</body>
</html>