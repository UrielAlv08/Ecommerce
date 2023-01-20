<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:14:04
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\listing-product\element\stock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca06fc0dfad9_18243777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce94ee8ac76c1ef7cead9d52e2e2ffa09be992f6' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\listing-product\\element\\stock.tpl',
      1 => 1632834075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca06fc0dfad9_18243777 (Smarty_Internal_Template $_smarty_tpl) {
?>        <span class="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['stock_indicator']['text_stock_code']))) {
echo $_smarty_tpl->tpl_vars['product']->value['stock_indicator']['text_stock_code'];
}?>">
            <span class="<?php echo $_smarty_tpl->tpl_vars['product']->value['stock_indicator']['stock_code'];?>
-icon">&nbsp;</span>
            <?php echo $_smarty_tpl->tpl_vars['product']->value['stock_indicator']['stock_indicator_text'];?>

        </span>
<?php }
}
