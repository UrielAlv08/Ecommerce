<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:14:00
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\catalog\sorting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca06f81f7059_78697980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca4915f58846d17b3e80b35304427500f6ce577c' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\catalog\\sorting.tpl',
      1 => 1632834076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca06f81f7059_78697980 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if (\frontend\design\Info::themeSetting('old_listing')) {?>
<div class="sorting">
  <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sorting_link']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="get" class="sort-form">
    <?php echo $_smarty_tpl->tpl_vars['hidden_fields']->value;?>


    <span class="before"><?php echo (defined('SORT_BY') ? constant('SORT_BY') : null);?>
</span>
    <select class="sort-select" name="sort">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sorting']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['id'] === $_smarty_tpl->tpl_vars['sorting_id']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</option>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>

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

  <div class="sorting">
      <span class="before"><?php echo (defined('SORT_BY') ? constant('SORT_BY') : null);?>
</span>
      <select class="sort-select" name="sort">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sorting']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['id'] === $_smarty_tpl->tpl_vars['sorting_id']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
  </div>
<?php }
}
}
