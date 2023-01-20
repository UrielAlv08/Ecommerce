<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:08:22
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\hide-box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca05a6d5c253_80944973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20f1126692cd397e78b256bec414ace7dec42645' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\hide-box.tpl',
      1 => 1632834076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca05a6d5c253_80944973 (Smarty_Internal_Template $_smarty_tpl) {
if (!frontend\design\Info::isAdmin()) {
echo '<script'; ?>
>
<?php if (!(isset($_smarty_tpl->tpl_vars['parents']->value))) {
} elseif ($_smarty_tpl->tpl_vars['parents']->value == 2) {?>
    document.getElementById('box-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
')
        .closest('.box-block')
        .style.display = 'none';
<?php } elseif ($_smarty_tpl->tpl_vars['parents']->value == 3) {?>
    document.getElementById('box-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
')
        .closest('.box-block').parentNode.closest('.box-block')
        .style.display = 'none';
<?php } elseif ($_smarty_tpl->tpl_vars['parents']->value == 4) {?>
    document.getElementById('box-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
')
        .closest('.box-block').parentNode.closest('.box-block').parentNode.closest('.box-block')
        .style.display = 'none';
<?php }
echo '</script'; ?>
>
<?php }
}
}
