<div class="box">
  <h3 class="h3_3">
  <span>排序：</span>
  <form method="GET" class="sort" name="listform">
  <div class="f_l" style="padding-top:6px;">
  
<a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list"><img src="themes/quwan/images/goods_id_<?php if ($this->_var['pager']['sort'] == 'goods_id'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['sort']['goods_id']; ?>"></a>
  <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list"><img src="themes/quwan/images/shop_price_<?php if ($this->_var['pager']['sort'] == 'shop_price'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['sort']['shop_price']; ?>"></a>
  <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=<?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list"><img src="themes/quwan/images/last_update_<?php if ($this->_var['pager']['sort'] == 'last_update'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['sort']['last_update']; ?>"></a>
  
  </div>
  
    <div class="f_r">
显示方式：

  <a href="javascript:;" onClick="javascript:display_mode('list')"><img src="themes/quwan/images/display_mode_list<?php if ($this->_var['pager']['display'] == 'list'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['list']; ?>"></a>
  <a href="javascript:;" onClick="javascript:display_mode('grid')"><img src="themes/quwan/images/display_mode_grid<?php if ($this->_var['pager']['display'] == 'grid'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['grid']; ?>"></a>
 
  </div>   
    <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
  <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
  <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
  <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
  <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
  <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
  <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
  <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
  <input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />
     
     
     
    </form>
  </h3>

    <?php if ($this->_var['category'] > 0): ?>
  <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
    <?php endif; ?>
    <?php if ($this->_var['pager']['display'] == 'list'): ?>
    <div class="goodsList">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_09493000_1323236974');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_09493000_1323236974']):
        $this->_foreach['goods_list']['iteration']++;
?>
    <ul class="clearfix bgcolor">
   
    <li class="thumb"><a href="<?php echo $this->_var['goods_0_09493000_1323236974']['url']; ?>"><img src="<?php echo $this->_var['goods_0_09493000_1323236974']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods_0_09493000_1323236974']['goods_name']; ?>" /></a></li>
    <li class="goodsName">
    <div class="div_name">
    <p class="name">
    <a href="<?php echo $this->_var['goods_0_09493000_1323236974']['url']; ?>" class="f6">
        <?php if ($this->_var['goods_0_09493000_1323236974']['goods_style_name']): ?>
        <?php echo $this->_var['goods_0_09493000_1323236974']['goods_style_name']; ?><br />
        <?php else: ?>
        <?php echo $this->_var['goods_0_09493000_1323236974']['goods_name']; ?><br />
        <?php endif; ?>
      </a>
     </p> 
     <p class="action">
     
    <?php if ($this->_var['goods_0_09493000_1323236974']['promote_price'] != ""): ?>
    <font class="f1"><?php echo $this->_var['lang']['promote_price']; ?> <?php echo $this->_var['goods_0_09493000_1323236974']['promote_price']; ?></font> 
    <?php else: ?>
    <font class="f1">本店价：<?php echo $this->_var['goods_0_09493000_1323236974']['shop_price']; ?></font> 
    <?php endif; ?>
    &nbsp;
     <?php if ($this->_var['show_marketprice']): ?>
    <span style="color:#999"><?php echo $this->_var['lang']['market_price']; ?><font class="market_s"><?php echo $this->_var['goods_0_09493000_1323236974']['market_price']; ?></font> </span>
    <?php endif; ?>
    </p>
      
      
     <?php if ($this->_var['goods_0_09493000_1323236974']['goods_brief']): ?>
   <p class="tese">
   产品特色：<b><?php echo $this->_var['goods_0_09493000_1323236974']['goods_brief']; ?></b>
   </p>
    <?php endif; ?> 
    <a href="javascript:addToCart(<?php echo $this->_var['goods_0_09493000_1323236974']['goods_id']; ?>)"><img src="themes/quwan/images/goumai.gif"></a>
    <a href="javascript:collect(<?php echo $this->_var['goods_0_09493000_1323236974']['goods_id']; ?>);"><img src="themes/quwan/images/shoucang.gif"></a>
    <a href="javascript:;" id="compareLink" onClick="Compare.add(<?php echo $this->_var['goods_0_09493000_1323236974']['goods_id']; ?>,'<?php echo addslashes($this->_var['goods_0_09493000_1323236974']['goods_name']); ?>','<?php echo $this->_var['goods_0_09493000_1323236974']['type']; ?>')"><img src="themes/quwan/images/duibi.gif"></a> 

     </div>
    
    </li>


    </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <?php elseif ($this->_var['pager']['display'] == 'grid'): ?>
    <div class="clearfix goodsBox goodsBox2" style="border:none; padding:10px 0">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_09622600_1323236974');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_09622600_1323236974']):
        $this->_foreach['goods_list']['iteration']++;
