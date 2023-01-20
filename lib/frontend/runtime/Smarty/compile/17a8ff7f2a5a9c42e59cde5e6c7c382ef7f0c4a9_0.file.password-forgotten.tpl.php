<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:08:59
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\login\password-forgotten.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca05cba12504_41019303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17a8ff7f2a5a9c42e59cde5e6c7c382ef7f0c4a9' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\login\\password-forgotten.tpl',
      1 => 1632834076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca05cba12504_41019303 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp7\\htdocs\\Ecommerce\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.field_label.php','function'=>'smarty_function_field_label',),));
?>



<?php echo frontend\design\Info::addBoxToCss('info');?>

<?php echo frontend\design\Info::addBoxToCss('form');?>


<?php echo yii\helpers\Html::beginForm(array('account/password-forgotten','action'=>'process'),'post',array('name'=>'password_forgotten','id'=>'frmPasswordForgotten'));?>

<div class="middle-form">
    <div class="messages"></div>
    <div class="col-full">
        <label for="email"><?php echo smarty_function_field_label(array('const'=>"ENTRY_EMAIL_ADDRESS",'required_text'=>''),$_smarty_tpl);?>
</label>
        <input type="email" name="email_address" value="" id="email">
    </div>
<?php if ($_smarty_tpl->tpl_vars['loginModel']->value->captha_enabled == 'recaptha') {?>
    <?php echo $_smarty_tpl->tpl_vars['loginModel']->value->captcha_widget;?>

<?php }
if ($_smarty_tpl->tpl_vars['loginModel']->value->captha_enabled == 'captha') {?>
    <div class="col-full">
        <?php echo yii\captcha\Captcha::widget(array('model'=>$_smarty_tpl->tpl_vars['loginModel']->value,'attribute'=>'captcha'));?>

    </div>
<?php }?>
    <div class="buttons">
        <div class="right-buttons"><button class="btn-1" type="submit"><?php echo (defined('IMAGE_BUTTON_CONTINUE') ? constant('IMAGE_BUTTON_CONTINUE') : null);?>
</button></div>
        <div class="left-buttons"><a href="<?php echo $_smarty_tpl->tpl_vars['loginUrl']->value;?>
" class="btn btn-back"><?php echo (defined('IMAGE_BUTTON_BACK') ? constant('IMAGE_BUTTON_BACK') : null);?>
</a></div>
    </div>
</div>
<?php echo yii\helpers\Html::endForm();?>


<?php echo '<script'; ?>
>
    tl([
        '<?php echo frontend\design\Info::themeFile('/js/main.js');?>
'
    ], function(){
        var form = $('#box-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 form');
        $('input', form).validate();
        form.on('submit', function(e){
            e.preventDefault();
            if ($('.required-error', form).length === 0){
                $.post(form.attr('action'), form.serialize(), function(data){
                    if (data == 'ok') {
                        console.log(data == 'ok');
                        if (form.closest('.popup-box').length > 0) {
                            $('.pop-up-close').trigger('click')
                        } else {
                            window.location.href = "<?php echo $_smarty_tpl->tpl_vars['loginUrl']->value;?>
";
                        }
                    } else {
                        var messages = '';
                        $.each(data.messages, function(key, val){
                            messages += '<div class="message '+val['.type']+'">'+val.text+'</div>';
                        });
                        $('.messages', form).html(messages)
                    }
                }, 'json')
            }
            return false;
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
