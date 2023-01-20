<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:08:23
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\login\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca05a73e6ee9_24283075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db14d4d40ae4afc8ad214591cee23daae9c70bf6' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\login\\register.tpl',
      1 => 1656053990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca05a73e6ee9_24283075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp7\\htdocs\\Ecommerce\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.field_label.php','function'=>'smarty_function_field_label',),));
?>




<?php echo frontend\design\Info::addBoxToCss('info');?>

<?php echo frontend\design\Info::addBoxToCss('form');?>

<?php echo frontend\design\Info::addBoxToCss('pass-strength');?>

<?php echo frontend\design\Info::addBoxToCss('info-popup');?>

<?php echo frontend\design\Info::addBoxToCss('switch');?>

<?php echo frontend\design\Info::addBoxToCss('datepicker');?>


<div class="login-box">
    <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['tabsManually'])) && $_smarty_tpl->tpl_vars['settings']->value['tabsManually']) {?>
        <div class="login-box-heading"><?php echo (defined('REGISTER') ? constant('REGISTER') : null);?>
</div>
    <?php }?>
            <div class="middle-form">
              <?php if ((isset($_smarty_tpl->tpl_vars['messages_registration']->value))) {?>
                <?php echo $_smarty_tpl->tpl_vars['messages_registration']->value;?>

              <?php }?>
                <?php $_smarty_tpl->_assignInScope('re1', '.{');?>
                <?php $_smarty_tpl->_assignInScope('re2', '}');?>
                
