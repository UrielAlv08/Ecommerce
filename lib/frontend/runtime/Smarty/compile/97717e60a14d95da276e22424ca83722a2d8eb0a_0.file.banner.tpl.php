<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:08:28
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca05ac822142_75783116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97717e60a14d95da276e22424ca83722a2d8eb0a' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\banner.tpl',
      1 => 1656053991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca05ac822142_75783116 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <?php echo '<script'; ?>
>
            var banners = [];
            var collectBanners = function(banner){
                var _b = { };
                if (banner.hasOwnProperty('banners_id')){ _b.id = banner.banners_id; }
                if (banner.hasOwnProperty('banners_title')){ _b.name = banner.banners_title; }
                if (banner.hasOwnProperty('text_position')){ _b.position = banner.text_position; }
                if (banner.hasOwnProperty('banners_group')){ _b.creative = banner.banners_group; }
                banners.push(_b);
            }
        <?php echo '</script'; ?>
>
<div class="banner">
    <?php if ($_smarty_tpl->tpl_vars['banner_type']->value == 'banner' || $_smarty_tpl->tpl_vars['banner_type']->value == '') {?>
      
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value, 'banner', false, 'bKey');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bKey']->value => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['banner']->value['banners_html_text'] && $_smarty_tpl->tpl_vars['banner']->value['banner_display'] == '1') {?>
          <div class="single_banner"><?php echo $_smarty_tpl->tpl_vars['banner']->value['banners_html_text'];?>
</div>
        <?php } elseif ($_smarty_tpl->tpl_vars['banner']->value['banners_image'] && (!$_smarty_tpl->tpl_vars['banner']->value['banner_display'] || $_smarty_tpl->tpl_vars['banner']->value['banner_display'] == 3)) {?>
            <?php if ($_smarty_tpl->tpl_vars['banner']->value['banners_url']) {?>
              <?php echo '<script'; ?>
>collectBanners(<?php echo json_encode($_smarty_tpl->tpl_vars['banner']->value);?>
);<?php echo '</script'; ?>
>
              <div class="single_banner"><a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['banners_url'];?>
"<?php if ($_smarty_tpl->tpl_vars['banner']->value['target'] == 1) {?> target="_blank"<?php } else {
}?> class="imgBann" data-id="<?php echo $_smarty_tpl->tpl_vars['banner']->value['banners_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['banner']->value['nofollow'] == 1) {?> rel="nofollow"<?php }?>><?php echo $_smarty_tpl->tpl_vars['banner']->value['image'];?>
</a></div>
            <?php } else { ?>
              <div class="single_banner"><span><?php echo $_smarty_tpl->tpl_vars['banner']->value['image'];?>
</span></div>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['banner']->value['banners_image'] && $_smarty_tpl->tpl_vars['banner']->value['banner_display'] == '2') {?>
          <div class="image-text-banner <?php echo $_smarty_tpl->tpl_vars['banner']->value['text_position'];?>
">
              <?php if ($_smarty_tpl->tpl_vars['banner']->value['banners_url']) {?>
                <div class="single_banner"><a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['banners_url'];?>
"<?php if ($_smarty_tpl->tpl_vars['banner']->value['target'] == 1) {?> target="_blank"<?php } else {
}?> class="imgBann" data-id="<?php echo $_smarty_tpl->tpl_vars['banner']->value['banners_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['banner']->value['nofollow'] == 1) {?> rel="nofollow"<?php }?>><?php echo $_smarty_tpl->tpl_vars['banner']->value['image'];?>
</a></div>
              <?php } else { ?>
                <div class="single_banner"><span><?php echo $_smarty_tpl->tpl_vars['banner']->value['image'];?>
</span></div>
              <?php }?>
              <div class="text-banner"><div class="text-banner-1"><div class="text-banner-2"><?php echo $_smarty_tpl->tpl_vars['banner']->value['banners_html_text'];?>
</div></div></div>
          </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['banner']->value['banner_display'] == '4') {?>
            <?php if ($_smarty_tpl->tpl_vars['banner']->value['banners_url']) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['banners_url'];?>
"<?php if ($_smarty_tpl->tpl_vars['banner']->value['target'] == 1) {?> target="_blank"<?php } else {
}?> class="imgBann" data-id="<?php echo $_smarty_tpl->tpl_vars['banner']->value['banners_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['banner']->value['nofollow'] == 1) {?> rel="nofollow"<?php }?>>
                    <video id="video_background" preload="auto" autoplay="true" loop="true" muted="muted">
                        <source src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['banners_image_url'];?>
