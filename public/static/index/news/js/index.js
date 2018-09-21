$(function () {
    //首页轮播图js
    var mySwiper=new Swiper('#lunbo_pc', {
        effect : 'fade',
        loop:'true',
        pagination : '.swiper-pagination',
        paginationClickable :true,
        autoplay:2000,
        onInit: function(swiper){ //Swiper2.x的初始化是onFirstInit
            swiperAnimateCache(swiper); //隐藏动画元素
            swiperAnimate(swiper); //初始化完成开始动画
        },
        onSlideChangeEnd: function(swiper){
            swiperAnimate(swiper); //每个slide切换结束时也运行当前slide动画
        }
    })
    $("#lunbo_pc").mouseover(function () {
        mySwiper.stopAutoplay();
    }).mouseout(function () {
        mySwiper.startAutoplay();
    })

    /*判断回到顶部按钮显示与否*/
    // window.onscroll=function(){
    //     var sTop = document.documentElement.scrollTop;
    //     if(sTop>100){
    //         document.getElementById("hm-t-go-top").style.display="block";
    //         $("#header").addClass("header_on");
    //     }else{
    //         document.getElementById("hm-t-go-top").style.display="none";
    //         $("#header").removeClass("header_on");
    //     }
    // }

    //留言页js
    //onlyD();
    $('#js-msg').html('');
    //表单提交
    $('.js-msf-sbt').click(function () {
        var $theme = $(".js-theme");
        var $name = $(".js-name");
        var $phone = $(".js-phone");
        var $email = $(".js-email");
        var $address = $(".js-address");
        var $message = $(".js-message");

        if (!/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/.test($email.val())) {
            // console.log('手机号码不正确！');
            $email.next('em').html('邮箱不正确！');
            return false
        }else {
            $email.next('em').html('')
        }

        if ($message.val()=="") {
            $message.next('em').html('留言内容不能为空！');
            return false
        }else {
            $message.next('em').html('')
        }
        var formData = $('#js-msg-form').serialize();
        //表单提交
        var res=ajax_re(formData);
        // 表单重置

// 限制电话号码只能输数字
    })
    $('.js-msf-reset').on('click',function () {

        document.getElementById("js-msg-form").reset()
    })
    $("#main_recruit").on("click",".btn",function () {
        var _attr=$(this).attr("_attr");
        $(this).addClass("primary");
        $(this).siblings().removeClass("primary");
        if(_attr==0){
            $(".position-job").css("display","block");
            $(".atmosphere").css("display","none");
        }else if(_attr==1){
            $(".position-job").css("display","none");
            $(".atmosphere").css("display","block");
        }
    })


})