<?php if ((defined('PASSWORD_STRONG_REQUIRED') ? constant('PASSWORD_STRONG_REQUIRED') : null) == 'ULNS') {?>
    <?php $_smarty_tpl->_assignInScope('titleDataPattern', sprintf((defined('ENTRY_PASSWORD_ULNS_ERROR') ? constant('ENTRY_PASSWORD_ULNS_ERROR') : null),(defined('ENTRY_PASSWORD_MIN_LENGTH') ? constant('ENTRY_PASSWORD_MIN_LENGTH') : null)));?>
    <?php $_smarty_tpl->_assignInScope('passDataPattern', (('(?=.*\d)(?=.*\W+)(?=.*[a-z])(?=.*[A-Z]).{').((defined('ENTRY_PASSWORD_MIN_LENGTH') ? constant('ENTRY_PASSWORD_MIN_LENGTH') : null))).(',}'));
} elseif ((defined('PASSWORD_STRONG_REQUIRED') ? constant('PASSWORD_STRONG_REQUIRED') : null) == 'ULN') {?>
    <?php $_smarty_tpl->_assignInScope('titleDataPattern', sprintf((defined('ENTRY_PASSWORD_ULN_ERROR') ? constant('ENTRY_PASSWORD_ULN_ERROR') : null),(defined('ENTRY_PASSWORD_MIN_LENGTH') ? constant('ENTRY_PASSWORD_MIN_LENGTH') : null)));?>
    <?php $_smarty_tpl->_assignInScope('passDataPattern', (('(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{').((defined('ENTRY_PASSWORD_MIN_LENGTH') ? constant('ENTRY_PASSWORD_MIN_LENGTH') : null))).(',}'));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('titleDataPattern', sprintf((defined('ENTRY_PASSWORD_ERROR') ? constant('ENTRY_PASSWORD_ERROR') : null),(defined('ENTRY_PASSWORD_MIN_LENGTH') ? constant('ENTRY_PASSWORD_MIN_LENGTH') : null)));?>
    <?php $_smarty_tpl->_assignInScope('passDataPattern', (('.{').((defined('ENTRY_PASSWORD_MIN_LENGTH') ? constant('ENTRY_PASSWORD_MIN_LENGTH') : null))).('}'));
}?>

                <?php echo yii\helpers\Html::beginForm($_smarty_tpl->tpl_vars['action']->value,'post',array('name'=>'register'));?>

                <?php echo yii\helpers\Html::hiddenInput('scenario',$_smarty_tpl->tpl_vars['registerModel']->value->formName());?>
                
                <?php if ((isset($_smarty_tpl->tpl_vars['wr_registry_id']->value)) && $_smarty_tpl->tpl_vars['wr_registry_id']->value) {?>
                    <input type="hidden" name="wr_registry_id" value="<?php echo $_smarty_tpl->tpl_vars['wr_registry_id']->value;?>
">
                <?php }?>
                <?php if (in_array(ACCOUNT_COMPANY,array('required_register','visible_register'))) {?>
                    <div class="col-left">
                        <label for="<?php echo $_smarty_tpl->tpl_vars['registerModel']->value->formName();?>
-company"><?php echo smarty_function_field_label(array('const'=>"ENTRY_COMPANY",'configuration'=>"ACCOUNT_COMPANY"),$_smarty_tpl);?>
</label>                        
                        <?php if (ACCOUNT_COMPANY == 'required_register') {?>
                            <?php echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'company',array('data-pattern'=>((string)$_smarty_tpl->tpl_vars['re1']->value)."1".((string)$_smarty_tpl->tpl_vars['re2']->value),'data-required'=>((string)(defined('ENTRY_COMPANY_ERROR') ? constant('ENTRY_COMPANY_ERROR') : null))));?>

                        <?php } else { ?>
                            <?php echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'company');?>

                        <?php }?>
                    </div>
                <?php }?>
                <?php if (in_array(ACCOUNT_COMPANY_VAT,array('required_register','visible_register'))) {?>
                    <div class="col-right">
                        <label for="<?php echo $_smarty_tpl->tpl_vars['registerModel']->value->formName();?>
-company_vat"><?php echo smarty_function_field_label(array('const'=>"ENTRY_BUSINESS",'configuration'=>"ACCOUNT_COMPANY_VAT"),$_smarty_tpl);?>
</label>
                        <?php if (ACCOUNT_COMPANY_VAT == 'required_register') {?>
                            <?php echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'company_vat',array('data-pattern'=>((string)$_smarty_tpl->tpl_vars['re1']->value)."1".((string)$_smarty_tpl->tpl_vars['re2']->value),'data-required'=>((string)(defined('ENTRY_VAT_ID_ERROR') ? constant('ENTRY_VAT_ID_ERROR') : null))));?>

                        <?php } else { ?>
                            <?php echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'company_vat');?>

                        <?php }?>
                    </div>
                <?php }?>
                <?php if (in_array(ACCOUNT_CUSTOMS_NUMBER,array('required_register','visible_register'))) {?>
                    <div class="col-right">
                        <label for="<?php echo $_smarty_tpl->tpl_vars['registerModel']->value->formName();?>
-customs_number"><?php echo smarty_function_field_label(array('const'=>"TEXT_CUSTOMS_NUMBER",'configuration'=>"ACCOUNT_CUSTOMS_NUMBER"),$_smarty_tpl);?>
</label>
                        <?php if (ACCOUNT_CUSTOMS_NUMBER == 'required_register') {?>
                            <?php echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'customs_number',array('data-required'=>((string)(defined('TEXT_CUSTOMS_NUMBER_ERROR') ? constant('TEXT_CUSTOMS_NUMBER_ERROR') : null))));?>

                        <?php } else { ?>
                            <?php echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'customs_number');?>

                        <?php }?>
                    </div>
                <?php }?>
                <?php if (in_array(ACCOUNT_GENDER,array('required_register','visible_register'))) {?>
                    <div class="col-full col-gender">
                        <span><?php echo smarty_function_field_label(array('const'=>"ENTRY_GENDER",'configuration'=>"ACCOUNT_GENDER"),$_smarty_tpl);?>
</span>
                        <?php $_smarty_tpl->_assignInScope('options', array());?>
                        <?php if (ACCOUNT_GENDER == 'required_register') {
$_tmp_array = isset($_smarty_tpl->tpl_vars['options']) ? $_smarty_tpl->tpl_vars['options']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['required'] = 'required';
$_smarty_tpl->_assignInScope('options', $_tmp_array);
}?>
                        <?php echo yii\helpers\Html::activeRadioList($_smarty_tpl->tpl_vars['registerModel']->value,'gender',$_smarty_tpl->tpl_vars['registerModel']->value->getGenderList(),$_smarty_tpl->tpl_vars['options']->value);?>
                        
                    </div>
                <?php }?>
                <?php if (in_array(ACCOUNT_FIRSTNAME,array('required_register','visible_register'))) {?>
                    <div class="col-left">
                        <label for="<?php echo $_smarty_tpl->tpl_vars['registerModel']->value->formName();?>
-firstname"><?php echo smarty_function_field_label(array('const'=>"ENTRY_FIRST_NAME",'configuration'=>"ACCOUNT_FIRSTNAME"),$_smarty_tpl);?>
</label>                        
                        <?php if (ACCOUNT_FIRSTNAME == 'required_register') {?>
                            <?php ob_start();
echo sprintf((defined('ENTRY_FIRST_NAME_ERROR') ? constant('ENTRY_FIRST_NAME_ERROR') : null),(defined('ENTRY_FIRST_NAME_MIN_LENGTH') ? constant('ENTRY_FIRST_NAME_MIN_LENGTH') : null));
$_prefixVariable6=ob_get_clean();
echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'firstname',array('data-pattern'=>((string)$_smarty_tpl->tpl_vars['re1']->value).((string)(defined('ENTRY_FIRST_NAME_MIN_LENGTH') ? constant('ENTRY_FIRST_NAME_MIN_LENGTH') : null)).((string)$_smarty_tpl->tpl_vars['re2']->value),'data-required'=>$_prefixVariable6));?>

                        <?php } else { ?>
                            <?php echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'firstname',array('class'=>"skip-validation"));?>

                        <?php }?>
                    </div>
                <?php }?>
                <?php if (in_array(ACCOUNT_LASTNAME,array('required_register','visible_register'))) {?>
                    <div class="col-right">
                        <label for="<?php echo $_smarty_tpl->tpl_vars['registerModel']->value->formName();?>
-lastname"><?php echo smarty_function_field_label(array('const'=>"ENTRY_LAST_NAME",'configuration'=>"ACCOUNT_LASTNAME"),$_smarty_tpl);?>
</label>
                        <?php if (ACCOUNT_LASTNAME == 'required_register') {?>
                            <?php ob_start();
echo sprintf((defined('ENTRY_LAST_NAME_ERROR') ? constant('ENTRY_LAST_NAME_ERROR') : null),(defined('ENTRY_LAST_NAME_MIN_LENGTH') ? constant('ENTRY_LAST_NAME_MIN_LENGTH') : null));
$_prefixVariable7=ob_get_clean();
echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'lastname',array('data-pattern'=>((string)$_smarty_tpl->tpl_vars['re1']->value).((string)(defined('ENTRY_LAST_NAME_MIN_LENGTH') ? constant('ENTRY_LAST_NAME_MIN_LENGTH') : null)).((string)$_smarty_tpl->tpl_vars['re2']->value),'data-required'=>$_prefixVariable7));?>
                            
                        <?php } else { ?>
                            <?php echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'lastname');?>
                            
                        <?php }?>
                    </div>
                <?php }?>
				<div class="generate_row">
					<a href="#" class="generate_password"><?php echo (defined('TEXT_GENERATE_PASSWORD') ? constant('TEXT_GENERATE_PASSWORD') : null);?>
