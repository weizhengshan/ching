<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"D:\chinling\public/../application/index\view\news\recruit.html";i:1534731193;s:54:"D:\chinling\public/../application/index\view\base.html";i:1537263042;}*/ ?>
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
<div id="main_recruit">
	<div class="tab" >
		<ul>
			<li class="btn primary" _attr="0">热招职位</li>
			<li class="btn" _attr="1">办公氛围</li>
		</ul>
	</div>
	<div class="tab-content" >
		<div data-name="热招职位" class="tab-item position-job" >
			<div  class="container">
				<p  class="intro">
					<span  class="icon"></span>
					简历投递邮箱：clc@chinlingcloud.com ，邮件主题标注应聘岗位+已工作年限+姓名
				</p>
				<?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<section  class="job">
					<h3  class="job-title weight"><?php echo $vo['position']; ?></h3>
					<p class="cli_show_hide_zhi">
						<?php echo $vo['rec_text']; ?>
					</p>
				</section>
				<hr style="margin-top: 50px;margin-bottom: 50px;background: #DDDDDD;border: none;height: 1px;"/>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="pages">
				<h3>
					<span><a href="<?php echo url('index/news/recruit',['page'=>1,'wen_id'=>$wenid,'type_pid'=>$type_pid]); ?>">首页</a></span>
					<?php if($page==1 || $page<'1'): else: ?>
					<span><a href="<?php echo url('index/news/recruit',['page'=>$page-1,'wen_id'=>$wenid,'type_pid'=>$type_pid]); ?>">上一页</a></span>
					<?php endif; ?>
					<span>第<b><?php echo $page; ?></b>页</span>

					<?php if($maxPage==$page || $maxPage<$page): else: ?>
					<span><a href="<?php echo url('index/news/recruit',['page'=>$page+1,'wen_id'=>$wenid,'type_pid'=>$type_pid]); ?>">下一页</a></span>
					<?php endif; ?>

					<span><a href="<?php echo url('index/news/recruit',['page'=>$maxPage,'wen_id'=>$wenid,'type_pid'=>$type_pid]); ?>">尾页</a></span>
					<span style="border: 0">共<b><?php echo $maxPage; ?></b>页</span>
				</h3>
			</div>
		</div>
		<div data-name="办公氛围"  class="tab-item atmosphere" style="display: none">
			<div class="container">
				<section class="company-welfare">
					<h3 class="weight">福利待遇</h3>
					<ul>
						<!--<li>① 氪空间为小伙伴提供了工资全额为基数的五险一金并为大家购买了补充医疗保险，使得大家在忘我的工作时得到充分的保障。 </li>-->
						<!--<li>② 行政部也为大家准备了早餐和午餐（外地同事是餐补），虽然餐饮一向是众口难调，但从各位同学逐渐升高的体重来看，该举措还是深得人心滴。</li>-->
						<!--<li>③ 氪空间可为大家办理工作居住证，符合条件的童鞋都可以沟通到人事部进行咨询和办理。</li>-->
						<!--<li>④ 公司在假期方面为大家提供了带薪年假、带薪病假，其余假日也全部按照国家规定执行。</li>-->
						<!--<li>⑤ 值得一说的是，在社区内，运营同学也会为大家提供高频词的各种试吃和体验活动，让大小吃货都各饱口福，很多有意义的体验也是被赞不绝口。如此神奇的氪空间和众多优秀的小伙伴在等待着你，还在犹豫个啥子嘞。</li>-->
					</ul>
				</section>
				<hr style="margin-top: 50px;margin-bottom: 50px;background: #DDDDDD;border: none;height: 1px;"/>
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