<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:14:03
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\listing-product\element\image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca06fbbb1520_86173108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f73b2843f5b794246bf06d55fc041ff2173d566' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\listing-product\\element\\image.tpl',
      1 => 1660565584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca06fbbb1520_86173108 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['settings']->value[0]['lazy_load']))) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['settings']) ? $_smarty_tpl->tpl_vars['settings']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[0]['lazy_load'] = false;
$_smarty_tpl->_assignInScope('settings', $_tmp_array);
}
if (\common\helpers\Acl::checkExtensionAllowed('Promotions')) {
echo \common\extensions\Promotions\widgets\PromotionIcons\PromotionIcons::widget(array('params'=>array('product'=>$_smarty_tpl->tpl_vars['product']->value)));?>

<?php }?>

<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
">
    <picture>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['sources'], 'source');
$_smarty_tpl->tpl_vars['source']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['source']->value) {
$_smarty_tpl->tpl_vars['source']->do_else = false;
?>

            <source
                <?php if ($_smarty_tpl->tpl_vars['settings']->value[0]['lazy_load']) {?>srcset="<?php echo frontend\design\Info::themeSetting('na_product','hide');?>
"
                data-<?php }?>srcset="<?php echo $_smarty_tpl->tpl_vars['source']->value['srcset'];?>
"
                media="<?php echo $_smarty_tpl->tpl_vars['source']->value['media'];?>
"
            >
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <img
                <?php if ($_smarty_tpl->tpl_vars['settings']->value[0]['lazy_load']) {?>src="<?php echo frontend\design\Info::themeSetting('na_product','hide');?>
"
                data-<?php }?>src="<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
"
                alt="<?php echo str_replace('"','″',strip_tags($_smarty_tpl->tpl_vars['product']->value['image_alt']));?>
"
                title="<?php echo str_replace('"','″',strip_tags($_smarty_tpl->tpl_vars['product']->value['image_title']));?>
"
        >
    </picture>
</a>
<?php }
}