</a>
				</div>
                <div class="password-row">
                    <div class="col-left">
                        <label for="<?php echo $_smarty_tpl->tpl_vars['registerModel']->value->formName();?>
-password" class="password-info">
                            <div class="info-popup top-left"><div><?php echo sprintf((defined('TEXT_HELP_PASSWORD') ? constant('TEXT_HELP_PASSWORD') : null),(defined('ENTRY_PASSWORD_MIN_LENGTH') ? constant('ENTRY_PASSWORD_MIN_LENGTH') : null),(defined('STORE_NAME') ? constant('STORE_NAME') : null));?>
</div></div>
                            <?php echo smarty_function_field_label(array('const'=>"PASSWORD",'required_text'=>"*"),$_smarty_tpl);?>

                        </label>
                        <?php echo yii\helpers\Html::activePasswordInput($_smarty_tpl->tpl_vars['registerModel']->value,'password',array('class'=>"password show-password",'autocomplete'=>"off",'data-pattern'=>((string)$_smarty_tpl->tpl_vars['passDataPattern']->value),'data-required'=>((string)$_smarty_tpl->tpl_vars['titleDataPattern']->value)));?>

                    </div>
                    <div class="col-right">
                        <label for="confirmation"><?php echo smarty_function_field_label(array('const'=>"PASSWORD_CONFIRMATION",'required_text'=>"*"),$_smarty_tpl);?>
</label>
                        <?php echo yii\helpers\Html::activePasswordInput($_smarty_tpl->tpl_vars['registerModel']->value,'confirmation',array('class'=>"confirmation show-password",'autocomplete'=>"off",'data-required'=>((string)(defined('ENTRY_PASSWORD_ERROR_NOT_MATCHING') ? constant('ENTRY_PASSWORD_ERROR_NOT_MATCHING') : null)),'data-confirmation'=>"#registration-password"));?>

                    </div>
                </div>
                <div class="col-left">
                    <label for="<?php echo $_smarty_tpl->tpl_vars['registerModel']->value->formName();?>
