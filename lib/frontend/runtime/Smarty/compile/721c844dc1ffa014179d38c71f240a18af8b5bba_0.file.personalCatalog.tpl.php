<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:14:09
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\listing-product\element\personalCatalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca0701969461_05236857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '721c844dc1ffa014179d38c71f240a18af8b5bba' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\listing-product\\element\\personalCatalog.tpl',
      1 => 1640263183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca0701969461_05236857 (Smarty_Internal_Template $_smarty_tpl) {
?>
<span class="btn del-from-personal-catalog" style="display: none"><?php echo (defined('DEL_TO_PERSONAL_CATALOG') ? constant('DEL_TO_PERSONAL_CATALOG') : null);?>
</span>
<span class="btn add-to-personal-catalog" style="display: none"><?php echo (defined('ADD_TO_PERSONAL_CATALOG') ? constant('ADD_TO_PERSONAL_CATALOG') : null);?>
</span><?php }
}
