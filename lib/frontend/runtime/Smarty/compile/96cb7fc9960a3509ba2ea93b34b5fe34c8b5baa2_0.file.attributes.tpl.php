<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:14:05
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\listing-product\element\attributes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca06fd99ad84_25056181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96cb7fc9960a3509ba2ea93b34b5fe34c8b5baa2' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\listing-product\\element\\attributes.tpl',
      1 => 1635499587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca06fd99ad84_25056181 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['product']->value['product_has_attributes']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['product_attributes_details']['attributes_array'], 'item', true, 'iter');
$_smarty_tpl->tpl_vars['item']->iteration = 0;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['iter']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->iteration++;
$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
$__foreach_item_5_saved = $_smarty_tpl->tpl_vars['item'];
?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_attributes_quantity'] && $_smarty_tpl->tpl_vars['item']->last) {?>

            <?php if (count($_smarty_tpl->tpl_vars['item']->value['options']) > 0) {?>
                <div class="mix-attributes multiattributes" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['app']->value->request->baseUrl;?>
/images/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" width="48px;">
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['color']) {?>
                    <span class="attribute-color" style="background-color: <?php echo $_smarty_tpl->tpl_vars['item']->value['color'];?>
;">&nbsp;</span>
                    <?php }?>
                    <div class="item-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
                    <div class="attribute-qty-blocks">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['option']->value['mix']) {?>
                            <label class="attribute-qty-block" data-id="<?php echo $_smarty_tpl->tpl_vars['option']->value['id'];?>
">

                                <?php if (!empty($_smarty_tpl->tpl_vars['option']->value['image'])) {?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['app']->value->request->baseUrl;?>
/images/<?php echo $_smarty_tpl->tpl_vars['option']->value['image'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
"  width="48px;">
                                <?php }?>
                                <span<?php if (!empty($_smarty_tpl->tpl_vars['option']->value['color'])) {?> style="color: <?php echo $_smarty_tpl->tpl_vars['option']->value['color'];?>
;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value['text'];?>
</span>

                                <div class="mult-qty-input">
                                    <div class="input">
                                        <input type="text"
                                               name="mix_qty[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['products_id'], ENT_QUOTES, 'UTF-8', true);?>
][]"
                                               value="0"
                                               class="qty-inp"
                                               data-min = "0"
                                               data-max="<?php echo $_smarty_tpl->tpl_vars['quantity_max']->value;?>
"
                                               <?php if (\common\helpers\Acl::checkExtensionAllowed('OrderQuantityStep','allowed')) {?>
                                                   <?php echo \common\extensions\OrderQuantityStep\OrderQuantityStep::setLimit($_smarty_tpl->tpl_vars['order_quantity_data']->value);?>

                                               <?php }?> />
                                    </div>
                                </div>

                                                            </label>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            <?php }?>

        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == 'radio') {?>
            <div class="radio-attributes">
                <?php if ((defined('PRODUCTS_ATTRIBUTES_SHOW_SELECT') ? constant('PRODUCTS_ATTRIBUTES_SHOW_SELECT') : null) == 'True') {
echo (defined('SELECT') ? constant('SELECT') : null);?>
 <?php }?>
                <div class="item-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                    <?php $_smarty_tpl->_assignInScope('option_text', $_smarty_tpl->tpl_vars['option']->value['text']);?>
                <?php if ((isset($_smarty_tpl->tpl_vars['element']->value['settings'][0]))) {?>
                    <?php $_smarty_tpl->_assignInScope('settings', $_smarty_tpl->tpl_vars['element']->value['settings'][0]);?>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['price_option']) && $_smarty_tpl->tpl_vars['settings']->value['price_option'] == 1 && !empty($_smarty_tpl->tpl_vars['option']->value['text_final'])) {?>
                    <?php $_smarty_tpl->_assignInScope('option_text', $_smarty_tpl->tpl_vars['option']->value['text_final']);?>
                <?php } elseif (!empty($_smarty_tpl->tpl_vars['settings']->value['price_option']) && $_smarty_tpl->tpl_vars['settings']->value['price_option'] == 2 && !empty($_smarty_tpl->tpl_vars['option']->value['text_clear'])) {?>
                    <?php $_smarty_tpl->_assignInScope('option_text', $_smarty_tpl->tpl_vars['option']->value['text_clear']);?>
                <?php }?>
                    <label>
                        <input type="radio"
                               name="<?php echo $_smarty_tpl->tpl_vars['options_prefix']->value;
echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"
                               value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id'];?>
"
                               <?php if ($_smarty_tpl->tpl_vars['option']->value['id'] == $_smarty_tpl->tpl_vars['item']->value['selected']) {?> checked<?php }?>
                               <?php if (!empty($_smarty_tpl->tpl_vars['option']->value['params'])) {?> <?php echo $_smarty_tpl->tpl_vars['option']->value['params'];
}?>>
                        <span class="option">
                            <?php if (!empty($_smarty_tpl->tpl_vars['option']->value['image'])) {?>
                                <span class="option-image"><img src="<?php echo $_smarty_tpl->tpl_vars['app']->value->request->baseUrl;?>
/images/<?php echo $_smarty_tpl->tpl_vars['option']->value['image'];?>
" alt="<?php echo htmlspecialchars(strip_tags($_smarty_tpl->tpl_vars['option_text']->value), ENT_QUOTES, 'UTF-8', true);?>
"  width="48px;"></span>
                            <?php }?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['option']->value['color'])) {?>
                                <span class="option-color" style="background-color: <?php echo $_smarty_tpl->tpl_vars['option']->value['color'];?>
" title="<?php echo htmlspecialchars(strip_tags($_smarty_tpl->tpl_vars['option_text']->value), ENT_QUOTES, 'UTF-8', true);?>
"></span>
                            <?php }?>
                            <span class="option-text"><?php echo $_smarty_tpl->tpl_vars['option_text']->value;?>
</span>
                        </span>
                    </label>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php } else { ?>
            <div class="select-attributes">
                <div class="item-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
                <select class="select"
                        name="<?php echo $_smarty_tpl->tpl_vars['options_prefix']->value;
echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"
                        data-required="<?php echo (defined('PLEASE_SELECT') ? constant('PLEASE_SELECT') : null);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
">
                    <?php if ((defined('PRODUCTS_ATTRIBUTES_SHOW_SELECT') ? constant('PRODUCTS_ATTRIBUTES_SHOW_SELECT') : null) == 'True') {?>
                        <option value="0"><?php echo (defined('SELECT') ? constant('SELECT') : null);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</option>
                    <?php }?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                        <?php $_smarty_tpl->_assignInScope('option_text', $_smarty_tpl->tpl_vars['option']->value['text']);?>
    
                        <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['price_option']) && $_smarty_tpl->tpl_vars['settings']->value['price_option'] == 1 && !empty($_smarty_tpl->tpl_vars['option']->value['text_final'])) {?>
                            <?php $_smarty_tpl->_assignInScope('option_text', $_smarty_tpl->tpl_vars['option']->value['text_final']);?>
                        <?php } elseif (!empty($_smarty_tpl->tpl_vars['settings']->value['price_option']) && $_smarty_tpl->tpl_vars['settings']->value['price_option'] == 2 && !empty($_smarty_tpl->tpl_vars['option']->value['text_clear'])) {?>
                            <?php $_smarty_tpl->_assignInScope('option_text', $_smarty_tpl->tpl_vars['option']->value['text_clear']);?>
                        <?php }?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id'];?>
"
                                <?php if ($_smarty_tpl->tpl_vars['option']->value['id'] == $_smarty_tpl->tpl_vars['item']->value['selected']) {?> selected<?php }?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['option']->value['params'])) {?> <?php echo $_smarty_tpl->tpl_vars['option']->value['params'];
}?>>
                            <?php echo htmlspecialchars(strip_tags($_smarty_tpl->tpl_vars['option_text']->value), ENT_QUOTES, 'UTF-8', true);?>

                        </option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        <?php }?>
    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
}