-email_address"><?php echo smarty_function_field_label(array('const'=>"ENTRY_EMAIL_ADDRESS",'required_text'=>"*"),$_smarty_tpl);?>
</label>
                    <?php echo yii\helpers\Html::activeInput('email',$_smarty_tpl->tpl_vars['registerModel']->value,'email_address',array('data-required'=>((string)(defined('EMAIL_REQUIRED') ? constant('EMAIL_REQUIRED') : null)),'data-pattern'=>"email"));?>

                </div>
                <?php if (in_array(ACCOUNT_TELEPHONE,array('required_register','visible_register'))) {?>
                    <div class="col-right">
                        <label for="<?php echo $_smarty_tpl->tpl_vars['registerModel']->value->formName();?>
-telephone"><?php echo smarty_function_field_label(array('const'=>"ENTRY_TELEPHONE_NUMBER",'configuration'=>"ACCOUNT_TELEPHONE"),$_smarty_tpl);?>
</label>
                        <?php if (ACCOUNT_TELEPHONE == 'required_register') {?>
                            <?php ob_start();
echo sprintf((defined('ENTRY_TELEPHONE_NUMBER_ERROR') ? constant('ENTRY_TELEPHONE_NUMBER_ERROR') : null),(defined('ENTRY_TELEPHONE_MIN_LENGTH') ? constant('ENTRY_TELEPHONE_MIN_LENGTH') : null));
$_prefixVariable8=ob_get_clean();
echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'telephone',array('data-required'=>$_prefixVariable8,'data-pattern'=>((string)$_smarty_tpl->tpl_vars['re1']->value).((string)(defined('ENTRY_TELEPHONE_MIN_LENGTH') ? constant('ENTRY_TELEPHONE_MIN_LENGTH') : null)).((string)$_smarty_tpl->tpl_vars['re2']->value)));?>

                        <?php } else { ?>
                            <?php echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'telephone');?>
                            
                        <?php }?>
                    </div>
                <?php }?>
                <?php if (in_array(ACCOUNT_LANDLINE,array('required_register','visible_register'))) {?>
                    <div class="col-left">
                        <label for="<?php echo $_smarty_tpl->tpl_vars['registerModel']->value->formName();?>
-landline"><?php echo smarty_function_field_label(array('const'=>"ENTRY_LANDLINE",'configuration'=>"ACCOUNT_LANDLINE"),$_smarty_tpl);?>
</label>
                        <?php if (ACCOUNT_LANDLINE == 'required_register') {?>
                            <?php ob_start();
echo sprintf((defined('ENTRY_LANDLINE_NUMBER_ERROR') ? constant('ENTRY_LANDLINE_NUMBER_ERROR') : null),(defined('ENTRY_LANDLINE_MIN_LENGTH') ? constant('ENTRY_LANDLINE_MIN_LENGTH') : null));
$_prefixVariable9=ob_get_clean();
echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'landline',array('data-required'=>$_prefixVariable9,'data-pattern'=>((string)$_smarty_tpl->tpl_vars['re1']->value).((string)(defined('ENTRY_LANDLINE_MIN_LENGTH') ? constant('ENTRY_LANDLINE_MIN_LENGTH') : null)).((string)$_smarty_tpl->tpl_vars['re2']->value)));?>

                        <?php } else { ?>
                            <?php echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'landline');?>
                            
                        <?php }?>
                    </div>
                <?php }?>
                <?php if (in_array(ACCOUNT_DOB,array('required_register','visible_register')) && ACCOUNT_GDPR == 'true') {?>
                    <div class="col-full-padding">
                        <div class="col-left col-full-margin" style="padding-top: 5px">
                            <label for="gdpr" style="display: inline;" class="slim">
                                <?php ob_start();
echo (defined('TEXT_AGE_OVER') ? constant('TEXT_AGE_OVER') : null);
$_prefixVariable10 = ob_get_clean();
echo yii\helpers\Html::activeCheckbox($_smarty_tpl->tpl_vars['registerModel']->value,'gdpr',array('class'=>"candlestick gdpr",'label'=>$_prefixVariable10,'value'=>$_smarty_tpl->tpl_vars['registerModel']->value->gdpr));?>

                                <span class="checkbox-span"></span>
                            </label>
                        </div>
                        <div class="col-right dob-hide" style="display: none;">
                            <label for="dob"><?php echo smarty_function_field_label(array('const'=>"ENTRY_DATE_OF_BIRTH",'configuration'=>"ACCOUNT_DOB"),$_smarty_tpl);?>
 </label>
                            <div class="" style="position: relative">
                                <?php $_smarty_tpl->_assignInScope('options', array('class'=>"datepicker dobTmp"));?>
                                <?php if (ACCOUNT_DOB == 'required_register') {?> <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['options']) ? $_smarty_tpl->tpl_vars['options']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data-required'] = ((string)(defined('ENTRY_DATE_OF_BIRTH_ERROR') ? constant('ENTRY_DATE_OF_BIRTH_ERROR') : null));
$_smarty_tpl->_assignInScope('options', $_tmp_array);
}?>
                                <?php echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'dobTmp',$_smarty_tpl->tpl_vars['options']->value);?>

                                <?php echo yii\helpers\Html::activeHiddenInput($_smarty_tpl->tpl_vars['registerModel']->value,'dob',array('class'=>'dob-res'));?>

                            </div>
                        </div>
                    </div>
                <?php } elseif (in_array(ACCOUNT_DOB,array('required_register','visible_register'))) {?>
                    <div class="col-right">
                        <label for="dob"><?php echo smarty_function_field_label(array('const'=>"ENTRY_DATE_OF_BIRTH",'configuration'=>"ACCOUNT_DOB"),$_smarty_tpl);?>
 </label>
                        <div class="" style="position: relative">
                            <?php $_smarty_tpl->_assignInScope('options', array('class'=>"datepicker dobTmp"));?>
                            <?php if (ACCOUNT_DOB == 'required_register') {?> <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['options']) ? $_smarty_tpl->tpl_vars['options']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data-required'] = ((string)(defined('ENTRY_DATE_OF_BIRTH_ERROR') ? constant('ENTRY_DATE_OF_BIRTH_ERROR') : null));
$_smarty_tpl->_assignInScope('options', $_tmp_array);
}?>
                            <?php echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'dobTmp',$_smarty_tpl->tpl_vars['options']->value);?>

                            <?php echo yii\helpers\Html::activeHiddenInput($_smarty_tpl->tpl_vars['registerModel']->value,'dob',array('class'=>'dob-res'));?>

                        </div>
                    </div>
                <?php }?>
                <?php if (\common\helpers\Acl::checkExtensionAllowed('Subscribers','allowed') && defined('ENABLE_CUSTOMERS_NEWSLETTER') && ENABLE_CUSTOMERS_NEWSLETTER == 'true') {?>
                    <div class="col-left">
                        <label class="slim">
                            <?php ob_start();
echo (defined('RECEIVE_REGULAR_OFFERS') ? constant('RECEIVE_REGULAR_OFFERS') : null);
$_prefixVariable11 = ob_get_clean();
echo yii\helpers\Html::activeCheckbox($_smarty_tpl->tpl_vars['registerModel']->value,'newsletter',array('class'=>'candlestick newsletter','value'=>'','label'=>$_prefixVariable11,'value'=>$_smarty_tpl->tpl_vars['registerModel']->value->newsletter));?>

                            <span class="checkbox-span"></span>
                        </label>
                    </div>

                    <div class="col-right regular_offers_box" style="display: none;">
                        <label for="<?php echo $_smarty_tpl->tpl_vars['registerModel']->value->formName();?>
-regular_offers"><?php echo (defined('RECEIVE_REGULAR_OFFERS_PERIOD') ? constant('RECEIVE_REGULAR_OFFERS_PERIOD') : null);?>
</label>
                        <?php echo yii\helpers\Html::activeDropDownList($_smarty_tpl->tpl_vars['registerModel']->value,'regular_offers',$_smarty_tpl->tpl_vars['registerModel']->value->getRegularOfferList());?>

                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['showAddress']->value) {?>
                    <?php if (in_array(ACCOUNT_POSTCODE,array('required_register','visible_register'))) {?>
                        <div class="col-left">
                            <label for="<?php echo $_smarty_tpl->tpl_vars['registerModel']->value->formName();?>
-postcode"><?php echo smarty_function_field_label(array('const'=>"ENTRY_POST_CODE",'configuration'=>"ACCOUNT_POSTCODE"),$_smarty_tpl);?>
</label>
                            <?php if (ACCOUNT_POSTCODE == 'required_register') {?>
                                 <?php ob_start();
echo sprintf((defined('ENTRY_POST_CODE_ERROR') ? constant('ENTRY_POST_CODE_ERROR') : null),(defined('ENTRY_POSTCODE_MIN_LENGTH') ? constant('ENTRY_POSTCODE_MIN_LENGTH') : null));
$_prefixVariable12=ob_get_clean();
echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'postcode',array('data-required'=>$_prefixVariable12,'data-pattern'=>((string)$_smarty_tpl->tpl_vars['re1']->value).((string)(defined('ENTRY_POSTCODE_MIN_LENGTH') ? constant('ENTRY_POSTCODE_MIN_LENGTH') : null)).((string)$_smarty_tpl->tpl_vars['re2']->value)));?>

                            <?php } else { ?>
                                <?php echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'postcode');?>

                            <?php }?>
                        </div>
                    <?php }?>
                    <?php if (in_array(ACCOUNT_STREET_ADDRESS,array('required_register','visible_register'))) {?>
                        <div class="col-right">
                            <label for="<?php echo $_smarty_tpl->tpl_vars['registerModel']->value->formName();?>
-street_address"><?php echo smarty_function_field_label(array('const'=>"ENTRY_STREET_ADDRESS",'configuration'=>"ACCOUNT_STREET_ADDRESS"),$_smarty_tpl);?>
</label>
                            <?php if (ACCOUNT_STREET_ADDRESS == 'required_register') {?>
                                <?php ob_start();
echo sprintf((defined('ENTRY_STREET_ADDRESS_ERROR') ? constant('ENTRY_STREET_ADDRESS_ERROR') : null),(defined('ENTRY_STREET_ADDRESS_MIN_LENGTH') ? constant('ENTRY_STREET_ADDRESS_MIN_LENGTH') : null));
$_prefixVariable13=ob_get_clean();
echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'street_address',array('data-required'=>$_prefixVariable13,'data-pattern'=>((string)$_smarty_tpl->tpl_vars['re1']->value).((string)(defined('ENTRY_STREET_ADDRESS_MIN_LENGTH') ? constant('ENTRY_STREET_ADDRESS_MIN_LENGTH') : null)).((string)$_smarty_tpl->tpl_vars['re2']->value)));?>

                            <?php } else { ?>
                                <?php echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'street_address');?>

                            <?php }?>
                        </div>
                    <?php }?>
                    <?php if (in_array(ACCOUNT_SUBURB,array('required_register','visible_register'))) {?>
                        <div class="col-left">
                            <label for="<?php echo $_smarty_tpl->tpl_vars['registerModel']->value->formName();?>
-suburb"><?php echo smarty_function_field_label(array('const'=>"ENTRY_SUBURB",'configuration'=>"ACCOUNT_SUBURB"),$_smarty_tpl);?>
</label>
                            <?php if (ACCOUNT_SUBURB == 'required_register') {?>
                                <?php echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'suburb',array('data-required'=>((string)(defined('ENTRY_SUBURB_ERROR') ? constant('ENTRY_SUBURB_ERROR') : null)),'data-pattern'=>((string)$_smarty_tpl->tpl_vars['re1']->value)."1".((string)$_smarty_tpl->tpl_vars['re2']->value)));?>
                                
                            <?php } else { ?>
                                <?php echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'suburb');?>
                                
                            <?php }?>
                        </div>
                    <?php }?>
                    <?php if (in_array(ACCOUNT_CITY,array('required_register','visible_register'))) {?>
                        <div class="col-right">
                            <label for="<?php echo $_smarty_tpl->tpl_vars['registerModel']->value->formName();?>
-city"><?php echo smarty_function_field_label(array('const'=>"ENTRY_CITY",'configuration'=>"ACCOUNT_CITY"),$_smarty_tpl);?>
</label>
                            <?php if (ACCOUNT_CITY == 'required_register') {?>
                                <?php ob_start();
echo sprintf((defined('ENTRY_CITY_ERROR') ? constant('ENTRY_CITY_ERROR') : null),(defined('ENTRY_CITY_MIN_LENGTH') ? constant('ENTRY_CITY_MIN_LENGTH') : null));
$_prefixVariable14=ob_get_clean();
echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'city',array('data-required'=>$_prefixVariable14,'data-pattern'=>((string)$_smarty_tpl->tpl_vars['re1']->value).((string)(defined('ENTRY_CITY_MIN_LENGTH') ? constant('ENTRY_CITY_MIN_LENGTH') : null)).((string)$_smarty_tpl->tpl_vars['re2']->value)));?>

                            <?php } else { ?>
                                <?php echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'city');?>

                            <?php }?>
                        </div>
                    <?php }?>
                    <?php if (in_array(ACCOUNT_STATE,array('required_register','visible_register'))) {?>
                        <div class="col-left">
                            <label for="<?php echo $_smarty_tpl->tpl_vars['registerModel']->value->formName();?>
-state"><?php echo smarty_function_field_label(array('const'=>"ENTRY_STATE",'configuration'=>"ACCOUNT_STATE"),$_smarty_tpl);?>
</label>
                            <?php if (ACCOUNT_STATE == 'required_register') {?>
                                <?php ob_start();
echo sprintf((defined('ENTRY_STATE_ERROR') ? constant('ENTRY_STATE_ERROR') : null),(defined('ENTRY_STATE_MIN_LENGTH') ? constant('ENTRY_STATE_MIN_LENGTH') : null));
$_prefixVariable15=ob_get_clean();
echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'state',array('class'=>'state','data-required'=>$_prefixVariable15,'data-pattern'=>((string)$_smarty_tpl->tpl_vars['re1']->value).((string)(defined('ENTRY_STATE_MIN_LENGTH') ? constant('ENTRY_STATE_MIN_LENGTH') : null)).((string)$_smarty_tpl->tpl_vars['re2']->value)));?>

                            <?php } else { ?>
                                <?php echo yii\helpers\Html::activeTextInput($_smarty_tpl->tpl_vars['registerModel']->value,'state');?>

                            <?php }?>
                        </div>
                    <?php }?>
                    <?php if (in_array(ACCOUNT_COUNTRY,array('required_register','visible_register'))) {?>
                        <div class="col-right">
                            <label for="<?php echo $_smarty_tpl->tpl_vars['registerModel']->value->formName();?>
-country"><?php echo smarty_function_field_label(array('const'=>"ENTRY_COUNTRY",'configuration'=>"ACCOUNT_COUNTRY"),$_smarty_tpl);?>
</label>
                            <?php echo yii\helpers\Html::activedropDownList($_smarty_tpl->tpl_vars['registerModel']->value,'country',\common\helpers\Country::new_get_countries('',false),array('class'=>'country','required'=>(ACCOUNT_COUNTRY == 'required_register'),'value'=>$_smarty_tpl->tpl_vars['registerModel']->value->getDefaultCountryId()));?>

                        </div>
                    <?php }?>
                <?php }?>
                <?php if (ENABLE_CUSTOMER_GROUP_CHOOSE == 'True') {?>
                    <div class="col-right">
                        <label for="<?php echo $_smarty_tpl->tpl_vars['registerModel']->value->formName();?>
-group"><?php echo (defined('ENTRY_GROUP') ? constant('ENTRY_GROUP') : null);?>
</label>
                        <?php echo yii\helpers\Html::activedropDownList($_smarty_tpl->tpl_vars['registerModel']->value,'group',\common\helpers\Group::get_customer_groups_list());?>

                    </div>
                <?php }?>
                <div class="col-full privacy-row">
                    <div class="terms-login">
                        <?php echo yii\helpers\Html::activeCheckbox($_smarty_tpl->tpl_vars['registerModel']->value,'terms',array('class'=>'terms-conditions','value'=>'1','label'=>'','checked'=>false));
