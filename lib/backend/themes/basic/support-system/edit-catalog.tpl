
    <div class="popup-heading">Select product</div>
    <div class="popup-content">
      <div style="margin-bottom: 8px;">
        {*<a href="javascript:void(0)" class="btn js-select-all-tree" data-rel="tree" data-select="1">Select all</a>
        <a href="javascript:void(0)" class="btn js-select-all-tree" data-rel="tree" data-select="0">Deselect all</a>*}
      </div>
  <div id="tree" data-tree-server="{$tree_server_url}" data-data-save="{$tree_server_save_url}" style="height: 410px;overflow: auto;">
    <ul>
      {foreach $tree_data as $tree_item }
      <li class="{if $tree_item.lazy}lazy {/if}{if $tree_item.folder}folder {/if}{if $tree_item.selected}selected {/if}" id="{$tree_item.key}">{$tree_item.title}</li>
      {/foreach}
    </ul>
  </div>
 
    </div>
     <div class="noti-btn">
    <div class="btn-left">
      <a href="javascript:void(0);" class="btn btn-cancel" id="btnAssignCatalogCancel">Cancel</a>
    </div>
    <div class="btn-right">
      <button type="button" class="btn btn-confirm" id="btnSelectProduct">Select</button>
    </div>
  </div>
<script type="text/javascript">
  var tree_data = {json_encode($tree_data)};
  var selected_data = {json_encode($selected_data)};
  var selected_data_pid = {$selected_data};  
  var selected_product;
var a;
  $('#tree').fancytree({
    extensions: ["glyph"],
    checkbox:false,
    activate: function(data){
        
    },
    init: function(event, data){        
        if (data.tree.rootNode.hasOwnProperty('children')){
            if (selected_data_pid){                
                $.each(data.tree.rootNode.children, function(i, e){
                    if (selected_data_pid.hasOwnProperty(e.key)){
                        e.setActive();
                        selected_product = e;
                    }
                })
            }
        }
    },
    lazyLoad: function(event, data){
      data.result = {
        url: $(this).attr('data-tree-server'),
        type: 'POST',
        data:{
          'do':'missing_lazy',
          'id':data.node.key,
          'selected':data.node.selected?1:0,
          'selected_data': JSON.stringify(selected_data)
        },
        dataType: "json"
      };
    },
    loadChildren: function(event, data){        
        if (data.node.hasOwnProperty('children')){
            if (selected_data_pid){                
                $.each(data.node.children, function(i, e){                    
                    if (e.selected){
                        e.setActive();
                        selected_product = e;
                    }
                })
            }
        }
    },
    _postProcess: function(event, data) {
      if (data.response.tree_data) {
        data.response = data.response.tree_data;
      }else{
        data.response = [];
      }
    },
    click: function(event, data) {
        var node = data.node;            
        if (!node.isFolder()){
            selected_product = node;
            $('#btnSelectProduct').removeAttr('disabled');
        } else {
            selected_product = false;
            $('#btnSelectProduct').attr('disabled','disabled');
        }        
    },
    select:function(event, data) {
      var tree = $('#tree').fancytree('getTree');
      if ( tree.lock ) return false;
      tree.lock = true;
      var node_key = data.node.key,
          node_selected = data.node.selected;
      if ( node_selected ) {
        if ( !selected_data[node_key] ) selected_data[node_key] = node_key;
      }else{
        if ( selected_data[node_key] ) delete selected_data[node_key];
      }

      $.ajax({
        url: $('#tree').attr('data-tree-server'),
        async: false,
        type: 'POST',
        data: {
          'do': 'update_selected',
          'id': node_key,
          'selected': node_selected ? 1 : 0,
          'select_children' : true,
          'selected_data': JSON.stringify(selected_data)
        },
        success: function (data) {
          if ( data.selected_data ) {
            selected_data = data.selected_data;
          }
          if ( data.update_selection ) {
            for( var key in data.update_selection ) {
              if ( !data.update_selection.hasOwnProperty(key) ) continue;
              var updateNode = tree.getNodeByKey(key);
              if ( updateNode ) {
                updateNode.setSelected(!!data.update_selection[key]);
              }
            }
          }
          tree.lock = false;
        }
      });
    },
    glyph: {
      map: {
        doc: "icon-cubes",//"fa fa-file-o",
        docOpen: "icon-cubes", //"fa fa-file-o",
        //checkbox: "icon-check-empty",// "fa fa-square-o",
        //checkboxSelected: "icon-check",// "fa fa-check-square-o",
        checkboxUnknown: "icon-check-empty", //"fa fa-square",
        dragHelper: "fa fa-arrow-right",
        dropMarker: "fa fa-long-arrow-right",
        error: "fa fa-warning",
        expanderClosed: "icon-expand", //"fa fa-caret-right",
        expanderLazy: "icon-plus-sign-alt", //"icon-expand-alt", //"fa fa-angle-right",
        expanderOpen: "icon-minus-sign-alt",//"fa fa-caret-down",
        folder: "icon-folder-close-alt",//"fa fa-folder-o",
        folderOpen: "icon-folder-open-alt",//"fa fa-folder-open-o",
        loading: "icon-spinner" //"fa fa-spinner fa-pulse"
      }
    }
  });
  /*$('.js-select-all-tree').on('click',function(){
      var self = $(this),
          selector = '#'+self.data('rel'),
          state = !!self.data('select');
      if ( selector==='#' ) return;
      $(selector).fancytree("getTree").visit(function(node) {
          node.setSelected(state);
      });
      return false;
  });*/
  $('#btnSelectProduct').on('click',function(){
        if (selected_product){
            $('input[name=products_id]').val(selected_product.key.substring(1).split('_')[0]);
            $('.products_name').html(selected_product.title);
            $('.pop-up-close:last').trigger('click');
        } else {
            alert("Product is not defined");
        }
  });
</script>