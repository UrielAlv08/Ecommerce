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

namespace frontend\design\boxes;

use common\classes\Images;
use frontend\design\Info;
use Yii;
use yii\base\Widget;
use frontend\design\IncludeTpl;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

class Banner extends Widget
{

    public $file;
    public $params;
    public $settings;

    public function init()
    {
        parent::init();

        \frontend\design\Info::addJsData(['widgets' => [
            $this->id => [ 'lazyLoad' => @$this->settings[0]['lazy_load']]
        ]]);
    }

    public function run()
    {
        $languages_id = \Yii::$app->settings->get('languages_id');
        $banners = array();
        $banner_speed = '';

        if (!@$this->settings[0]['banners_group'] && @$this->settings[0]['params'])
            $this->settings[0]['banners_group'] = $this->settings[0]['params'];
        $_platform_id = \common\classes\platform::currentId();

        if (@$this->params['banner_group']) {
            $this->settings[0]['banners_group'] = $this->params['banner_group'];
        }

        if (
            isset($this->settings[0]['banners_group']) &&
            $this->settings[0]['banners_group'] == 'page_setting' &&
            isset($this->params['banners_group'])
        ) {
            $this->settings[0]['banners_group'] = $this->params['banners_group'];
        }

        $andWhere = '';
        if ($this->settings[0]['ban_id']) {
            $andWhere = ' and bl.banners_id = ' . $this->settings[0]['ban_id'] . ' ';
        }

        $use_phys_platform = true;
        if ($ext = \common\helpers\Acl::checkExtensionAllowed('AdditionalPlatforms', 'allowed')){
            if ($ext::checkSattelite()){
                $s_platform_id = $ext::getSatteliteId();
                $sql = tep_db_query("select * from " . TABLE_BANNERS_TO_PLATFORM .
                        " nb2p, " . TABLE_BANNERS_NEW . " nb, " . TABLE_BANNERS_LANGUAGES .
                        " bl where bl.banners_id = nb.banners_id AND bl.language_id='" . $languages_id . "' AND nb2p.banners_id=nb.banners_id "
                        . "AND nb2p.platform_id='" . $s_platform_id . "'  and nb.banners_group = '" . $this->settings[0]['banners_group'] . "' "
                        . $andWhere
                        ." and (nb.expires_date is null or nb.expires_date >= now()) and (nb.date_scheduled is null or nb.date_scheduled <= now()) "
                        . "AND (bl.banners_html_text!='' OR bl.banners_image!='' OR bl.banners_url)
                         order by " . ($this->settings[0]['banners_type'] == 'random' ? " RAND() LIMIT 1" : " nb.sort_order"));
                if (tep_db_num_rows($sql)){
                    $use_phys_platform = false;
                    $_platform_id = $s_platform_id;
                }
            }
        }
        if ($use_phys_platform){
            $sql = tep_db_query("select * from " . TABLE_BANNERS_TO_PLATFORM . " nb2p, " . TABLE_BANNERS_NEW . " nb, " . TABLE_BANNERS_LANGUAGES .
                    " bl where bl.banners_id = nb.banners_id AND bl.language_id='" . $languages_id . "' AND nb2p.banners_id=nb.banners_id AND"
                    . " nb2p.platform_id='" . $_platform_id . "'  and nb.banners_group = '" . $this->settings[0]['banners_group'] . "' "
                    . $andWhere
                    ." AND (nb.expires_date is null or nb.expires_date >= now()) and (nb.date_scheduled is null or nb.date_scheduled <= now()) and "
                    . "(bl.banners_html_text!='' OR bl.banners_image!='' OR bl.banners_url) order by " . ($this->settings[0]['banners_type'] == 'random' ? " RAND() LIMIT 1" : " nb.sort_order"));
        }
        if (@$this->settings[0]['banners_type'] == 'random') {
            $this->settings[0]['banners_type'] = 'banner';
        }
        
        if (!@$this->settings[0]['banners_type']) {
            $type_sql_query = tep_db_query("select nb.banner_type from " . TABLE_BANNERS_TO_PLATFORM . " nb2p, " . TABLE_BANNERS_NEW . " nb where nb.banners_group = '" . $this->settings[0]['banners_group'] . "' AND nb2p.banners_id=nb.banners_id AND nb2p.platform_id='" . $_platform_id . "' limit 1");
            if (tep_db_num_rows($type_sql_query) > 0) {
                $type_sql = tep_db_fetch_array($type_sql_query);
                $type_array = $type_sql['banner_type'];
                $type_exp = explode(';', $type_array);
                if (isset($type_exp) && !empty($type_exp)) {
                    $this->settings[0]['banners_type'] = $type_exp[0];
                } else {
                    $this->settings[0]['banners_type'] = $type_sql['banner_type'];
                }
            }
        }

        $bannerGroupSettings = [];
        $groupSettings = \common\models\BannersGroups::find()
            ->where([ 'banners_group' => $this->settings[0]['banners_group']])
            ->asArray()
            ->all();
        if (is_array($groupSettings)) {
            foreach ($groupSettings as $group) {
                $bannerGroupSettings[$group['image_width']] = $group;
            }
        }
        while ($row = tep_db_fetch_array($sql)) {
            $row['is_banners_image_valid'] = (!empty($row['banners_image']) && is_file(Images::getFSCatalogImagesPath().$row['banners_image']));

            if (!ArrayHelper::getValue($this->settings, [0,'dont_use_webp'])) {
                $row['banners_image'] = \common\classes\Images::getWebp($row['banners_image']);
            }
            $row['banners_image_url'] = \common\helpers\Media::getAlias('@webCatalogImages/'.$row['banners_image']);
            if ($row['svg'] && $row['banner_display'] == 3) {
                $row['image'] = self::bannerGroupSvg(
                    $bannerGroupSettings,
                    $row['banners_id'],
                    $row['svg']
                );
            } else {
                $row['image'] = self::bannerGroupImages(
                    $bannerGroupSettings,
                    $row['banners_id'],
                    $row['banners_image'],
                    $row['banners_title'],
                    ArrayHelper::getValue($this->settings, [0,'lazy_load']),
                    ArrayHelper::getValue($this->settings, [0,'dont_use_webp'])
                );
            }

            $row['text_position'] = self::textPosition($row['text_position']);
            if (
                substr($row['banners_url'], 0, 4) != 'http' &&
                substr($row['banners_url'], 0, 3) != 'www' &&
                substr($row['banners_url'], 0, 2) != '//' &&
                strpos($row['banners_url'], '?')
            ) {
                $arr = explode('?', $row['banners_url']);
                $paramsStr = explode('&', $arr[1]);
                $params = [];
                if (is_array($paramsStr)) {
                    foreach ($paramsStr as $str) {
                        $vals = explode('=', $str);
                        $params[$vals[0]] = $vals[1];
                    }
                }
                $row['banners_url'] = Yii::$app->urlManager->createUrl(array_merge([$arr[0]], $params));
                $row['banners_html_text'] = \common\classes\TlUrl::replaceUrl($row['banners_html_text']);
            }

            $banners[] = $row;
        }

        if (@$this->settings[0]['preload']) {
            \Yii::$app->view->registerLinkTag(['rel' => 'preload', 'href' => $banners[0]['banners_image_url'], 'as' => 'image']);
        }

        if (count($banners) == 0) return '';

        $settings = array_merge(self::$defaultSettings, $this->settings[0]);
        $template = '';
        if ($this->settings[0]['template']) {
            $template = '-' . $this->settings[0]['template'];

            Info::addBoxToCss('slick');
            if ($this->id) {
                Info::addJsData(['widgets' => [ $this->id => [
                    'settings' => $settings,
                    'colInRowCarousel' => $this->settings['colInRowCarousel']
                ]]]);
            }
        }

        return IncludeTpl::widget(['file' => 'boxes/banner' . (string)$template . '.tpl', 'params' => [
            'id' => $this->id,
            'banners' => $banners,
            'banner_type' => $this->settings[0]['banners_type'],
            'banner_speed' => $banner_speed,
            'settings' => $settings
        ]]);
    }

    public static function bannerGroupImages ($bannerGroupSettings, $bannersId, $mainImage, $title = '', $lazyLoad = false, $dontUseWebp = false){
        $languages_id = \Yii::$app->settings->get('languages_id');

        $naBanner = \frontend\design\Info::themeSetting('base64_banner');
        if (!$naBanner) {
            $naBanner = \frontend\design\Info::themeSetting('na_banner', 'hide');
        }

        $bannerGroupImages = \common\models\BannersGroupsImages::find()
            ->where([ 'banners_id' => $bannersId, 'language_id' => $languages_id])
            ->asArray()
            ->all();

        $size = @getimagesize(Images::getFSCatalogImagesPath() . $mainImage);
        if (is_array($size)) {
          $heightPer = round($size[1] * 100 / $size[0] , 4);
        } else {
          $heightPer = 100;
        }
        Info::setScriptCss('
        #banner-' . $bannersId . ' {
            padding-top: ' . $heightPer . '%;
        }');

        $sources = '';
        $pictureAttributes = '';
        foreach ($bannerGroupImages as $image){
            if (!$bannerGroupSettings[$image['image_width']]) continue;

            $imageMedia = $image['image'];

            if (!$dontUseWebp) {
                $image['image'] = \common\classes\Images::getWebp($image['image']);
            }
            $image['image'] = \common\helpers\Media::getAlias('@webCatalogImages/' . $image['image']);

            $media = '';
            if ($bannerGroupSettings[$image['image_width']]['width_from']) {
                $media .= '(min-width: ' . $bannerGroupSettings[$image['image_width']]['width_from'] . 'px)';
            }
            if ($bannerGroupSettings[$image['image_width']]['width_from'] && $bannerGroupSettings[$image['image_width']]['width_to']) {
                $media .= ' and ';
            }
            if ($bannerGroupSettings[$image['image_width']]['width_to']) {
                $media .= '(max-width: ' . $bannerGroupSettings[$image['image_width']]['width_to'] . 'px)';
            }

            if (is_file(Images::getFSCatalogImagesPath() . $imageMedia)) {
                $size = getimagesize(Images::getFSCatalogImagesPath() . $imageMedia);
                $heightPer = round($size[1] * 100 / $size[0], 4);
                Info::setScriptCss('@media ' . $media . ' {
                #banner-' . $bannersId . ' {
                    padding-top: ' . $heightPer . '%;
                }}');
            }

            $sourcesAttr = [
                'srcset' => $image['image'],
                'media' => $media,
            ];
            if ($lazyLoad) {
                $sourcesAttr['data-srcset'] = $image['image'];
                $sourcesAttr['srcset'] = $naBanner;
                $sourcesAttr['class'] = 'na-banner';
            }
            $sources .= Html::tag('source', '', $sourcesAttr);
        }

        $pictureAttributes = [
            'id' => 'banner-' . $bannersId
        ];

        if (!$dontUseWebp) {
            $mainImage = \common\classes\Images::getWebp($mainImage);
        }
        $mainImage = \common\helpers\Media::getAlias('@webCatalogImages/' . $mainImage);

        $attributes = [
            'title' => $title
        ];
        if ($lazyLoad) {
            $attributes['data-src'] = $mainImage;
            $attributes['class'] = 'na-banner';
            $mainImage = $naBanner;
        }

        $img = Html::img($mainImage, $attributes);
        return Html::tag('picture', $sources . $img, $pictureAttributes);
    }

