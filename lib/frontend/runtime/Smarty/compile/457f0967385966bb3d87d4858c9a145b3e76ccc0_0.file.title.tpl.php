<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:13:59
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\catalog\title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca06f74a26f1_69786304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '457f0967385966bb3d87d4858c9a145b3e76ccc0' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\catalog\\title.tpl',
      1 => 1632834076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca06f74a26f1_69786304 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['h1']->value) {?>
    <?php echo \frontend\design\Info::addBoxToCss('page-name');?>

    <?php if (!$_smarty_tpl->tpl_vars['settings']->value[0]['show_heading']) {?>
        <div class="page-name"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
        <h1><?php echo $_smarty_tpl->tpl_vars['h1']->value;?>
</h1>
    <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value[0]['show_heading'] == 'h1_name') {?>
        <h1><?php echo $_smarty_tpl->tpl_vars['h1']->value;?>
</h1>
        <div class="page-name"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
    <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value[0]['show_heading'] == 'h1') {?>
        <h1><?php echo $_smarty_tpl->tpl_vars['h1']->value;?>
</h1>
    <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value[0]['show_heading'] == 'name_in_div') {?>
        <div><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
    <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value[0]['show_heading'] == 'name_in_h1') {?>
        <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value[0]['show_heading'] == 'name_in_h2') {?>
        <h2 class="heading-2"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
    <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value[0]['show_heading'] == 'name_in_h3') {?>
        <h3 class="heading-3"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
    <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value[0]['show_heading'] == 'name_in_h4') {?>
        <h4 class="heading-4"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
    <?php }
} else { ?>
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
<?php }
}
}
