<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:14:04
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\listing-product\element\name.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca06fce40d52_24562049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd6a4d5b14e55481c85c9e3bb32e3bd6d97b93f4' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\listing-product\\element\\name.tpl',
      1 => 1632834075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca06fce40d52_24562049 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
">
    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['products_groups_name'])) && $_smarty_tpl->tpl_vars['product']->value['products_groups_name']) {?>
        <?php echo $_smarty_tpl->tpl_vars['product']->value['products_groups_name'];?>

    <?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['products_name_teg'])) && $_smarty_tpl->tpl_vars['product']->value['products_name_teg']) {?>
        <?php echo $_smarty_tpl->tpl_vars['product']->value['products_name_teg'];?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['product']->value['products_name'];?>

    <?php }?>
</a><?php }
}
