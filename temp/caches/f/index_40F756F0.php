<?php exit;?>a:3:{s:8:"template";a:10:{i:0;s:46:"/Users/Pioneer/www/cake/themes/quwan/index.dwt";i:1;s:60:"/Users/Pioneer/www/cake/themes/quwan/library/page_header.lbi";i:2;s:60:"/Users/Pioneer/www/cake/themes/quwan/library/ad_position.lbi";i:3;s:57:"/Users/Pioneer/www/cake/themes/quwan/library/index_ad.lbi";i:4;s:62:"/Users/Pioneer/www/cake/themes/quwan/library/recommend_new.lbi";i:5;s:68:"/Users/Pioneer/www/cake/themes/quwan/library/recommend_promotion.lbi";i:6;s:61:"/Users/Pioneer/www/cake/themes/quwan/library/new_articles.lbi";i:7;s:58:"/Users/Pioneer/www/cake/themes/quwan/library/cat_goods.lbi";i:8;s:53:"/Users/Pioneer/www/cake/themes/quwan/library/help.lbi";i:9;s:60:"/Users/Pioneer/www/cake/themes/quwan/library/page_footer.lbi";}s:7:"expires";i:1326947830;s:8:"maketime";i:1326944230;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="生日 蛋糕 奶油 水果 祝寿 巧克力" />
<meta name="Description" content="生日蛋糕、奶油蛋糕、水果蛋糕，蛋糕网购" />
<title>爱尚蛋糕</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/quwan/style.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|爱尚蛋糕" href="feed.php" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/index.js"></script><script src="themes/quwan/js/left_goodslist.js"></script>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onmousemove=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}
</script>
</head>
<body>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
 
<div class="block header_bg" style="overflow:visible" >
 <div class="f_l" style="padding-top:10px;">
 <a href="index.php" name="top"><img style="float:left;" src="themes/quwan/images/logo.gif" /></a>
</div>
 
 
 
 <div class="f_r log">
  <script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script>  <ul>
   <font id="ECS_MEMBERZONE">554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca 
  </ul>
  
 <ul class="ul1" onmouseover="this.className='ul1 ul1_on'" onmouseout="this.className='ul1'">
 <a class="a1" href="user.php">我的账户</a>
  <div class="ul1_float">
     <a target="_blank" href="user.php">我的账户</a>
     <a href="user.php?act=order_list">我的订单</a>
     <a href="user.php?act=message_list">我的留言</a>
     <a href="user.php?act=collection_list">我的收藏</a>
     <a href="user.php?act=affiliate">我的推荐</a>
  </div>
 </ul>
 
 
 
 
     
 </div>
 
<div class="top_link">
 <!-- <a href="#"> 免费抽奖 </a>
 <a href="#"> 新手礼包 </a>-->
 <a  href="search.php?intro=new"><span class="a1"> 新品 </span></a>
 <a  href="search.php?intro=promotion"><span class="a2"> 促销  </span></a>
 <!--<a  href="brand.php"><span class="a3"> 品牌  </span></a>
 <a  href="exchange.php"><span class="a4"> 礼品  </span></a>-->
 <img src="themes/quwan/images/service.png"/>
 </div>
 
</div>
<div id="mainNav" class="clearfix">
<div style="width:940px;">
  <ul class="u1" onmouseover="this.className='u1 u1_over '" onmouseout="this.className='u1'"    id="cur"  >
  <a  class="a1 home_a"  href="index.php">
  <img class="ul_l" src="themes/quwan/images/ul_bg_l.gif"><img class="ul_r" src="themes/quwan/images/ul_bg_r.gif"> 
  首页 
  
  
  <img class="dot_l" src="themes/quwan/images/dot.gif">
  <img class="dot_r" src="themes/quwan/images/dot.gif">
   </a>
  </ul>
  
  
    
  <img style="float:left; padding:0 10px; "  src="themes/quwan/images/meun_line.gif">
  <ul class="u1" onmouseover="this.className='u1 u1_over'" onmouseout="this.className='u1'"   >
   
<a class="a1" href="category.php?id=1" >
<img class="ul_l" src="themes/quwan/images/ul_bg_l.gif"> <img class="ul_r" src="themes/quwan/images/ul_bg_r.gif"> 
 鲜奶蛋糕 
  <img class="dot_l" src="themes/quwan/images/dot.gif">
  <img class="dot_r" src="themes/quwan/images/dot.gif">
</a>
    
  
  </ul>
  
   
  <img style="float:left; padding:0 10px; "  src="themes/quwan/images/meun_line.gif">
  <ul class="u1" onmouseover="this.className='u1 u1_over'" onmouseout="this.className='u1'"   >
   
