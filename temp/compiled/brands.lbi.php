










<?php if ($this->_var['brand_list']): ?>
<div class="box brands_gd">
 
<img style="float:left" src="themes/quwan/images/brands_tit.gif">
 
<a href="brand.php" class="more"  >更多</a>

<div class="blank"></div>







<DIV class="index_bottom clearfix">
<DIV class="left f_l"><IMG onmouseup=ISL_StopUp() onmouseout=ISL_StopUp() 
onmousedown=ISL_GoUp() src="themes/quwan/images/gd_l.gif"></DIV>
<DIV id=pic_scroller class="center f_l">
<DIV class=rollBox>
<DIV id=ISL_Cont class=Cont>
<DIV class=ScrCont>
<DIV id=List1>
  <?php $_from = $this->_var['brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');$this->_foreach['brand_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['brand']):
        $this->_foreach['brand_foreach']['iteration']++;
?>
      <?php if ($this->_var['brand']['brand_logo']): ?>
        <a href="<?php echo $this->_var['brand']['url']; ?>"><img src="data/brandlogo/<?php echo $this->_var['brand']['brand_logo']; ?>" alt="<?php echo htmlspecialchars($this->_var['brand']['brand_name']); ?> (<?php echo $this->_var['brand']['goods_num']; ?>)" /></a>
      <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</DIV>
<DIV id=List2></DIV></DIV></DIV></DIV></DIV>
<DIV class="right f_r"><IMG onmouseup=ISL_StopDown() onmouseout=ISL_StopDown() 
onmousedown=ISL_GoDown() src="themes/quwan/images/gd_r.gif"></DIV>
</DIV> 
 
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/scoll.js"></script>

</div>
<div class="blank"></div>
<?php endif; ?>