<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"D:\chinling\public/../application/index\view\about\show.html";i:1537430066;s:54:"D:\chinling\public/../application/index\view\base.html";i:1537263042;}*/ ?>
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

<section>
    <h1 class="header-banner">
        致力于成为农村电商行业的引领者
    </h1>
</section>
<div id="main_about_us">
    <section class="about-me">
        <h3> 关于秦岭云</h3>
        <div class="container" style="padding-top: 10px;">
            <img src="__STATIC__/index/news/img/qy_guanyu.jpg" width="500" height="330" alt="秦岭云电商">
            <div class="text-outer">
                <p style="font-size: 16px;">
                    陕西秦岭云电子商务有限公司，成立于2015年6月。公司位于陕西省镇安县午峪工业集中区，总占地60亩，拥有生产及办公配套35000平方米。2017年5月，公司获得龙鼎资本7000万元人民币的A轮投资，企业估值达3.7亿元人民币。公司旗下拥有中国秦岭农产品电子商务产业园、秦岭云电商众创空间、陕西合曼农业科技有限公司三大产业模块，各产业模块总投资超过4亿元人民币，是我省农业电商龙头企业。
                    &nbsp;&nbsp; &nbsp;
                </p>
                <p style="font-size: 16px;">
                    秦岭云专注区域传统农业互联网产品升级优化，提升本土农产品在全国电子商务领域的影响力，填充本地电商企业的空白。打通精准扶贫农产品上行渠道，将会带动贫困人口超过30000人，带动就创业3500人次以上。
                </p>
                <p style="font-size: 16px;">
                    公司始终以“兴农强民”为已任，坚持“承诺、诚信、奉献”的态度，通过高端的科研技术与现代管理理念、专业化的市场运作，为客户提供高质量产品和优质服务体系。
                </p>
            </div>
        </div>
    </section>
    <section class="big-news">
        <h3>大事记</h3>
        <div class="container">
            <ul>
                <li class="left fixed">
                    <div class="inner">
                        <label></label>
                        <p></p>
                        <span class="icon"></span>
                    </div>
                </li>
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($mod == '1'): ?>
                <li class="left">
                    <div class="inner">
                        <label><?php echo date("Y年m月",$vo['date']); ?></label>
                        <p><?php echo $vo['content']; ?></p>
                        <span class="icon"></span>
                    </div>
                </li>
                <?php endif; if($mod == '0'): ?>
                <li class="right">
                    <div class="inner">
                        <label><?php echo date("Y年m月",$vo['date']); ?></label>
                        <p><?php echo $vo['content']; ?></p>
                        <span class="icon"></span>
                    </div>
                </li>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
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