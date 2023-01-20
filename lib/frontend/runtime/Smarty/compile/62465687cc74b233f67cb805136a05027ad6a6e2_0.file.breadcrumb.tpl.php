<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:09:00
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca05cce63330_42321095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62465687cc74b233f67cb805136a05027ad6a6e2' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\breadcrumb.tpl',
      1 => 1632834076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca05cce63330_42321095 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['breadcrumb']->value) {?>
<div class="catalog-breadcrumb">
  <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value[0]['show_text'])) && $_smarty_tpl->tpl_vars['settings']->value[0]['show_text']) {?><div class="breadcrumbs-text"><?php echo (defined('TEXT_BEFORE_BREADCRUMBS') ? constant('TEXT_BEFORE_BREADCRUMBS') : null);?>
</div><?php }?>
  <ul class="breadcrumb-ul" >
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value, 'item');
$_smarty_tpl->tpl_vars['item']->iteration = 0;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->iteration++;
$__foreach_item_1_saved = $_smarty_tpl->tpl_vars['item'];
?>
    <li class="breadcrumb-li" >
      <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['link'])) && $_smarty_tpl->tpl_vars['item']->value['link'] != '') {?>
      <a class="breadcrumb-link"  href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
">
        <span class="breadcrumb-link-name" ><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span>
      </a>
      <?php } else { ?>
        <span class="breadcrumb-name-item" >
          <span class="breadcrumb-name" ><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span>
        </span>
      <?php }?>
          </li>
  <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>
<?php }
}
}
