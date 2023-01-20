<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:08:25
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca05a9cda9d7_68787849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad83eb38bf93d5b9bbb6b5cd598b50ca89b121bb' => 
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
function content_63ca05a9cda9d7_68787849 (Smarty_Internal_Template $_smarty_tpl) {
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
