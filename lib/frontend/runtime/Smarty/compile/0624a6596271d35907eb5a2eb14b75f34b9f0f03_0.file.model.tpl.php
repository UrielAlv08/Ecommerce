<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:14:05
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\listing-product\element\model.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca06fd773132_82979843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0624a6596271d35907eb5a2eb14b75f34b9f0f03' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\listing-product\\element\\model.tpl',
      1 => 1632834075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca06fd773132_82979843 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['products_model']) {?>
    <div class="products-model">
        <strong><?php echo (defined('TEXT_MODEL') ? constant('TEXT_MODEL') : null);?>
<span class="colon">:</span></strong>
        <span><?php echo $_smarty_tpl->tpl_vars['product']->value['products_model'];?>
</span>
    </div>
<?php }
}
}
