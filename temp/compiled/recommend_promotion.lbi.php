<?php if ($this->_var['promotion_goods']): ?>
<div class="box_1 sale_box">
<div class="tit">
<a href="search.php?intro=promotion"><img src="themes/quwan/images/tit_sale.gif" /></a>
</div>
<div class="clearfix">
<?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_71350500_1323233361');$this->_foreach['promotion_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_71350500_1323233361']):
        $this->_foreach['promotion_foreach']['iteration']++;
?>
<?php if (($this->_foreach['promotion_foreach']['iteration'] - 1) <= 2): ?>
<p class="name"><a href="<?php echo $this->_var['goods_0_71350500_1323233361']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_71350500_1323233361']['name']); ?>"><?php echo sub_str($this->_var['goods_0_71350500_1323233361']['name'],28); ?> <?php echo $this->_var['goods_0_71350500_1323233361']['brief']; ?></a></p>




<div class="sale_pic"><a href="<?php echo $this->_var['goods_0_71350500_1323233361']['url']; ?>">
<img src="themes/quwan/images/biao_hot.gif" style="position:absolute; right:0; top:0">
<img alt="<?php echo htmlspecialchars($this->_var['goods_0_71350500_1323233361']['name']); ?>" src="<?php echo $this->_var['goods_0_71350500_1323233361']['thumb']; ?>" width="231" height="139"></a>
</div>


<div class="price">
抢购价:<font class="f1"><?php echo $this->_var['goods_0_71350500_1323233361']['promote_price']; ?></font>
</div>

<div class="market">
市场价：<span class="market_s"><?php echo $this->_var['goods_0_71350500_1323233361']['market_price']; ?></span>
</div>


<div class="timeBox_l">
<b>194</b> 人已购买
</div>
<div id="time<?php echo $this->_var['goods_0_71350500_1323233361']['goods_id']; ?>" s="<?php echo $this->_var['goods_0_71350500_1323233361']['s_time']; ?>" e="<?php echo $this->_var['goods_0_71350500_1323233361']['e_time']; ?>" n="<?php echo $this->_var['goods_0_71350500_1323233361']['t_now']; ?>" class="timeBox">
正在载入...
</div>


<div class="blank"></div>

<div style="text-align:center;">
<a href="<?php echo $this->_var['goods_0_71350500_1323233361']['url']; ?>"><img alt="去抢购" src="themes/quwan/images/qianggou.gif"></a>
</div>

 

<?php endif; ?>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
</div>
<?php endif; ?>
<div class="blank"></div>