<a class="a1" href="category.php?id=2" >
<img class="ul_l" src="themes/quwan/images/ul_bg_l.gif"> <img class="ul_r" src="themes/quwan/images/ul_bg_r.gif"> 
 水果蛋糕 
  <img class="dot_l" src="themes/quwan/images/dot.gif">
  <img class="dot_r" src="themes/quwan/images/dot.gif">
</a>
    
  
  </ul>
  
   
  <img style="float:left; padding:0 10px; "  src="themes/quwan/images/meun_line.gif">
  <ul class="u1" onmouseover="this.className='u1 u1_over'" onmouseout="this.className='u1'"   >
   
<a class="a1" href="category.php?id=3" >
<img class="ul_l" src="themes/quwan/images/ul_bg_l.gif"> <img class="ul_r" src="themes/quwan/images/ul_bg_r.gif"> 
 巧克力蛋糕 
  <img class="dot_l" src="themes/quwan/images/dot.gif">
  <img class="dot_r" src="themes/quwan/images/dot.gif">
</a>
    
  
  </ul>
  
   
  <img style="float:left; padding:0 10px; "  src="themes/quwan/images/meun_line.gif">
  <ul class="u1" onmouseover="this.className='u1 u1_over'" onmouseout="this.className='u1'"   >
   
<a class="a1" href="category.php?id=5" >
<img class="ul_l" src="themes/quwan/images/ul_bg_l.gif"> <img class="ul_r" src="themes/quwan/images/ul_bg_r.gif"> 
 冰激凌蛋糕 
  <img class="dot_l" src="themes/quwan/images/dot.gif">
  <img class="dot_r" src="themes/quwan/images/dot.gif">
</a>
    
  
  </ul>
  
  <div class="meun_float">
<div class="cart" id="ECS_CARTINFO">
	<!--<div style="float:left; background:url(themes/quwan/images/cat_l.gif) 0 center no-repeat; padding-left:18px; ">
	 554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca	</div>-->
	<div style="float:left; padding-top:3px;">
		<a href="flow.php"><img src="themes/quwan/images/cat_r.gif"></a> 
	</div>
</div>
 
 </div>
</div>
</div>
<div id="search"  class="clearfix">
   <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
           alert("请输入搜索关键词！");
            return false;
        }
    }
    -->
    
    </script>
   
  <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" class="f_l" style="padding-top:7px;">
  <div style="float:left; border:1px solid #d2d2d2; padding-left:8px; background:url(themes/quwan/images/biao1.gif) 3px center no-repeat; margin-right:5px; margin-left:12px">
    <input name="keywords" type="text" id="keyword" value="" class="B_input" style="width:140px; float:left; background:none; border:none; vertical-align:middle; height:20px; line-height:20px; padding:0 10px; color:#999"/>
    </div>
    
   <input name="imageField" type="submit" value="" class="go" style="cursor:pointer; float:left" />
   
 
    
    <div class="hot_search">
      <a href="search.php?keywords=%E6%83%85%E4%BE%A3">情侣</a>
      <a href="search.php?keywords=%E5%A4%9A%E5%B1%82">多层</a>
      <a href="search.php?keywords=%E6%97%A0%E7%B3%96">无糖</a>
      <a href="search.php?keywords=%E7%94%9F%E6%97%A5">生日</a>
      <a href="search.php?keywords=%E8%89%BA%E6%9C%AF">艺术</a>
      <a href="search.php?keywords=%E7%A5%9D%E5%AF%BF">祝寿</a>
      <a href="search.php?keywords=%E5%9C%86%E5%BD%A2">圆形</a>
      <a href="search.php?keywords=%E5%84%BF%E7%AB%A5">儿童</a>
      <a href="search.php?keywords=%E6%96%B9%E5%BD%A2%E8%9B%8B%E7%B3%95">方形蛋糕</a>
      <a href="search.php?keywords=%E7%A9%86%E6%96%AF%E8%9B%8B%E7%B3%95">穆斯蛋糕</a>
      </div>
   
   </form>
