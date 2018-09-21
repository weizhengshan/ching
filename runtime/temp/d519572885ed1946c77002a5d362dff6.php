<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"D:\chinling\public/../application/index\view\index\index.html";i:1537348313;s:54:"D:\chinling\public/../application/index\view\base.html";i:1537263042;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>陕西秦岭云电子商务有限公司</title>
    <link rel="shortcut icon" href="<?php echo $logo[3]; ?>" type="image/x-icon">
    <meta name="keywords" content="<?php echo $web['site']; ?>">
    <meta name="description" content="<?php echo $web['describe']; ?>">
    <meta name="author" content="陕西秦岭云电子商务有限公司"/>
    <link href="__STATIC__/index/news/css/public.css" rel="stylesheet" />
    <link href="__STATIC__/index/news/css/animate.min.css" rel="stylesheet">
    <link href="__STATIC__/index/news/css/swiper.min.css" rel="stylesheet">
    <link href="__STATIC__/index/news/css/index.css" rel="stylesheet" />
</head>
<body>
<!--头部 -->
<div id="header" class="fixed header_on">
    <div class="header">
        <h1 class="logo">
            <a href="">
                <img src="__STATIC__/index/news/img/logo.png" height="50">
            </a>
        </h1>
        <div class="common">
            <ul class="nav">
                <?php if(is_array($topdata) || $topdata instanceof \think\Collection || $topdata instanceof \think\Paginator): $i = 0; $__LIST__ = $topdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['action'] == $name): ?>
                    <li><a href="<?php echo url($vo['action']); ?>" class="primary"><?php echo $vo['type_name']; ?></a></li>
                <?php else: ?>
                    <li><a href="<?php echo url($vo['action']); ?>" ><?php echo $vo['type_name']; ?></a></li>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <li><a href="" style="cursor: default;"><span class="icon-phone"></span>400-029-1005</a></li>
            </ul>
        </div>
    </div>
</div>
<!--模板替换-->

<div id="banner">
    <div id="lunbo_pc"  class="swiper-container  lunbo_app_or_pc_show">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img   src="__STATIC__/index/news/img/lunbo_2.jpg"/>
            </div>
            <div class="swiper-slide">
                <img   src="__STATIC__/index/news/img/lunbo_1.jpg"/>
            </div>
            <div class="swiper-slide">
                <img   src="__STATIC__/index/news/img/lunbo_3.jpg"/>
            </div>
            <div class="swiper-slide">
                <img   src="__STATIC__/index/news/img/lunbo_4.jpg"/>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<div id="traceability">
    <dl>
        <dd>
            <div class="contain">
                <img  class="donut donut-front" src="__STATIC__/index/news/img/process_1.jpg" alt="">
                <!--<img class="donut donut-front" src="__STATIC__/index/news/img/process_1.png" alt="Donut front" />-->
            </div>
            <span>农产品种植</span>
        </dd>
        <dd>
            <div class="contain">
                <img class="donut donut-front" src="__STATIC__/index/news/img/process_2.jpg" alt="Donut front" />
                <!--<img class="donut donut-back" src="__STATIC__/index/news/img/process_.png" alt="Donut back" />-->
            </div>
            <span>农产品电子商务</span>
        </dd>
        <dd>
            <div class="contain">
                <img class="donut donut-front" src="__STATIC__/index/news/img/process_3.jpg" alt="Donut front" />
                <!--<img class="donut donut-back" src="__STATIC__/index/news/img/process_.png" alt="Donut back" />-->
            </div>
            <span>农产品智慧仓储</span>
        </dd>
        <dd>
            <div class="contain">
                <img class="donut donut-front" src="__STATIC__/index/news/img/process_4.jpg" alt="Donut front" />
                <!--<img class="donut donut-back" src="__STATIC__/index/news/img/process_.png" alt="Donut back" />-->
            </div>
            <span>农产品冷链配送</span>
        </dd>
        <dd>
            <div class="contain">
                <img class="donut donut-front" src="__STATIC__/index/news/img/process_5.jpg" alt="Donut front" />
                <img class="donut donut-back" src="__STATIC__/index/news/img/process_5.png" alt="Donut back" />
            </div>
            <span>农产品大数据</span>
        </dd>
    </dl>
</div>
<div>

