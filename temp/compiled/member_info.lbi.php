<div id="append_parent"></div>
<?php if ($this->_var['user_info']): ?>
<font style=" font-size:12px;">
<?php echo $this->_var['lang']['hello']; ?>，<font class="f4_b"><?php echo $this->_var['user_info']['username']; ?></font>, <?php echo $this->_var['lang']['welcome_return']; ?>！
<a href="user.php"><?php echo $this->_var['lang']['user_center']; ?></a> |
 <a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a> |
</font>
<?php else: ?>
 <span>欢迎来到本店！</span><a class="f1" href="user.php?act=register">注册</a> | <a class="f1" href="user.php">登录</a> |
<?php endif; ?>