" type="video/mp4">
                    </video>
                    <?php echo '<script'; ?>
>collectBanners(<?php echo json_encode($_smarty_tpl->tpl_vars['banner']->value);?>
);<?php echo '</script'; ?>
>
                </a>
            <?php } else { ?>
                <video id="video_background" preload="auto" autoplay="true" loop="true" muted="muted">
                    <source src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['banners_image_url'];?>
" type="video/mp4">
                </video>
            <?php }?>
        <?php }?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['banner_type']->value == 'carousel') {?>
        <div class="carousel">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value, 'banner');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>
              <?php if ($_smarty_tpl->tpl_vars['banner']->value['is_banners_image_valid'] || $_smarty_tpl->tpl_vars['banner']->value['banner_display'] == '1') {?>
                <div class="item">
                  <?php if ($_smarty_tpl->tpl_vars['banner']->value['banner_display'] == '0' || $_smarty_tpl->tpl_vars['banner']->value['banner_display'] == '2' || $_smarty_tpl->tpl_vars['banner']->value['banner_display'] == '3') {?>
                    <?php if ($_smarty_tpl->tpl_vars['banner']->value['banners_url']) {?>
                      <?php echo '<script'; ?>
>collectBanners(<?php echo json_encode($_smarty_tpl->tpl_vars['banner']->value);?>
);<?php echo '</script'; ?>
>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['banners_url'];?>
"<?php if ($_smarty_tpl->tpl_vars['banner']->value['target'] == 1) {?> target="_blank"<?php } else {
}?> class="imgBann" data-id="<?php echo $_smarty_tpl->tpl_vars['banner']->value['banners_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['banner']->value['nofollow'] == 1) {?> rel="nofollow"<?php }?>>
                          <span class="carousel_img"><?php echo $_smarty_tpl->tpl_vars['banner']->value['image'];?>
</span>
                          <?php if ($_smarty_tpl->tpl_vars['banner']->value['banner_display'] == '2') {?>
                              <span class="carousel-text <?php echo $_smarty_tpl->tpl_vars['banner']->value['text_position'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['banner']->value['banners_html_text'];?>
</span></span>
                          <?php }?>
                      </a>
                    <?php } else { ?>
                      <span class="carousel_img"><?php echo $_smarty_tpl->tpl_vars['banner']->value['image'];?>
</span>
                      <?php if ($_smarty_tpl->tpl_vars['banner']->value['banner_display'] == '2') {?>
                          <span class="carousel-text <?php echo $_smarty_tpl->tpl_vars['banner']->value['text_position'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['banner']->value['banners_html_text'];?>
</span></span>
                      <?php }?>
                    <?php }?>
                  <?php } elseif ($_smarty_tpl->tpl_vars['banner']->value['banner_display'] == '4') {?>
                      <?php if ($_smarty_tpl->tpl_vars['banner']->value['banners_url']) {?>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['banners_url'];?>
"<?php if ($_smarty_tpl->tpl_vars['banner']->value['target'] == 1) {?> target="_blank"<?php } else {
}?> class="imgBann" data-id="<?php echo $_smarty_tpl->tpl_vars['banner']->value['banners_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['banner']->value['nofollow'] == 1) {?> rel="nofollow"<?php }?>>
                          <video id="video_background" preload="auto" autoplay="true" loop="true" muted="muted">
                              <source src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['banners_image_url'];?>
" type="video/mp4">
                          </video>
                          <?php echo '<script'; ?>
>collectBanners(<?php echo json_encode($_smarty_tpl->tpl_vars['banner']->value);?>
);<?php echo '</script'; ?>
>
                      </a>
                  <?php } else { ?>
                      <video id="video_background" preload="auto" autoplay="true" loop="true" muted="muted">
                          <source src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['banners_image_url'];?>
" type="video/mp4">
                      </video>
                  <?php }?>
                  <?php } else { ?>
                    <span class="carousel_text"><?php echo $_smarty_tpl->tpl_vars['banner']->value['banners_html_text'];?>
</span>
                  <?php }?>

                </div>
              <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <?php echo '<script'; ?>
