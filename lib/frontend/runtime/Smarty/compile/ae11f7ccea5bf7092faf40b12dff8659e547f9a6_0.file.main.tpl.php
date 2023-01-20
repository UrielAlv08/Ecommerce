<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:08:59
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\layouts\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca05cbba97a0_73916433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae11f7ccea5bf7092faf40b12dff8659e547f9a6' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\layouts\\main.tpl',
      1 => 1660565584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca05cbba97a0_73916433 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['this']->value->beginPage();?>
<!DOCTYPE html><html lang="<?php echo str_replace("_","-",Yii::$app->language);?>
">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php if (!frontend\design\Info::isAdmin()) {
if ((defined('TRUSTPILOT_VERIFY_META_TAG') ? constant('TRUSTPILOT_VERIFY_META_TAG') : null)) {?>
    <?php echo (defined('TRUSTPILOT_VERIFY_META_TAG') ? constant('TRUSTPILOT_VERIFY_META_TAG') : null);?>

<?php }?>
    <link rel="shortcut icon" href="<?php echo frontend\design\Info::themeFile('/icons/favicon.ico');?>
" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo frontend\design\Info::themeFile('/icons/apple-icon-57x57.png');?>
">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo frontend\design\Info::themeFile('/icons/apple-icon-60x60.png');?>
">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo frontend\design\Info::themeFile('/icons/apple-icon-72x72.png');?>
">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo frontend\design\Info::themeFile('/icons/apple-icon-76x76.png');?>
">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo frontend\design\Info::themeFile('/icons/apple-icon-114x114.png');?>
">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo frontend\design\Info::themeFile('/icons/apple-icon-120x120.png');?>
">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo frontend\design\Info::themeFile('/icons/apple-icon-144x144.png');?>
">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo frontend\design\Info::themeFile('/icons/apple-icon-152x152.png');?>
">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo frontend\design\Info::themeFile('/icons/apple-icon-180x180.png');?>
">
	<link rel="apple-touch-icon" sizes="512x512" href="<?php echo frontend\design\Info::themeFile('/icons/apple-icon-512x512.png');?>
">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo frontend\design\Info::themeFile('/icons/android-icon-192x192.png');?>
">
	<link rel="icon" type="image/png" sizes="512x512"  href="<?php echo frontend\design\Info::themeFile('/icons/android-icon-512x512.png');?>
">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo frontend\design\Info::themeFile('/icons/favicon-32x32.png');?>
">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo frontend\design\Info::themeFile('/icons/favicon-96x96.png');?>
">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo frontend\design\Info::themeFile('/icons/favicon-16x16.png');?>
">
    <link rel="manifest" href="manifest.json" crossorigin="use-credentials">
    <?php echo app\components\MetaCannonical::echoMetaTag();?>

    <meta name="msapplication-TileColor" content="<?php echo frontend\design\Info::themeSetting('theme_color');?>
">
    <meta name="msapplication-TileImage" content="<?php echo frontend\design\Info::themeFile('/icons/ms-icon-144x144.png');?>
">
    <meta name="theme-color" content="<?php echo frontend\design\Info::themeSetting('theme_color');?>
">
    <meta name="generator" content="osCommerce 4.0">
<?php }?>
    <base href="<?php echo (defined('BASE_URL') ? constant('BASE_URL') : null);?>
">
    <?php echo yii\helpers\Html::csrfMetaTags();?>

    <?php echo '<script'; ?>
 type="text/javascript">
        <?php echo \common\helpers\System::js_cookie_setting('cookieConfig');?>

    <?php echo '</script'; ?>
>
    <?php $_prefixVariable1 = \common\helpers\Acl::checkExtensionAllowed('OneTrust','allowed');
$_smarty_tpl->_assignInScope('ot', $_prefixVariable1);
if ($_prefixVariable1) {
$_prefixVariable2 = $_smarty_tpl->tpl_vars['ot']->value;
echo $_prefixVariable2::getScript();
}?>
  <?php if ($_smarty_tpl->tpl_vars['app']->value->controller->view->wp_head) {?>
      <!-- wp head -->
    <?php echo $_smarty_tpl->tpl_vars['app']->value->controller->view->wp_head;?>

      <!-- wp head end -->
  <?php } else { ?>
      <title><?php echo $_smarty_tpl->tpl_vars['this']->value->title;?>
</title>
  <?php }?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->head();?>

    <?php echo '<script'; ?>
 type="text/javascript">
        var productCellUrl = '<?php echo \yii\helpers\Url::to(array('catalog/list-product'));?>
