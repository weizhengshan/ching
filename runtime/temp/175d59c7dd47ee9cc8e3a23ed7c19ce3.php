<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:66:"D:\chinling\public/../application/admin\view\statistics\index.html";i:1537349354;s:54:"D:\chinling\public/../application/admin\view\base.html";i:1534209609;s:63:"D:\chinling\public/../application/admin\view\public\header.html";i:1534209611;s:60:"D:\chinling\public/../application/admin\view\public\nav.html";i:1534209611;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>秦岭云 管理中心 - 网站管理员 </title>
<meta name="Copyright" content="Douco Design." />
<link rel="shortcut icon" href="" type="image/x-icon">
<link rel="stylesheet" href="__STATIC__/admin/layui/css/layui.css"  media="all">
<link href="__STATIC__/admin/css/public.css" rel="stylesheet" type="text/css">
 <script type="text/javascript" src="__STATIC__/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/js/jquery.tab.js"></script>
<script type="text/javascript" src="__STATIC__/admin/js/global.js"></script>
<script src="__STATIC__/admin/dialog/dialog/layer.js"></script>
<script src="__STATIC__/admin/dialog/dialog.js"></script>
<script type="text/javascript" src="__STATIC__/admin/layui/layui.js"></script>
</head>
<body>
      
<div id="dcWrap">
  <div id="dcHead">
 <div id="head">
  <div class="logo"><a href="index.html"><img src="__STATIC__/admin/images/dclogo.gif" alt="logo"></a></div>
  <div class="nav">
    <ul>
    <li><a href="JavaScript:" onclick="huan_cuns('确定要清除缓存吗？','<?php echo $ssname; ?>')">清除缓存</a></li>
   </ul>
   <ul class="navRight">
    <li class="M noLeft"><a href="JavaScript:void(0);">您好，<?php echo $ssname; ?></a>
    </li>
    <li class="noRight"><a href="<?php echo url('admin/index/logout'); ?>">退出</a></li>
   </ul>
  </div>
 </div>
</div>
<script type="text/javascript">
//删除分类
function huan_cuns(message, id) {
        layer.open({
            content : message,
      
            icon:3,
            btn : ['是','否'],
            yes : function(){
                var url="<?php echo url('admin/index/runtime'); ?>";
        var success_url=window.location.href;
        $.post(url,{'type_id':id},function(result){
        if(result.status=='4')
          {
          dialog.success(result.message,success_url);
          }else
          {
            dialog.error(result.message);
          } 
        })
            }
        });
    }
 </script>

<!-- dcHead 结束 --> 
<div id="dcLeft">
<div id="menu">
 <ul class="bot">
   <?php if(is_array($daoh) || $daoh instanceof \think\Collection || $daoh instanceof \think\Paginator): if( count($daoh)==0 ) : echo "" ;else: foreach($daoh as $key=>$vo): if($vo['name'] == $action): ?>
     <li style = "background-color: #cccccc;"><a href="<?php echo url($vo['name']); ?>"><i class="manager"></i><em><?php echo $vo['title']; ?></em></a></li>
     <?php else: ?>
     <li><a href="<?php echo url($vo['name']); ?>"><i class="manager"></i><em><?php echo $vo['title']; ?></em></a></li>
     <?php endif; endforeach; endif; else: echo "" ;endif; ?>
 </ul>
</div></div>


 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere"><?php echo \think\Config::get('ADMIN_TITLE'); ?><b>></b><strong>访问统计图</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3>
    <a href="<?php echo url('admin/statistics/index'); ?>" class="actionBtn">网站登录统计　｜</a>
    <a href="<?php echo url('admin/statistics/tian'); ?>" class="actionBtn">地图　｜</a>
    <a href="<?php echo url('admin/statistics/weather'); ?>" class="actionBtn">天气因素　｜</a>
     <a href="<?php echo url('admin/statistics/dong'); ?>" class="actionBtn">动态数据　｜</a>
     <a href="<?php echo url('admin/statistics/tongji'); ?>" class="actionBtn">全国地图数据分布布局</a>
    首页浏览量</h3>
      <div><?php echo $this_month; ?>月访问量:<?php if($count_all==NULL): ?> 0 <?php else: ?><?php echo $count_all; endif; ?></div>
      <div id="main" style="width: 1500px;height:600px;"></div>
      <script src="__STATIC__/admin/js/echarts.js"></script>
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('main'));

        // 指定图表的配置项和数据
    var day= <?php echo $monthday; ?>;
    //alert(day);
    var count_ip=<?php echo $count_ip; ?>;
    var this_month=<?php echo $this_month; ?>;
    //alert(count_ip);
        option = {
    title: {
        text: this_month+'月访问量统计'
    },
    tooltip: {
        trigger: 'axis'
    },
    legend: {
        data:['日访问量']
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    toolbox: {
        feature: {
            saveAsImage: {}
        }
    },
    xAxis: {
        type: 'category',
        boundaryGap: false,
        data: day
    },
    yAxis: {
        type: 'value'
    },
    series: [
        {
            name:'日访问量',
            type:'line',
            stack: '总量',
            data:count_ip
        },
        
    ]
};


        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>
    <div>
        <?php if(is_array($month) || $month instanceof \think\Collection || $month instanceof \think\Paginator): if( count($month)==0 ) : echo "" ;else: foreach($month as $key=>$vo): ?>
        <a href="<?php echo url('admin/statistics/index',['month'=>$vo['id']]); ?>"><button  id="btn1"> <?php echo $vo['id']; ?>月 </button></a>　
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>   
   </div>
 </div>
</div>
 <div class="clear"></div>

 <div id="dcFooter">
 <div id="footer">
  <div class="line"></div>
  <ul>
   版权所有 © 2016-2017 西安秦岭云电子商务有限公司，并保留所有权利。
  </ul>
 </div>
</div><!-- dcFooter 结束 -->
<div class="clear"></div> </div>


</body>
</html>