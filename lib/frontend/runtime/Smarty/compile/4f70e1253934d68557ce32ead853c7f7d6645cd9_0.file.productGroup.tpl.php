<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:14:07
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\listing-product\element\productGroup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca06ffb13016_48589464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f70e1253934d68557ce32ead853c7f7d6645cd9' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\listing-product\\element\\productGroup.tpl',
      1 => 1645458691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca06ffb13016_48589464 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['product_group_params']) {?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['product_group_params']['properties'], 'property');
$_smarty_tpl->tpl_vars['property']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['property']->value) {
$_smarty_tpl->tpl_vars['property']->do_else = false;
?>
        <div class="radioBox2 radioBox">
            <div class="radioBoxHead"><span class="title"><?php echo $_smarty_tpl->tpl_vars['property']->value['properties_name'];?>
:</span> </div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['property']->value['values'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <label<?php if ($_smarty_tpl->tpl_vars['value']->value['color']) {?> class="prColor"<?php }?>>
                                        <div class="pr-groups<?php if ($_smarty_tpl->tpl_vars['value']->value['product']['selected']) {?> active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['product']['lazy']['link'];?>
" class="js-list-prod" <?php if (!($_smarty_tpl->tpl_vars['settings']->value[0]['hide_out_of_stock_groups'] && !$_smarty_tpl->tpl_vars['value']->value['product']['lazy']['stock_indicator']['flags']['add_to_cart'])) {
}?> data-products-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['product']['id'], ENT_QUOTES, 'UTF-8', true);?>
">
                            <div class="containerBlock" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['product']['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php if (strlen($_smarty_tpl->tpl_vars['value']->value['lazy']['image']) > 0) {?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['app']->value->request->baseUrl;?>
/images/<?php echo $_smarty_tpl->tpl_vars['value']->value['lazy']['image'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
">
                                                                    <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['color']) {?>
                                    <div class="val1" style="background-color: <?php echo $_smarty_tpl->tpl_vars['value']->value['color'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
">&nbsp;</div>
                                <?php } else { ?>
                                    <div class="val1"><?php echo $_smarty_tpl->tpl_vars['value']->value['text'];?>
</div>
                                                                    <?php }?>
                            </div>
                        </a>
                    </div>
                </label>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <?php
}
if ($_smarty_tpl->tpl_vars['property']->do_else) {
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
}
