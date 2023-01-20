<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:14:09
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\listing-product\element\viewButton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca07016d1b02_82632205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e221dcf037423c8efbadef5387ad85e84230f82' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\listing-product\\element\\viewButton.tpl',
      1 => 1632834075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca07016d1b02_82632205 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="button-view">
    <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" class="btn view-button"><?php echo (defined('VIEW') ? constant('VIEW') : null);?>
</a>
</div><?php }
}
