<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"D:\chinling\public/../application/admin\view\productline\productline_index.html";i:1537349351;s:54:"D:\chinling\public/../application/admin\view\base.html";i:1534209609;s:63:"D:\chinling\public/../application/admin\view\public\header.html";i:1534209611;s:60:"D:\chinling\public/../application/admin\view\public\nav.html";i:1534209611;}*/ ?>
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
<div id="urHere"><?php echo \think\Config::get('ADMIN_TITLE'); ?><b>></b><strong>商品列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="<?php echo url('admin/productline/productline_add'); ?>" class="actionBtn add">添加商品</a>商品列表</h3>
    <div class="filter">
    <form action="product.php" method="post">
     <select name="cat_id" onchange="prodtypes(this)">
          <?php if(is_array($arr) || $arr instanceof \think\Collection || $arr instanceof \think\Paginator): if( count($arr)==0 ) : echo "" ;else: foreach($arr as $key=>$vo): ?>
            <option <?php if($vo['protype_id']==$pid): ?> selected <?php endif; ?> value="<?php echo $vo['protype_id']; ?>"><?php echo $vo['protype_name']; ?></option>
          <?php endforeach; endif; else: echo "" ;endif; ?> 
    </select>
     <!-- <input name="keyword" type="text" class="inpMain" value="" size="20" />
     <input name="submit" class="btnGray" type="submit" value="筛选" /> -->
    </form>
    <span>
    <!-- <a class="btnGray" href="product.php?rec=re_thumb">更新商品缩略图</a>
        <a class="btnGray" href="product.php?rec=sort">开始筛选首页商品</a> -->
        </span>
    </div>
        <div id="list">
    <form name="action" method="post" id="pro_admin" action="">
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
        <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
        <th width="40" align="center">编号</th>
        <th align="left">商品名称</th>
        <th width="150" align="center">商品分类</th>
        <th width="150" align="center">商品图片</th>
       <th width="120" align="center">添加日期</th>
        <th width="130" align="center">操作</th>
      </tr>
            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
        <td align="center"><input type="checkbox"  name="checkbox[]" value="<?php echo $vo['prod_id']; ?>" /></td>
        <td align="center"><?php echo $vo['prod_id']; ?></td>
        <td><a><?php echo $vo['prod_title']; ?></a></td>
                <!--<td><a href="product.php?rec=edit&id=1"><?php echo $vo['prod_title']; ?></a></td>-->
        <!--<td align="center"><a href="product.php?cat_id=5"><?php echo $vo['protype_name']; ?></a></td>-->
         <td align="center"><a><?php echo $vo['protype_name']; ?></a></td>
         <td align="center"><img src="<?php echo $vo['prod_img']; ?>" style="width:110px;"/></td>
        <td align="center"><?php echo date("Y-m-d H:i",$vo['createtime']); ?></td>
        <td align="center">
                  <a  class="layui-btn layui-btn-sm" href="<?php echo url('admin/productline/productline_edit',['prod_id'=>$vo['prod_id']]); ?>">编辑</a><a  class="layui-btn layui-btn-sm" href="JavaScript:" onclick="prod_dele('确定要下架吗？',<?php echo $vo['prod_id']; ?>)">下架</a>
                 </td>
      </tr>         
          <?php endforeach; endif; else: echo "" ;endif; ?>
          
          </table>
          <h3 align="center"><?php echo !empty($data[0])?'':'这里没有数据'; ?></h3>
          
    <div class="action">
     <select name="action" onchange="douAction()">
      <option value="0">请选择...</option>
      <option value="del_all">下架</option>
      <option value="category_move">移动分类至</option>
     </select>
     <select name="new_cat_id" style="display:none">
          <?php if(is_array($arr) || $arr instanceof \think\Collection || $arr instanceof \think\Paginator): if( count($arr)==0 ) : echo "" ;else: foreach($arr as $key=>$vo): ?>
            <option value="<?php echo $vo['protype_id']; ?>"><?php echo $vo['protype_name']; ?></option>
          <?php endforeach; endif; else: echo "" ;endif; ?>
                 </select>
     <input name="submit" class="btn" type="button" onclick='prod_from()' value="执行" />
    </div>
    </form>
    </div>
    <div class="clear"></div>
    <div class="pager">总计 <?php echo $totalRows; ?> 个记录，共 <?php echo $maxPage; ?> 页，当前第 <?php echo $page; ?> 页 | 
      <a href="<?php echo url('admin/productline/productline_index',['page'=>1,'pid'=>$pid]); ?>">第一页</a> 
      <a href="<?php echo url('admin/productline/productline_index',['page'=>$page-1,'pid'=>$pid]); ?>">上一页</a>  
      <a href="<?php echo url('admin/productline/productline_index',['page'=>$page+1,'pid'=>$pid]); ?>">下一页</a>  
      <a href="<?php echo url('admin/productline/productline_index',['page'=>$maxPage,'pid'=>$pid]); ?>">最末页</a>              </div>
 </div>
   
 <div class="clear"></div>


<script type="text/javascript">

onload = function()
{
 document.forms['action'].reset();
}

function douAction()
{
 var frm = document.forms['action'];
 frm.elements['new_cat_id'].style.display = frm.elements['action'].value == 'category_move' ? '' : 'none';
}
//删除分类
function prod_dele(message, id) {
        layer.open({
            content : message,
      
            icon:3,
            btn : ['是','否'],
            yes : function(){
                var url="<?php echo url('admin/productline/productline_dele'); ?>";
        var success_url="<?php echo url('admin/productline/productline_index'); ?>";
        $.post(url,{'prod_id':id},function(result){
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
 //跳转
 function prodtypes(txt)
 {
   var pid=txt.value;
   var page=1;//点新的都默认第一页
  if(pid!="")
  {
  var url=window.location.href;
   if(url.indexOf("pid")==58)
    {
        window.location.href=pid+".html"; 
    }else if(url.indexOf("page")==58)
    {
      //alert(url.indexOf("pid"));
      if(url.indexOf("pid")==65){
        //alert(1);
         window.location.href=pid+".html"; 
        }else{
          //alert(2);
          window.location.href=page+"/pid/"+pid+".html"; 
        } 
    }
    else{
      window.location.href="productline_index/pid/"+pid+".html"; 
    }
  }
 } 
  //from 提交
  function  prod_from()
  {
    var success_url="<?php echo url('admin/productline/productline_index'); ?>";
    var url="<?php echo url('admin/productline/productline_editzhi'); ?>";
    var admins=$("#pro_admin").serialize();

    $.post(url,admins,function(result){
 
    if(result.status=='4')
    {
    dialog.success(result.message,success_url);
    }else
    {
      dialog.error(result.message);
    } 
    })
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