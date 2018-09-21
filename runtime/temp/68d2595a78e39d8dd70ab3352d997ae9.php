<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"D:\chinling\public/../application/admin\view\login\login.html";i:1534209613;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title>秦岭云后台登录</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="__STATIC__/loginBg/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/loginBg/css/demo.css" />
    <!--必要样式-->
    <link rel="stylesheet" type="text/css" href="__STATIC__/loginBg/css/component.css" />


<body>



    <div class="container demo-1">
        <div class="content">
            <div id="large-header" class="large-header">
                <canvas id="demo-canvas"></canvas>
                <div class="logo_box">
                    <h3>秦岭云后台管理系统</h3>
                    <form action="#" name="f" method="post">
                        <div class="input_outer">
                            <span class="u_user"></span>
                            <input name="admin_username" id="username" class="text" style="color: #FFFFFF !important" type="text" placeholder="请输入账户">
                        </div>
                        <div class="input_outer">
                            <span class="us_uer"></span>
                            <input name="admin_password" id="password" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;" value="" type="password" placeholder="请输入密码">
                        </div>
                        <div class="input_outer logo_box_verify" >
                            <span class="usu_er"></span>
                            <input id="verify"  class="text" placeholder="验证码" name="code" type="text" style="color: #FFFFFF !important; position:absolute; z-index:100;">
                            <img id="amverify" class="amverify" src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src=this.src+'?'+Math.random()"/>
                        </div>
                        <div class="mb2"><a class="act-but submit" href="javascript:;" onclick="show();" style="color: #FFFFFF">登录</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /container -->
    <script src="/static/admin/admin.ui/js/jquery.min.js"></script>
    <script src="/static/admin/dialog/dialog/layer.js"></script>
    <script src="/static/admin/dialog/dialog.js"></script>
    <script src="__STATIC__/loginBg/js/TweenLite.min.js"></script>
    <script src="__STATIC__/loginBg/js/EasePack.min.js"></script>
    <script src="__STATIC__/loginBg/js/rAF.js"></script>
    <script src="__STATIC__/loginBg/js/demo-1.js"></script>



<script>
 function show(){
var username=$("#username").val();
var password=$("#password").val();
var yzcode=$("#verify").val();
var admin_url="<?php echo url('admin/index/index'); ?>";

if(username.length<2){
dialog.error("用户名不能为空！");
}else if(password.length<1){
dialog.error("密码不能为空！");
}
else if(yzcode.length<1){
dialog.error("验证码不能为空！");
}
else{
$.post('<?php echo url("admin/login/check"); ?>',{'admin_username':username,'admin_password':password,'code':yzcode},function(data){
if(data.status==0){
dialog.error(data.message);
    verify()
}else if(data.status==1){
dialog.success(data.message,admin_url);
}
},'JSON');
}
}
 function verify() {
     var src=$("#amverify").attr("src");
     $("#verify").val("");
     $("#amverify").attr("src",src+'?'+Math.random())
 }
</script>




</body>
</html>