<div class="box_1 top_10">
<div class="tit">
<img src="themes/quwan/images/tit_top10.gif">
</div>


 <div class="boxCenterList2">
  <?php $_from = $this->_var['top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_71713400_1323233361');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_71713400_1323233361']):
        $this->_foreach['no']['iteration']++;
?>

  <ul
  
   <?php if (! ($this->_foreach['no']['iteration'] == $this->_foreach['no']['total'])): ?>
 style=" border-bottom:1px solid #eaeaea; " 
<?php endif; ?>
  
  
   class="clearfix ul_list"  id=top1s<?php echo $this->_foreach['no']['iteration']; ?> onMouseOver="show_goodspic(<?php echo $this->_foreach['no']['iteration']; ?>,'top1')">
     <div class="iteration2" />
     <?php echo $this->_foreach['no']['iteration']; ?>
     </div>
    
      <li  <?php if ($this->_foreach['no']['iteration'] < 2): ?> class="iteration1"<?php endif; ?> >
      <a href="<?php echo $this->_var['goods_0_71713400_1323233361']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_71713400_1323233361']['name']); ?>" style="float:left"><?php echo $this->_var['goods_0_71713400_1323233361']['short_name']; ?></a>
      </li>  
     </ul>
     
  <ul 
  
   <?php if (! ($this->_foreach['no']['iteration'] == $this->_foreach['no']['total'])): ?>
 style=" border-bottom:1px solid #eaeaea; " 
<?php endif; ?>
  
  class="clearfix ul_box"  id=top1b<?php echo $this->_foreach['no']['iteration']; ?> >

     
     <div class="iteration"/> 
     <?php echo $this->_foreach['no']['iteration']; ?>
     </div>
     
     
      
      <li class="goodsimg" >
      <a href="<?php echo $this->_var['goods_0_71713400_1323233361']['url']; ?>"><img src="<?php echo $this->_var['goods_0_71713400_1323233361']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_71713400_1323233361']['name']); ?>"  /></a>
      </li>
      
       
      
       <li <?php if ($this->_foreach['no']['iteration'] < 2): ?> class="iteration1" <?php endif; ?> >
      <div style="height:36px; line-height:18px; margin-bottom:11px;"><a href="<?php echo $this->_var['goods_0_71713400_1323233361']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_71713400_1323233361']['name']); ?>"><?php echo $this->_var['goods_0_71713400_1323233361']['short_name']; ?></a></div>
     
      <font class="f1" style="font-weight:bold;" ><?php echo $this->_var['goods_0_71713400_1323233361']['price']; ?></font>
      </li> 
      
    
 </ul>

    
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   <SCRIPT type=text/javascript> window.onload = show_goodspic(1,'top1');</SCRIPT>
 </div>
</div>