';
        var useCarousel = false;
        var tl_js = [];
        var tl_start = false;
        var tl_include_js = [];
        var tl_include_loaded = [];
        var tl = function(a, b){
            var script = { };
            if (typeof a === 'string' && a !== '' && typeof b === 'function'){
                script = { 'js': [a],'script': b}
            } else if (typeof a === 'object' && typeof b === 'function') {
                script = { 'js': a,'script': b}
            } else if (typeof a === 'function') {
                script = { 'script': a}
            }
            tl_js.push(script);
            if (tl_start){
                tl_action([script])
            }
        };
    <?php echo '</script'; ?>
>
  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "body", null, null);?>
    <?php if (!$_smarty_tpl->tpl_vars['app']->value->controller->view->no_header_footer) {?>
    <?php echo frontend\design\Block::widget(array('name'=>'header','params'=>array('type'=>'header')));?>

    <?php }?>
      <div class="<?php if ($_smarty_tpl->tpl_vars['app']->value->controller->view->page_layout == 'default') {?>main-width <?php }?>main-content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
    <?php if (!$_smarty_tpl->tpl_vars['app']->value->controller->view->no_header_footer) {?>
    <?php echo frontend\design\Block::widget(array('name'=>'footer','params'=>array('type'=>'footer')));?>

    <?php }?>
  <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php echo \frontend\design\JsonLd::getJsonLd();?>


<?php echo frontend\design\Info::getCss();?>


<?php if (frontend\design\Info::isAdmin()) {?>
<link rel="stylesheet" href="<?php echo frontend\design\Info::themeFile('/css/admin.css');?>
"/>
<?php }
echo \frontend\design\EditData::addOnFrontend();?>

<?php echo '<script'; ?>
 type="text/javascript">
<?php echo frontend\design\Info::themeSetting('javascript','javascript');?>

<?php echo '</script'; ?>
>
<?php echo common\components\google\widgets\GoogleTagmanger::trigger();?>

<?php echo common\components\google\widgets\GoogleTagmanger::headTag();?>

</head>
<body class="layout-main <?php echo $_smarty_tpl->tpl_vars['this']->value->context->id;?>
-<?php echo $_smarty_tpl->tpl_vars['this']->value->context->action->id;?>
 p-<?php echo $_smarty_tpl->tpl_vars['this']->value->context->id;?>
-<?php echo $_smarty_tpl->tpl_vars['this']->value->context->action->id;?>
 context-<?php echo $_smarty_tpl->tpl_vars['this']->value->context->id;?>
 action-<?php echo $_smarty_tpl->tpl_vars['this']->value->context->action->id;
if ($_smarty_tpl->tpl_vars['app']->value->controller->view->page_name) {?> template-<?php echo $_smarty_tpl->tpl_vars['app']->value->controller->view->page_name;
}
echo frontend\design\Info::getBoxesNames();?>
">
<?php if (!$_smarty_tpl->tpl_vars['app']->value->controller->view->no_header_footer) {
echo common\components\google\widgets\GoogleTagmanger::BodyTag();?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->beginBody();?>

<?php echo common\components\google\widgets\GoogleWidget::widget();?>


<?php echo common\widgets\WarningWidget::widget();?>

<?php }?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'body');?>

<?php if ((\common\helpers\Acl::checkExtensionAllowed('BonusActions'))) {?>
    <?php echo \frontend\design\boxes\promotions\PromoTrigger::widget();?>

<?php }
if ((\common\helpers\Acl::checkExtensionAllowed('BonusActions'))) {?>
    <?php echo \common\extensions\BonusActions\models\PromotionsBonusObserver::checkAlertPromoAction();?>

<?php }
echo '<script'; ?>
 type="text/javascript" src="<?php echo frontend\design\Info::themeFile('/js/jquery.min.js');?>
" <?php echo $_smarty_tpl->tpl_vars['this']->value->async;?>
><?php echo '</script'; ?>
>
<?php echo frontend\design\Info::createJs();?>

