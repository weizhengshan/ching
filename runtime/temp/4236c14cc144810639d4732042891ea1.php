<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:67:"D:\chinling\public/../application/admin\view\county_type\index.html";i:1537349356;s:54:"D:\chinling\public/../application/admin\view\base.html";i:1534209609;s:63:"D:\chinling\public/../application/admin\view\public\header.html";i:1534209611;s:60:"D:\chinling\public/../application/admin\view\public\nav.html";i:1534209611;}*/ ?>
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
<div id="urHere"><?php echo \think\Config::get('ADMIN_TITLE'); ?><b>></b><strong>县产品分类</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="<?php echo url('admin/countyType/countyt_add'); ?>" class="actionBtn add">添加种类</a>县产品分类</h3>
     <form action="<?php echo url('admin/countyType/search'); ?>" method="post" id="data_form">
     <input name="keyword" type="text" class="inpMain" placeholder="请输入产品名称" value="<?php echo $keyword; ?>" size="20" id="keyword_name" />
     <input name="submit" class="btnGray" type="submit"  value="筛选"/>
    </form>   
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
        <th >编号</th>
        <th >产品名称</th>
        <th >所属县</th>
        <th >所属品类</th>
        <th >级别</th>
       	<th>排序</th>
        <th>销量去向</th>
        <th>操作</th>
	  </tr>
   
 		 <?php if(is_array($typesdata) || $typesdata instanceof \think\Collection || $typesdata instanceof \think\Paginator): if( count($typesdata)==0 ) : echo "" ;else: foreach($typesdata as $key=>$vo): ?>
       <tr align="center">
          <td><?php echo $vo['varies_id']; ?></td>      
          <td ><?php echo $vo['varies_name']; ?></td>
          <td><?php echo $vo['county_name']; ?></td>
          <td><?php echo $vo['protype_name']; ?></td>
          <td><?php echo $vo['varies_grade']; ?></td>
          <td ><?php echo $vo['varies_sort']; ?></td>
          <td><a  class="layui-btn layui-btn-sm" href="<?php echo url('admin/SalesDirec/getFindArr',['varies_id'=>$vo['varies_id']]); ?>">查看</a><a  class="<?php echo !empty($vo['saledir_id'])?'':'layui-btn layui-btn-sm'; ?>" href="<?php echo url('admin/SalesDirec/dire_add',['varies_id'=>$vo['varies_id']]); ?>"><?php echo !empty($vo['saledir_id'])?'':'添加'; ?></a></td>
          <td ><a  class="layui-btn layui-btn-sm" href="<?php echo url('admin/countyType/countyt_edit',['varies_id'=>$vo['varies_id']]); ?>">编辑</a><a  class="layui-btn layui-btn-sm" href="JavaScript:" onclick="types_dele('确定要下架吗？',<?php echo $vo['varies_id']; ?>)">下架</a></td>
        </tr>
      <?php endforeach; endif; else: echo "" ;endif; ?>  
    
          </table>
           <h3 align="center"><?php echo !empty($typesdata[0])?'':'这里没有数据'; ?></h3>
        </div>

<?php if($keyword==false): ?>       
<div class="pager">总计 <?php echo $totalRows; ?> 个记录，共 <?php echo $maxPage; ?> 页，当前第 <?php echo $page; ?> 页 | 
      <a href="<?php echo url('admin/CountyType/index',['page'=>1]); ?>">第一页</a> 
      <?php if($page>1): ?> 
      <a href="<?php echo url('admin/CountyType/index',['page'=>$page-1]); ?>">上一页</a>
      <?php endif; if($maxPage>$page): ?> 
      <a href="<?php echo url('admin/CountyType/index',['page'=>$page+1]); ?>">下一页</a>
      <?php endif; ?>  
      <a href="<?php echo url('admin/CountyType/index',['page'=>$maxPage]); ?>">最末页</a>      
    </div>
 </div>
 <?php endif; ?>
 <div class="clear"></div>
 
 <script type="text/javascript">
 //删除分类
function types_dele(message, id){
        layer.open({
            content : message,      
            icon:3,
            btn : ['是','否'],
            yes : function(){
                var url="<?php echo url('admin/countyType/countyt_dele'); ?>";
        var success_url="<?php echo url('admin/countyType/index'); ?>";
        $.post(url,{'varies_id':id},function(result){
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