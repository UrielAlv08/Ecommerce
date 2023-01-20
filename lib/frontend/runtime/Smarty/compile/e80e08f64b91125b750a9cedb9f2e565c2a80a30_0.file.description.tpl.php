<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:14:07
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\listing-product\element\description.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca06ff095b64_31117016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e80e08f64b91125b750a9cedb9f2e565c2a80a30' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\listing-product\\element\\description.tpl',
      1 => 1632834075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca06ff095b64_31117016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp7\\htdocs\\Ecommerce\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
    <?php if ((isset($_smarty_tpl->tpl_vars['element']->value['settings'][0]['just_short'])) && $_smarty_tpl->tpl_vars['element']->value['settings'][0]['just_short']) {?>
        <?php $_smarty_tpl->_assignInScope('description', $_smarty_tpl->tpl_vars['product']->value['products_description_short']);?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['products_description_short']) {?>
            <?php $_smarty_tpl->_assignInScope('description', $_smarty_tpl->tpl_vars['product']->value['products_description_short']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('description', $_smarty_tpl->tpl_vars['product']->value['products_description']);?>
        <?php }?>
    <?php }?>
    <?php if (!((isset($_smarty_tpl->tpl_vars['element']->value['settings'][0]['use_tags'])) && $_smarty_tpl->tpl_vars['element']->value['settings'][0]['use_tags'])) {?>
        <?php $_smarty_tpl->_assignInScope('description', strip_tags($_smarty_tpl->tpl_vars['description']->value));?>

        <?php if (!(isset($_smarty_tpl->tpl_vars['element']->value['settings'][0]['full_description'])) || $_smarty_tpl->tpl_vars['element']->value['settings'][0]['full_description'] == '') {?>
            <?php if ((isset($_smarty_tpl->tpl_vars['element']->value['settings'][0]['description_characters'])) && $_smarty_tpl->tpl_vars['element']->value['settings'][0]['description_characters']) {?>
                <?php $_smarty_tpl->_assignInScope('description_characters', $_smarty_tpl->tpl_vars['element']->value['settings'][0]['description_characters']);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('description_characters', 90);?>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('description', smarty_modifier_truncate($_smarty_tpl->tpl_vars['description']->value,$_smarty_tpl->tpl_vars['description_characters']->value));?>
        <?php }?>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['description']->value;
}
}
