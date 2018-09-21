<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:59:"D:\chinling\public/../application/index\view\news\info.html";i:1537434013;s:54:"D:\chinling\public/../application/index\view\base.html";i:1537263042;}*/ ?>
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

		<div id="main_newsdetails">
			<section>
				<h1 class="header-banner">
					致力于成为联合办公行业中的龙头企业
				</h1>
			</section>
			<div id="main_news" class="news-detail-bg" style="position:relative;">
				<!--canvas tree start-->
				<canvas id="d1" width="1200" height="600px" style="left:30em;border:dashed 2px #ccc;top:-200;position:absolute;z-index:3;filter: alpha(opacity:50);opacity: 0.5"></canvas>
				<div id="YST" style="left:30em;width:1200px; height:auto !important;min-height:600px !important;border:dashed 2px #ccc;text-align: center;position:absolute">
					<h4></h4>
					<p align="center"></p>
				</div>
				<!--canvas tree end-->
				<div class="news_list_page_met_16_3 met-news news-detail-padding">
					<div class="container news-detail-bottom">
						<!--author:gll 详情页去左导航-->
						<!--<div class="col-md-3 news-detail-leftmenu">-->
							<!--<div class="row">-->
								<!--<aside class="sidebar_met_16_3 met-sidebar panel-body m-b-0" boxmh-h="" m-id="10" m-type="nocontent" style="margin-left: 0px; margin-right: 30px;">-->
									<!--<h2 class="sidebar-tile">-->
										<!--<a href="" tite="新闻资讯" class="    " target="_self">新闻资讯</a>-->
									<!--</h2>-->
									<!--<ul class="sidebar-column list-icons">-->
										<!--<li>-->
											<!--<a href="" title="公司动态" class="">公司新闻</a>-->
										<!--</li>-->
										<!--<li>-->
											<!--<a href="" title="公司动态" class="">行业新闻</a>-->
										<!--</li>-->
										<!--<li>-->
											<!--<a href="" title="公司动态" class="">技术新闻</a>-->
										<!--</li>-->
									<!--</ul>-->
									<!--<h2 class="sidebar-tile"><span>联系我们</span></h2>-->
									<!--<div class="side-tel met-editor news-detail-line">-->
										<!--<p><span style="color: rgb(0, 0, 0);">-->
                                    <!--<strong>秦岭云电子商务有限公司</strong>-->
                                <!--</span>-->
										<!--</p>-->
										<!--<p class="news-detail-info">-->
											<!--<span style="color: rgb(0, 0, 0);">地址：</span>-->
											<!--西安市高新区绿地中心A座2204-->
										<!--</p>-->
										<!--<p class="news-detail-info">-->
											<!--<span style="color: rgb(0, 0, 0);">电话：</span>-->
											<!--400-029-1005-->
										<!--</p>-->
									<!--</div>-->
									<!--<h2 class="sidebar-tile m-t-25"><span></span></h2>-->
								<!--</aside>-->
							<!--</div>-->
						<!--</div>-->

						<div class="col-md-9 met-news-body     pright news-detail-border ">
							<div class="row news-detail-top">
								<!--<ol class="breadcrumb m-b-0 subcolumn-crumbs news-detail-position" >-->
									<!--<li class="breadcrumb-item">-->
										<!--<a href="https://show.metinfo.cn/m/mui087/273/" title="网站首页" class="icon wb-home">网站首页</a>-->
									<!--</li>-->
									<!--<li class="breadcrumb-item">-->
										<!--<a href="https://show.metinfo.cn/m/mui087/273/news/" title="新闻资讯" class="">新闻资讯</a>-->
									<!--</li>-->
									<!--<li class="breadcrumb-item">-->
										<!--<a href="https://show.metinfo.cn/m/mui087/273/news/news.php?class2=10" title="业界资讯" class="">业界资讯</a>-->
									<!--</li>-->
								<!--</ol>-->
								<div class="met-shownews-content" >
									<section class="details-title border-bottom1 news-detail-section">
										<h1 class="m-t-10 m-b-5 news-detail-h1"><?php echo $newdata['cont_title']; ?></h1>
										<div class="info font-weight-300 news-detail-time">
											<span>发布时间：<?php echo date('Y-m-d H:i:s',$newdata['createtime']); ?></span>
											<span></span>
										</div>
									</section>
									<section class="met-editor clearfix news-detail-size">
										<?php echo $newdata['cont_text']; ?>
									</section>
									<div class="tag">
										<span></span>
									</div>
								</div>
								<!--border start 边框动画效果-->
								<div style="position: absolute;top: 50px" class="border">
									<div class="border_bottom"></div>
									<div class="border_left"></div>
									<div class="border_right"></div>
									<div class="border_top"></div>
								</div>
								<!--border end 边框动画效果end-->

							</div>
						</div>


					</div>
				</div>
			</div>
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