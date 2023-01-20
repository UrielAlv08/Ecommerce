<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:07:18
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca0566b8b296_67654529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ccb8ea96b632dfd5ffe3cd0e886207e7fe76ee2' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\categories.tpl',
      1 => 1635499587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca0566b8b296_67654529 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="categories<?php if ((isset($_smarty_tpl->tpl_vars['settings']->value)) && (isset($_smarty_tpl->tpl_vars['settings']->value[0]['view_as'])) && $_smarty_tpl->tpl_vars['settings']->value[0]['view_as'] == 'carousel') {?> carousel<?php }?>">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
      <a class="item category-link" href="<?php echo $_smarty_tpl->tpl_vars['category']->value['link'];?>
">
          <?php if (!((($tmp = @$_smarty_tpl->tpl_vars['settings']->value[0]['hide_images'])===null||$tmp==='' ? null : $tmp))) {?>
              <?php echo $_smarty_tpl->tpl_vars['category']->value['img'];?>

          <?php }?>
          <h2 class="name">
              <?php if ($_smarty_tpl->tpl_vars['category']->value['categories_h2_tag']) {?>
                  <?php echo $_smarty_tpl->tpl_vars['category']->value['categories_h2_tag'];?>

              <?php } else { ?>
                  <?php echo $_smarty_tpl->tpl_vars['category']->value['categories_name'];?>

              <?php }?>
          </h2>
      </a>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['settings']->value)) && (isset($_smarty_tpl->tpl_vars['settings']->value[0]['view_as'])) && $_smarty_tpl->tpl_vars['settings']->value[0]['view_as'] == 'carousel') {?>
    <?php echo '<script'; ?>
>
        tl('<?php echo frontend\design\Info::themeFile('/js/slick.min.js');?>
', function(){

            var box = $('#box-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
');

            var show = <?php if ((($tmp = @$_smarty_tpl->tpl_vars['settings']->value[0]['col_in_row'])===null||$tmp==='' ? null : $tmp)) {
echo $_smarty_tpl->tpl_vars['settings']->value[0]['col_in_row'];
} else { ?>4<?php }?>;

            $('.carousel', box).slick({
                slidesToShow: show,
                slidesToScroll: show,
                infinite: false,
                dots: true,
                responsive: [
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value['colInRowCarousel'], 'val', false, 'width');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['width']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                    {
                        breakpoint: <?php echo $_smarty_tpl->tpl_vars['width']->value;?>
,
                        settings: {
                            slidesToShow: <?php echo $_smarty_tpl->tpl_vars['val']->value;?>
,
                            slidesToScroll: <?php echo $_smarty_tpl->tpl_vars['val']->value;?>

                        }
                    },
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                ]
            });

        })
    <?php echo '</script'; ?>
>
<?php }
}
}
