<?php
namespace hoaaah\agency;

use yii\web\AssetBundle;

/**
 * sb-StylishPortofolio AssetBundle
 */
class AgencyAsset extends AssetBundle
{
    public $sourcePath='@vendor/hoaaah/yii2-startbootstrap-agency/assets';
    public $baseUrl = '@web';
    
    public $css=[
        'css/agency.min.css',
    ];
    
    public $js=[
        'js/agency.min.js',
        'js/contact_me.js',
        'js/jqBootstrapValidation.js',
    ];
    
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
    
    public function init() {
        parent::init();
    }
}