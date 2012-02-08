


<div class="cat_articles new_article">
<img src="themes/quwan/images/tit_gonggao.gif" style="float:left">
<div class="boxCenterList clearfix ">
<?php $_from = $this->_var['new_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['no']['iteration']++;
?>
<a style="width:248px;    
<?php if (! ($this->_foreach['no']['iteration'] == $this->_foreach['no']['total'])): ?>
border-bottom:1px solid #eaeaea 
<?php endif; ?>   
 " href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>"><?php echo $this->_var['article']['short_title']; ?></a>

<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

</div>
</div>
<div class="blank"></div>
