<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:07:20
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca0568ec5d18_61403728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14b9a9bca44b7f160d1bdfb3fbe10a539f8a5f0a' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\account.tpl',
      1 => 1635499587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca0568ec5d18_61403728 (Smarty_Internal_Template $_smarty_tpl) {
?>


<ul class="account-top">
  <li class="account-title">
    <a href="<?php echo tep_href_link(FILENAME_ACCOUNT,'','SSL');?>
" class="my-acc-link">
      <span class="no-text">
        <?php echo (defined('TEXT_MY_ACCOUNT') ? constant('TEXT_MY_ACCOUNT') : null);?>

        <?php if ($_smarty_tpl->tpl_vars['customerLogged']->value && $_smarty_tpl->tpl_vars['settings']->value[0]['show_customers_name']) {?><span class=""><?php echo sprintf(LOGGED_CUSTOMER_GREETING,$_smarty_tpl->tpl_vars['customerData']->value['customers_firstname']);?>
</span><?php }?>
      </span>
    </a>
	<?php if ((isset($_smarty_tpl->tpl_vars['settings']->value[0]['link_or_dropdown'])) && $_smarty_tpl->tpl_vars['settings']->value[0]['link_or_dropdown']) {?>
    <ul class="account-dropdown account-dropdown-js <?php if ($_smarty_tpl->tpl_vars['customerLogged']->value) {?> logged-ul<?php }?>">
      <?php if (!$_smarty_tpl->tpl_vars['customerLogged']->value) {?>
        <li class="acc-returning">
          <div class="heading-2"><?php echo (defined('RETURNING_CUSTOMER') ? constant('RETURNING_CUSTOMER') : null);?>
</div>          
          
          <?php echo \frontend\design\boxes\login\Returning::widget(array('params'=>$_smarty_tpl->tpl_vars['params']->value));?>

          <?php echo \frontend\design\boxes\login\Socials::widget(array('params'=>$_smarty_tpl->tpl_vars['params']->value));?>

		  
			<div class="acc-top"><a href="<?php echo tep_href_link(FILENAME_CREATE_ACCOUNT,'','SSL');?>
"><?php echo (defined('NEW_CUSTOMER') ? constant('NEW_CUSTOMER') : null);?>
</a></div>
        </li>
      <?php } else { ?>
        <li class="logged-in">

          <?php if (frontend\design\Info::themeSetting('customer_account') == 'new') {?>
              <?php echo frontend\design\boxes\Menu::widget(array('settings'=>array(array('params'=>'Account box'))));?>

          <?php } else { ?>
            <ul class="acc-top-link">
              <li class="acc-top-li"><a class="account-link" href="<?php echo tep_href_link(FILENAME_ACCOUNT,'','SSL');?>
"><?php echo (defined('TEXT_MY_ACCOUNT') ? constant('TEXT_MY_ACCOUNT') : null);?>
</a></li>
              <li class="acc-top-li"><a class="account-link" href="<?php echo tep_href_link(FILENAME_ACCOUNT_PASSWORD,'','SSL');?>
"><?php echo (defined('ENTRY_PASSWORD') ? constant('ENTRY_PASSWORD') : null);?>
</a></li>
              <li class="acc-top-li"><a class="account-link" href="<?php echo tep_href_link(FILENAME_ADDRESS_BOOK,'','SSL');?>
"><?php echo (defined('TEXT_ADDRESS_BOOK') ? constant('TEXT_ADDRESS_BOOK') : null);?>
</a></li>
              <li class="acc-top-li"><a class="account-link" href="<?php echo tep_href_link('account/history','','SSL');?>
"><?php echo (defined('HEADER_ORDER_OVERVIEW') ? constant('HEADER_ORDER_OVERVIEW') : null);?>
</a></li>
              <?php if ($_smarty_tpl->tpl_vars['isReseller']->value) {?>
              <li class="acc-top-li"><a class="account-link" href="<?php echo Yii::$app->urlManager->createUrl('quick-order/');?>
"><?php echo (defined('TEXT_WHOLESALE_ORDER_FORM') ? constant('TEXT_WHOLESALE_ORDER_FORM') : null);?>
</a></li>
              <?php }?>
                <?php if (\common\helpers\Acl::checkExtensionAllowed('Messages','allowed')) {?>
                    <?php echo \common\extensions\Messages\Messages::menuLink();?>

                <?php }?>
              <li class="acc-top-li"><a class="account-link" href="<?php echo tep_href_link(FILENAME_LOGOFF,'');?>
"><?php echo (defined('TEXT_LOGOFF') ? constant('TEXT_LOGOFF') : null);?>
</a></li>
            </ul>
          <?php }?>
        </li>
      <?php }?>
    </ul>
	<?php }?>
  </li>
</ul>
<?php echo '<script'; ?>
 type="text/javascript">
  tl(function(){
      var focus = false;
<?php if ((isset($_smarty_tpl->tpl_vars['settings']->value[0]['link_or_dropdown'])) && $_smarty_tpl->tpl_vars['settings']->value[0]['link_or_dropdown']) {?>
      var account_dropdown = $('.account-dropdown-js');
      $('.my-acc-link').on('click', function(){
          $(this).toggleClass('active');
		  return false;
      });
	  $(window).on('click', function(){
		if(!$('.account-top').is(':hover')){
			$('.my-acc-link').removeClass('active');
		}
	  })
      $('input', account_dropdown).on('focus', function(){
          focus = true;
      })
      $('input', account_dropdown).on('blur', function(){
          focus = false;
      })

    var key = true;
    var account_position = function(){
      if (key){
        key = false;
        setTimeout(function(){
          account_dropdown.show();
          key = true;
          if (account_dropdown.width() > $(window).width()){
            var w = $(window).width() * 1 - 20;
            account_dropdown.css({
              width: w + 'px'
            })
          }
          if (account_dropdown.offset().left < 0){
            var r = account_dropdown.offset().left * 1 - 10;
            account_dropdown.css({
              right: r + 'px'
            })
          }
          account_dropdown.hide();
        }, 300)
      }
    };
    
    account_position();
    $(window).on('resize', account_position)
<?php }?>
  })
<?php echo '</script'; ?>
>
<?php }
}
