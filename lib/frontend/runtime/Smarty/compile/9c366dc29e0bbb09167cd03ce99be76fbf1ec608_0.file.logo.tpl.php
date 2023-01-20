<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:09:00
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca05cc327b63_01769283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c366dc29e0bbb09167cd03ce99be76fbf1ec608' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\logo.tpl',
      1 => 1632834077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca05cc327b63_01769283 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="logo">
  <?php if ($_smarty_tpl->tpl_vars['url']->value) {?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo STORE_NAME;?>
" style="border: none"></a>
  <?php } else { ?>
    <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo STORE_NAME;?>
" style="border: none">
  <?php }?>
</div><?php }
}
