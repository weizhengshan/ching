<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"D:\chinling\public/../application/admin\view\system\system_index.html";i:1537349353;s:54:"D:\chinling\public/../application/admin\view\base.html";i:1534209609;s:63:"D:\chinling\public/../application/admin\view\public\header.html";i:1534209611;s:60:"D:\chinling\public/../application/admin\view\public\nav.html";i:1534209611;}*/ ?>
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
<div id="urHere"><?php echo \think\Config::get('ADMIN_TITLE'); ?><b>></b><strong>系统设置</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3>系统设置</h3>
    <script type="text/javascript">
     
     $(function(){ $(".idTabs").idTabs(); });
     
    </script>
    <div class="idTabs">
      <ul class="tab">
        <li><a class="selected" href="#main">常规设置</a></li>
        <li><a href="<?php echo url('admin/system/system_eamil'); ?>">邮件服务器</a></li>
              </ul>
      <div class="items">
       <form action="" id="data_type" method="post" enctype="multipart/form-data">
        <div id="main">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
         <tr>
           <th width="131">名称</th>
           <th>内容</th>
         </tr>
            <tr>
              <td align="right">站点关键词</td>
              <td>
                  <input type="text" id="site" name="site" value="<?php echo $info['site']; ?>" size="80" class="inpMain" />
                  <font style="display:none" class="adsite" color='red'>名称不能为空！</font>
              </td>
            </tr>  
             <tr>
              <td align="right">站点描述</td>
              <td>
                  <input type="text" id="describe" name="describe" value="<?php echo $info['describe']; ?>" size="80" class="inpMain" />
                  <font style="display:none" class="adsite" color='red'>名称不能为空！</font>
              </td>
            </tr>   
            <tr>
              <td align="right">公司地址</td>
              <td>
                  <input type="text" name="address" id="address" value="<?php echo $info['address']; ?>" size="80" class="inpMain" />
                  <font style="display:none" class="adaddress" color='red'>地址不能为空！</font>
               </td>
            </tr>
             <tr>
                  <td align="right">ICP备案证书号</td>
                  <td>
                      <input type="text" name="icp" value="<?php echo $info['icp']; ?>" size="80" class="inpMain" />
                   </td>
              </tr>
                  <tr>
              <td align="right">客服电话</td>
              <td>
                          <input type="text" name="phone" id="phone" value="<?php echo $info['phone']; ?>" size="80" class="inpMain" />
                          <font style="display:none" class="adphone" color='red'>电话不能为空！</font>
                                    </td>
             </tr>
                  <tr>
              <td align="right">传真</td>
              <td>
                          <input type="text" name="fax" value="<?php echo $info['fax']; ?>" size="80" class="inpMain" />
                                    </td>
             </tr>
                  <tr>
          <td align="right">客服QQ号码</td>
          <td>
                      <input type="text" name="qq" value="<?php echo $info['qq']; ?>" size="80" class="inpMain" />
                                             
                                 </td>
         </tr>
                  <tr>
          <td align="right">邮件地址</td>
          <td>
                      <input type="text" name="email" value="<?php echo $info['email']; ?>" size="80" class="inpMain" />
                                </td>
         </tr> 
                 </table>
        </div>
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
         <tr>
          <td width="131"></td>
          <td>
            <input type="hidden" name="conf_id" value="<?php echo $info['conf_id']; ?>" />
           <input name="submit" class="btn" type="button" onclick='type_add()' value="修改" />
          </td>
         </tr>
        </table>
        </form>
      </div>
    </div>
   </div>
 </div>
 <div class="clear"></div>
 <script type="text/javascript">
$(function(){
$("#site").blur(function(){
$(".adsite").hide();
})
$("#address").blur(function(){
$(".adaddress").hide();
})
$("#phone").blur(function(){
$(".adphone").hide();
})
})
function type_add(){
var success_url="<?php echo url('admin/system/system_index'); ?>";
var url="<?php echo url('admin/system/system_add'); ?>";
var admins=$("#data_type").serialize();
//alert(admins);
var site=$("#site").val();
var address=$("#address").val();
var phone=$("#phone").val();


if(site.length<1){
$(".adsite").show();
}else if(address.length<1){
$(".adaddress").show();
}else if(phone.length<1){
$(".adphone").show();
}else{
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