echo (defined('TEXT_TERMS_CONDITIONS') ? constant('TEXT_TERMS_CONDITIONS') : null);?>

                    </div>
                </div>
                <div class="center-buttons">
                    <button class="btn-2 disabled-area" type="submit"><?php echo (defined('CREATE') ? constant('CREATE') : null);?>
</button>
                </div>
                <?php echo yii\helpers\Html::endForm();?>

            </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    tl(function(){

        <?php if ((isset($_smarty_tpl->tpl_vars['messages_registration']->value)) && $_smarty_tpl->tpl_vars['messages_registration']->value) {?>
        alertMessage('<?php echo $_smarty_tpl->tpl_vars['messages_registration']->value;?>
');
        <?php }?>
    })

    var ageStatement = 'default';
    var offersStatement = 'default';

    tl([        
        '<?php echo frontend\design\Info::themeFile('/js/main.js');?>
',
        '<?php echo frontend\design\Info::themeFile('/js/password-strength.js');?>
',
        '<?php echo frontend\design\Info::themeFile('/js/bootstrap-switch.js');?>
',
        '<?php echo frontend\design\Info::themeFile('/js/hammer.js');?>
',
        '<?php echo frontend\design\Info::themeFile('/js/candlestick.js');?>
',
        '<?php echo frontend\design\Info::themeFile('/js/bootstrap.min.js');?>
',
        '<?php echo frontend\design\Info::themeFile('/js/bootstrap-datepicker.js');?>
',        
    ], function () {
        var box = $('#box-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
');
        var dob = $('.dobTmp', box);

        $('head').prepend('<link rel="stylesheet" href="<?php echo frontend\design\Info::themeFile('/css/bootstrap-datepicker.css');?>
">');

        $.fn.datepicker.dates.current={
            days:["<?php echo (defined('TEXT_SUNDAY') ? constant('TEXT_SUNDAY') : null);?>
","<?php echo (defined('TEXT_MONDAY') ? constant('TEXT_MONDAY') : null);?>
","<?php echo (defined('TEXT_TUESDAY') ? constant('TEXT_TUESDAY') : null);?>
","<?php echo (defined('TEXT_WEDNESDAY') ? constant('TEXT_WEDNESDAY') : null);?>
","<?php echo (defined('TEXT_THURSDAY') ? constant('TEXT_THURSDAY') : null);?>
","<?php echo (defined('TEXT_FRIDAY') ? constant('TEXT_FRIDAY') : null);?>
","<?php echo (defined('TEXT_SATURDAY') ? constant('TEXT_SATURDAY') : null);?>
"],
            daysShort:["<?php echo (defined('DATEPICKER_DAY_SUN') ? constant('DATEPICKER_DAY_SUN') : null);?>
","<?php echo (defined('DATEPICKER_DAY_MON') ? constant('DATEPICKER_DAY_MON') : null);?>
","<?php echo (defined('DATEPICKER_DAY_TUE') ? constant('DATEPICKER_DAY_TUE') : null);?>
","<?php echo (defined('DATEPICKER_DAY_WED') ? constant('DATEPICKER_DAY_WED') : null);?>
","<?php echo (defined('DATEPICKER_DAY_THU') ? constant('DATEPICKER_DAY_THU') : null);?>
","<?php echo (defined('DATEPICKER_DAY_FRI') ? constant('DATEPICKER_DAY_FRI') : null);?>
","<?php echo (defined('DATEPICKER_DAY_SAT') ? constant('DATEPICKER_DAY_SAT') : null);?>
"],
            daysMin:["<?php echo (defined('DATEPICKER_DAY_SU') ? constant('DATEPICKER_DAY_SU') : null);?>
","<?php echo (defined('DATEPICKER_DAY_MO') ? constant('DATEPICKER_DAY_MO') : null);?>
","<?php echo (defined('DATEPICKER_DAY_TU') ? constant('DATEPICKER_DAY_TU') : null);?>
","<?php echo (defined('DATEPICKER_DAY_WE') ? constant('DATEPICKER_DAY_WE') : null);?>
","<?php echo (defined('DATEPICKER_DAY_TH') ? constant('DATEPICKER_DAY_TH') : null);?>
","<?php echo (defined('DATEPICKER_DAY_FR') ? constant('DATEPICKER_DAY_FR') : null);?>
","<?php echo (defined('DATEPICKER_DAY_SA') ? constant('DATEPICKER_DAY_SA') : null);?>
"],
            months:["<?php echo (defined('DATEPICKER_MONTH_JANUARY') ? constant('DATEPICKER_MONTH_JANUARY') : null);?>
","<?php echo (defined('DATEPICKER_MONTH_FEBRUARY') ? constant('DATEPICKER_MONTH_FEBRUARY') : null);?>
","<?php echo (defined('DATEPICKER_MONTH_MARCH') ? constant('DATEPICKER_MONTH_MARCH') : null);?>
","<?php echo (defined('DATEPICKER_MONTH_APRIL') ? constant('DATEPICKER_MONTH_APRIL') : null);?>
","<?php echo (defined('DATEPICKER_MONTH_MAY') ? constant('DATEPICKER_MONTH_MAY') : null);?>
","<?php echo (defined('DATEPICKER_MONTH_JUNE') ? constant('DATEPICKER_MONTH_JUNE') : null);?>
","<?php echo (defined('DATEPICKER_MONTH_JULY') ? constant('DATEPICKER_MONTH_JULY') : null);?>
","<?php echo (defined('DATEPICKER_MONTH_AUGUST') ? constant('DATEPICKER_MONTH_AUGUST') : null);?>
","<?php echo (defined('DATEPICKER_MONTH_SEPTEMBER') ? constant('DATEPICKER_MONTH_SEPTEMBER') : null);?>
","<?php echo (defined('DATEPICKER_MONTH_OCTOBER') ? constant('DATEPICKER_MONTH_OCTOBER') : null);?>
","<?php echo (defined('DATEPICKER_MONTH_NOVEMBER') ? constant('DATEPICKER_MONTH_NOVEMBER') : null);?>
","<?php echo (defined('DATEPICKER_MONTH_DECEMBER') ? constant('DATEPICKER_MONTH_DECEMBER') : null);?>
"],
            monthsShort:["<?php echo (defined('DATEPICKER_MONTH_JAN') ? constant('DATEPICKER_MONTH_JAN') : null);?>
","<?php echo (defined('DATEPICKER_MONTH_FEB') ? constant('DATEPICKER_MONTH_FEB') : null);?>
","<?php echo (defined('DATEPICKER_MONTH_MAR') ? constant('DATEPICKER_MONTH_MAR') : null);?>
","<?php echo (defined('DATEPICKER_MONTH_APR') ? constant('DATEPICKER_MONTH_APR') : null);?>
","<?php echo (defined('DATEPICKER_MONTH_MAY') ? constant('DATEPICKER_MONTH_MAY') : null);?>
","<?php echo (defined('DATEPICKER_MONTH_JUN') ? constant('DATEPICKER_MONTH_JUN') : null);?>
","<?php echo (defined('DATEPICKER_MONTH_JUL') ? constant('DATEPICKER_MONTH_JUL') : null);?>
","<?php echo (defined('DATEPICKER_MONTH_AUG') ? constant('DATEPICKER_MONTH_AUG') : null);?>
","<?php echo (defined('DATEPICKER_MONTH_SEP') ? constant('DATEPICKER_MONTH_SEP') : null);?>
","<?php echo (defined('DATEPICKER_MONTH_OCT') ? constant('DATEPICKER_MONTH_OCT') : null);?>
","<?php echo (defined('DATEPICKER_MONTH_NOV') ? constant('DATEPICKER_MONTH_NOV') : null);?>
","<?php echo (defined('DATEPICKER_MONTH_DEC') ? constant('DATEPICKER_MONTH_DEC') : null);?>
"],
            today:"<?php echo preg_replace('!\s+!u', ' ',(defined('TEXT_TODAY') ? constant('TEXT_TODAY') : null));?>
",
            clear:"<?php echo preg_replace('!\s+!u', ' ',(defined('TEXT_CLEAR') ? constant('TEXT_CLEAR') : null));?>
",
            weekStart:1
        };

        dob.datepicker({
            startView: 3,
            format: '<?php echo (defined('DATE_FORMAT_DATEPICKER') ? constant('DATE_FORMAT_DATEPICKER') : null);?>
yy',
            language: 'current',
            autoclose: true
        }).on('changeDate', function(e){
            var date = e.date;
            $('.dob-res', box).val(new Date(date.getTime() - (date.getTimezoneOffset() * 60000)).toISOString());
        }).removeClass('required-error').next('.required-message-wrap').remove();


        $('.password', box).passStrength({
            shortPassText: "<?php echo preg_replace('!\s+!u', ' ',(defined('TEXT_TOO_SHORT') ? constant('TEXT_TOO_SHORT') : null));?>
",
            badPassText: "<?php echo preg_replace('!\s+!u', ' ',(defined('TEXT_WEAK') ? constant('TEXT_WEAK') : null));?>
",
            goodPassText: "<?php echo preg_replace('!\s+!u', ' ',(defined('TEXT_GOOD') ? constant('TEXT_GOOD') : null));?>
",
            strongPassText: "<?php echo preg_replace('!\s+!u', ' ',(defined('TEXT_STRONG') ? constant('TEXT_STRONG') : null));?>
",
            samePasswordText: "<?php echo preg_replace('!\s+!u', ' ',(defined('TEXT_USERNAME_PASSWORD_IDENTICAL') ? constant('TEXT_USERNAME_PASSWORD_IDENTICAL') : null));?>
",
            userid: "#firstname"
        });

        $('.confirmation, .password', box).on('keyup', function () {
            var confirmation = $('.confirmation', box);
            if (confirmation.val() !== $('.password', box).val() && confirmation.val()) {
                confirmation.prev(".pass-strength").remove();
                confirmation.before('<span class="pass-strength pass-no-match"><span><?php echo preg_replace('!\s+!u', ' ',(defined('TEXT_NO_MATCH') ? constant('TEXT_NO_MATCH') : null));?>
</span></span>');
            } else if (confirmation.val() === '') {
                confirmation.prev(".pass-strength").remove();
            } else {
                confirmation.prev(".pass-strength").remove();
                confirmation.before('<span class="pass-strength pass-match"><span><?php echo preg_replace('!\s+!u', ' ',(defined('TEXT_MATCH') ? constant('TEXT_MATCH') : null));?>
</span></span>');
            }
        });

        <?php if ((isset($_smarty_tpl->tpl_vars['create_tab_active']->value)) && $_smarty_tpl->tpl_vars['create_tab_active']->value) {?>
        box.parents('.block').each(function(){
            $('a[data-href="#' + $(this).attr('id') + '"]').trigger('click')
        });
        <?php }?>


        $('.pop-up-link').popUp();

        $('.middle-form input', box).validate();

        var disableButton = function(e){
            e.preventDefault();
            return false;
        };

        $('.disabled-area', box).on('click', disableButton);

        $(".check-on-off", box).bootstrapSwitch({
            offText: '<?php echo (defined('TEXT_NO') ? constant('TEXT_NO') : null);?>
',
            onText: '<?php echo (defined('TEXT_YES') ? constant('TEXT_YES') : null);?>
',
            onSwitchChange: function () {
                $(this).closest('form').trigger('cart-change')
            }
        });
        
        $(".terms-conditions", box).bootstrapSwitch({
            offText: '<?php echo (defined('TEXT_NO') ? constant('TEXT_NO') : null);?>
',
            onText: '<?php echo (defined('TEXT_YES') ? constant('TEXT_YES') : null);?>
',
            onSwitchChange: function (d, e) {
                var form = $(this).closest('form');
                form.trigger('cart-change');
                if(e){
                    $('button[type="submit"]', form).removeClass('disabled-area').off('click', disableButton);
                }else{
                    $('button[type="submit"]', form).addClass('disabled-area').on('click', disableButton);
                }
            }
        });
        
        <?php if ($_smarty_tpl->tpl_vars['registerModel']->value->isShowAddress()) {?>
            tl(['<?php echo frontend\design\Info::themeFile('/js/jquery-ui.min.js');?>
', '<?php echo frontend\design\Info::themeFile('/js/address.js');?>
'], function(){
                $('.state').setStateCountryDependency({
                    'country': 'select.country',
                    'url': "<?php echo Yii::$app->urlManager->createUrl('account/address-state');?>
",
                });
            });
        <?php }?>        
        
        $('.candlestick', box).candlestick({
            afterAction: function(obj, wrap, val) {
                if ($(obj).hasClass('newsletter')) {
                    offersStatement = val;
                    if (val === 'on') {
                        $('.regular_offers_box', box).show();
                    } else {
                        $('.regular_offers_box', box).hide();
                    }
                }
                if ($(obj).hasClass('gdpr')) {
                    ageStatement = val;
                    if (val === 'on') {
                        dob.attr('disabled', 'disabled').addClass('skip-validation');
                        $('.dob-hide', box).hide();
                    } else if (val === 'default') {
                        dob.removeAttr('disabled').removeClass('skip-validation');
                        $('.dob-hide', box).hide();
                    } else {
                        dob.removeAttr('disabled').removeClass('skip-validation');
                        $('.dob-hide', box).show();
                    }
                }
            }
        });

        var count = 0;
        $('form', box).on('submit', function(e){
            if (!document.register.querySelector('.terms-conditions').checked){
                alertMessage('<?php echo (defined('TEXT_PLEASE_TERMS') ? constant('TEXT_PLEASE_TERMS') : null);?>
');
                return false;
            }            
<?php if (in_array(ACCOUNT_DOB,array('required_register','visible_register')) && ACCOUNT_GDPR == 'true') {?>
            if (ageStatement === 'default') {
                alertMessage('<?php echo (defined('TEXT_PLEASE_AGE') ? constant('TEXT_PLEASE_AGE') : null);?>
');
                return false;
            }
<?php }?>

<?php if (\common\helpers\Acl::checkExtensionAllowed('Subscribers','allowed') && defined('ENABLE_CUSTOMERS_NEWSLETTER') && ENABLE_CUSTOMERS_NEWSLETTER == 'true') {?>
            if (offersStatement === 'default') {
                alertMessage('<?php echo (defined('TEXT_PLEASE_OFFERS') ? constant('TEXT_PLEASE_OFFERS') : null);?>
');
                return false;
            }
<?php }?>
            
            if (count > 0){
                setTimeout(function(){
                    count = 0
                }, 1000);
                e.preventDefault();
                return false;
            }
            count++;
        });

        $('.show-password').showPassword();
		$('.generate_password').on('click', function(){
			var _form = $(this).closest('form');
            $.get('<?php echo $_smarty_tpl->tpl_vars['app']->value->urlManager->createUrl('account/generate-password');?>
', function(data){
                $('.show-password', _form).val(data);
                $('.show-password', _form).trigger('keyup');
                $('.password-row .col-right', _form).hide();
				$('.password-row .col-left', _form).css('width','100%');
				if($('.password-row .col-left .show-password', _form).attr('type') == 'password'){
                  $('.password-row .col-left .eye-password', _form).click();
                }
            }, 'json')
			return false;
		})
		$('.show-password').on('keyup', function(){
			var _form = $(this).closest('form');
			if(!$('.password-row .col-right', _form).is(':visible')){
				$('.password-row .col-right', _form).show();
				$('.password-row .col-left', _form).css('width','48%');
			}
		})
    })

<?php echo '</script'; ?>
><?php }
}
