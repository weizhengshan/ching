<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:68:"D:\chinling\public/../application/admin\view\manage\manage_list.html";i:1537349353;s:54:"D:\chinling\public/../application/admin\view\base.html";i:1534209609;s:63:"D:\chinling\public/../application/admin\view\public\header.html";i:1534209611;s:60:"D:\chinling\public/../application/admin\view\public\nav.html";i:1534209611;}*/ ?>
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
<div id="urHere"><?php echo \think\Config::get('ADMIN_TITLE'); ?><b>></b><strong>网站管理员</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="<?php echo url('admin/manage/manage_add'); ?>" class="actionBtn">添加管理员</a>网站管理员</h3>
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
      <th width="30" align="center">编号</th>
      <th align="left">管理员名称</th>
      <th align="left">所属用户组</th>
      <th align="center">E-mail地址</th>
	  <th align="center">手机号</th>
	  <th align="center">是否启用</th>
      <th align="center">添加时间</th>
      <th align="center">最后登录时间</th>
      <th align="center">操作</th>
     </tr>
	  <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$vo): ?>
      <tr>
		  <td align="center"><?php echo $vo['admin_id']; ?></td>
		  <td><?php echo $vo['admin_username']; ?></td>
		  <td><?php echo $vo['title']; ?></td>
		  <td align="center"><?php echo $vo['email']; ?></td>
		  <td align="center"> <?php echo $vo['phone']; ?></td>
		   <td align="center"> <?php echo !empty($vo['states'])?'启用':'未启用'; ?></td>
		  <td align="center"><?php echo date("Y-m-d H:i",$vo['createtime']); ?>
		  </td>
		  <td align="center">
			<?php if($vo['lastlogin']==0): ?>
				还未登陆过
			<?php else: ?>	
				<?php echo date("Y-m-d H:i",$vo['lastlogin']); endif; ?>
		  </td>		
		  <td align="center"><a  class="layui-btn layui-btn-sm" onclick="dele_user('确定要<?php echo !empty($vo['states'])?'禁用':'启用'; ?>管理员？',<?php echo $vo['admin_id']; ?>)"><?php echo !empty($vo['states'])?'禁用':'启用'; ?></a><a  class="layui-btn layui-btn-sm" href="<?php echo url('admin/manage/manage_edit',['admin_id'=>$vo['admin_id']]); ?>">编辑</a><a  class="layui-btn layui-btn-sm" href="JavaScript:" onclick="admin_user('确定要删除管理员？',<?php echo $vo['admin_id']; ?>)">删除</a></td>
     </tr>
	 <?php endforeach; endif; else: echo "" ;endif; ?>
	 </tr>
         </table>
                       </div>
 </div>
 <div class="clear"></div>
<script type="text/javascript">

  // 确认弹出层
    function dele_user(message, id) {
        layer.open({
            content : message,
			
            icon:3,
            btn : ['是','否'],
            yes : function(){
                var url="<?php echo url('admin/manage/manage_dele'); ?>";
				var success_url="<?php echo url('admin/manage/manage_list'); ?>";
				$.post(url,{'admin_id':id},function(result){
				if(result.status=='1')
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
//删除用户	
	function admin_user(message, id) {
        layer.open({
            content : message,
			
            icon:3,
            btn : ['是','否'],
            yes : function(){
                var url="<?php echo url('admin/manage/manage_admin'); ?>";
				var success_url="<?php echo url('admin/manage/manage_list'); ?>";
				$.post(url,{'admin_id':id},function(result){
				if(result.status=='1')
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