    public static function bannerGroupSvg ($bannerGroupSettings, $bannersId, $mainImage){
        $languages_id = \Yii::$app->settings->get('languages_id');

        $bannerGroupImages = \common\models\BannersGroupsImages::find()
            ->where([ 'banners_id' => $bannersId, 'language_id' => $languages_id])
            ->asArray()
            ->all();

        $images = '<div class="banner-svg-' . $bannersId . ' banner-svg-' . $bannersId . '-main">' . $mainImage . '</div>';
        $styles = '.banner-svg-' . $bannersId . '{display:none}.banner-svg-' . $bannersId . '-main{display:block}';
        foreach ($bannerGroupImages as $image){
            if (!isset($bannerGroupSettings[$image['image_width']]) || !$image['svg']) continue;

            $images = $images . '<div class="banner-svg-' . $bannersId . ' banner-svg-' . $bannersId . '-' . $image['image_width'] . '">' . $image['svg'] . '</div>';

            $from = $bannerGroupSettings[$image['image_width']]['width_from'];
            $to = $bannerGroupSettings[$image['image_width']]['width_to'];

            $styles .= ' @media ';
            if ($from) {
                $styles .= '(min-width: ' . $from . 'px)';
            }
            if ($from && $to) {
                $styles .= ' and ';
            }
            if ($to) {
                $styles .= '(max-width: ' . $to . 'px)';
            }

            $styles .= '{.banner-svg-' . $bannersId . '{display:none}.banner-svg-' . $bannersId . '-' . $image['image_width'] . '{display:block}}';
        }

        Info::setScriptCss($styles);

        return $images;
    }

    public static $defaultSettings = [
        'effect' => 'random',
        'slices' => 15,
        'boxCols' => 8,
        'boxRows' => 4,
        'animSpeed' => 500,
        'pauseTime' => 3000,
        'directionNav' => 'true',
        'controlNav' => 'true',
        'controlNavThumbs' => 'false',
        'pauseOnHover' => 'true',
        'manualAdvance' => 'false',
    ];

    public static function textPosition ($key) {

        switch ($key) {
            case '0':
                return 'top-left';
            case '1':
                return 'top-center';
            case '2':
                return 'top-right';
            case '3':
                return 'middle-left';
            case '4':
                return 'middle-center';
            case '5':
                return 'middle-right';
            case '6':
                return 'bottom-left';
            case '7':
                return 'bottom-center';
            case '8':
                return 'bottom-right';
            case '9':
                return 'bottom-text';
        }
        return '';
    }

}
