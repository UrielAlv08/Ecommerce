{use class="Yii"}
<form action="{Yii::getAlias('@web')}/design/box-save" method="post" id="box-save">
  <input type="hidden" name="id" value="{$id}"/>
  <div class="popup-heading">
    {$smarty.const.TEXT_CACHE_ALSO_PURCHASED}
  </div>
  <div class="popup-content">




    <div class="tabbable tabbable-custom">
      <div class="nav nav-tabs">

        <div class="active"><a href="#type" data-toggle="tab">{$smarty.const.TEXT_NEW_PRODUCTS}</a></div>
        <div><a href="#product" data-toggle="tab">{$smarty.const.TEXT_PRODUCT_ITEM}</a></div>
        <div><a href="#style" data-toggle="tab">{$smarty.const.HEADING_STYLE}</a></div>
        <div><a href="#align" data-toggle="tab">{$smarty.const.HEADING_WIDGET_ALIGN}</a></div>
        <div><a href="#visibility" data-toggle="tab">{$smarty.const.TEXT_VISIBILITY_ON_PAGES}</a></div>

      </div>
      <div class="tab-content">
        <div class="tab-pane active menu-list" id="type">




          <div class="setting-row">
            <label for="">{$smarty.const.TEXT_MAX_PRODUCTS}</label>
            <input type="text" name="params" class="form-control" value="{$params}"/>
          </div>
          <div class="setting-row">
            <label for="">{$smarty.const.TEXT_COLUMNS_IN_ROW}</label>
            <input type="text" name="setting[0][col_in_row]" class="form-control" value="{$settings[0].col_in_row}"/>
          </div>
          <div class="setting-row">
            <label for="">{$smarty.const.TEXT_VIEW_AS}</label>
            <select name="setting[0][view_as]" id="" class="form-control">
              <option value=""{if $settings[0].view_as == ''} selected{/if}>{$smarty.const.TEXT_DEFAULT}</option>
              <option value="carousel"{if $settings[0].view_as == 'carousel'} selected{/if}>{$smarty.const.TEXT_CAROUSEL}</option>
            </select>
          </div>

          <div class="setting-row">
            <label for="">{$smarty.const.TEG_FOR_PRODUCTS_NAMES}</label>
            <select name="setting[0][product_names_teg]" id="" class="form-control">
              <option value=""{if $settings[0].product_names_teg == ''} selected{/if}>div</option>
              <option value="h2"{if $settings[0].product_names_teg == 'h2'} selected{/if}>h2</option>
              <option value="h3"{if $settings[0].product_names_teg == 'h3'} selected{/if}>h3</option>
              <option value="h4"{if $settings[0].product_names_teg == 'h4'} selected{/if}>h4</option>
            </select>
          </div>

          {include 'include/ajax.tpl'}



        </div>
        <div class="tab-pane" id="product">
          {include 'include/listings-product.tpl'}
        </div>
        <div class="tab-pane" id="style">
          {include 'include/style.tpl'}
        </div>
        <div class="tab-pane" id="align">
          {include 'include/align.tpl'}
        </div>
        <div class="tab-pane" id="visibility">
          {include 'include/visibility.tpl'}
        </div>

      </div>
    </div>


  </div>
  <div class="popup-buttons">
    <button type="submit" class="btn btn-primary btn-save">{$smarty.const.IMAGE_SAVE}</button>

    <span class="btn btn-cancel">{$smarty.const.IMAGE_CANCEL}</span>

  </div>
</form>