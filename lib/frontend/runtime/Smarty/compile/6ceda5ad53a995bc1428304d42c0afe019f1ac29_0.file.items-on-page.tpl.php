<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:14:00
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\catalog\items-on-page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca06f8475ec9_82971048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ceda5ad53a995bc1428304d42c0afe019f1ac29' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\catalog\\items-on-page.tpl',
      1 => 1632834076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca06f8475ec9_82971048 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (\frontend\design\Info::themeSetting('old_listing')) {?>
    <div class="items-on-page">
        <form action="<?php echo $_smarty_tpl->tpl_vars['sorting_link']->value;?>
" method="get" class="sort-form">
            <?php echo $_smarty_tpl->tpl_vars['hidden_fields']->value;?>


            <span class="before"><?php echo (defined('SHOW') ? constant('SHOW') : null);?>
</span>
            <select class="items-select" name="max_items">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['view']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['view_id']->value == $_smarty_tpl->tpl_vars['item']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <span class="after"><?php echo (defined('ITEMS') ? constant('ITEMS') : null);?>
</span>

        </form>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
        tl('<?php echo frontend\design\Info::themeFile('/js/main.js');?>
', function(){
            var boxID = $('#box-<?php echo $_smarty_tpl->tpl_vars['box_id']->value;?>
');

            $('select', boxID).off('change', getProductsList).on('change', getProductsList);
        })
    <?php echo '</script'; ?>
>
<?php } else { ?>
    <div class="items-on-page">
            <span class="before"><?php echo (defined('SHOW') ? constant('SHOW') : null);?>
</span>
            <select class="items-select" name="max_items">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['view']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['view_id']->value == $_smarty_tpl->tpl_vars['item']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <span class="after"><?php echo (defined('ITEMS') ? constant('ITEMS') : null);?>
</span>
    </div>
<?php }
}
}
