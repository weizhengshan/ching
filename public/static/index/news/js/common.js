


function pageScroll(){
    //把内容滚动指定的像素数（第一个参数是向右滚动的像素数，第二个参数是向下滚动的像素数）
    window.scrollBy(0,-50);
    //延时递归调用，模拟滚动向上效果
    scrolldelay = setTimeout('pageScroll()',0);
    //获取scrollTop值，声明了DTD的标准网页取document.documentElement.scrollTop，否则取document.body.scrollTop；因为二者只有一个会生效，另一个就恒为0，所以取和值可以得到网页的真正的scrollTop值
    var sTop=document.documentElement.scrollTop+document.body.scrollTop;
    //判断当页面到达顶部，取消延时代码（否则页面滚动到顶部会无法再向下正常浏览页面）
    if(sTop==0) clearTimeout(scrolldelay);
}
function onlyD() {
    var phone = document.getElementById('phone')
    phone.onfocus = phone.onblur = phone.onkeyup = function(){
        this.value = this.value.replace(/\D/g, '');
    }
}
//留言页ajax
function ajax_re(data)
{
    //alert(data);
    var url="{:url('index/leaving/leav_add')}";
    var success_url="{:url('index/leaving/index')}";
    $.post(url,data,function(result){
        if(result.status=='4')
        {
            dialog.success(result.message,success_url);
        }else
        {
            dialog.error(result.message);
        }
    })


}