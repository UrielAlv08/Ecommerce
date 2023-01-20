<?php
/**
 * This file is part of osCommerce ecommerce platform.
 * osCommerce the ecommerce
 * 
 * @link https://www.oscommerce.com
 * @copyright Copyright (c) 2000-2022 osCommerce LTD
 * 
 * Released under the GNU General Public License
 * For the full copyright and license information, please view the LICENSE.TXT file that was distributed with this source code.
 */

namespace backend\assets;

use yii\web\AssetBundle;

class JQueryQueryBuilderAsset extends AssetBundle
{
    ///https://querybuilder.js.org/
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '@web/../plugins/jQuery-QueryBuilder/css/query-builder.default.min.css',
    ];
    public $js = [
         '@web/../plugins/jQuery-QueryBuilder/js/query-builder.standalone.js',//query-builder.min.js',
         '@web/../plugins/jQuery-QueryBuilder/js/sql-parser.js',//query-builder.min.js',
    ];
}
