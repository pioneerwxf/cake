
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>


<?php
	require_once("themes/quwan/util.php");
?>


<div class="block header_bg" style="overflow:visible" >
 <div class="f_l" style="padding-top:10px;">
 <a href="index.php" name="top"><img style="float:left;" src="themes/quwan/images/logo.gif" /></a>
</div>
 
 
 
 <div class="f_r log">
  <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
  <ul>
   <font id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> 
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
 
 
 
 
  <?php if ($this->_var['navigator_list']['top']): ?>
    <ul>
    <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
           | <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
      
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
    </ul>
   <?php endif; ?>
   
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



  <ul class="u1" onmouseover="this.className='u1 u1_over '" onmouseout="this.className='u1'"   <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> id="cur"<?php endif; ?>  >
  <a  class="a1 home_a"  href="index.php">
  <img class="ul_l" src="themes/quwan/images/ul_bg_l.gif"><img class="ul_r" src="themes/quwan/images/ul_bg_r.gif"> 
  <?php echo $this->_var['lang']['home']; ?> 
  
  
  <img class="dot_l" src="themes/quwan/images/dot.gif">
  <img class="dot_r" src="themes/quwan/images/dot.gif">
   </a>
  </ul>

  
  
  <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
  
  <img style="float:left; padding:0 10px; "  src="themes/quwan/images/meun_line.gif">
  <ul class="u1" onmouseover="this.className='u1 u1_over'" onmouseout="this.className='u1'"  <?php if ($this->_var['nav']['active'] == 1): ?> id="cur"   <?php endif; ?> >
   
<a class="a1" href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>>
<img class="ul_l" src="themes/quwan/images/ul_bg_l.gif"> <img class="ul_r" src="themes/quwan/images/ul_bg_r.gif"> 
 <?php echo $this->_var['nav']['name']; ?>
 
  <img class="dot_l" src="themes/quwan/images/dot.gif">
  <img class="dot_r" src="themes/quwan/images/dot.gif">
</a>





  <?php 
                  		$subcates = get_subcate_byurl($GLOBALS['smarty']->_var['nav']['url']);
                 	    if($subcates!=false)
                        {
                        	if(count($subcates)>0)
                            {
                            	echo "<table cellpadding='0' border='0' cellspacing='0px' class='sub_nav'    ><tr >";
                                
                                if($subcates)
                                {
                                
                                
                                foreach($subcates as $cate)
                                
                                
                                {
                                echo "<td valign='top'><div style=' width:125px; padding-left:1px;border-top:10px solid #fff'>";
                                
                                	echo "<a href='".$cate['url']."'  >".$cate['name']."</a>";
									
                                    if($cate['children'])
                                    {
                                    foreach($cate['children'] as $subcate)
                                    {
                                    	echo "<a href='".$subcate['url']."' class='level_2'>".$subcate['name']."</a>";
                                    }
                                    }
                                    
                                 echo "</div></td>";    
                                }
                                
                                
                                }
                                
                                echo "</tr></table>";
                            }
                        }
          		   ?>
  
  
  </ul>
  
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 <div class="meun_float">
<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
<div class="cart" id="ECS_CARTINFO">
	<!--<div style="float:left; background:url(themes/quwan/images/cat_l.gif) 0 center no-repeat; padding-left:18px; ">

	 <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
	</div>-->
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
           alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
            return false;
        }
    }
    -->
    
    </script>
   

  <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" class="f_l" style="padding-top:7px;">

  <div style="float:left; border:1px solid #d2d2d2; padding-left:8px; background:url(themes/quwan/images/biao1.gif) 3px center no-repeat; margin-right:5px; margin-left:12px">
    <input name="keywords" type="text" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>" class="B_input" style="width:140px; float:left; background:none; border:none; vertical-align:middle; height:20px; line-height:20px; padding:0 10px; color:#999"/>
    </div>
    
   <input name="imageField" type="submit" value="" class="go" style="cursor:pointer; float:left" />
   
 
   <?php if ($this->_var['searchkeywords']): ?> 
    <div class="hot_search">
   <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
   <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   </div>
   <?php endif; ?>

   </form>
</div>


<div class="blank5b"></div>

