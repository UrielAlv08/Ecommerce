<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:14:05
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\listing-product\element\price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca06fd3275a1_06342205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c75b7a22b8c9b9ee8c91072b5a13acc5a3995811' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\listing-product\\element\\price.tpl',
      1 => 1637085131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca06fd3275a1_06342205 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['product']->value['price_from']))) {?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['product']->value['price_special']))) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['price_special'] = false;
$_smarty_tpl->_assignInScope('product', $_tmp_array);
}?>
    <?php if (Yii::$app->user->isGuest && \common\helpers\PlatformConfig::getFieldValue('platform_please_login')) {?>
        <span class="current"><?php echo sprintf((defined('TEXT_PLEASE_LOGIN') ? constant('TEXT_PLEASE_LOGIN') : null),tep_href_link(FILENAME_LOGIN,'','SSL'));?>
</span>
    <?php } else { ?>
        <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['price_old']))) {?><span class="old" <?php if (!$_smarty_tpl->tpl_vars['product']->value['price_special']) {?> style="display:none;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['product']->value['price_old'];?>
</span><?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['price_special']))) {?><span class="specials" <?php if (!$_smarty_tpl->tpl_vars['product']->value['price_special']) {?> style="display:none;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['product']->value['price_special'];?>
</span><?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['price']))) {?><span class="current" <?php if ($_smarty_tpl->tpl_vars['product']->value['price_special']) {?> style="display:none;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['price_special']) {?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['special_total_qty'] > 0 && !$_smarty_tpl->tpl_vars['product']->value['special_max_per_order']) {?>
            <span class="special-max">
              <span class="limited-mark-max"><?php echo (defined('TEXT_LIMITED_MARK') ? constant('TEXT_LIMITED_MARK') : null);?>

                <span class="limited-text"><?php echo sprintf((defined('TEXT_LIMITED_SALE') ? constant('TEXT_LIMITED_SALE') : null),$_smarty_tpl->tpl_vars['product']->value['special_total_qty']);?>
</span>
              </span>
            </span>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['special_max_per_order'] > 0) {?>
            <span class="special-max-per-order">
              <span class="limited-mark"><?php echo (defined('TEXT_LIMITED_MARK') ? constant('TEXT_LIMITED_MARK') : null);?>

                <span class="limited-text"><?php echo sprintf((defined('TEXT_LIMITED_SALE_ORDER') ? constant('TEXT_LIMITED_SALE_ORDER') : null),$_smarty_tpl->tpl_vars['product']->value['special_max_per_order']);?>
</span>
              </span>
            </span>
          <?php }?>
        <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['product']->value['special_promote_type'] > 0 && $_smarty_tpl->tpl_vars['product']->value['special_promo_str'] != '') {?>
        <div class="save-price-box"><div><span class="save-title"><?php echo (defined('SALE_TEXT_SAVE') ? constant('SALE_TEXT_SAVE') : null);?>
</span><span class="save-price"><?php echo $_smarty_tpl->tpl_vars['product']->value['special_promo_str'];?>
</span></div></div>
      <?php }?>
    <?php }
}
}
}
