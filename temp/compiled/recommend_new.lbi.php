<?php if ($this->_var['new_goods']): ?>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/prototype.js" type=text/javascript></SCRIPT>
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
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/changimages.js" type=text/javascript></SCRIPT>
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
<?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['no1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no1']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['no1']['iteration']++;
?>
<?php if ($this->_foreach['no1']['iteration'] < 9): ?>
<dl class="goodsItem">
       <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg" /></a><br />
       <p><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a></p>
       <font class="f1">
       <?php if ($this->_var['goods']['promote_price'] != ""): ?>
      <?php echo $this->_var['goods']['promote_price']; ?>
      <?php else: ?>
      <?php echo $this->_var['goods']['shop_price']; ?>
      <?php endif; ?>
       </font>
</dl>
  <?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</DIV>
<DIV>
<?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['no2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no2']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['no2']['iteration']++;
?>
<?php if ($this->_foreach['no2']['iteration'] > 8 & $this->_foreach['no2']['iteration'] < 17): ?>
<dl class="goodsItem">
       <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg" /></a><br />
       <p><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a></p>
       <font class="f1">
       <?php if ($this->_var['goods']['promote_price'] != ""): ?>
      <?php echo $this->_var['goods']['promote_price']; ?>
      <?php else: ?>
      <?php echo $this->_var['goods']['shop_price']; ?>
      <?php endif; ?>
       </font>
</dl>
  <?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</DIV>


<DIV>
<?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['no3'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no3']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['no3']['iteration']++;
?>
<?php if ($this->_foreach['no3']['iteration'] > 16 & $this->_foreach['no3']['iteration'] < 25): ?>
<dl class="goodsItem">
       <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg" /></a><br />
       <p><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a></p>
       <font class="f1">
       <?php if ($this->_var['goods']['promote_price'] != ""): ?>
      <?php echo $this->_var['goods']['promote_price']; ?>
      <?php else: ?>
      <?php echo $this->_var['goods']['shop_price']; ?>
      <?php endif; ?>
       </font>
</dl>
  <?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></DIV>
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









 
<?php endif; ?>
