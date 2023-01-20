<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:07:21
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\login\returning.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca05693fa4f1_78800905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc6a10805f29c2fdced4d36e59f2e782e97d8571' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\login\\returning.tpl',
      1 => 1642517755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca05693fa4f1_78800905 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp7\\htdocs\\Ecommerce\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.field_label.php','function'=>'smarty_function_field_label',),));
?>




<?php echo \frontend\design\Info::addBoxToCss('info');?>

<?php echo \frontend\design\Info::addBoxToCss('form');?>

<div class="login-box">
    <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['tabsManually'])) && $_smarty_tpl->tpl_vars['settings']->value['tabsManually']) {?>
        <div class="login-box-heading"><?php echo (defined('RETURNING_CUSTOMER') ? constant('RETURNING_CUSTOMER') : null);?>
</div>
    <?php }?>
    <div class="middle-form">

        <?php $_prefixVariable7 = \common\helpers\Acl::checkExtensionAllowed('BusinessToBusiness','allowed');
$_smarty_tpl->_assignInScope('b2b', $_prefixVariable7);
if ($_prefixVariable7) {?>
            <?php echo yii\helpers\Html::beginForm($_smarty_tpl->tpl_vars['action']->value,'post',array('onsubmit'=>"return checkTerms(this);",'class'=>'b2bLogin'));?>

        <?php } else { ?>
            <?php echo yii\helpers\Html::beginForm($_smarty_tpl->tpl_vars['action']->value,'post',array());?>

        <?php }?>
        <?php echo yii\helpers\Html::hiddenInput('scenario',$_smarty_tpl->tpl_vars['loginModel']->value->formName());?>

        <div class="col-left">
            <label for="email_address"><?php echo smarty_function_field_label(array('const'=>"ENTRY_EMAIL_ADDRESS",'required_text'=>''),$_smarty_tpl);?>
</label>
            <?php echo yii\helpers\Html::activeInput('text',$_smarty_tpl->tpl_vars['loginModel']->value,'email_address',array('autocomplete'=>"off"));?>

        </div>
        <div class="col-right">
            <label for="password1"><?php echo smarty_function_field_label(array('const'=>"PASSWORD",'required_text'=>''),$_smarty_tpl);?>
</label>
            <?php echo yii\helpers\Html::activePasswordInput($_smarty_tpl->tpl_vars['loginModel']->value,'password',array('autocomplete'=>"off",'class'=>'show-password'));?>

        </div>
        
        <?php if ($_smarty_tpl->tpl_vars['loginModel']->value->captha_enabled == 'recaptha') {?>
            <?php echo $_smarty_tpl->tpl_vars['loginModel']->value->captcha_widget;?>
<br><br>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['loginModel']->value->captha_enabled == 'captha') {?>
        <?php echo yii\captcha\Captcha::widget(array('model'=>$_smarty_tpl->tpl_vars['loginModel']->value,'attribute'=>'captcha'));?>

        <?php }?>

        <?php $_prefixVariable8 = \common\helpers\Acl::checkExtensionAllowed('BusinessToBusiness','allowed');
$_smarty_tpl->_assignInScope('b2b', $_prefixVariable8);
if ($_prefixVariable8) {?>
            <?php  $_prefixVariable9 = $_smarty_tpl->tpl_vars['b2b']->value;
if ($_prefixVariable9::checkNeedLogin()) {?>
        <div class="login_btns after">
            <div class="terms-login">
                <?php echo yii\helpers\Html::activeCheckbox($_smarty_tpl->tpl_vars['loginModel']->value,'terms',array('class'=>'terms-conditions','value'=>'1','label'=>((('<strong>').($_smarty_tpl->tpl_vars['SMARTY']->value['CONST']['ACCEPT'])).('</strong>')).((defined('TEXT_TERMS_CONDITIONS') ? constant('TEXT_TERMS_CONDITIONS') : null)),'checked'=>''));?>

            </div>
        </div>
            <?php }?>
        <?php }?>
        <div class="password-forgotten-link">
            <a href="<?php echo tep_href_link(FILENAME_PASSWORD_FORGOTTEN,'','SSL');?>
"><?php echo (defined('TEXT_PASSWORD_FORGOTTEN_S') ? constant('TEXT_PASSWORD_FORGOTTEN_S') : null);?>
</a>
        </div>
        <div class="center-buttons">
            <button class="btn-2" type="submit"><?php echo (defined('SIGN_IN') ? constant('SIGN_IN') : null);?>
</button>
        </div>
                <?php echo yii\helpers\Html::endForm();?>

    </div>
</div>

<?php echo '<script'; ?>
>
    function checkTerms(form) {
        <?php $_prefixVariable10 = \common\helpers\Acl::checkExtensionAllowed('BusinessToBusiness','allowed');
$_smarty_tpl->_assignInScope('b2b', $_prefixVariable10);
if ($_prefixVariable10) {?>
            <?php  $_prefixVariable11 = $_smarty_tpl->tpl_vars['b2b']->value;
if ($_prefixVariable11::checkNeedLogin()) {?>
                if (form.querySelector('.terms-conditions').checked){
                    return true;
                }
                alertMessage('<?php echo (defined('TEXT_PLEASE_TERMS') ? constant('TEXT_PLEASE_TERMS') : null);?>
');
                return false;
            <?php }?>
        <?php }?>
        return true;
    }


    tl('<?php echo frontend\design\Info::themeFile('/js/main.js');?>
', function(){

        <?php if ((isset($_smarty_tpl->tpl_vars['messages_login']->value)) && $_smarty_tpl->tpl_vars['messages_login']->value) {?>
        alertMessage('<?php echo strtr($_smarty_tpl->tpl_vars['messages_login']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
');
        <?php }?>

        $('.terms-popup').popUp({
            box_class: 'terms-info-popup'
        });

        $('.show-password').showPassword();
    })
<?php echo '</script'; ?>
>
<?php }
}
