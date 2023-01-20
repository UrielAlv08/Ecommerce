<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:14:07
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\listing-product\element\ratingCounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca06ffa21209_51536190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3eab1645c8d693e8ef933ee3a478a6ba56c82fc' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\listing-product\\element\\ratingCounts.tpl',
      1 => 1632834075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca06ffa21209_51536190 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('rating', frontend\design\Info::getProductsRating($_smarty_tpl->tpl_vars['product']->value['id']));
if ($_smarty_tpl->tpl_vars['rating']->value > 0) {?>
    (<?php echo frontend\design\Info::getProductsRating($_smarty_tpl->tpl_vars['product']->value['id'],'count');?>
)
<?php }
}
}
