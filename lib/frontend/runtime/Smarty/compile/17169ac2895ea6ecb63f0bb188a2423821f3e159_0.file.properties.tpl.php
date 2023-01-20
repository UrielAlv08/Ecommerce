<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:14:06
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\listing-product\element\properties.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca06fec336d6_14539005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17169ac2895ea6ecb63f0bb188a2423821f3e159' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\listing-product\\element\\properties.tpl',
      1 => 1632834075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca06fec336d6_14539005 (Smarty_Internal_Template $_smarty_tpl) {
if (is_array($_smarty_tpl->tpl_vars['product']->value['properties']) && count($_smarty_tpl->tpl_vars['product']->value['properties']) > 0) {?>
    <div class="properties">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['properties'], 'property', false, 'key');
$_smarty_tpl->tpl_vars['property']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['property']->value) {
$_smarty_tpl->tpl_vars['property']->do_else = false;
?>
            <?php ob_start();
echo count($_smarty_tpl->tpl_vars['property']->value['values']);
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 > 0) {?>
                <?php if ($_smarty_tpl->tpl_vars['property']->value['properties_type'] == 'flag' && $_smarty_tpl->tpl_vars['property']->value['properties_image']) {?>
                    <div class="property-image">
                        <?php if ($_smarty_tpl->tpl_vars['property']->value['values'][1] == 'Yes') {?>
                            <span class="hover-box">
                              <img src="<?php echo $_smarty_tpl->tpl_vars['app']->value->request->baseUrl;?>
/images/<?php echo $_smarty_tpl->tpl_vars['property']->value['properties_image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['property']->value['properties_name'];?>
">
                              <span class="hover-box-content">
                                  <strong><?php echo $_smarty_tpl->tpl_vars['property']->value['properties_name'];?>
</strong>
                                  <?php echo \common\helpers\Properties::get_properties_description($_smarty_tpl->tpl_vars['property']->value['properties_id'],$_smarty_tpl->tpl_vars['languages_id']->value);?>

                              </span>
                            </span>
                        <?php } else { ?>
                            <span class="disable">
                              <img src="<?php echo $_smarty_tpl->tpl_vars['app']->value->request->baseUrl;?>
/images/<?php echo $_smarty_tpl->tpl_vars['property']->value['properties_image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['property']->value['properties_name'];?>
">
                            </span>
                        <?php }?>
                    </div>
                <?php } else { ?>
                    <div class="property">
                        <strong><?php echo $_smarty_tpl->tpl_vars['property']->value['properties_name'];?>
<span class="colon">:</span></strong>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['property']->value['values'], 'value', false, 'value_id');
$_smarty_tpl->tpl_vars['value']->index = -1;
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value_id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->tpl_vars['value']->index++;
$__foreach_value_10_saved = $_smarty_tpl->tpl_vars['value'];
?>
                            <?php if ($_smarty_tpl->tpl_vars['value']->index > 0) {?>, <?php }?><span><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</span>
                        <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_10_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php }?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
