<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:14:09
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\catalog\paging.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca0701d01de0_11830971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '338c3aa8ec64c1427d8d1ab353d2a96f49ce0703' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\catalog\\paging.tpl',
      1 => 1632834076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca0701d01de0_11830971 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="paging">
    <?php if ((isset($_smarty_tpl->tpl_vars['links']->value['prev_page']['link']))) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['links']->value['prev_page']['link'];?>
" class="prev"></a>
    <?php } else { ?>
      <span class="prev"></span>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['links']->value['prev_pages']['link']))) {?>
      <a class="prev-pages" href="<?php echo $_smarty_tpl->tpl_vars['links']->value['prev_pages']['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['links']->value['prev_pages']['title'];?>
">...</a>
    <?php }?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value['page_number'], 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
      <?php if ((isset($_smarty_tpl->tpl_vars['page']->value['link']))) {?>
        <a class="page-number" href="<?php echo $_smarty_tpl->tpl_vars['page']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</a>
      <?php } else { ?>
        <span class="active"><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</span>
      <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php if ((isset($_smarty_tpl->tpl_vars['links']->value['next_pages']['link']))) {?>
      <a class="next-pages" href="<?php echo $_smarty_tpl->tpl_vars['links']->value['next_pages']['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['links']->value['next_pages']['title'];?>
">...</a>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['links']->value['next_page']['link']))) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['links']->value['next_page']['link'];?>
" class="next"></a>
    <?php } else { ?>
      <span class="next"></span>
    <?php }?>
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
