<?php
/* Smarty version 3.1.46, created on 2023-01-20 03:08:25
  from 'C:\xampp7\htdocs\Ecommerce\lib\frontend\themes\basic\boxes\tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_63ca05a954ee47_07369376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f4480a60c1bbefebfe497f1a0d9bf39ec219fc6' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Ecommerce\\lib\\frontend\\themes\\basic\\boxes\\tabs.tpl',
      1 => 1632834077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ca05a954ee47_07369376 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    tl('<?php echo \frontend\design\Info::themeFile('/js/main.js');?>
', function(){
        var box = $('#box-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
');
        var id = <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
;
        var accordion = [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accordion']->value, 'size');
$_smarty_tpl->tpl_vars['size']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['size']->value) {
$_smarty_tpl->tpl_vars['size']->do_else = false;
?>'<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
',<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>];
        var active = localStorage.getItem(id);
        if (!active) {
            active = 'tab-block-'+id+'-1';
        }

        var applyAccordion = function() {
            box.addClass('accordion');
            $('> .accordion-heading', box).show();
            $('> .tab-navigation', box).hide();
        };
        var applyTabs = function() {
            box.removeClass('accordion');
            $('> .accordion-heading', box).hide();
            $('> .tab-navigation', box).show();
            $('.'+active+', .'+active+' a', box).addClass('active');
            $('#'+active).showTab()
        };

        $.each(accordion, function(key, val){
            if ($.inArray(val, tlSize.current ) === -1) {
                applyTabs()
            } else {
                applyAccordion()
            }
            $(window).on(val+'in', applyAccordion);
            $(window).on(val+'out', applyTabs)
        });

        $('> .block', box).hideTab();
        $('.'+active+', .'+active+' a', box).addClass('active');
        $('#'+active).showTab();


        $('> .tab-navigation .tab-li', box).on('click', function(){
            active = $(this).data('tab');

            $('> .tab-navigation .active', box).removeClass('active');
            $('> .accordion-heading.active', box).removeClass('active');
            $('.'+active+', .'+active+' a', box).addClass('active');

            $('> .block', box).hideTab();
            $('#'+active).showTab();

            localStorage.setItem(id, active);
        });
        $('> .tab-navigation .tab-a', box).on('click', function(d){
            d.preventDefault()
        });

        box.on('click', '> .accordion-heading:not(.active)', function(){
            active = $(this).data('tab');

            $('> .tab-navigation .active', box).removeClass('active');
            $('> .accordion-heading.active', box).removeClass('active');
            $('.'+active+', .'+active+' a', box).addClass('active');

            $('> .block:not(#'+active+')', box).slideUp();
            $('#'+active).showTab().hide().slideDown();

            localStorage.setItem(id, active);
        });

        box.on('click', '> .accordion-heading.active', function(){
            active = $(this).data('tab');

            $('> .tab-navigation .active', box).removeClass('active');
            $('> .accordion-heading.active', box).removeClass('active');

            $('#'+active, box).slideUp();
        });

        box.on('tabHide', function(){
            $('> .block', this).hideTab();
            $('#'+active, this).showTab();
        })
    });

<?php echo '</script'; ?>
><?php }
}