?>
    <?php if ($this->_var['goods_0_09622600_1323236974']['goods_id']): ?>
     <div class="goodsItem"  >
     <a href="<?php echo $this->_var['goods_0_09622600_1323236974']['url']; ?>"><img src="<?php echo $this->_var['goods_0_09622600_1323236974']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods_0_09622600_1323236974']['goods_name']; ?>" class="goodsimg" /></a><br />
           <p class="name"><a href="<?php echo $this->_var['goods_0_09622600_1323236974']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_09622600_1323236974']['name']); ?>"><?php echo $this->_var['goods_0_09622600_1323236974']['goods_name']; ?></a></p>
    <p class="price"> 
      <?php if ($this->_var['goods_0_09622600_1323236974']['promote_price'] != ""): ?>
    <font class="shop">促销价：<?php echo $this->_var['goods_0_09622600_1323236974']['promote_price']; ?></font> 
    <?php else: ?>
    <font class="shop">本店价：<?php echo $this->_var['goods_0_09622600_1323236974']['shop_price']; ?></font> 
    <?php endif; ?>
 
   </p>
 
  
 
 
 
        </div>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <?php elseif ($this->_var['pager']['display'] == 'text'): ?>
    <div class="goodsList">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_09695400_1323236974');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_09695400_1323236974']):
?>
     <?php if (($this->_foreach['goods_list']['iteration'] - 1) % 2 == 0): ?>id=""<?php else: ?>id="bgcolor"<?php endif; ?>>
 
    <ul class="clearfix bgcolor"<?php if (($this->_foreach['goods_list']['iteration'] - 1) % 2 == 0): ?>id=""<?php else: ?>id="bgcolor"<?php endif; ?>>
 
    <li class="goodsName">
    <div class="div_name">
    <a href="<?php echo $this->_var['goods_0_09695400_1323236974']['url']; ?>" class="f6 f5">
        <?php if ($this->_var['goods_0_09695400_1323236974']['goods_style_name']): ?>
        <?php echo $this->_var['goods_0_09695400_1323236974']['goods_style_name']; ?><br />
        <?php else: ?>
        <?php echo $this->_var['goods_0_09695400_1323236974']['goods_name']; ?><br />
        <?php endif; ?>
      </a>
     
     <?php if ($this->_var['goods_0_09695400_1323236974']['goods_brief']): ?>
    <?php echo $this->_var['lang']['goods_brief']; ?><?php echo $this->_var['goods_0_09695400_1323236974']['goods_brief']; ?><br />
    <?php endif; ?> 
    </div>
     <a href="javascript:collect(<?php echo $this->_var['goods_0_09695400_1323236974']['goods_id']; ?>);" class="bnt_blue">加入收藏</a>
    <a href="javascript:addToCart(<?php echo $this->_var['goods_0_09695400_1323236974']['goods_id']; ?>)" class="bnt_blue">立即购买</a>
    </li>
    <li>
   
    </li>
    <li class="action">
     <?php if ($this->_var['show_marketprice']): ?>
    <?php echo $this->_var['lang']['market_price']; ?><font class="market"><?php echo $this->_var['goods_0_09695400_1323236974']['market_price']; ?></font><br />
    <?php endif; ?>
    <?php if ($this->_var['goods_0_09695400_1323236974']['promote_price'] != ""): ?>
    <?php echo $this->_var['lang']['promote_price']; ?><font class="shop"><?php echo $this->_var['goods_0_09695400_1323236974']['promote_price']; ?></font><br />
    <?php else: ?>
    <?php echo $this->_var['lang']['shop_price']; ?><font class="shop"><?php echo $this->_var['goods_0_09695400_1323236974']['shop_price']; ?></font><br />
    <?php endif; ?>
    </li>
    </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <?php endif; ?>
  <?php if ($this->_var['category'] > 0): ?>
  </form>
  <?php endif; ?>

 </div>

<div class="blank5"></div>
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>