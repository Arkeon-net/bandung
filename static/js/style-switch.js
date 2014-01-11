

 
 
 






jQuery(document).ready(function($){
$(".blue-red").click(function(){$("#colorstyle").attr("href","../static/css/skin/blue-red.css");
return false;
});
$(".midnight-blue").click(function(){$("#colorstyle").attr("href","../static/css/skin/midnight-blue.css");
return false;
});
$(".mono-red").click(function(){$("#colorstyle").attr("href","../static/css/skin/mono-red.css");
return false;
});
$(".pinegreen-purple").click(function(){$("#colorstyle").attr("href","../static/css/skin/pinegreen-purple.css");
return false;
});

$(".darkmagenta-rosybrown").click(function(){$("#colorstyle").attr("href","../static/css/skin/darkmagenta-rosybrown.css");
return false;
});

$(".darkorchid-seagreen").click(function(){$("#colorstyle").attr("href","../static/css/skin/darkorchid-seagreen.css");
return false;
});

$(".steel-blue").click(function(){$("#colorstyle").attr("href","<?php echo base_url(); ?>static/css/skin/steel-blue.css");
return false;
});

$(".cadetblue-violetred").click(function(){$("#colorstyle").attr("href","<?php echo base_url(); ?>static/css/skin/cadetblue-violetred.css");
return false;
});

$(".mediumpurple-seagreen").click(function(){$("#colorstyle").attr("href","c<?php echo base_url(); ?>static/css/skin/mediumpurple-seagreen.css");
return false;
});

$(".steelblue-leafgreen").click(function(){$("#colorstyle").attr("href","<?php echo base_url(); ?>static/css/skin/steelblue-leafgreen.css");
return false;
});

$(".orange-steelblue").click(function(){$("#colorstyle").attr("href","<?php echo base_url(); ?>static/css/skin/orange-steelblue.css");
return false;
});

$(".gray").click(function(){$("#colorstyle").attr("href","<?php echo base_url(); ?>static/css/skin/gray.css");
return false;
});


$("#reset").click(function(){$("#colorstyle").attr("href","<?php echo base_url(); ?>static/css/skin/blue-red.css");
return false;
});

$("#fullwidth").click(function(){$(".container").css("width:100%;");
return false;
});


$("#style-switch h2 a").click(function(e){e.preventDefault();
var div=$("#style-switch");
console.log(div.css("left"));
if(div.css("left")==="-195px"){$("#style-switch").animate({left:"0px"});
}else{$("#style-switch").animate({left:"-195px"});
}})
$(".colors li a").click(function(e){e.preventDefault();
$(this).parent().parent().find("a").removeClass("active");
$(this).addClass("active");
})});
