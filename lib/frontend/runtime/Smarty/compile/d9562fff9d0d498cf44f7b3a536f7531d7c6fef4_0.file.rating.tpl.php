<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:14:07
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\listing-product\element\rating.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca06ff326c62_81467367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9562fff9d0d498cf44f7b3a536f7531d7c6fef4' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\listing-product\\element\\rating.tpl',
      1 => 1632834075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca06ff326c62_81467367 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('rating', frontend\design\Info::getProductsRating($_smarty_tpl->tpl_vars['product']->value['id']));
if ($_smarty_tpl->tpl_vars['rating']->value > 0) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
#reviews"><span class="rating-<?php echo $_smarty_tpl->tpl_vars['rating']->value;?>
"></span></a>
<?php }
}
}
