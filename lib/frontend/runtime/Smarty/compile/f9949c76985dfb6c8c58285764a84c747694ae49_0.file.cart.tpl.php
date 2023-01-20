<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:09:00
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca05cc661f88_76722265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9949c76985dfb6c8c58285764a84c747694ae49' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\cart.tpl',
      1 => 1632834076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca05cc661f88_76722265 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="cart-box" class="cart-box<?php if ($_smarty_tpl->tpl_vars['settings']->value[0]['show_products'] == 'dropdown') {?> hover-box<?php }?>">
    <a class="cart-box-link" href="<?php echo tep_href_link('shopping-cart/index');?>
">
    <span class="no-text">
      <strong class="strong"><?php echo (defined('TEXT_HEADING_SHOPPING_CART') ? constant('TEXT_HEADING_SHOPPING_CART') : null);?>
</strong>
        <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value[0]['items'])) && $_smarty_tpl->tpl_vars['settings']->value[0]['items']) {?><span class="items"><span class="items-count"><?php echo $_smarty_tpl->tpl_vars['count_contents']->value;?>
</span> <?php echo (defined('BOX_SHOPPING_CART_FULL') ? constant('BOX_SHOPPING_CART_FULL') : null);?>
</span><?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value[0]['total'])) && $_smarty_tpl->tpl_vars['settings']->value[0]['total']) {?><span class="total"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span><?php }?>
    </span>
    </a>

 <?php if ($_smarty_tpl->tpl_vars['settings']->value[0]['show_products']) {?>
        <div class="cart-content">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" class="item">
                    <span class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="<?php echo str_replace('"','″',$_smarty_tpl->tpl_vars['item']->value['name']);?>
"></span>

                    <span class="name"><span class="qty"><?php echo $_smarty_tpl->tpl_vars['item']->value['quantity_virtual'];?>
</span><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span>
                    <span class="price"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</span>
                </a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <div class="cart-total"><?php echo (defined('SUB_TOTAL') ? constant('SUB_TOTAL') : null);?>
 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</div>

            <div class="buttons">
                <div class="left-buttons"><a href="<?php echo tep_href_link('shopping-cart/index');?>
"
                                             class="btn"><?php echo (defined('TEXT_HEADING_SHOPPING_CART') ? constant('TEXT_HEADING_SHOPPING_CART') : null);?>
</a></div>
<?php if (!GROUPS_DISABLE_CHECKOUT) {?>
                <div class="right-buttons"><a href="<?php echo $_smarty_tpl->tpl_vars['checkout_link']->value;?>
"
                                              class="btn"><?php echo (defined('HEADER_TITLE_CHECKOUT') ? constant('HEADER_TITLE_CHECKOUT') : null);?>
</a></div>
<?php }?>
            </div>
        </div>
    <?php }?>

    <?php echo '<script'; ?>
 type="text/javascript">
        tl(function () {
            var cart_change = function () {
                var cart_id = $('#cart-box').parent().attr('id').substring(4);
                $.get("<?php echo tep_href_link('get-widget/one');?>
", {
                    id: cart_id,
                    action: 'main'
                }, function (d) {
                    $('#box-' + cart_id).html(d)
                })
            };
            $(window).one('cart_change', cart_change)
        })
    <?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value[0]['show_products'] == 'dropdown') {?>
        <?php echo '<script'; ?>
 type="text/javascript">
            tl(function () {
                var cart_content = $('.cart-box.hover-box .cart-content');
                var key = true;
                var cart_content_position = function () {
                    if (key) {
                        key = false;
                        setTimeout(function () {
                            cart_content.show();
                            key = true;
                            cart_content.css({
                                'top': $('.cart-box.hover-box').height() - 1,
                                'width': '410',
                                'right': 0
                            });
                            if (cart_content.width() > $(window).width()) {
                                var w = $(window).width() * 1 - 20;
                                cart_content.css({
                                    width: w + 'px'
                                })
                            }
                            if (cart_content.offset().left < 0) {
                                var r = cart_content.offset().left * 1 - 15;
                                cart_content.css({
                                    right: r + 'px'
                                })
                            }
                            cart_content.hide();
                        }, 300)
                    }
                };

                cart_content_position();
                $(window).off('resize', cart_content_position).on('resize', cart_content_position)
            })
        <?php echo '</script'; ?>
>
    <?php }?>
</div><?php }
}