</div>
<div class="blank5b"></div>
<div class="block clearfix"> 
  
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"5";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca<div class="blank"></div>
<div style="float:left; width:685px;">
<script src="themes/quwan/js/jquery1.4.1.js"></script>
<script src="themes/quwan/js/hp1.js"></script>
<STYLE type=text/css charset="utf-8">
.slides  a{text-decoration:none}
.slides {
	OVERFLOW: hidden; WIDTH: 685px; POSITION: relative; HEIGHT:370px; float:left
}
.slide-pic {
	OVERFLOW: hidden; WIDTH: 685px
}
.slide-pic LI {
	DISPLAY: none
}
.slide-pic LI.cur {
	DISPLAY: block
}
.slide-li {
	LEFT: 0px; BOTTOM: 0px; POSITION: absolute
}
.slide-li LI {
	FLOAT: left; WIDTH: 136px; LINE-HEIGHT: 30px; MARGIN-RIGHT: 1px; HEIGHT: 30px; TEXT-ALIGN: center
}
.slide-li A {
	DISPLAY: block; FONT-SIZE: 12px; WIDTH: 136px; COLOR: #fff; HEIGHT: 30px
}
.slide-li .cur A {
	COLOR: #333; TEXT-DECORATION: none; border-bottom:2px solid #ca0809;HEIGHT:28px
}
.slide-li A:hover {
	COLOR: #333; TEXT-DECORATION: none
}
.op LI {
	BACKGROUND: #666; FILTER: alpha(opacity=70); opacity: 0.7
}
.op LI.cur {
	BACKGROUND: #fff
}
.slide-txt SPAN {
	DISPLAY: none
}
</STYLE>
<DIV id=homepage>
<DIV class=slides name="__DT">
<UL class=slide-pic>
  <LI class=cur style="DISPLAY: list-item">
  <A title="" href="#" target=_blank><IMG height=370 src="media/a1.jpg" width=685></A> 
  <LI class="" style="DISPLAY: none">
  <A title="" href="#" target=_blank><IMG height=370 src="media/a2.jpg" width=685></A> 
  <LI class="" style="DISPLAY: none">
  <A title="" href="#" target=_blank><IMG height=370 src="media/a3.jpg" width=685></A> 
   <LI class="" style="DISPLAY: none">
  <A title="" href="#" target=_blank><IMG height=370 src="media/a4.jpg" width=685></A> 
   <LI class="" style="DISPLAY: none">
  <A title="" href="#" target=_blank><IMG height=370 src="media/a5.jpg" width=685></A> 
  </LI></UL>
<UL class="slide-li op">
  <LI class=cur></LI>
  <LI class=""></LI>
  <LI class=""></LI>
  <LI class=""></LI>
  <LI class=""></LI>
  
  </UL>
<UL class="slide-li slide-txt">
  <LI class=cur>
  <A href="#" 
  target=_blank>  2011感恩特惠 </A></LI>
  <LI class="">
  <A href="#" 
  target=_blank> 初秋浪漫组合 </A></LI>
  <LI class="">
  <A href="#" 
  target=_blank> 生日蛋糕系列 </A></LI>
  <LI class="">
  <A href="#" 
  target=_blank> 过年就吃水果蛋糕 </A></LI>
  <LI class="">
  <A href="#" 
  target=_blank> 超人气爱意浓浓巧克力 </A></LI>
  </UL></DIV></DIV>
<div class="blank"></div>
<div class="blank_no" style="float:left">
</div>
<div  class="blank_no"  style="float:left; padding-left:15px;">
</div>
<div  class="blank_no"  style="float:right">
</div>
<div class="blank"></div>
  
