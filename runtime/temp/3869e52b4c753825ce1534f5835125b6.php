<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:95:"/data/wwwroot/sm00009.sm00009.com/feichangcelue/application/index/view/index/mobile/news_t.html";i:1534831796;}*/ ?>
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
    </style>
</head>
<!--登录-->
<body class="reg_body">
<!--标题-->
<header class="ml_header mui-bar mui-bar-nav">
    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
    <h1 class="mui-title">财经资讯</h1>
</header>
<div class="wrapper">
    <h3 ><span class="article_title"></span></h3>
    <div class="timebox">
     <span class="article_create_time"></span>
    </div>
    <!--<div class="contbox">-->
        <!--在今天晚上亚运会游泳项目展开了多个单项的决赛，这其中包括了男子200米蝶泳决赛、女子100米女子仰泳决赛、男子100米仰泳决赛、女子200米仰泳决赛、女子1500米自由泳决赛和万众期待的200米自由泳决赛。之所以说200米自由泳决赛是万众瞩目是因为这个单项的决赛中有中国游泳的领军人物孙杨参加，同时和孙杨一起竞争的还有另一个中国运动员来自山东烟台的季新杰，季新杰在预赛中的总成绩是第七名，他的目标是冲击奖牌。-->
        <!--<img src="http://p0.ifengimg.com/pmop/2018/0819/E65253906D83619BE81BAEDB6256AFB74FDC2954_size41_w607_h403.jpeg" alt="">-->
        <!--在今天晚上亚运会游泳项目展开了多个单项的决赛，这其中包括了男子200米蝶泳决赛、女子100米女子仰泳决赛、男子100米仰泳决赛、女子200米仰泳决赛、女子1500米自由泳决赛和万众期待的200米自由泳决赛。之所以说200米自由泳决赛是万众瞩目是因为这个单项的决赛中有中国游泳的领军人物孙杨参加，同时和孙杨一起竞争的还有另一个中国运动员来自山东烟台的季新杰，季新杰在预赛中的总成绩是第七名，他的目标是冲击奖牌。-->
    <!--</div>-->
    <div class="contbox">

    </div>

</div>

<script src="./public/static/libs/jquery-2.2.0/jquery-2.2.0.min.js"></script>
<script src="./public/static/home/js/moblie/mui.min.js"></script>
<script src="./public/static/home/js/moblie/reg.js"></script>
<script>
         $.ajax({
             type:'POST',
             url:'<?php echo url("index/index/news_t"); ?>',
             dataType: 'json',
             success: function(data){
                 console.log(data);
                 $(".article_title").html(data.data.title);
                 $(".article_create_time").html(data.data.createTime);
                 $(".contbox").html(data.data.content);
             },
             error:function(data) {
                 console.log("失败");
             },
         });




</script>
</body>
</html>