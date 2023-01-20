<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:08:59
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\captcha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca05cb2edc15_51773690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dca7b2d7bfcd2ba48235fc96a0fe76e2861f7325' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\captcha.tpl',
      1 => 1632834077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca05cb2edc15_51773690 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['version']->value == 'v2') {
echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?hl=<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" async defer><?php echo '</script'; ?>
>
<div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['public_key']->value;?>
"></div>
<br/>
<?php } elseif ($_smarty_tpl->tpl_vars['version']->value == 'v3') {
echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?render=<?php echo $_smarty_tpl->tpl_vars['public_key']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 class="v3score-<?php echo $_smarty_tpl->tpl_vars['uniqueId']->value;?>
">
grecaptcha.ready(function() {
    grecaptcha.execute("<?php echo $_smarty_tpl->tpl_vars['public_key']->value;?>
", { action: 'ecommerce' }).then(function(token) {
        tl(function(){
            var form = $('.v3score-<?php echo $_smarty_tpl->tpl_vars['uniqueId']->value;?>
').closest('form');
            if (form){
                var input = document.createElement('input');
                input.setAttribute('type', 'hidden');
                input.setAttribute('name', 'g-recaptcha-response');
                input.setAttribute('value', token);
                $(form).append(input);
            }
        })
    });
});
<?php echo '</script'; ?>
>
<?php }
}
}
