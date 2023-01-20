<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:07:19
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\browser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca0567d58961_99857342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9146c2130063b046fbd4b2df5dac7f7400c281c5' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\browser.tpl',
      1 => 1632834076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca0567d58961_99857342 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="#ieCheck" class="ieLink"></a>
<div id="ieCheck" style="display:none;"><?php echo (defined('TEXT_UNSUPPORTED_BROWSER') ? constant('TEXT_UNSUPPORTED_BROWSER') : null);?>
</div>
<?php echo '<script'; ?>
>
tl('themes/basic/js/main.js', function(){
$('.ieLink').popUp({
'box_class': 'iePopup'
});
var isIE = false;
var ua = window.navigator.userAgent;
var old_ie = ua.indexOf('MSIE ');
var new_ie = ua.indexOf('Trident/');

if ((old_ie > -1) || (new_ie > -1)) {
    isIE = true;
}

if ( isIE ) {
    $('.ieLink').click();
}
})
<?php echo '</script'; ?>
><?php }
}
