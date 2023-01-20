<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:13:59
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\catalog\compare-button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca06f7f2e417_98649771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99de464e50104fbabc90cdd99a975a34e324cece' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\catalog\\compare-button.tpl',
      1 => 1632834076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca06f7f2e417_98649771 (Smarty_Internal_Template $_smarty_tpl) {
?>



<a class="compare_button btn" href="<?php echo Yii::$app->urlManager->createUrl('catalog/compare');?>
"><?php echo (defined('BOX_HEADING_COMPARE_LIST') ? constant('BOX_HEADING_COMPARE_LIST') : null);?>
</a>
<?php if (!frontend\design\Info::isAdmin() && frontend\design\Info::themeSetting('old_listing')) {
echo '<script'; ?>
 type="text/javascript">
  tl('<?php echo frontend\design\Info::themeFile('/js/main.js');?>
', function(){
    $('.no-js').hide();


    if (!window.compare_key) {
      window.compare_key = 1;
      var params = { compare: []};
      $('.compare_button').popUp({
        box: "<div class='popup-box-wrap'><div class='around-pop-up'></div><div class='popup-box popupCompare'><div class='pop-up-close'></div><div class='popup-heading compare-head'><?php echo (defined('BOX_HEADING_COMPARE_LIST') ? constant('BOX_HEADING_COMPARE_LIST') : null);?>
</div><div class='pop-up-content'><div class='preloader'></div></div></div></div>",
        data: params,
        beforeSend: function () {
          params.compare.splice(0, params.compare.length);
          $('input[name="compare[]"]').each(function (i, e) {
            if (e.checked) {
              params.compare.push(e.value);
            }
          })
        }
      })
    }
  });
<?php echo '</script'; ?>
>
<?php }
}
}
