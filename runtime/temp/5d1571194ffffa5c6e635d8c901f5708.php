<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:60:"D:\chinling\public/../application/admin\view\plat\index.html";i:1537349353;s:54:"D:\chinling\public/../application/admin\view\base.html";i:1534209609;s:63:"D:\chinling\public/../application/admin\view\public\header.html";i:1534209611;s:60:"D:\chinling\public/../application/admin\view\public\nav.html";i:1534209611;}*/ ?>
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

        <link href="__STATIC__/admin/css/platNav.css" rel="stylesheet" type="text/css">

        <script src="__STATIC__/bigdata/js/index.js"></script>
        <script src="__STATIC__/bigdata/js/taobao.js"></script>
        <script src="__STATIC__/bigdata/js/pddOrder.js"></script>
        <div id="urHere"><?php echo \think\Config::get('ADMIN_TITLE'); ?><b>></b><strong>大数据平台管理</strong> </div>
        <div class="mainBox" style="padding-bottom: 0;"><h3><a class="actionBtn add">添加分类</a><a class="actionBtn goBack" style="display: none;">返回</a>大数据平台管理</h3></div>
        <div id="platNav">
            <ul class="float_l">
                <h3>导航菜单</h3>
                <li><span class="nav_span kai" _attr="0">平台管理</span>
                    <ol>
                        <li class="switch onA" _id="0">
                            平台管理
                        </li>
                    </ol>
                </li>

                <li><span class="nav_span" _attr="0">数据上传</span>
                    <ol class="platform_data" style="display: none;">

                    </ol>
                </li>
            </ul>
            <ul class="float_r">
                <li class="float_r_li main_0">
                    <div class="platform_div">
                        <div class="tableBasic">
                            <h6>
                                <span>编号</span>
                                <span>名称</span>
                                <span>简单描述</span>
                                <span>排序</span>
                                <span>操作</span>
                            </h6>
                            <ul class="platformList">

                            </ul>
                        </div>

                        <div class="data_type"  style="display: none;">
                            <table>
                                <tr>
                                    <td align="center">名称</td>
                                    <td align="left"><input class="name" type="text"/></td>
                                </tr>
                                <tr>
                                    <td align="center">上级分类</td>
                                    <td align="left">
                                        <select id="classification" class="classification">

                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">简单描述</td>
                                    <td align="left"><input class="describe" type="text"/></td>
                                </tr>
                                <tr>
                                    <td align="center">排序</td>
                                    <td align="left"><input class="sort" type="text"/></td>
                                </tr>
                                <tr>
                                    <td><input class="hidden" type="hidden" value=""/></td>
                                    <td align="left"><a class="submit">提交</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </li>
                <!--
                    作者：976795114@qq.com
                    时间：2018-05-11
                    描述：淘宝
                -->
                <li class="float_r_li float_r_li_main main_2" style="display: none;">
                    <h5>数据上传 <span></span></h5>
                    <div class="upload_div">
                        <form id="uploadTao" action="##" method="post" enctype="multipart/form-data">
                            <div class="div_float">
                                <h4>订单数据</h4>
                                <div class="file_div">
                                    <span>上传文件：</span>
                                    <input type="text" class="input_file_name" readonly="readonly"/>
                                    <input type="file" name="" class="input_file tbOrderList" value=""/>
                                    <i>浏览</i>
                                </div>
                                <div class="progress">
                                    <div class="progress_son"><span></span></div>
                                </div>
                                <a id="submit_tbOrderList">上传</a>
                            </div>
                            <div class="div_float">
                                <h4>已双评的订单</h4>
                                <div class="file_div">
                                    <span>上传文件：</span>
                                    <input type="text" class="input_file_name" readonly="readonly"/>
                                    <input type="file" name="" class="input_file tbOrderOver" value=""/>
                                    <i>浏览</i>
                                </div>
                                <div class="progress">
                                    <div class="progress_son"><span></span></div>
                                </div>
                                <a id="submit_tbOrderOver">上传</a>
                            </div>
                            <div class="div_float">
                                <h4>商品分类数据</h4>
                                <div class="file_div">
                                    <span>上传文件：</span>
                                    <input type="text" class="input_file_name" readonly="readonly"/>
                                    <input type="file" name="" class="input_file tbOrderType" value=""/>
                                    <i>浏览</i>
                                </div>
                                <div class="progress">
                                    <div class="progress_son"><span></span></div>
                                </div>
                                <a id="submit_tbOrderType">上传</a>
                            </div>
                            <div class="div_float">
                                <h4>评论</h4>
                                <div class="file_div">
                                    <span>上传文件：</span>
                                    <input type="text" class="input_file_name" readonly="readonly"/>
                                    <input type="file" name="" class="input_file tbOrderEvaluate" value=""/>
                                    <i>浏览</i>
                                </div>
                                <div class="progress">
                                    <div class="progress_son"><span></span></div>
                                </div>
                                <a id="submit_tbOrderEvaluate">上传</a>
                            </div>
                            <div id="inp"></div>
                        </form>
                    </div>
                </li>
                <!--
                    作者：976795114@qq.com
                    时间：2018-05-11
                    描述：拼多多
                -->
                <li class="float_r_li float_r_li_main main_3" style="display: none;">
                    <h5>数据上传 <span></span></h5>
                    <div class="upload_div">
                        <form id="uploadPdd" action="##" method="post" enctype="multipart/form-data">
                            <div class="div_float">
                                <h4>订单表</h4>
                                <div class="file_div">
                                    <span>上传文件：</span>
                                    <input type="text" class="input_file_name" readonly="readonly"/>
                                    <input type="file" name="" class="input_file pddOrderList" value=""/>
                                    <i>浏览</i>
                                </div>
                                <div class="progress">
                                    <div class="progress_son"><span></span></div>
                                </div>
                                <a id="submit_pddOrderList">上传</a>

                            </div>
                            <div class="div_float">
                                <h4>运单号</h4>
                                <div class="file_div">
                                    <span>上传文件：</span>
                                    <input type="text" class="input_file_name" readonly="readonly"/>
                                    <input type="file" name="" class="input_file pddWayBill" value=""/>
                                    <i>浏览</i>
                                </div>
                                <div class="progress">
                                    <div class="progress_son"><span></span></div>
                                </div>
                                <a id="submit_pddWayBill">上传</a>
                            </div>
                            <div class="div_float">
                                <h4>退款表</h4>
                                <div class="file_div">
                                    <span>上传文件：</span>
                                    <input type="text" class="input_file_name" readonly="readonly"/>
                                    <input type="file" name="" class="input_file pddRefund" value=""/>
                                    <i>浏览</i>
                                </div>
                                <div class="progress">
                                    <div class="progress_son"><span></span></div>
                                </div>
                                <a id="submit_pddRefund">上传</a>
                            </div>
                            <div class="div_float">
                                <h4>小额打款</h4>
                                <div class="file_div">
                                    <span>上传文件：</span>
                                    <input type="text"  class="input_file_name" readonly="readonly"/>
                                    <input type="file" name="" class="input_file pddSmallAmount" value=""/>
                                    <i>浏览</i>
                                </div>
                                <div class="progress">
                                    <div class="progress_son"><span></span></div>
                                </div>
                                <a id="submit_pddSmallAmount">上传</a>
                            </div>
                            <div class="div_float">
                                <h4>优惠券结算</h4>
                                <div class="file_div">
                                    <span>上传文件：</span>
                                    <input type="text" class="input_file_name" readonly="readonly"/>
                                    <input type="file" name="" class="input_file pddCoupon" value="66666"/>
                                    <i>浏览</i>
                                </div>
                                <div class="progress">
                                    <div class="progress_son"><span></span></div>
                                </div>
                                <a id="submit_pddCoupon">上传</a>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        <script type="text/javascript" src="__STATIC__/bigdata/js/backstageDataManagement.js"></script>
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