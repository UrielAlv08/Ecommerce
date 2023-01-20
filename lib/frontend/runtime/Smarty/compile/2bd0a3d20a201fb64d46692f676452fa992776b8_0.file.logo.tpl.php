<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:14:12
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca0704682937_12212646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bd0a3d20a201fb64d46692f676452fa992776b8' => 
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
function content_63ca0704682937_12212646 (Smarty_Internal_Template $_smarty_tpl) {
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
