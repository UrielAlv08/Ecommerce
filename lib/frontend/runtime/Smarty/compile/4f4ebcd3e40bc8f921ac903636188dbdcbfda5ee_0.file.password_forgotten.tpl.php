<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:08:59
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\account\password_forgotten.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca05cb446f69_32265373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f4ebcd3e40bc8f921ac903636188dbdcbfda5ee' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\account\\password_forgotten.tpl',
      1 => 1632834077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca05cb446f69_32265373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp7\\htdocs\\Ecommerce\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.field_label.php','function'=>'smarty_function_field_label',),));
?>


<?php if ($_smarty_tpl->tpl_vars['widgets']->value) {?>
    <?php echo frontend\design\Block::widget(array('name'=>'password_forgotten','params'=>array('type'=>'password_forgotten','params'=>$_smarty_tpl->tpl_vars['params']->value)));?>

<?php } else { ?>
  <h1><?php echo (defined('HEADING_TITLE') ? constant('HEADING_TITLE') : null);?>
</h1>
    <?php echo \frontend\design\Info::addBoxToCss('info');?>

    <?php echo \frontend\design\Info::addBoxToCss('form');?>

    <?php echo yii\helpers\Html::beginForm(array('account/password-forgotten','action'=>'process'),'post',array('name'=>'password_forgotten','id'=>'frmPasswordForgotten'));?>

  <div class="middle-form">
      <?php echo $_smarty_tpl->tpl_vars['messages_password_forgotten']->value;?>

    <div style="margin-bottom: 20px">
      <p><?php echo (defined('TEXT_MAIN') ? constant('TEXT_MAIN') : null);?>
</p>
    </div>
    <div class="col-full">
      <label for="email"><?php echo smarty_function_field_label(array('const'=>"ENTRY_EMAIL_ADDRESS",'required_text'=>''),$_smarty_tpl);?>
</label>
      <input type="email" name="email_address" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email_address']->value, ENT_QUOTES, 'UTF-8', true);?>
" id="email">
    </div>
<?php if ($_smarty_tpl->tpl_vars['loginModel']->value->captha_enabled == 'recaptha') {?>
    <?php echo $_smarty_tpl->tpl_vars['loginModel']->value->captcha_widget;?>

<?php }
if ($_smarty_tpl->tpl_vars['loginModel']->value->captha_enabled == 'captha') {?>
    <div class="col-full">
        <?php echo Captcha::widget(array('model'=>$_smarty_tpl->tpl_vars['loginModel']->value,'attribute'=>'captcha'));?>

    </div>
<?php }?>
    <div class="buttons">
      <div class="right-buttons"><button class="btn-1" type="submit"><?php echo (defined('IMAGE_BUTTON_CONTINUE') ? constant('IMAGE_BUTTON_CONTINUE') : null);?>
</button></div>
      <div class="left-buttons"><a href="<?php echo $_smarty_tpl->tpl_vars['link_back_href']->value;?>
" class="btn"><?php echo (defined('IMAGE_BUTTON_BACK') ? constant('IMAGE_BUTTON_BACK') : null);?>
</a></div>
    </div>
  </div>
    <?php echo yii\helpers\Html::endForm();?>

<?php }
}
}
