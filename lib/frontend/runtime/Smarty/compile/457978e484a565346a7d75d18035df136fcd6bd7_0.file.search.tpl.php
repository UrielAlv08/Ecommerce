<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:14:13
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca07051be669_54540435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '457978e484a565346a7d75d18035df136fcd6bd7' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\search.tpl',
      1 => 1640263183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca07051be669_54540435 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="search-ico"></div>
<div class="search suggest-js">
  <form action="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" method="get">
    <input class="search-input" type="text" name="keywords" placeholder="<?php echo (defined('ENTER_YOUR_KEYWORDS') ? constant('ENTER_YOUR_KEYWORDS') : null);?>
" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<?php if ((defined('SEARCH_IN_DESCRIPTION') ? constant('SEARCH_IN_DESCRIPTION') : null) == 'True') {?>
    <input type="hidden" name="search_in_description" value="1" />
<?php }?>
    <button class="button-search" type="submit"></button>
    <?php echo $_smarty_tpl->tpl_vars['extra_form_fields']->value;?>

  </form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
  tl(function(){

      var box = $('#box-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
');
      var searchCloseKey = true;
      var closeSearch = function(){
          setTimeout(function(){
              if (searchCloseKey) {
                  $('.search', box).removeClass('opened');
                  $('body').off('click', closeSearch)
              }
              searchCloseKey = true;
          }, 100)
      };

      $('.search', box).on('click', function(){
          if (!$(this).hasClass('opened')) {
              $(this).addClass('opened');

              setTimeout(function(){
                $('body').on('click', closeSearch)
              }, 100)
          }
      });
      $('form', box).on('click', function(){
          searchCloseKey = false
      });

    var input_s = $('.suggest-js input');
    input_s.attr({
      autocomplete:"off"
    });

    var ssTimeout = null;
    input_s.keyup(function(e){
      $('.suggest').addClass('loading');
      if (ssTimeout != null) {
        clearTimeout(ssTimeout);
      }
      ssTimeout = setTimeout(function() {
        ssTimeout = null;
        if ($(input_s).val().length>1) {
          jQuery.get('<?php echo $_smarty_tpl->tpl_vars['searchSuggest']->value;?>
', {
              keywords: $(input_s).val()
             }, function(data){
                 $('.suggest').remove();
                 $('.suggest-js').append('<div class="suggest">'+data+'</div>')
               });
        };
      }, 400 );
    });
    input_s.blur(function(){
      setTimeout(function(){
        $('.suggest').hide()
      }, 200)
    });
    input_s.focus(function(){
      $('.suggest').show()
    })

    $('.search-ico', box).on('click', function(){
      $('.suggest-js', box).toggleClass('opened')
    })
  })
<?php echo '</script'; ?>
><?php }
}
