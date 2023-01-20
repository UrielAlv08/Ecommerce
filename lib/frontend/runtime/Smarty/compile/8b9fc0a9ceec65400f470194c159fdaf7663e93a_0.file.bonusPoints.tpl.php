<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:14:03
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\listing-product\element\bonusPoints.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca06fbdd4943_86863098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b9fc0a9ceec65400f470194c159fdaf7663e93a' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\listing-product\\element\\bonusPoints.tpl',
      1 => 1632834075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca06fbdd4943_86863098 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['bonus_points_price'] > 0 || $_smarty_tpl->tpl_vars['product']->value['bonus_points_cost'] > 0) {?>
    <div class="bonus-points">
    <?php if ($_smarty_tpl->tpl_vars['product']->value['bonus_coefficient'] === false && $_smarty_tpl->tpl_vars['product']->value['bonus_points_price'] > 0) {?>
        <div class="bonus-points-price">
            <span><?php echo $_smarty_tpl->tpl_vars['product']->value['bonus_points_price'];?>
</span> <span><?php echo (defined('TEXT_POINTS_REDEEM') ? constant('TEXT_POINTS_REDEEM') : null);?>
</span>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['bonus_points_cost'] > 0) {?>
        <div class="bonus-points-cost">
            <span><?php echo $_smarty_tpl->tpl_vars['product']->value['bonus_points_cost'];?>
</span> <span>
                <?php echo (defined('TEXT_POINTS_EARN') ? constant('TEXT_POINTS_EARN') : null);?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['bonus_coefficient']) {?>
                    (<?php echo $_smarty_tpl->tpl_vars['product']->value['bonus_price_cost_currency_formatted'];?>
)
                <?php }?>
            </span>
        </div>
    <?php }?>
    </div>
<?php }
}
}
