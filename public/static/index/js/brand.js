$(function () {
   var _height=parseInt(window.innerHeight)-parseInt($("#header").css("height"))-parseInt($("#footer").css("height"))
    if(navigator.userAgent.match(/mobile/i)) {  
        $("#main").css("min-height",_height+60+"px")
    }else{
    	$("#main").css("min-height",_height+"px")
    }
   
   
    
})