<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:14:06
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\listing-product\element\qtyInput.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca06fe633811_29291919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cf8b9680d22f4ce0b3c0b2cc4a8b538823e5e79' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\listing-product\\element\\qtyInput.tpl',
      1 => 1656053991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca06fe633811_29291919 (Smarty_Internal_Template $_smarty_tpl) {
if (Yii::$app->user->isGuest && \common\helpers\PlatformConfig::getFieldValue('platform_please_login')) {?>
    
<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pack_unit'] > 0 || $_smarty_tpl->tpl_vars['product']->value['packaging'] > 0) {?>
    <?php $_smarty_tpl->_assignInScope('quantity_max', $_smarty_tpl->tpl_vars['product']->value['stock_indicator']['quantity_max']);?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['pack_unit'] > 0 || $_smarty_tpl->tpl_vars['product']->value['packaging'] > 0) {?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['order_quantity_data']['order_quantity_minimal'] = 0;
$_smarty_tpl->_assignInScope('product', $_tmp_array);?>
    <?php }?>
    <?php $_prefixVariable1 = \common\helpers\Acl::checkExtensionAllowed('PackUnits','allowed');
$_smarty_tpl->_assignInScope('ext', $_prefixVariable1);
if ($_prefixVariable1) {?>
        <?php  $_prefixVariable2 = $_smarty_tpl->tpl_vars['ext']->value;
$_smarty_tpl->_assignInScope('pack_units_data', $_prefixVariable2::quantityBoxFrontend(array(),array('products_id'=>$_smarty_tpl->tpl_vars['product']->value['products_id'])));?>
    <?php }?>
    <div class="qty-input">
        <div class="qty_t"><?php echo (defined('UNIT_QTY') ? constant('UNIT_QTY') : null);?>
:</div>
        <div class="input">
            <span class="price_1" id="product-price-current"><span class="priceIn"><?php echo $_smarty_tpl->tpl_vars['pack_units_data']->value['single_price']['unit'];?>
</span></span>
            <input type="text" name="qty_p_[0]" value="0" class="qty-inp check-spec-max"  data-type="unit" <?php if ($_smarty_tpl->tpl_vars['quantity_max']->value > 0) {?> data-max="<?php echo $_smarty_tpl->tpl_vars['quantity_max']->value;?>
"<?php }?> data-min="<?php echo $_smarty_tpl->tpl_vars['product']->value['order_quantity_data']['order_quantity_minimal'];?>
"  <?php if ($_smarty_tpl->tpl_vars['product']->value['order_quantity_data']['order_quantity_step'] > 1) {?> data-step="<?php echo $_smarty_tpl->tpl_vars['product']->value['order_quantity_data']['order_quantity_step'];?>
"<?php }?>>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['pack_unit'] > 0) {?>
    <div class="qty-input">
        <div class="qty_t"><?php echo (defined('PACK_QTY') ? constant('PACK_QTY') : null);?>
:<span>(<?php echo $_smarty_tpl->tpl_vars['product']->value['pack_unit'];?>
 items)</span></div>
        <div class="input inps">
            <span class="price_1"><span class="priceIn"><?php echo $_smarty_tpl->tpl_vars['pack_units_data']->value['single_price']['pack'];?>
</span></span>
            <input type="text" name="qty_p_[1]" value="0" class="qty-inp check-spec-max" data-type="pack_unit" data-min="0"  <?php if ($_smarty_tpl->tpl_vars['quantity_max']->value > 0) {?> data-max="<?php echo floor($_smarty_tpl->tpl_vars['quantity_max']->value/$_smarty_tpl->tpl_vars['product']->value['pack_unit']);?>
"<?php }?> >
        </div>
    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['packaging'] > 0) {?>
    <div class="qty-input">
        <div class="qty_t"><?php echo (defined('CARTON_QTY') ? constant('CARTON_QTY') : null);?>
:<span>(<?php echo $_smarty_tpl->tpl_vars['product']->value['packaging']*$_smarty_tpl->tpl_vars['product']->value['pack_unit'];?>
 items)</span></div>
        <div class="input inps">
            <span class="price_1"><span class="priceIn"><?php echo $_smarty_tpl->tpl_vars['pack_units_data']->value['single_price']['package'];?>
</span></span>
            <input type="text" name="qty_p_[2]" value="0" class="qty-inp"  data-type="packaging" data-min="0" <?php if ($_smarty_tpl->tpl_vars['quantity_max']->value > 0) {?> data-max="<?php echo floor($_smarty_tpl->tpl_vars['quantity_max']->value/($_smarty_tpl->tpl_vars['product']->value['packaging']*$_smarty_tpl->tpl_vars['product']->value['pack_unit']));?>
"<?php }?> >
        </div>
    </div>
    <?php }
} elseif ((isset($_smarty_tpl->tpl_vars['settings']->value['b2b'])) && $_smarty_tpl->tpl_vars['settings']->value['b2b']) {?>
    <input
            type="text"
            name="qty_p[]"
            value="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['add_qty']))) {
if ($_smarty_tpl->tpl_vars['product']->value['stock_indicator']['quantity_max'] < $_smarty_tpl->tpl_vars['product']->value['add_qty']) {
echo $_smarty_tpl->tpl_vars['product']->value['stock_indicator']['quantity_max'];
} else {
echo $_smarty_tpl->tpl_vars['product']->value['add_qty'];
}
} else { ?>0<?php }?>"
            data-zero-init="1"
            class="qty-inp"
            <?php if ($_smarty_tpl->tpl_vars['product']->value['stock_indicator']['quantity_max'] > 0) {?>
                data-max="<?php echo $_smarty_tpl->tpl_vars['product']->value['stock_indicator']['quantity_max'];?>
"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['order_quantity_data'] && $_smarty_tpl->tpl_vars['product']->value['order_quantity_data']['order_quantity_minimal'] > 0) {?>
                data-min="<?php echo $_smarty_tpl->tpl_vars['product']->value['order_quantity_data']['order_quantity_minimal'];?>
"
            <?php } else { ?>
                data-min="0"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['order_quantity_data'] && $_smarty_tpl->tpl_vars['product']->value['order_quantity_data']['order_quantity_step'] > 1) {?>
                data-step="<?php echo $_smarty_tpl->tpl_vars['product']->value['order_quantity_data']['order_quantity_step'];?>
"
            <?php }?>
    />
<?php } else { ?>
    <input
            type="text"
            name="qty_p"
            value="1"
            class="qty-inp"
            <?php if ($_smarty_tpl->tpl_vars['product']->value['stock_indicator']['quantity_max'] > 0) {?>
                data-max="<?php echo $_smarty_tpl->tpl_vars['product']->value['stock_indicator']['quantity_max'];?>
"
            <?php }?>
            <?php if (\common\helpers\Acl::checkExtensionAllowed('MinimumOrderQty','allowed')) {?>
                <?php echo \common\extensions\MinimumOrderQty\MinimumOrderQty::setLimit($_smarty_tpl->tpl_vars['product']->value['order_quantity_data']);?>

            <?php }?>
            <?php if (\common\helpers\Acl::checkExtensionAllowed('OrderQuantityStep','allowed')) {?>
                <?php echo \common\extensions\OrderQuantityStep\OrderQuantityStep::setLimit($_smarty_tpl->tpl_vars['product']->value['order_quantity_data']);?>

            <?php }?>
    />
<?php }
}
}
