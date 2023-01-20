<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:13:59
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\catalog\listing-look.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca06f7c46a37_55538426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ec8d89c1a7d44a85e03a589d1a98adaefd4d328' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\catalog\\listing-look.tpl',
      1 => 1632834076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca06f7c46a37_55538426 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="page-style">
  <span class="listing-look-title"><?php echo (defined('VIEW_AS') ? constant('VIEW_AS') : null);?>
</span>
  <?php if ($_smarty_tpl->tpl_vars['grid_link']->value) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_link']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="grid<?php if ($_smarty_tpl->tpl_vars['gl']->value == 'grid') {?> active<?php }?>" title="<?php echo (defined('TEXT_GRID_VIEW') ? constant('TEXT_GRID_VIEW') : null);?>
" rel="nofollow" data-type="listingTypeCol" data-gl="grid"></a><?php }?>
  <?php if ($_smarty_tpl->tpl_vars['list_link']->value) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_link']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="list<?php if ($_smarty_tpl->tpl_vars['gl']->value == 'list') {?> active<?php }?>" title="<?php echo (defined('TEXT_LIST_VIEW') ? constant('TEXT_LIST_VIEW') : null);?>
" rel="nofollow" data-type="listingTypeRow" data-gl="list"></a><?php }?>
  <?php if ($_smarty_tpl->tpl_vars['b2b_link']->value) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b2b_link']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="b2b<?php if ($_smarty_tpl->tpl_vars['gl']->value == 'b2b') {?> active<?php }?>" title="<?php echo (defined('TEXT_B2B_VIEW') ? constant('TEXT_B2B_VIEW') : null);?>
" rel="nofollow" data-type="listingTypeB2b" data-gl="b2b"></a><?php }?>
</div>
<?php if (\frontend\design\Info::themeSetting('old_listing')) {
echo '<script'; ?>
 type="text/javascript">
  tl('<?php echo frontend\design\Info::themeFile('/js/main.js');?>
', function(){
    var boxID = $('#box-<?php echo $_smarty_tpl->tpl_vars['box_id']->value;?>
');

    $('a', boxID).off('click', getProductsList).on('click', getProductsList);
  })
<?php echo '</script'; ?>
>
<?php }
}
}
