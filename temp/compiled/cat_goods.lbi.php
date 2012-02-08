<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<div class="box cat_goods">
<h3>
  <span>
  <ul>
 <li class="name_img">
   <a href="<?php echo $this->_var['goods_cat']['url']; ?>" ><img src="themes/quwan/images/cat/<?php echo $this->_var['goods_cat']['id']; ?>.gif">  </a>
 </li> 
 

<li class="li1">
<?php $_from = $this->_var['goods_cat']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
 

	<a href="category.php?id=<?php echo $this->_var['child']['cat_id']; ?>" target="_blank">
  <?php echo $this->_var['child']['cat_name']; ?>
  </a>
 
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   </li>
  </ul>
  </span>  
  <a class="more" href="<?php echo $this->_var['goods_cat']['url']; ?>">更多商品</a>
</h3>
<div class="box_1 cat_goods_box">
<div class="clearfix goodsBox" style="border:none;">
    <?php endif; ?>
<div class="f_l">  

<div style="float:left">   
<?php echo get_adv('cat_l',$GLOBALS['smarty']->_var['goods_cat']['id'])?>   
</div>  
<?php if ($this->_var['goods_cat']['id'] == 17 || $this->_var['goods_cat']['id'] == 18): ?>  
<div style="float:right">   
<?php echo get_adv_r('cat_r',$GLOBALS['smarty']->_var['goods_cat']['id'])?>   
</div>  
<?php endif; ?>


</div>    
    
    
<div class="f_r">    
<?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_72022300_1323233361');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_72022300_1323233361']):
?>
<div class="goodsItem">
    <a href="<?php echo $this->_var['goods_0_72022300_1323233361']['url']; ?>"><img src="<?php echo $this->_var['goods_0_72022300_1323233361']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_72022300_1323233361']['name']); ?>" class="goodsimg" /></a>
    <p class="name"><a href="<?php echo $this->_var['goods_0_72022300_1323233361']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_72022300_1323233361']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_72022300_1323233361']['short_name']); ?></a></p>
    <p class="price"> 
        <font class="f1">本店价：</font>
        <?php if ($this->_var['goods_0_72022300_1323233361']['promote_price'] != ""): ?>
        <font class="shop"><?php echo $this->_var['goods_0_72022300_1323233361']['promote_price']; ?></font> 
        <?php else: ?>
        <font class="shop"><?php echo $this->_var['goods_0_72022300_1323233361']['shop_price']; ?></font> 
        <?php endif; ?>
    </p>
</div> 
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>  
<?php if ($this->_var['goods_cat']['id'] != 17 && $this->_var['goods_cat']['id'] != 18): ?>
<div class="f_A_d">

<?php echo get_adv_r('cat_r',$GLOBALS['smarty']->_var['goods_cat']['id'])?>  
</div>
<?php endif; ?>
</div>
</div>
</div>

<div class="blank"></div>

  