<script src="themes/quwan/js/prototype.js" type=text/javascript></SCRIPT>
<style type="text/css">
<!--
.flashbox {width:683px; height:459px; background:url(themes/quwan/images/flashbox_bg.gif) 0 bottom no-repeat}
.flashbox LI {OVERFLOW: hidden; width:10px; height:10px; float:left; margin-right:5px;}
.flashbox LI A {DISPLAY: block; width:10px; height:10px; float:left;  background: #eaeaea;}
.flashbox LI.selected A {background:#9f9f9f}
.flashbox LI A:hover {background:#9f9f9f}
.flashbox .tit{height:27px; padding-top:13px; padding-left:20px;}
.flashbox .tit img{float:left}
.flashbox .tit  #SwitchNav{float:left; padding-top:5px; padding-right:6px;}
.flashbox .tit  .f_r{padding-right:20px;}
.flashbox .goodsItem{padding:5px 20px;}
-->
</style>
<script src="themes/quwan/js/changimages.js" type=text/javascript></SCRIPT>
<DIV class="flashbox box_1" align="center">
<div class="tit">
<img src="themes/quwan/images/tit_new.gif">
<div class="f_r">
<UL id=SwitchNav>
  <LI><a href="#"></a> </LI>
  <LI><a href="#"></a> </LI>
  <LI> <a href="#"></a></LI>
  
</UL>
<a href="#" class="more" style="float:left">更多</a>
</DIV>
</DIV>
<div style=" clear:both"></div>
<DIV id=SwitchBigPic>
<DIV>
<dl class="goodsItem">
       <a href="goods.php?id=8"><img src="images/201112/thumb_img/8_thumb_G_1323229859189.jpg" alt="福如东海" class="goodsimg" /></a><br />
       <p><a href="goods.php?id=8" title="福如东海">福如东海</a></p>
       <font class="f1">
             ￥137元             </font>
</dl>
  <dl class="goodsItem">
       <a href="goods.php?id=7"><img src="images/201112/thumb_img/7_thumb_G_1323229805064.jpg" alt="儿童换了派" class="goodsimg" /></a><br />
       <p><a href="goods.php?id=7" title="儿童换了派">儿童换了派</a></p>
       <font class="f1">
             ￥110元             </font>
</dl>
  <dl class="goodsItem">
       <a href="goods.php?id=6"><img src="images/201112/thumb_img/6_thumb_G_1323229720702.jpg" alt="蓝色恋曲" class="goodsimg" /></a><br />
       <p><a href="goods.php?id=6" title="蓝色恋曲">蓝色恋曲</a></p>
       <font class="f1">
             ￥90元             </font>
</dl>
  <dl class="goodsItem">
       <a href="goods.php?id=5"><img src="images/201112/thumb_img/5_thumb_G_1323229665446.jpg" alt="寂静的春天" class="goodsimg" /></a><br />
       <p><a href="goods.php?id=5" title="寂静的春天">寂静的春天</a></p>
       <font class="f1">
             ￥300元             </font>
</dl>
  <dl class="goodsItem">
       <a href="goods.php?id=4"><img src="images/201112/thumb_img/4_thumb_G_1323177814570.jpg" alt="芋泥恋曲 " class="goodsimg" /></a><br />
       <p><a href="goods.php?id=4" title="芋泥恋曲 ">芋泥恋曲</a></p>
       <font class="f1">
             ￥139元             </font>
</dl>
  <dl class="goodsItem">
       <a href="goods.php?id=1"><img src="images/201112/thumb_img/1_thumb_G_1323175464685.jpg" alt="意乱情迷蛋糕" class="goodsimg" /></a><br />
       <p><a href="goods.php?id=1" title="意乱情迷蛋糕">意乱情迷蛋糕</a></p>
       <font class="f1">
             ￥120元             </font>
</dl>
  <dl class="goodsItem">
       <a href="goods.php?id=3"><img src="images/201112/thumb_img/3_thumb_G_1323177202028.jpg" alt="纯真年代" class="goodsimg" /></a><br />
       <p><a href="goods.php?id=3" title="纯真年代">纯真年代</a></p>
       <font class="f1">
             ￥100元             </font>
</dl>
  <dl class="goodsItem">
       <a href="goods.php?id=2"><img src="images/201112/thumb_img/2_thumb_G_1323175538229.jpg" alt="欢乐一派蛋糕" class="goodsimg" /></a><br />
       <p><a href="goods.php?id=2" title="欢乐一派蛋糕">欢乐一派蛋糕</a></p>
       <font class="f1">
             ￥150元             </font>
</dl>
  </DIV>
<DIV>
</DIV>
<DIV>
</DIV>
</DIV>
</DIV>
<SCRIPT>
	var bigswitch = new SwitchPic(
		{
			bigpic:"SwitchBigPic",
			switchnav:"SwitchNav",
			selectstyle:"selected",
			objname:"bigswitch"
		}
	) ;
	bigswitch.goSwitch(bigswitch,0);
	bigswitch.autoSwitchTimer = setTimeout("bigswitch.autoSwitch(bigswitch) ;", 3000);
</SCRIPT>
 
</div>
<div style="float:right; width:260px; overflow:hidden">
<div class="box_1 sale_box">
<div class="tit">
<a href="search.php?intro=promotion"><img src="themes/quwan/images/tit_sale.gif" /></a>
</div>
<div class="clearfix">
<p class="name"><a href="goods.php?id=3" title="纯真年代">纯真年代 </a></p>
<div class="sale_pic"><a href="goods.php?id=3">
<img src="themes/quwan/images/biao_hot.gif" style="position:absolute; right:0; top:0">
<img alt="纯真年代" src="images/201112/thumb_img/3_thumb_G_1323177202028.jpg" width="231" height="139"></a>
</div>
<div class="price">
抢购价:<font class="f1">￥100元</font>
</div>
<div class="market">
市场价：<span class="market_s">￥216元</span>
</div>
<div class="timeBox_l">
<b>194</b> 人已购买
</div>
<div id="time" s="1323100800" e="1449244800" n="1326944230" class="timeBox">
正在载入...
</div>
<div class="blank"></div>
<div style="text-align:center;">
<a href="goods.php?id=3"><img alt="去抢购" src="themes/quwan/images/qianggou.gif"></a>
</div>
 
 </div>
</div>
<div class="blank"></div>
<div class="cat_articles new_article">
<img src="themes/quwan/images/tit_gonggao.gif" style="float:left">
<div class="boxCenterList clearfix ">
</div>
</div>
<div class="blank"></div>
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"5";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca<div class="blank"></div>
</div>
 
 <div class="blank"></div>
 
 
<div class="f_l blank_no">
</div>
 
<div class="f_l blank_no" style=" padding-left:15px">
</div>
 
<div class="f_r blank_no">
</div>
<div class="blank"></div>
<div class="line_1"></div>
<div class="blank"></div>
<div class="box cat_goods">
<h3>
  <span>
  <ul>
 <li class="name_img">
   <a href="category.php?id=1" ><img src="themes/quwan/images/cat/1.gif">  </a>
 </li> 
 
<li class="li1">
   </li>
  </ul>
  </span>  
  <a class="more" href="category.php?id=1">更多商品</a>
</h3>
<div class="box_1 cat_goods_box">
<div class="clearfix goodsBox" style="border:none;">
    <div class="f_l">  
<div style="float:left">   
<a href='#' target='_blank'><img src='data/afficheimg/1323186394227613338.jpg' width='184' height='420' /></a>   
</div>  
</div>    
    
    
<div class="f_r">    
<div class="goodsItem">
    <a href="goods.php?id=7"><img src="images/201112/thumb_img/7_thumb_G_1323229805064.jpg" alt="儿童换了派" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=7" title="儿童换了派">儿童换了派</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥110元</font> 
            </p>
</div> 
<div class="goodsItem">
    <a href="goods.php?id=5"><img src="images/201112/thumb_img/5_thumb_G_1323229665446.jpg" alt="寂静的春天" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=5" title="寂静的春天">寂静的春天</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥300元</font> 
            </p>
</div> 
<div class="goodsItem">
    <a href="goods.php?id=3"><img src="images/201112/thumb_img/3_thumb_G_1323177202028.jpg" alt="纯真年代" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=3" title="纯真年代">纯真年代</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥100元</font> 
            </p>
</div> 
<div class="goodsItem">
    <a href="goods.php?id=2"><img src="images/201112/thumb_img/2_thumb_G_1323175538229.jpg" alt="欢乐一派蛋糕" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=2" title="欢乐一派蛋糕">欢乐一派蛋糕</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥150元</font> 
            </p>
</div> 
</div>  
<div class="f_A_d">
<table cellpadding="0" cellspacing="0">
<tr><td>
<a target="_blank" title="" href="#"><img height="58" width="110" src="media/cat1.jpg" style="display: inline; border:1px solid #ccc; padding:10px 30px; margin-bottom:10px"></a>
</td></tr>
<tr><td><a target="_blank" title="" href="#"><img height="58" width="110" src="media/cat2.jpg" style="display: inline; border:1px solid #ccc; padding:10px 30px;margin-bottom:10px"></a></td></tr>
<tr><td><a target="_blank" title="" href="#"><img height="58" width="110" src="media/cat3.jpg" style="display: inline; border:1px solid #ccc; padding:10px 30px;margin-bottom:10px"></a></td></tr>
<tr><td><a target="_blank" title="" href="#"><img height="58" width="110" src="media/cat4.jpg" style="display: inline; border:1px solid #ccc; padding:10px 30px;margin-bottom:10px"></a>
</td></tr>
<tr><td><a target="_blank" title="" href="#"><img height="58" width="110" src="media/cat1.jpg" style="display: inline; border:1px solid #ccc; padding:10px 30px;margin-bottom:10px"></a>
</td></tr>
</table>
  
</div>
</div>
</div>
</div>
<div class="blank"></div>
  
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"2";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca<div class="blank"></div><div class="box cat_goods">
<h3>
  <span>
  <ul>
 <li class="name_img">
   <a href="category.php?id=2" ><img src="themes/quwan/images/cat/2.gif">  </a>
 </li> 
 
<li class="li1">
   </li>
  </ul>
  </span>  
  <a class="more" href="category.php?id=2">更多商品</a>
</h3>
<div class="box_1 cat_goods_box">
<div class="clearfix goodsBox" style="border:none;">
    <div class="f_l">  
<div style="float:left">   
<a href='#' target='_blank'><img src='data/afficheimg/1323186866898530919.jpg' width='184' height='420' /></a>   
</div>  
</div>    
    
    
<div class="f_r">    
<div class="goodsItem">
    <a href="goods.php?id=8"><img src="images/201112/thumb_img/8_thumb_G_1323229859189.jpg" alt="福如东海" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=8" title="福如东海">福如东海</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥137元</font> 
            </p>
</div> 
<div class="goodsItem">
    <a href="goods.php?id=7"><img src="images/201112/thumb_img/7_thumb_G_1323229805064.jpg" alt="儿童换了派" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=7" title="儿童换了派">儿童换了派</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥110元</font> 
            </p>
</div> 
<div class="goodsItem">
    <a href="goods.php?id=4"><img src="images/201112/thumb_img/4_thumb_G_1323177814570.jpg" alt="芋泥恋曲 " class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=4" title="芋泥恋曲 ">芋泥恋曲</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥139元</font> 
            </p>
</div> 
<div class="goodsItem">
    <a href="goods.php?id=3"><img src="images/201112/thumb_img/3_thumb_G_1323177202028.jpg" alt="纯真年代" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=3" title="纯真年代">纯真年代</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥100元</font> 
            </p>
</div> 
<div class="goodsItem">
    <a href="goods.php?id=2"><img src="images/201112/thumb_img/2_thumb_G_1323175538229.jpg" alt="欢乐一派蛋糕" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=2" title="欢乐一派蛋糕">欢乐一派蛋糕</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥150元</font> 
            </p>
</div> 
</div>  
<div class="f_A_d">
<table cellpadding="0" cellspacing="0">
<tr><td>
<a target="_blank" title="" href="#"><img height="58" width="110" src="media/cat1.jpg" style="display: inline; border:1px solid #ccc; padding:10px 30px; margin-bottom:10px"></a>
</td></tr>
<tr><td><a target="_blank" title="" href="#"><img height="58" width="110" src="media/cat2.jpg" style="display: inline; border:1px solid #ccc; padding:10px 30px;margin-bottom:10px"></a></td></tr>
<tr><td><a target="_blank" title="" href="#"><img height="58" width="110" src="media/cat3.jpg" style="display: inline; border:1px solid #ccc; padding:10px 30px;margin-bottom:10px"></a></td></tr>
<tr><td><a target="_blank" title="" href="#"><img height="58" width="110" src="media/cat4.jpg" style="display: inline; border:1px solid #ccc; padding:10px 30px;margin-bottom:10px"></a>
</td></tr>
<tr><td><a target="_blank" title="" href="#"><img height="58" width="110" src="media/cat1.jpg" style="display: inline; border:1px solid #ccc; padding:10px 30px;margin-bottom:10px"></a>
</td></tr>
</table>
  
</div>
</div>
</div>
</div>
<div class="blank"></div>
  
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"1";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca<div class="blank"></div><div class="box cat_goods">
<h3>
  <span>
  <ul>
 <li class="name_img">
   <a href="category.php?id=3" ><img src="themes/quwan/images/cat/3.gif">  </a>
 </li> 
 
<li class="li1">
   </li>
  </ul>
  </span>  
  <a class="more" href="category.php?id=3">更多商品</a>
</h3>
<div class="box_1 cat_goods_box">
<div class="clearfix goodsBox" style="border:none;">
    <div class="f_l">  
<div style="float:left">   
<a href='#' target='_blank'><img src='data/afficheimg/1323186917575382313.jpg' width='184' height='420' /></a>   
</div>  
</div>    
    
    
<div class="f_r">    
<div class="goodsItem">
    <a href="goods.php?id=8"><img src="images/201112/thumb_img/8_thumb_G_1323229859189.jpg" alt="福如东海" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=8" title="福如东海">福如东海</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥137元</font> 
            </p>
</div> 
<div class="goodsItem">
    <a href="goods.php?id=5"><img src="images/201112/thumb_img/5_thumb_G_1323229665446.jpg" alt="寂静的春天" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=5" title="寂静的春天">寂静的春天</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥300元</font> 
            </p>
</div> 
<div class="goodsItem">
    <a href="goods.php?id=4"><img src="images/201112/thumb_img/4_thumb_G_1323177814570.jpg" alt="芋泥恋曲 " class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=4" title="芋泥恋曲 ">芋泥恋曲</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥139元</font> 
            </p>
</div> 
<div class="goodsItem">
    <a href="goods.php?id=1"><img src="images/201112/thumb_img/1_thumb_G_1323175464685.jpg" alt="意乱情迷蛋糕" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=1" title="意乱情迷蛋糕">意乱情迷蛋糕</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥120元</font> 
            </p>
</div> 
</div>  
<div class="f_A_d">
<table cellpadding="0" cellspacing="0">
<tr><td>
<a target="_blank" title="" href="#"><img height="58" width="110" src="media/cat1.jpg" style="display: inline; border:1px solid #ccc; padding:10px 30px; margin-bottom:10px"></a>
</td></tr>
<tr><td><a target="_blank" title="" href="#"><img height="58" width="110" src="media/cat2.jpg" style="display: inline; border:1px solid #ccc; padding:10px 30px;margin-bottom:10px"></a></td></tr>
<tr><td><a target="_blank" title="" href="#"><img height="58" width="110" src="media/cat3.jpg" style="display: inline; border:1px solid #ccc; padding:10px 30px;margin-bottom:10px"></a></td></tr>
<tr><td><a target="_blank" title="" href="#"><img height="58" width="110" src="media/cat4.jpg" style="display: inline; border:1px solid #ccc; padding:10px 30px;margin-bottom:10px"></a>
</td></tr>
<tr><td><a target="_blank" title="" href="#"><img height="58" width="110" src="media/cat1.jpg" style="display: inline; border:1px solid #ccc; padding:10px 30px;margin-bottom:10px"></a>
</td></tr>
</table>
  
</div>
</div>
</div>
</div>
<div class="blank"></div>
  
<div style=" clear:both"></div>
<div class="small_box f_l">
<div class="box cat_goods">
<h3>
  <span>
  <ul>
 <li class="name_img">
   <a href="category.php?id=7" ><img src="themes/quwan/images/cat/7.gif">  </a>
 </li> 
 
<li class="li1">
   </li>
  </ul>
  </span>  
  <a class="more" href="category.php?id=7">更多商品</a>
</h3>
<div class="box_1 cat_goods_box">
<div class="clearfix goodsBox" style="border:none;">
    <div class="f_l">  
<div style="float:left">   
   
</div>  
</div>    
    
    
<div class="f_r">    
<div class="goodsItem">
    <a href="goods.php?id=8"><img src="images/201112/thumb_img/8_thumb_G_1323229859189.jpg" alt="福如东海" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=8" title="福如东海">福如东海</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥137元</font> 
            </p>
</div> 
<div class="goodsItem">
    <a href="goods.php?id=7"><img src="images/201112/thumb_img/7_thumb_G_1323229805064.jpg" alt="儿童换了派" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=7" title="儿童换了派">儿童换了派</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥110元</font> 
            </p>
</div> 
<div class="goodsItem">
    <a href="goods.php?id=6"><img src="images/201112/thumb_img/6_thumb_G_1323229720702.jpg" alt="蓝色恋曲" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=6" title="蓝色恋曲">蓝色恋曲</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥90元</font> 
            </p>
</div> 
</div>  
<div class="f_A_d">
  
</div>
</div>
</div>
</div>
<div class="blank"></div>
  
<div class="box cat_goods">
<h3>
  <span>
  <ul>
 <li class="name_img">
   <a href="category.php?id=5" ><img src="themes/quwan/images/cat/5.gif">  </a>
 </li> 
 
<li class="li1">
   </li>
  </ul>
  </span>  
  <a class="more" href="category.php?id=5">更多商品</a>
</h3>
<div class="box_1 cat_goods_box">
<div class="clearfix goodsBox" style="border:none;">
    <div class="f_l">  
<div style="float:left">   
   
</div>  
</div>    
    
    
<div class="f_r">    
<div class="goodsItem">
    <a href="goods.php?id=8"><img src="images/201112/thumb_img/8_thumb_G_1323229859189.jpg" alt="福如东海" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=8" title="福如东海">福如东海</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥137元</font> 
            </p>
</div> 
<div class="goodsItem">
    <a href="goods.php?id=7"><img src="images/201112/thumb_img/7_thumb_G_1323229805064.jpg" alt="儿童换了派" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=7" title="儿童换了派">儿童换了派</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥110元</font> 
            </p>
</div> 
<div class="goodsItem">
    <a href="goods.php?id=6"><img src="images/201112/thumb_img/6_thumb_G_1323229720702.jpg" alt="蓝色恋曲" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=6" title="蓝色恋曲">蓝色恋曲</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥90元</font> 
            </p>
</div> 
</div>  
<div class="f_A_d">
  
</div>
</div>
</div>
</div>
<div class="blank"></div>
  
</div>
  
  
<div class="small_box f_r">
<div class="box cat_goods">
<h3>
  <span>
  <ul>
 <li class="name_img">
   <a href="category.php?id=6" ><img src="themes/quwan/images/cat/6.gif">  </a>
 </li> 
 
<li class="li1">
   </li>
  </ul>
  </span>  
  <a class="more" href="category.php?id=6">更多商品</a>
</h3>
<div class="box_1 cat_goods_box">
<div class="clearfix goodsBox" style="border:none;">
    <div class="f_l">  
<div style="float:left">   
   
</div>  
</div>    
    
    
<div class="f_r">    
<div class="goodsItem">
    <a href="goods.php?id=7"><img src="images/201112/thumb_img/7_thumb_G_1323229805064.jpg" alt="儿童换了派" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=7" title="儿童换了派">儿童换了派</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥110元</font> 
            </p>
</div> 
<div class="goodsItem">
    <a href="goods.php?id=6"><img src="images/201112/thumb_img/6_thumb_G_1323229720702.jpg" alt="蓝色恋曲" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=6" title="蓝色恋曲">蓝色恋曲</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥90元</font> 
            </p>
</div> 
<div class="goodsItem">
    <a href="goods.php?id=5"><img src="images/201112/thumb_img/5_thumb_G_1323229665446.jpg" alt="寂静的春天" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=5" title="寂静的春天">寂静的春天</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥300元</font> 
            </p>
</div> 
</div>  
<div class="f_A_d">
  
</div>
</div>
</div>
</div>
<div class="blank"></div>
  
<div class="box cat_goods">
<h3>
  <span>
  <ul>
 <li class="name_img">
   <a href="category.php?id=4" ><img src="themes/quwan/images/cat/4.gif">  </a>
 </li> 
 
<li class="li1">
   </li>
  </ul>
  </span>  
  <a class="more" href="category.php?id=4">更多商品</a>
</h3>
<div class="box_1 cat_goods_box">
<div class="clearfix goodsBox" style="border:none;">
    <div class="f_l">  
<div style="float:left">   
   
</div>  
</div>    
    
    
<div class="f_r">    
<div class="goodsItem">
    <a href="goods.php?id=8"><img src="images/201112/thumb_img/8_thumb_G_1323229859189.jpg" alt="福如东海" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=8" title="福如东海">福如东海</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥137元</font> 
            </p>
</div> 
<div class="goodsItem">
    <a href="goods.php?id=7"><img src="images/201112/thumb_img/7_thumb_G_1323229805064.jpg" alt="儿童换了派" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=7" title="儿童换了派">儿童换了派</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥110元</font> 
            </p>
</div> 
<div class="goodsItem">
    <a href="goods.php?id=5"><img src="images/201112/thumb_img/5_thumb_G_1323229665446.jpg" alt="寂静的春天" class="goodsimg" /></a>
    <p class="name"><a href="goods.php?id=5" title="寂静的春天">寂静的春天</a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
                <font class="shop">￥300元</font> 
            </p>
</div> 
</div>  
<div class="f_A_d">
  
</div>
</div>
</div>
</div>
<div class="blank"></div>
  
</div>
<div style=" clear:both"></div>
<div class="line_1"></div>
<div class="blank"></div>
<div style=" clear:both"></div>
</div>
 
 
<script type="text/javascript">
   if (Object.prototype.toJSONString){
      var oldToJSONString = Object.toJSONString;
      Object.prototype.toJSONString = function(){
        if (arguments.length > 0){
          return false;
        }else{
          return oldToJSONString.apply(this, arguments);
        }
		}
}
</script>
<div class="blank"></div>
<div class="footer_box">
<div class="block clearfix">
<div class="blank"></div>
<img src="themes/quwan/images/service.gif">
<div class="blank"></div>
<div class="fot_b">
<img src="themes/quwan/images/b1.gif">
<img src="themes/quwan/images/b2.gif">
<img src="themes/quwan/images/b3.gif">
<img src="themes/quwan/images/b4.gif">
<img src="themes/quwan/images/b5.gif">
<img src="themes/quwan/images/b6.gif" style="padding:0;">
</div>
</div>
<div class="blank"></div>
<div class="box block">
  <div class="links clearfix" >
  <div class="link_l"><img src="themes/quwan/images/link_l.gif">
  </div>
  <div class="link_r">
  
    <br />
            <a href="http://www.timepaw.com/" target="_blank" title="我的时光机">我的时光机</a>
        <a href="http://www.webcool.org/" target="_blank" title="网酷网络">网酷网络</a>
         </div>   
 </div>
</div>
<div class="blank"></div>
<div class="block">
  <div class="bNavList clearfix">
    </div>
 </div>
<div class="blank"></div>
<div id="footer">
 <div class="text">
 &copy; 2005-2012 爱尚蛋糕，从此爱上蛋糕 版权所有，并保留所有权利。<br />
 万塘路262号                <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=83976969&amp;Site=爱尚蛋糕，从此爱上蛋糕&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:83976969:4" height="16" border="0" alt="QQ" /> 83976969</a>
                                                                                  
            <div align="center" style="padding-bottom:5px;  " ></div>
            
        <div class="blank"></div>
       
        
        
        
         <div class="blank"></div>
       
 </div>
</div>
</div>
<script type="text/javascript" src="js/my_lefttime.js"></script></body>
</html>