<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:60:"D:\chinling\public/../application/admin\view\plat\price.html";i:1537349351;s:54:"D:\chinling\public/../application/admin\view\base.html";i:1534209609;s:63:"D:\chinling\public/../application/admin\view\public\header.html";i:1534209611;s:60:"D:\chinling\public/../application/admin\view\public\nav.html";i:1534209611;}*/ ?>
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
        <link rel="stylesheet" href="__STATIC__/admin/product_add/css/common.css"/>
        <link rel="stylesheet" href="__STATIC__/admin/product_add/css/index.css"/>
        <script src="__STATIC__/admin/product_add/js/echarts.js"></script>
        <script src="__STATIC__/admin/product_add/js/commonNew.js"></script>
        <script async>
            function fp_ready(){
                // setting custom defaults
                Flatpickr.l10n.firstDayOfWeek = 1;
                //Regular flatpickr
                document.getElementById("flatpickr-tryme").flatpickr();
            }
        </script>
        <script async src="__STATIC__/admin/product_add/js/flatpickr.js"></script>
        <div id="urHere"><?php echo \think\Config::get('ADMIN_TITLE'); ?><b>></b><strong>商品价格记录</strong> </div>
        <div class="mainBox" style="padding-bottom: 0;"><h3><a class="actionBtn add">添加分类</a><a class="actionBtn goBack" style="display: none;">返回</a>商品价格记录</h3></div>
        <div id="priceNav"  async onload="fp_ready()">
            <ul class="float_r">
                <li class="float_r_li main_0">
                    <div class="platform_div">
                        <div class="tableBasic">
                            <h6>
                                <span>名称</span>
                                <span>编号</span>
                                <span>简单描述</span>
                                <span>排序</span>
                                <span>操作</span>
                            </h6>
                            <ul class="platformList">

                            </ul>
                        </div>
                    </div>
                </li>
                <li class="float_r_li main_1" style="display: none;">
                    <div class="data_type">
                        <table class="price">
                            <tr>
                                <td align="center">产品名称</td>
                                <td align="left"><input class="productNames" type="text" readonly value=""/></td>
                            </tr>
                            <tr>
                                <td align="center">进货价格</td>
                                <td align="left"><input class="wholesale" type="text" value="0.00"/></td>
                            </tr>
                            <tr>
                                <td align="center">出货价格</td>
                                <td align="left"><input class="retail" type="text" value="0.00"/></td>
                            </tr>
                            <tr>
                                <td align="center">添加时间</td>
                                <td align="left"><input id="flatpickr-tryme" type="text" readonly></td>
                            </tr>
                            <tr>
                                <td><input class="hidden" type="hidden" value=""/></td>
                                <td align="left"><a class="submits">提交</a>
                            </tr>
                        </table>
                    </div>
                </li>
                <li class="float_r_li main_2" style="display: none;">
                    <div class="dataForm">
                        <div id="chart-name"></div>
                        <div id="chart-main" style="width: 90%;height: 300px;margin: 0 auto;"></div>
                        <div class="btnBox">
                            <a class="btnA searchProcess" _id="1">一月</a>
                            <a class="btnA searchProcess" _id="2">二月</a>
                            <a class="btnA searchProcess" _id="3">三月</a>
                            <a class="btnA searchProcess" _id="4">四月</a>
                            <a class="btnA searchProcess" _id="5">五月</a>
                            <a class="btnA searchProcess" _id="6">六月</a>
                            <a class="btnA searchProcess" _id="7">七月</a>
                            <a class="btnA searchProcess" _id="8">八月</a>
                            <a class="btnA searchProcess" _id="9">九月</a>
                            <a class="btnA searchProcess" _id="10">十月</a>
                            <a class="btnA searchProcess" _id="11">十一月</a>
                            <a class="btnA searchProcess" _id="12">十二月</a>
                        </div>
                    </div>
                </li>
                <li class="float_r_li main_3" style="display: none;">
                    <div class="data_type">
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
                                <td align="center">所在地区</td>
                                <td align="left"><input class="area_select" id="demo2" type="text" readonly="" placeholder="请选择所在地区"/></td>
                            </tr>
                            <tr>
                                <td align="center">详息地址</td>

                                <td align="left"><input name="detail" class="detail" placeholder="详息地址，如楼道、楼盘号等" value=""/></td>
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
                </li>
            </ul>
        </div>
        <div id="hideBox"  style="display: none;">
            <ul class="hideBoxMain">
                <li>
                    <span class="productName"></span>
                </li>
                <li>
                    <a onclick="goAddTime(this)" class="btna" _attr="0">添加</a>
                </li>
                <li>
                    <select class="dateTime">

                    </select>
                    <a onclick="goAddTime(this)" class="btna" _attr="1">修改</a>
                </li>
                <li>
                    <a onclick="goAddTime(this)" class="btna" _attr="2">查看</a>
                </li>
                <li>
                    <a class="closeA">取消</a>
                </li>
            </ul>
        </div>
        <div id="addressChose"  style="display: none;">
            <div class="addressChoseMain">
                <div class="switch_div">
                    <a class="cancel">取消</a>
                    <a class="determine">确定</a>
                </div>
                <div class="chose_val">
			<span>
				<i>省：</i>
				<b class="province"></b>
			</span>
                    <span>
				<i>市：</i>
				<b class="city"></b>
			</span>
                    <span>
				<i>县：</i>
				<b class="county"></b>
			</span>
                </div>
                <ul>
                    <li class="province_li"><span class="choseing_province chosed" _attr="0">选择省</span>
                        <div class="province_div">

                        </div>
                    </li>
                    <li class="city_li"><span class="choseing_city" _attr="1">选择市</span>
                        <div class="city_div" style="display: none;">

                        </div>
                    </li>
                    <li class="county_li"><span class="choseing_county" _attr="2">选择县</span>
                        <div class="county_div" style="display: none;">

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="__STATIC__/admin/product_add/js/city.js"></script>
    <script type="text/javascript" src="__STATIC__/admin/product_add/js/common.js"></script>
    <script type="text/javascript" src="__STATIC__/admin/product_add/js/index.js"></script>
    
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