<?php echo '<script'; ?>
>
    <?php echo frontend\design\Info::addLayoutData();?>

    <?php if (\common\helpers\Acl::isFrontendTranslation() || frontend\design\Info::isAdmin() && Yii::$app->request->get('texts')) {?>
    var entryDataPlaceHolder;
    <?php } else { ?>
    var entryData = JSON.parse('<?php echo addslashes(json_encode(frontend\design\Info::$jsGlobalData));?>
');
    <?php }
echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo frontend\design\Info::jsFilePath();?>
" <?php echo $_smarty_tpl->tpl_vars['this']->value->async;?>
><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['this']->value->endBody();?>

<?php if (frontend\design\Info::isAdmin()) {
echo '<script'; ?>
 type="text/javascript">
  tl(function(){
    $('body').on('reload-frame', function(d, m){ $(this).html(m);});
    $('head').append('<link rel="stylesheet" href="<?php echo frontend\design\Info::themeFile("/css/jquery-ui.min.css");?>
"/>')
  });
<?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 type="text/javascript"><?php if (defined('USE_SOUCRCE_DURING_COPY')) {
if (USE_SOUCRCE_DURING_COPY == 'allow_source') {?>tl(function(){var grabText = function(e){var range = window.getSelection().toString();if (range.length > 0){var words = range.split(" ");var random =  Math.ceil(Math.random() * (words.length - 1) + 1);var newStr = '';/*var isIE = (navigator.userAgent.indexOf('MSIE') > -1 ? true : false);*/$.each(words, function(i, word) {if (i == random - 1){word = word + ' '  + '<?php echo (defined('TEXT_COPIED_FROM') ? constant('TEXT_COPIED_FROM') : null);?>
' + ' ' + window.location.href + ' ';}newStr += word + ' ';});newStr = newStr.substr(0, newStr.length - 1);if (e.clipboardData){e.clipboardData.setData('text/plain', newStr);} else if(window.clipboardData) {window.clipboardData.setData('text', newStr);}e.preventDefault();}};if (document.addEventListener){document.addEventListener('copy', function(e){grabText(e);});} else if (document.attachEvent){document.attachEvent("onCopy", function(e){grabText(window);});}});<?php } elseif (USE_SOUCRCE_DURING_COPY == 'disallow') {?>tl(function(){var clearText = function (e){if (e.clipboardData){e.clipboardData.clearData();} else if(window.clipboardData) {window.clipboardData.clearData();}e.preventDefault();};if (document.addEventListener){document.addEventListener('copy', function(e){clearText(e);});} else if (document.attachEvent){document.attachEvent("onCopy", function(e){clearText(window);});}});<?php }
}
echo '</script'; ?>
>
<!-- wp footer -->
<?php echo $_smarty_tpl->tpl_vars['app']->value->controller->view->wp_footer;?>

<!-- wp footer end -->
<?php if (!frontend\design\Info::isAdmin() && frontend\design\Info::themeSetting('service_worker')) {
echo '<script'; ?>
>
tl(function(){
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', function() {
            navigator.serviceWorker.register('<?php echo (defined('BASE_URL') ? constant('BASE_URL') : null);?>
service-worker.js').then(function(registration) {
                // Registration was successful
                <?php $_prefixVariable3 = \common\helpers\Acl::checkExtensionAllowed('PushNotifications','allowed');
$_smarty_tpl->_assignInScope('pn', $_prefixVariable3);
if ($_prefixVariable3) {
$_prefixVariable4 = $_smarty_tpl->tpl_vars['pn']->value;
echo $_prefixVariable4::registerPushNotificationJs($_smarty_tpl->tpl_vars['this']->value);
}?>
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
          }, function(err) {
            // registration failed :(
            console.log('ServiceWorker registration failed: ', err);
          }).catch(function(err) {
            console.log(err)
          });
        });
    } else {
        console.log('service worker is not supported');
    }
});
<?php echo '</script'; ?>
>
<?php }?>
<link rel="stylesheet" href="<?php echo frontend\design\Info::themeFile('/css/style.css');?>
"/>
<?php $_prefixVariable5 = \common\helpers\Acl::checkExtensionAllowed('Awin','allowed');
$_smarty_tpl->_assignInScope('awin', $_prefixVariable5);
if ($_prefixVariable5) {
$_prefixVariable6 = $_smarty_tpl->tpl_vars['awin']->value;
echo $_prefixVariable6::getScript();
}?>
</body>
</html>
<?php echo $_smarty_tpl->tpl_vars['this']->value->endPage();
}
}