>
            tl('<?php echo frontend\design\Info::themeFile('/js/slick.min.js');?>
', function(){

                var box = $('#box-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
');

                var carousel = $('.carousel', box);
                var tabs = carousel.parents('.tabs');
                tabs.find('> .block').show();

                <?php echo frontend\design\Info::addBoxToCss('slick');?>

                carousel.slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: <?php if ($_smarty_tpl->tpl_vars['settings']->value['pauseTime']) {
echo $_smarty_tpl->tpl_vars['settings']->value['pauseTime'];
} else { ?>3000<?php }?>
                });
                setTimeout(function(){ tabs.trigger('tabHide') }, 100)

            })
        <?php echo '</script'; ?>
>


    <?php } elseif ($_smarty_tpl->tpl_vars['banner_type']->value == 'slider') {?>


      <div class="slider-wrapper"><div id="slider" class="sliderItems">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value, 'banner');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>
              <?php if ($_smarty_tpl->tpl_vars['banner']->value['banner_display'] == '0' || $_smarty_tpl->tpl_vars['banner']->value['banner_display'] == '2') {?>
                <?php if ($_smarty_tpl->tpl_vars['banner']->value['banners_url']) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['banners_url'];?>
"<?php if ($_smarty_tpl->tpl_vars['banner']->value['target'] == 1) {?> target="_blank"<?php } else {
}?> class="imgBann" data-id="<?php echo $_smarty_tpl->tpl_vars['banner']->value['banners_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['banner']->value['nofollow'] == 1) {?> rel="nofollow"<?php }?>><?php echo $_smarty_tpl->tpl_vars['banner']->value['image'];
echo '<script'; ?>
>collectBanners(<?php echo json_encode($_smarty_tpl->tpl_vars['banner']->value);?>
);<?php echo '</script'; ?>
></a>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['banner']->value['image'];?>

                <?php }?>
              <?php } else { ?>
                <div class="htmlBanText <?php echo $_smarty_tpl->tpl_vars['banner']->value['text_position'];?>
"><?php echo $_smarty_tpl->tpl_vars['banner']->value['banners_html_text'];?>
</div>
              <?php }?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div></div>


    <?php if (!frontend\design\Info::isAdmin()) {?>
      <?php echo '<script'; ?>
 type="text/javascript">
        tl('<?php echo frontend\design\Info::themeFile('/js/jquery.nivo.slider.pack.js');?>
', function(){
          $('head').append('<link rel="stylesheet" href="<?php echo frontend\design\Info::themeFile('/css/nivo-slider.min.css');?>
"/>');
          $('.sliderItems').nivoSlider({
            effect: '<?php echo $_smarty_tpl->tpl_vars['settings']->value['effect'];?>
',
            slices: <?php echo $_smarty_tpl->tpl_vars['settings']->value['slices'];?>
,
            boxCols: <?php echo $_smarty_tpl->tpl_vars['settings']->value['boxCols'];?>
,
            boxRows: <?php echo $_smarty_tpl->tpl_vars['settings']->value['boxRows'];?>
,
            animSpeed: <?php echo $_smarty_tpl->tpl_vars['settings']->value['animSpeed'];?>
,
            pauseTime: <?php echo $_smarty_tpl->tpl_vars['settings']->value['pauseTime'];?>
,
            directionNav: <?php echo $_smarty_tpl->tpl_vars['settings']->value['directionNav'];?>
,
            controlNav: <?php echo $_smarty_tpl->tpl_vars['settings']->value['controlNav'];?>
,
            controlNavThumbs: <?php echo $_smarty_tpl->tpl_vars['settings']->value['controlNavThumbs'];?>
,
            pauseOnHover: <?php echo $_smarty_tpl->tpl_vars['settings']->value['pauseOnHover'];?>
,
            manualAdvance: <?php echo $_smarty_tpl->tpl_vars['settings']->value['manualAdvance'];?>

          });
        })
      <?php echo '</script'; ?>
>
    <?php }?>
    <?php }?>
    <?php echo \common\components\google\widgets\GoogleTagmanger::getJsEvents(array(array('class'=>'.banner a.imgBann','action'=>'click','php_action'=>'promotionClick','page'=>'current','immidiately'=>'true')));?>

</div><?php }
}
