<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:07:20
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\menu-builder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca05687312d0_92306519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '408bd085737bb9cbc669d734493f307a0f26a7a3' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\menu-builder.tpl',
      1 => 1632834076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca05687312d0_92306519 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="menu-style" <?php echo $_smarty_tpl->tpl_vars['attributes']->value;?>
>
    <div class="burger-icon"></div>
    <div class="menu-content">
    <?php echo $_smarty_tpl->tpl_vars['menu_htm']->value;?>

    </div>
</div>

<?php echo '<script'; ?>
>
    (function(){
        const $box = document.getElementById('box-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
');
        const $menuStyle = $box.getElementsByClassName('menu-style')[0];
        const settings = JSON.parse('<?php echo json_encode($_smarty_tpl->tpl_vars['jsSettings']->value['visibility']);?>
');

        for (let setting in settings) {
            if (setting.match(/^[0-9]+$/)) continue;

            for (let limit in settings[setting]) {
                let sizes = limit.split('w')
                if (!sizes[1]) sizes[1] = 100000;
                if (+sizes[0] < window.innerWidth && window.innerWidth < +sizes[1]){
                    $menuStyle.setAttribute('data-' + setting, settings[setting][limit]);
                }
            }
        }
    })();
<?php echo '</script'; ?>
><?php }
}
