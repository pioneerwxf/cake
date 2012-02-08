<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/left_goodslist.js"></script>
<?php if ($this->_var['hot_goods']): ?>
<div class="box" >
 <div class="box_1">
  <h3><span><a  href="search.php?intro=hot">热卖商品</a></span></h3>
  <div class="boxCenterList clearfix hot_box">
  
  
   <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['no']['iteration']++;
?>
      <ul style="padding:0;" class="clearfix ul_list" id=hots<?php echo $this->_foreach['no']['iteration']; ?> onMouseOver="show_goodspic(<?php echo $this->_foreach['no']['iteration']; ?>,'hot')">
      <p class="name"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a></p>
      </ul>
       <ul class="clearfix " id=hotb<?php echo $this->_foreach['no']['iteration']; ?> style="DISPLAY: none">
           <li class="goodsimg"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"  class="B_blue" /></a></li>
          <li>
          <a class="name" href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a> 
            <font class="f1">
           <?php if ($this->_var['goods']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods']['shop_price']; ?>
          <?php endif; ?>
           </font>
          </li>
          </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <SCRIPT 
      type=text/javascript> window.onload = show_goodspic(1,'hot');</SCRIPT>
  
  </div>
 </div>
</div>
<div class="blank"></div>


<?php endif; ?>
