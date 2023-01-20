<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:14:00
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\header-stock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca06f873f069_87573163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47495bce812657125c59234fff25631595479cfc' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\header-stock.tpl',
      1 => 1632834077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca06f873f069_87573163 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="headerStock">
<?php echo yii\helpers\Html::beginForm($_smarty_tpl->tpl_vars['url']->value,'post',array());?>

<span><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</span>
<input type="hidden" name="show_out_of_stock_update" value="1">
<input type="checkbox" name="show_out_of_stock" value="1" id="headerStock" class="check-on-off"<?php if ($_smarty_tpl->tpl_vars['checked']->value) {?> checked=""<?php }?>>
<?php echo yii\helpers\Html::endForm();?>

</div>
<?php echo '<script'; ?>
 type="text/javascript">
tl('<?php echo frontend\design\Info::themeFile('/js/bootstrap-switch.js');?>
', function(){
  <?php echo \frontend\design\Info::addBoxToCss('switch');?>

  $('.check-on-off').bootstrapSwitch({
    onSwitchChange: function (element, arguments) {
      // switchStatement(element.target.value, arguments);
      this.form.submit();
      return true;
    },
    offText: '<?php echo (defined('TEXT_NO') ? constant('TEXT_NO') : null);?>
',
    onText: '<?php echo (defined('TEXT_YES') ? constant('TEXT_YES') : null);?>
'
  });
})
<?php echo '</script'; ?>
><?php }
}