</div>
<div id="culture">
    <div class="container">
        <h2>企业文化</h2>
        <div>
            <p style="box-sizing: inherit; margin-bottom: 0.8em; color: rgb(42, 51, 60); text-align: center;">
                <span style="box-sizing: inherit; font-size: 18px; font-family: 微软雅黑;">
                    <strong style="box-sizing: inherit;">致力于成为农村电商行业的引领者</strong>
                </span>
            </p>
            <p style="box-sizing: inherit; margin-bottom: 0.8em; color: rgb(42, 51, 60); ">
                <span style="box-sizing: inherit; font-family: 微软雅黑 ">&nbsp;&nbsp;&nbsp;&nbsp;
                    秦岭云投资建设的中国秦岭农产品电子商务产业园，是我省首个由企业主导投资并运营的农产品电商综合体项目，
                    也是我省县域集运营、加工、仓储、物流于一体建设全最完善的全产业链电商生态模式。
                        秦岭云在西安和杭州拥有运营和技术研发团队，
                    公司秉承“绿色生态、健康生活”的经营理念，以“推动传统农业互联网产品优1化升级”为宗旨。
                    建设出从“产品基地”到“平台卖家”到“智慧物流”到“目标客户”的全产业链电子商务模式。
                </span>
            </p>
        </div>
    </div>
    <div class="about-img">
        <img src="__STATIC__/index/news/img/index_2.jpg" alt="" class="cover-image">
    </div>
</div>
<div id="share">
    <section class="floor-section settled-in-company">
        <h2>八大共享服务</h2>
        <ul class="settle-main">
            <li class="settle-item bangon">
                <div class="null null-huanqiu"></div>
                <!--共享办公-->
            </li>
            <li class="settle-item cangchu">
                <!--共享仓储-->
                <div class="null null-huanqiu"></div>
            </li>
            <li class="settle-item wuliu">
                <!--共享物流-->
                <div class="null null-huanqiu"></div>
            </li>
            <li class="settle-item jinrong">
                <!--共享金融-->
                <div class="null null-huanqiu"></div>
            </li>
            <li class="settle-item shuju">
                <!--共享数据-->
                <div class="null null-huanqiu"></div>
            </li>
            <li class="settle-item jiaotong">
                <!--共享交通-->
                <div class="null null-huanqiu"></div>
            </li>
            <li class="settle-item chanpin">
                <!--共享产品-->
                <div class="null null-huanqiu"></div>
            </li>
            <li class="settle-item fuwu">
                <!--共享服务-->
                <div class="null null-huanqiu"></div>
            </li>
        </ul>
    </section>
</div>


<!--底部-->
<div id="footer">
    <div class="footer">
        <div class="container">
            <div class="u-container-box">
                <div class="sidebar">
                    <h3>
                        关注我们<span>获取秦岭云最新资讯</span>
                    </h3>
                    <ul>
                        <li>
                            <div class="app-logo"></div>
                            <span>秦岭云微博</span>
                            <div class="float">
                                <div class="app-ma"></div>
                                <div class="arrow"></div>
                            </div>
                        </li>
                        <li>
                            <div class="wei-logo"></div>
                            <span>秦岭云公众号</span>
                            <div class="float">
                                <div class="wei-ma"></div>
                                <div class="arrow"></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="about-us">
                    <h3>关于我们</h3>
                    <a href="<?php echo url('index/about/show'); ?>">公司介绍</a>
                    <a href="main_news.html">新闻动态</a>
                    <a href="<?php echo url('index/news/recruit'); ?>">加入我们</a>
                </div>
                <div class="contact-us">
                    <h3>联系我们</h3>
                    <a href="">秦岭云电子商务有限公司</a>
                    <a style="cursor:default;">电话：<?php echo $website['phone']; ?></a>
                    <a style="cursor:default;">地址：<?php echo $website['address']; ?></a>
                </div>
            </div>
        </div>
        <p class="copyright"> <?php echo $website['icp']; ?> </p>
    </div>
    <div id="message" class="message" style="display: block;">
        <a href="<?php echo url('index/leaving/index'); ?>">
            <div id="message_btn">
                <span id="message_btn_icon" class="message_icon"></span>
                <span id="message_btn_text">服务留言</span>
            </div>
        </a>
    </div>
    <div id="hm-t-go-top" class="hm-t-go-top" onclick="pageScroll()">
        <img src="__STATIC__/index/news/img/goTop.png">
    </div>
</div>
</body>
<script src="__STATIC__/index/news/js/jquery-1.8.3.min.js"></script>
<script src="__STATIC__/index/news/js/swiper-3.4.2.min.js"></script>
<script src="__STATIC__/index/news/js/swiper.animate1.0.2.min.js"></script>
<script src="__STATIC__/index/news/js/common.js"></script>
<script src="__STATIC__/index/news/js/index.js"></script>
</html>