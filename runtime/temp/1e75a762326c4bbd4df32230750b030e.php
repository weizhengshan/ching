<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:61:"D:\chinling\public/../application/admin\view\chats\index.html";i:1537427979;s:54:"D:\chinling\public/../application/admin\view\base.html";i:1537427037;s:63:"D:\chinling\public/../application/admin\view\public\header.html";i:1534209611;s:60:"D:\chinling\public/../application/admin\view\public\nav.html";i:1534209611;}*/ ?>
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
    <div id="urHere"><?php echo \think\Config::get('ADMIN_TITLE'); ?><b>></b><strong>大事件列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="<?php echo url('admin/chats/add'); ?>" class="actionBtn add">添加事件</a>大事件列表</h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
        <tr>
            <th  align="left">编号</th>
            <th  align="left">日期</th>
            <th align="left">事件</th>
            <th align="left">是否显示</th>
            <th align="left">操作</th>
        </tr>
        <?php if(is_array($arr) || $arr instanceof \think\Collection || $arr instanceof \think\Paginator): if( count($arr)==0 ) : echo "" ;else: foreach($arr as $key=>$vo): ?>
        <tr>
            <td><?php echo $vo['chat_id']; ?></td>
            <td align="left"><?php echo date("Y年m月",$vo['date']); ?></td>
            <td><?php echo $vo['content']; ?></td>
            <td>显示</td>
            <td>
                <a  class="layui-btn layui-btn-sm" href="<?php echo url('admin/chats/edit',['chat_id'=>$vo['chat_id']]); ?>">编辑</a>
                <a  class="layui-btn layui-btn-sm" href="<?php echo url('admin/chats/delete',array('chat_id'=>$vo['chat_id'])); ?>">删除</a>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
</div>
</div>
</div>



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